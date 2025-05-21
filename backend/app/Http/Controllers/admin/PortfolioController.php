<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Exception;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;



class PortfolioController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $allportfolio = Portfolio::orderBy('id', 'desc')->paginate(20);
        return view('admin.portfolio.index', compact('allportfolio'));
    }


    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'],
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $savedFileName = 'portfolio_' . time() . '.' . $file->getClientOriginalExtension();

                    $directoryPath = public_path('uploads/portfolio');
                    if (!file_exists($directoryPath)) {
                        mkdir($directoryPath, 0755, true);
                    }

                    $pathLarge = $directoryPath . '/' . $savedFileName;
                    $this->imageResize($file, $pathLarge, $savedFileName, 300, 300);
                } catch (Exception $e) {
                    dd($e);
                    return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
                }
            }
        } else {
            $savedFileName = '';
        }


        $m = new Portfolio;
        $m->name = $request->name;
        $m->url = $request->url;
        $m->image = $savedFileName;
        $m->sequence = $request->sequence;
        $m->status = $request->status;
        $m->details = $request->details;
        $m->meta_details = $request->meta_details;
        $m->keywords = $request->keywords;
        $m->created_at = now();
        $m->updated_at = now();
        $m->save();

        return redirect('admin/portfolio')->with('success', 'Portfolio uploaded successfully!');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image'], // 'nullable' allows skipping image upload
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $savedFileName = $request->stillthumb; // Default to the existing thumbnail if no new image is uploaded

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $savedFileName = 'portfolio_' . time() . '.' . $file->getClientOriginalExtension();

                    $directoryPath = public_path('uploads/portfolio');
                    if (!file_exists($directoryPath)) {
                        mkdir($directoryPath, 0755, true); // Ensure directory exists
                    }

                    $pathLarge = $directoryPath . '/' . $savedFileName;
                    $this->imageResize($file, $pathLarge, $savedFileName, 300, 300);
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Image upload failed: ' . $e->getMessage());
                }
            }
        }

        // Find the existing portfolio record
        $portfolio = Portfolio::find($id);
        if (!$portfolio) {
            return redirect()->back()->with('error', 'Portfolio not found');
        }

        // Prepare updated data
        $menuUpdate = [
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'url' => $request->url,
            'image' => $savedFileName,
            'sequence' => $request->sequence ?? 0,
            'status' => $request->status ?? 1,
            'details' => $request->details,
            'meta_details' => $request->meta_details,
            'keywords' => $request->keywords,
            'updated_at' => now(),
        ];

        // Update the portfolio record
        try {
            $portfolio->update($menuUpdate);
            return redirect('admin/portfolio')->with('success', 'Portfolio updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update portfolio: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $menuItem = Portfolio::find($id);
        $menuItem->delete();
        return redirect('admin/portfolio');
    }

    public function imageResize($file, $path, $filename, $width, $height)
    {
        $img = Image::make($file);
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->resizeCanvas($width, $height, 'center', false, array(255, 255, 255, 0));
        $img->save($path);
    }
}

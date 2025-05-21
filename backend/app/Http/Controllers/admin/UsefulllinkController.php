<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\UsefulLink;
use Exception;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;



class UsefullLinkController extends Controller
{
     public function __construct()
     {
        //$this->middleware('auth:admin');
     }

	 public function index(Request $request)
     {
	 	$allusefulllink = UsefulLink::orderBy('id','desc')->paginate(20);
    	return view('admin.usefulllink.index',compact('allusefulllink'));
     }


    public function create()
    {
        return view('admin.usefulllink.create');
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
                $savedFileName = 'usefulllink_' . time() . '.' . $file->getClientOriginalExtension();

                $directoryPath = public_path('uploads/usefulllink');
                if (!file_exists($directoryPath)) {
                    mkdir($directoryPath, 0755, true);
                }

                $pathLarge = $directoryPath . '/' . $savedFileName;
                $this->imageResize($file, $pathLarge, $savedFileName, 300, 300);
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
            }
        }
    } else {
        $savedFileName = '';
    }

    $m = new UsefulLink;
    $m->name = $request->name;
    $m->url = $request->url;
    $m->image = $savedFileName;
    $m->sequence = $request->sequence;
    $m->status = $request->status;
    $m->created_at = now();
    $m->updated_at = now();
    $m->save();

    return redirect('admin/usefulllink')->with('success', 'UsefullLink uploaded successfully!');
}


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usefulllink = UsefulLink::find($id);
        return view('admin.usefulllink.edit',compact('usefulllink'));

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
                    $savedFileName = 'usefulllink_' . time() . '.' . $file->getClientOriginalExtension();

                    $directoryPath = public_path('uploads/usefulllink');
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

        // Find the existing usefulllink record
        $usefulllink = UsefulLink::find($id);
        if (!$usefulllink) {
            return redirect()->back()->with('error', 'UsefullLink not found');
        }

        // Prepare updated data
        $menuUpdate = [
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'url' => $request->url,
            'image' => $savedFileName,
            'sequence' => $request->sequence ?? 0,
            'status' => $request->status ?? 1,
            'updated_at' => now(),
        ];

        // Update the usefulllink record
        try {
            $usefulllink->update($menuUpdate);
            return redirect('admin/usefulllink')->with('success', 'UsefullLink updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update usefulllink: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $menuItem = UsefulLink::find($id);
        $menuItem->delete();
        return redirect('admin/usefulllink');
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

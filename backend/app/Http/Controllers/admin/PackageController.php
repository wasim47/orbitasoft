<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageCategory;
use Exception;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;



class PackageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $allpackage = Package::orderBy('id', 'desc')->paginate(20);
        return view('admin.package.index', compact('allpackage'));
    }


    public function create()
    {
        $categories = PackageCategory::where('status', 1)->get();
        return view('admin.package.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'package_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'duration' => 'required|string',
            'features' => 'required|string',
            'status' => 'required|boolean',
        ]);

        
        Package::create([
            'category' => $request->category,
            'package_name' => $request->package_name,
            'price' => $request->price,
            'currency' => $request->currency,
            'duration' => $request->duration,
            'features' => $request->features,
            'description' => $request->features,
            'status' => $request->status,
        ]);

        return redirect()->route('package.index')->with('success', 'Package created successfully!');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $package = Package::with('category')->find($id);
        $categories = PackageCategory::where('status', 1)->get();
        return view('admin.package.edit', compact('package', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'package_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'duration' => 'required|string',
            'features' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $package = Package::findOrFail($id);

        $package->update([
            'category' => $request->category,
            'package_name' => $request->package_name,
            'price' => $request->price,
            'currency' => $request->currency,
            'duration' => $request->duration,
            'features' => $request->features,
            'status' => $request->status,
        ]);

        return redirect()->route('package.index')->with('success', 'Package updated successfully!');
    }


    public function destroy($id)
    {
        $menuItem = Package::find($id);
        $menuItem->delete();
        return redirect('admin/package');
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

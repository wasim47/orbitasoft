<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PackageCategory;
use Exception;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;



class PackageCategoryController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $allpackage = PackageCategory::orderBy('id', 'desc')->paginate(20);
        return view('admin.package_category.index', compact('allpackage'));
    }


    public function create()
    {
        return view('admin.package_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        
        PackageCategory::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('package_category.index')->with('success', 'PackageCategory created successfully!');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $package = PackageCategory::find($id);
        return view('admin.package_category.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $package = PackageCategory::findOrFail($id);

        $package->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('package_category.index')->with('success', 'PackageCategory updated successfully!');
    }


    public function destroy($id)
    {
        $menuItem = PackageCategory::find($id);
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

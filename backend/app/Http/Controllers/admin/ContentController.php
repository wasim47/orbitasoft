<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Content;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::paginate(50);
        return view('admin.contents.index', compact('contents'));
    }


    public function create()
    {
        $adminMenu = Menu::all();
        return view('admin.contents.create', compact('adminMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'menu_id' => 'Required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $savedFileName = 'banner_' . time() . '.' . $file->getClientOriginalExtension();

                    $directoryPath = public_path('uploads/article');
                    
                    if (!file_exists(($directoryPath))) {
                        mkdir($directoryPath, 0777, true);
                    }
                    $pathLarge = $directoryPath.'/'.$savedFileName;
                    $this->imageResize($file, $pathLarge, $savedFileName, 500, 500);
                } catch (Exception $e) {
                }
            }
        } else {
            $savedFileName = '';
        }


        $content = new Content;

        $content->title = $request->title;
        $content->content = $request->content;
        $content->title_bangla = $request->title_bangla;
        $content->content_bangla = $request->content_bangla;
        $content->menu_id = $request->menu_id;
        $content->image = $savedFileName;
        $content->created_at = date('Y-m-d H:i:s');
        $content->updated_at = date('Y-m-d H:i:s');
        $content->save();

        return redirect('admin/contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contentData = Content::find($id);
        $menus = Menu::all();
        $mid = $contentData->menu_id;
        $menuData = Menu::find($mid);
        $adminMenu = Menu::all();
        return view('admin.contents.edit', compact('contentData', 'menus', 'menuData','adminMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'menu_id' => 'Required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $savedFileName = 'banner_' . time() . '.' . $file->getClientOriginalExtension();

                    $directoryPath = public_path('uploads/article');
                    
                    if (!file_exists(($directoryPath))) {
                        mkdir($directoryPath, 0777, true);
                    }
                    $pathLarge = $directoryPath.'/'.$savedFileName;
                    $this->imageResize($file, $pathLarge, $savedFileName, 500, 500);
                } catch (Exception $e) {
                }
            }
        } else {
            $savedFileName = $request->stillthumb;
        }


        $content = Content::find($id);

        $contentUpdate = array(
            'title' => $request->title,
            'image' =>  $savedFileName,
            'content' => $request->content,
            'title_bangla' => $request->title_bangla,
            'content_bangla' => $request->content_bangla,
            'menu_id' => $request->menu_id,
            'updated_at' => date('Y-m-d H:i:s')
        );
        $content->update($contentUpdate);

        return redirect('admin/contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect('admin/contents');
    }

    public function imageResize($file, $path, $filename, $width, $height)
    {
        //$img = Image::make($file)->resize($width, $height)->save($path, $filename, 100);

        $img = Image::make($file);
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->resizeCanvas($width, $height, 'center', false, array(255, 255, 255, 0));
        $img->save($path);
    }
}

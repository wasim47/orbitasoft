<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    public function index()
    {
        $adminMenu = Menu::orderBy('id', 'DESC')->paginate(20);
        return view('admin.menu.index', compact('adminMenu'));
    }

    public function create()
    {
        $parentsMenu = Menu::whereNull('parent_id')->get();
        return view('admin.menu.create', compact('parentsMenu'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $m = new Menu;

        $m->uri = Str::slug($request->title);
        $m->title = $request->title;
        $m->menu_type = $request->menu_type;
        $m->parent_id = $request->parent_id;
        $m->sparent_id = $request->sparent_id;
        $m->page_structure = $request->page_structure;
        $m->sequence = $request->sequence;
        $m->created_at = date('Y-m-d H:i:s');
        $m->updated_at = date('Y-m-d H:i:s');
        $m->save();

        return redirect('admin/menu');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $menu = Menu::find($id);
        $adminMenu = Menu::where('parent_id', NULL)->get();
        return view('admin.menu.edit', compact('menu', 'adminMenu'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $menu = Menu::find($id);
        $menuUpdate = array(
            'menu_type' => $request->menu_type,
            'parent_id' => $request->parent_id,
            'sparent_id' => $request->sparent_id,
            'page_structure' => $request->page_structure,
            'title' => $request->title,
            'sequence' => $request->sequence,
            'uri' => Str::slug($request->title)
        );

        $menu->update($menuUpdate);
        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuItem = Menu::find($id);
        $menuItem->delete();
        return redirect('admin/menu');
    }

    public function searchmenu(Request $req)
    {
        if ($req->colid != "") {
            $id = $req->colid;
            $searchresults = Menu::where('parent_id', $id)->where('sparent_id', NULL)->orderBy('title', 'asc')->get();
            $displayvar = '<select name="sparent_id" class="form-control">';
            $displayvar .= '<option value="">Select Sub Parent</option>';
            foreach ($searchresults as $rows) :
                $displayvar .= '<option value="' . $rows->id . '">' . $rows->title . '</option>';
            endforeach;
            $displayvar .= '</select>';
            echo $displayvar;
        } else {
            echo "Null";
        }
    }
}

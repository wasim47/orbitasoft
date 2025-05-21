<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


use App\UserImportData;
use Illuminate\Http\Request;
use App\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
   
	public function importExportView()
    {
       return view('admin.importexport.import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export(Request $req) 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UserImportData,request()->file('file'), 'UTF-8');
           
        //return back();
		return redirect()->back()->with('success', 'All good!');
    }
}

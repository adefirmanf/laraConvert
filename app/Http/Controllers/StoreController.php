<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	
    }
    public function convert(Request $request){
    	$file = $request->file('document');

    	if($request->hasFile('document')){
    		$name = $file->getClientOriginalName();
    		$date = date('YmdHis');
    		//Do convert
    		$request->file('document')->move(public_path('upload'),$name,$date);
    		$txt_file = file_get_contents(public_path('upload\\'.$name,$date));
			$rows = explode(";", $txt_file);
			$test = implode(" ", $rows);
			// if(!preg_match_all('/^[A-Z a-z 0-9  \r\n]+$/', $txt_file)){
			// 	echo "Your file contain non-string. Please try again";
			// 	exit();
			// }
			// else{
			echo "";
			
			header('Content-Type: text/csv; charset=utf-8');
			header('Content-Disposition: attachment; filename=result.csv');

			$output = fopen('php://output', 'w');
			fputcsv($output,  $rows);
			//}
		    	}
		    	else{
		    		return view('index');
		    	}
		    }
    public function store(){

    }
}

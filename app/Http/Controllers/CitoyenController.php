<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Citoyen;
class CitoyenController extends Controller
{
  
  public function index(){
    	$listcit = Citoyen::all();
    	return view('citoyen.index', ['citoyens' => $listcit]);
    }


	  public function destroy($id){
    	
    	$citoyen = Citoyen::find($id);
    	$citoyen->delete();
    	return redirect('citoyens');

    } 
	
	
	public function show($id){
	
	
	return view('citoyen.show' , ['id'=> $id]);
	
}
  
  
}

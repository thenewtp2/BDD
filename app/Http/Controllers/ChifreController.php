<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Chifre;

class ChifreController extends Controller
{
   
   public function create(){
    	return view('chifre.create');
    }
	
	public function store(Request $request){
    	$chifre = new Chifre();
    	$chifre->wilaya = $request->input('wilaya');
		$chifre->nbmal = $request->input('nbmal');
		$chifre->nbgue = $request->input('nbgue');
		$chifre->nbmort = $request->input('nbmort');
    	$chifre->date = $request->input('date');


		
		
    	$chifre->save();
		return redirect('chifres');

    }
	
	
	 public function destroy($id){
    	
    	$chifre = Chifre::find($id);
    	$chifre->delete();
    	return redirect('chifres');

    } 
	
	
	
	public function edit($id){
    	$chifre = Chifre::find($id);
    	return view('chifre.edit', ['chifre'=>$chifre]);
    }
	
	 public function update(Request $request, $id){
    	$chifre = Chifre::find($id);
    	$chifre->wilaya = $request->input('wilaya');
    	$chifre->nbmal = $request->input('nbmal');
		$chifre->nbgue = $request->input('nbgue');
		$chifre->nbmort = $request->input('nbmort');
		$chifre->date = $request->input('date');
    	$chifre->save();
    	return redirect('chifres');    	
    }
	
   
   
   
   public function index(){
    	$listchif = Chifre::all();
    	return view('chifre.index', ['chifres' => $listchif]);
    } 
 
}

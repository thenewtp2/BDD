<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signal;

class SignalController extends Controller
{
    public function denonce(){
    	return view('signal.denonce');
    }
    public function store(Request $request){
    	$signal = new Signal();
    	$signal->wilaya = $request->input('wilaya');
    	$signal->commune = $request->input('commune');
		
		$signal->status = $request->input('status');
		$signal->contenu = $request->input('contenu');
		
		
		
		
		
		
		
    	$signal->save();
		return redirect('signals');

    }
	
   
   
   
   
   
  public function index(){
    	$listSignal = Signal::all();
    	return view('signal.index', ['signals' => $listSignal]);
    } 
   
   
   
    public function destroy($id){
    	
    	$signal = Signal::find($id);
    	$signal->delete();
    	return redirect('signals');

    } 
	
	public function edit($id){
    	$signal = Signal::find($id);
    	return view('signal.edit', ['signal'=>$signal]);
    }
    public function update(Request $request, $id){
    	$signal = Signal::find($id);
    	$signal->wilaya = $request->input('wilaya');
    	$signal->commune = $request->input('commune');
		$signal->status = $request->input('status');
		$signal->contenu = $request->input('contenu');
		
		
    	$siganl->save();
    	return redirect('signals');    	
    }

public function show($id){
	
	
	return view('signal.show' , ['id'=> $id]);
	
}
	
	
	
}

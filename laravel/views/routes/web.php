<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', function(){
	return view('minhaView');
});

Route::get('/ola', function(){
	return view('minhaView')->with('nome','Lucas')->with('sobrenome','Ferreira');
});

Route::get('/ola/{nome}/{sobrenome}', function($nome,$sobrenome){
	/*
	return view('minhaView')->with('nome',$nome)->with('sobrenome',$sobrenome);*/
	
	//$param = ['nome'=>$nome,'sobrenome'=>$sobrenome];
	//return view('minhaView',$param);

	return view('minhaView', compact('nome','sobrenome'));
});

Route::get('/email/{email}',function($email){
if(View::exists('email')){
	return view('email', compact('email'));
}else 
	return view('erro');
});
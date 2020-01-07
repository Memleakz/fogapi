<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    
    $aktorclient = new App\Aktor();
    $filter['data'] = array('filter' => array('eq' => ['typeid',5]),'limit' => 10);
    $aktors = $aktorclient->getAktors(array('navn','typeid'), $filter);
    
    $keywordclient = new App\Keywords();
    $filter['data'] = array('filter' => array());
    $keywords = $keywordclient->getKeywords(array('id','emneord'), $filter);
    
    return view('frontpage',array('aktører' => $aktors,'keywords' => $keywords));
});
Route::get('/Documents', function () {
    $keywordclient = new App\Keywords();
    $filter['data'] = array();
    $keywords = $keywordclient->getKeywords(array('id','emneord'), $filter);
    
    return view('frontpage',array('Documents' => $keywords));
});
Route::get('/Cases', function () {
    $keywordclient = new App\Keywords();
    $filter['data'] = array();
    $keywords = $keywordclient->getKeywords(array('id','emneord'), $filter);
    
    return view('frontpage',array('Cases' => $keywords));
});
Route::get('/Persons', function () {
    $keywordclient = new App\Keywords();
    $filter['data'] = array();
    $keywords = $keywordclient->getKeywords(array('id','emneord'), $filter);
    
    return view('frontpage',array('Persons' => $keywords));
});
<?php

namespace App\Http\Controllers;
use App\Car;
use App\Category;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){

    	return view('pages.home');
    }
    function about_us(){
    	return view('pages.about_us');
    }
    function services(){        
    	return view('pages.services');
    }
    function gallery(){
        $cars = Car::all();
    	return view('pages.gallery', compact('cars'));
    }
    function contact_us(){
    	return view('pages.contact_us');
    }
    function all_cars(){
    	$cars = Car::all();
    	return view('pages.all_cars', compact('cars'));
    }
    function add_car(){
    	return view('pages.add_car');
    }
    function all_categories(){
        $categories= Category::all();
        return view('pages.all_categories', compact('categories'));
    }
    

function prices(){
	return view('pages.prices');
}
}
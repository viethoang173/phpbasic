<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function about(){
        return view('about');
    }
    function booking(){
        return view('booking');
    }
    function contact(){
        return view('contact');
    }
    function gallery(){
        return view('gallery');
    }
    function news(){
        return view('news');
    }
    function selectBooking(){
        return view('select-booking');
    }
    function signIn(){
        return view('sign-in');
    }
    function signUp(){
        return view('sign-up');
    }
    //dang ki tai khoan
    function resgiter(Resquest $request){
        $information = new information();
        $information -> name = $request -> input('name');
        $information -> save();

    }


    function submitBooking(){
        return view('submit-booking');
    }
}

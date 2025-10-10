<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }


    public function aariblouse(){
        return view('aariblouse'); // resources/views/boutique.blade.php
    }

    public function boutique() {
        return view('boutique'); // resources/views/boutique.blade.php
    }

    public function contact() {
        return view('contact'); // resources/views/contact.blade.php
    }

    public function login(){
        return view('login'); //ressources/views/login.blade.php
    }

    public function mumchild(){
        return view('mumchild'); //ressources/views/login.blade.php
    }

     public function register(){
        return view('register'); //ressources/views/register.blade.php
    }

     public function reset(){
        return view('reset'); //ressources/views/reset.blade.php
    }

     public function success(){
        return view('success'); //ressources/views/success.blade.php
    }

    public function tailorswomen() {
        return view('tailors_women'); // resources/views/tailors_women.blade.php
    }

    public function tailorsmen() {
        return view('tailors_men'); // resources/views/tailors_men.blade.php
    }

     public function tailoringboutique(){
        return view('tailoringboutique'); //ressources/views/tailoringboutique.blade.php
    }

    public function materials() {
        return view('materials'); // resources/views/materials.blade.php
    }

    public function search(){
        return view('search'); //resources/views/navbar.blade.php
    }

    //  public function login(){
    //      return view('login'); //reources/view/navebar.blade.php
    //  }
}

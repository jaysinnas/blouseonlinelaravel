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
        return view('tailors_men'); // resources/views/tailorsmen.blade.php
    }

     public function tailoringboutique(){
        return view('tailoringboutique'); //ressources/views/tailoringboutique.blade.php
    }

    public function materials() {
        return view('materials'); // resources/views/materials.blade.php
    }

    public function search(){
        return view('search'); //resources/views/search.blade.php
    }
      public function aboutcommunity(){
        return view('pages.community.about');
    }
    public function aboutCompany(){
        return view('pages.company.about');
    }
    public function contactCompany(){
        return view('pages.company.contact');
    }
    public function jobscompany(){
        return view('pages.company.jobs');
    }
    public function presscompany(){
        return view('pages.company.press');
    }
    public function disclaimerLegal(){
        return view('pages.legal.disclaimer'); //reources/view/disclaimer.blade.php
    }
    public function privacyLegal() {
        return view('pages.legal.privacy'); // resources/views/privacy.blade.php
    }
    public function refundLegal(){
        return view('pages.legal.refund'); //resources/views/refund.blade.php
    }
    public function termsLegal(){
        return view('pages.legal.terms'); //resources/view/terms.blade.php
    }

}



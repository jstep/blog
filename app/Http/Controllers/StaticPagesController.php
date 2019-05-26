<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller {
  
  public function getIndex() {
    return view('pages.welcome');
  }
  
  public function getAbout() {
    return view('pages.about');
  }
  
  public function getContact() {
   return view('pages.contact');
  }
}
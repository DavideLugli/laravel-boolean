<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index()
 {
   // $students = config('students.students');
   // dd($students);
return view('staticpages.index');
 }
 public function privacy()
 {
return view('staticpages.privacy');
 }
 public function faq()
 {

 }
}

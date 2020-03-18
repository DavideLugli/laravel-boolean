<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;
  public function __construct()
  {
 $this->getAllStudents();
  }
  public function index()
  {
    // $students = $this->students;
    // return view('students.index', compact('students'));
    return view('students.index');
  }
  public function show($id)
  {

  }
  private function getAllStudents()
  {
    // $this->students = [
    //   [
    //   'img' => 'https://www.boolean.careers/images/students/biagini.png',
    //   'nome' => 'Alessandro Biagini',
    //   'eta' => 25,
    //   'azienda' => 'DISC SPA',
    //   'ruolo' => 'web developer',
    //   'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
    // ],
    // [
    //   'img' => 'https://www.boolean.careers/images/students/poggini.png',
    //   'nome' => 'Paola Poggini',
    //   'eta' => 24,
    //   'azienda' => 'Assunta da Prima Assicurazioni',
    //   'ruolo' => 'junior software engineer',
    //   'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.'
    // ],
    // [
    //   'img' => 'https://www.boolean.careers/images/students/biagini.png',
    //   'nome' => 'Alessandro Biagini',
    //   'eta' => 25,
    //   'azienda' => 'DISC SPA',
    //   'ruolo' => 'web developer',
    //   'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
    // ],
    // [
    //   'img' => 'https://www.boolean.careers/images/students/biagini.png',
    //   'nome' => 'Alessandro Biagini',
    //   'eta' => 25,
    //   'azienda' => 'DISC SPA',
    //   'ruolo' => 'web developer',
    //   'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
    // ],
    // [
    //   'img' => 'https://www.boolean.careers/images/students/biagini.png',
    //   'nome' => 'Alessandro Biagini',
    //   'eta' => 25,
    //   'azienda' => 'DISC SPA',
    //   'ruolo' => 'web developer',
    //   'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
    // ],
    // [
    //   'img' => 'https://www.boolean.careers/images/students/biagini.png',
    //   'nome' => 'Alessandro Biagini',
    //   'eta' => 25,
    //   'azienda' => 'DISC SPA',
    //   'ruolo' => 'web developer',
    //   'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
    // ]
    // ];
 $this->students = config('students.students');
 // dd($this->students);
  }
}
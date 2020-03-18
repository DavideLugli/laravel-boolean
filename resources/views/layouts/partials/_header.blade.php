<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <div class="logo">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Logo">
        </div>
        <ul>
        <li><a class="{{(Request::route()->getName() == 'home') ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
        <li><a href="">Corso</a></li>
        <li><a class="{{(Request::route()->getName() == 'students.index') ? 'active' : ''}}" href="{{route('students.index')}}">Dopo Corso</a></li>
        <li><a href="">Lezione Gratuita</a></li>
        <li><a href="">Canditati ora</a></li>
        </ul>
      </nav>

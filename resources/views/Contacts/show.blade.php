@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
        <!-- view student details -->
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->firstname }} {{ $contacts->lastname }}</h5>
        <p class="card-text">Birthdate : {{ $contacts->birthdate }}</p>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Course : {{ $contacts->course }}</p>
        <p class="card-text">Year Level : {{ $contacts->yearlevel }}</p>
        <p class="card-text">Email : {{ $contacts->email }}</p>
        <p class="card-text">Phone : {{ $contacts->phone }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@extends('contacts.layout')
@section('content')
 

<!-- edit student info -->
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Firstame</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$contacts->firstname}}" class="form-control"></br>
        <label>Lastname</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$contacts->lastname}}" class="form-control"></br>
        <label>Birthdate</label></br>
        <input type="date" name="birthdate" id="birthdate" value="{{$contacts->birthdate}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$contacts->course}}" class="form-control"></br>
        <label>Year Level</label></br>
        <input type="text" name="yearlevel" id="yearlevel" value="{{$contacts->yearlevel}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$contacts->phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
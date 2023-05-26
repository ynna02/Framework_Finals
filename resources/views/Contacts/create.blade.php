@extends('contacts.layout')
@section('content')
 
<!-- create student -->
<div class="card">
  <div class="card-header">Create Student</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <div class="col-12 row">
        
      <div class="col-md-4">
        <label>Firstname</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
      </div>
      <div class="col-md-4">
        <label>Lastname</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
      </div>
      <div class="col-md-4">
        <label>Birthdate</label></br>
        <input type="date" name="birthdate" id="birthdate" class="form-control"></br>
      </div>
      <div class="col-md-12">
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
      </div>
      <div class="col-md-3">
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
      </div>
      <div class="col-md-3">
        <label>Year Level</label></br>
        <input type="text" name="yearlevel" id="yearlevel" class="form-control"></br>
      </div>
      <div class="col-md-3">
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
      </div>
      <div class="col-md-3">
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
      </div>
        <div class="text-end">
            <input type="submit" value="Save" class="btn btn-success">
            <input href="" type="button" value="Cancel" class="btn btn-danger"></br>
        </div>
      </div>
    </form>
   
  </div>
</div>
 
@stop
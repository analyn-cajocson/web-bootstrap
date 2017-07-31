@extends('layouts.master')

@section('content')

  <div class="container">
  <div class="parent text-center" style="max-width:500px; margin: 0 auto; margin-top: 50px; background: #f5f5f5; padding: 25px;">
    <p> Please log in your credential</p>
    <p>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address/mobile number</label>
        <input type="text" class="form-control" id="login" aria-describedby="emailHelp">
        
      </div>
    <p>Or</p>
      
    <p>
      <div class="form-group">
        <label for="exampleInputEmail1">Reservation number</label>
        <input type="text" class="form-control" id="login" aria-describedby="emailHelp">
        
      </div>
    </p>
    </p>
      <div class="form-group">
        <button type="submit" id="submit" class="btn btn-primary">Log in to your account</button>
        
      </div>
    <p>
      
    </p>
  </div>
      


  </div>

  
@endsection


@extends('layouts.master')

@section('content')

  <table class="table borderless">
    <thead>
      <tr>
        
        <th style="text-align: center;">
          Please log in your credential
        </th>
      </tr>

    </thead>

    <tbody>
      <form>
        <tr>
          <th style="text-align: left;">
            <p></p>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address/mobile number</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
          </th>
        </tr>

        <tr>
          <th style="text-align: left;">
            <p>Or</p>
          </th>
        </tr>

        <tr>
          <th style="text-align: left;">
            <p></p>
            <div class="form-group">
              <label for="exampleInputEmail1">Reservation Number</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
          </th>
        </tr>

        <tr>
          <th style="text-align: left;">
            <p></p>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Log in to your account</button>
              
            </div>
          </th>
        </tr>
      </form>
      
      

    </tbody>

  
    
  </table>



    
@stop
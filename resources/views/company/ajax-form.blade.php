@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Horizontal form</h2>
    <form class="form-horizontal" action="#">
        @csrf
      

      <div class="form-group">
        <label class="control-label col-sm-2" for="file">File:</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="file" name="file">
      </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-danger" id = 'ajax-submit'>Submit</button>
        </div>
      </div>
    </form>
  </div>
  @endsection
 
@extends('layout')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Widget 1</h3>
        </div>
        <div class="panel-body">
          <a href="#" class="btn btn-primary" role="button"> Link 1</a>
          <a href="#" class="btn btn-success" role="button"> Link 2</a>
          <a href="#" class="btn btn-info" role="button"> Link 3</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3 col-xs-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Widget 2</h3>
        </div>
        <div class="panel-body text-danger">
          <p> Hello there! </p>
          <a href="#" class="btn btn-danger" role="button"> Link 1</a>
          <a href="#" class="btn btn-danger" role="button"> Link 2</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-xs-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Widget 3</h3>
        </div>
        <div class="panel-body">
          <a href="#" class="btn btn-danger" role="button"> Link 1</a>
          <a href="#" class="btn btn-danger" role="button"> Link 2</a>
        </div>
      </div>
    </div>
  </div> <!-- class row -->
</div>
@stop

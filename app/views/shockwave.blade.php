@extends('layout')
@section('content')
<div class="container"> <!-- container gives the centered looking feel -->

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
              <figure>
                <img class="img-responsive" src="images/orga.jpg" alt="Responsive image"/>
                <figurecaption> Organigramme </figurecaption>
              </figure>
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

    </div> <!-- class container -->
@stop

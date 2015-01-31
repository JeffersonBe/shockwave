@extends('layout')
@section('content')
<div class="col-md-6 col-md-offset-3">
@if (Session::has('problem'))
  <div class="alert alert-danger">
    {{ Session::get('message') }}
  </div>
@endif

@if (Session::has('success'))
   <div class="alert alert-info">{{ Session::get('success') }}</div>
@endif

@if($errors->any())
<div class="alert alert-danger">{{$errors->first()}}</div>
@endif

{{
  Former::framework('TwitterBootstrap3'),
  Former::vertical_open()
  ->id('FormBreakfast')
  ->secure()
  ->rules(array(
    'Nom'                   => 'required|max:15|alpha',
    'Prénom'                => 'required|max:15|alpha',
    'Numéro de téléphone'   => array('required','numeric','max:10'),
    'Adresse email Telecom' => array('required','^[A-Z0-9._%+-]+@tem-tsp.eu$'),
    'Date de Livraison'     => array('required','after:2015-02-05','before:2015-03-01'),
    'Heure de livraison'    => array('required', 'max:7')
  ))
  ->withErrors()
  ->method('POST')
  ->setOption('live_validation', true),

  Former::text('Prénom'),

  Former::text('Nom'),

  Former::tel('Numéro de téléphone'),

  Former::email('Adresse email Telecom'),

  Former::text('Adresse de livraison'),

  Former::date('Date de Livraison'),

  Former::select('Heure de livraison')->options(array(
  '8h-10h'   => '8h-10h',
  '10h-12h'  => '10h-12h',
  '12h-14h'  => '12h-14h',
  '14h-16h'  => '14h-16h',
  '16h-18h'  => '16h-18h'
  )),

  Former::select('Formule')->options(array(
  'Formule1'   => 'Formule 1: Fajitas',
  'Formule2'  => 'Formule 2: Fusilli à la Bolognaise',
  'Formule3'  => 'Formule 3: Petit Déjeuner Shockwave',
  ))->required(),

  Former::textarea('Commentaires')
  ->rows(10)->columns(20)
  ->autofocus(),

  Former::actions()
  ->large_primary_submit('Submit'),

  Former::close();

}}
</div>
@stop

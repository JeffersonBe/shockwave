@extends('layout')
@section('content')
<div class="col-md-10">
@if (Session::has('problem'))
  <div class="alert alert-danger">
    {{ Session::get('message') }}
  </div>
@endif

@if (Session::has('success'))
   <div class="alert alert-info">{{ Session::get('success') }}</div>
@endif

{{

  Former::horizontal_open()
  ->id('FormBreakfast')
  ->secure()
  ->rules(array(
    'Prénom', 'nom'         => 'required|max:20|alpha',
    'Numéro de téléphone portable'   => '^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$',
    'Date de Livraison'     => array('after:2015-02-05','before:2015-03-01'),
    'Adresse email Telecom' => '^[A-Z0-9._%+-]+@tem-tsp.eu$'
  ))
  ->withErrors()
  ->method('POST')
  ->setOption('live_validation', true),

  Former::text('Prénom')->required(),

  Former::text('Nom'),

  Former::tel('Numéro de téléphone')->required(),

  Former::email('Adresse email Telecom')->required(),

  Former::text('Adresse de livraison')->required(),

  Former::date('Date de Livraison')->required()->pattern('after:2015-02-05'),

  Former::select('Heure de livraison')->options(array(
  '8h-10h'   => '8h-10h',
  '10h-12h'  => '10h-12h',
  '12h-14h'  => '12h-14h',
  '14h-16h'  => '14h-16h',
  '16h-18h'  => '16h-18h'
  ))->required(),

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

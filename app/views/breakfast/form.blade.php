@extends('layout')
@section('content')
<div class="col-md-10">
{{

  Former::horizontal_open()
  ->id('FormBreakfast')
  ->secure()
  ->rules(array(
    'Prénom', 'nom'         => 'required|max:20|alpha',
    'Numéro de téléphone portable'   => '^((\+|00)33\s?|0)[679](\s?\d{2}){4}$',
    'Date de Livraison'     => array('after:2015-02-05','before:2015-03-01'),
    'Adresse email Telecom' => '^[A-Z0-9._%+-]+@tem-tsp.eu$'
  ))
  ->withErrors()
  ->method('POST')
  ->setOption('live_validation', true),

  Former::text('Prénom')->required(),

  Former::text('Nom'),

  Former::phone('Numéro de téléphone portable')->required(),

  Former::email('Adresse email Telecom')->required(),

  Former::text('Adresse de livraison')->required(),

  Former::date('Date de Livraison')->required()->pattern('after:2015-02-05'),

  Former::select('Heure de livraison')->options(array(
  1  => '8h-10h',
  2  => '10h-12h',
  3  => '12h-14h',
  4  => '14h-16h',
  5  => '16h-18h'
  ))->required(),

  Former::select('Choissisez votre menu')->fromQuery(Formule::all(), 'name')->required(),

  Former::textarea('Commentaires')
  ->rows(10)->columns(20)
  ->autofocus(),

  Former::actions()
  ->large_primary_submit('Submit'),

  Former::close();

}}
</div>
@stop

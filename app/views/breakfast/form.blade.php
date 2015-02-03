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

{{
  Former::framework('TwitterBootstrap3'),
  Former::vertical_open()
  ->id('FormBreakfast')
  ->secure()
  ->rules(array(
    'first_name'      => 'required|max:15|alpha',
    'last_name'       => 'required|max:15|alpha',
    'number'          => 'required|numeric',
    'email'           => 'required|email',
    'adress_delivery' => 'required|max:25',
    'hour_delivery'   => 'required|max:7',
    'comment'         => 'max:500|alpha-num',
    'g-recaptcha-response'  => 'required|recaptcha',
  ))
  ->withErrors()
  ->method('POST')
  ->setOption('live_validation', true),

  Former::text('first_name')
  ->label("Prénom"),

  Former::text('last_name')
  ->label("Nom"),

  Former::tel('number')
  ->label("Numéro de téléphone"),

  Former::email('email')
  ->label("Adresse email"),

  Former::text('adress_delivery')
  ->label("Adresse de livraison"),

  Former::select('hour_delivery')
  ->options(array(
  '8h-10h'   => '8h-10h',
  '10h-12h'  => '10h-12h',
  '12h-14h'  => '12h-14h',
  '14h-16h'  => '14h-16h',
  '16h-18h'  => '16h-18h'
  ))
  ->label("Heure de livraison"),

  Former::select('formule')->options(array(
  'Formule1'  => 'Formule 1: Fajitas',
  'Formule2'  => 'Formule 2: Fusilli à la Bolognaise',
  'Formule3'  => 'Formule 3: Petit Déjeuner Shockwave',
  ))
  ->label('Formule'),

  Former::textarea('comment')
  ->rows(2)->columns(20)
  ->label('Commentaires')

}}

{{ Form::captcha() }}

{{ Former::actions()
  ->class('buttonOrder text-center')
  ->large_primary_submit('Commander'),

  Former::close();
}}
</div>
@stop

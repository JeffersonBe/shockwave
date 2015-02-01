@extends('layout')
@section('content')
<!---->
<div class="container">
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


	<div class="row">
		<div class="col-sm-4 col-xs-12">
			<div class="panel panel-primary">
  				<div class="panel-heading">
   				<h3 class="panel-title">Fajitas</h3>
  				</div>
  				<div class="panel-body">
    				<img src="img/fajitas.jpg" class="img-responsive" alt="fajitas"/>
  				</div>
			</div>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div class="panel panel-primary">
  				<div class="panel-heading">
   				<h3 class="panel-title">Fusilli à la bolognaise</h3>
  				</div>
  				<div class="panel-body">
    				<img src="img/fusilli.jpg" class="img-responsive "alt="fusilli à la bolognaise" />
  				</div>
			</div>		
		</div>
		<div class="col-sm-4 col-xs-12">
			<div class="panel panel-primary">
  				<div class="panel-heading">
   				<h3 class="panel-title">Petit déjeuner Shockwave</h3>
  				</div>
  				<div class="panel-body">
  				</div>
			</div>				
		</div>
	</div>

<div class="col-md-6 col-md-offset-3">

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
</div>
@stop

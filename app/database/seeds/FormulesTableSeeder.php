<?php

class FormulesTableSeeder extends Seeder {

  public function run()
  {
    $formule = new Formule;
    $formule->name = 'kfc';

    if(! $formule->save()) {
      Log::info('Unable to create formule '.$formule->anm, (array)$formule->errors());
    } else {
      Log::info('Created formuele "'.$formule->name.'" <'.$formule->name.'>');
    }
  }
}

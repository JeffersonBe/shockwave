<?php

class Member extends Eloquent {

  protected $table = 'members';
  protected $guarded  = array('id','confirmed');
  protected $fillable = array('first_name', 'last_name', 'email', 'number');

  public function getMemberEmail() {
    return $this->Adresse_email_Telecom;
  }
}

<?php

class Member extends Eloquent {

  protected $table = 'members';
  protected $guarded  = array('id');
  protected $fillable = array('first_name', 'last_name', 'email', 'number', 'confirmed');

  public function getMemberConfirmed() {
    return $this->confirmed;
  }

  public function getMemberCode() {
    return $this->confirmation_code;
  }

  public function getMemberEmail() {
    return $this->email;
  }
}

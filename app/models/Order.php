<?php

class Order extends Eloquent {

  protected $table = 'orders';
  protected $guarded  = array('id','member_id', 'delivered');
  protected $fillable = array('formule', 'adress_delivery', 'date_delivery', 'comment');

  public function getMemberEmail() {
    return $this->Adresse_email_Telecom;
  }
}

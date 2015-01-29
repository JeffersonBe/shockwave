<?php

class BreakfastController extends \BaseController {

	public function showForm(){
		return View::make('breakfast.form');
	}

	public function create(){
		$input = Input::all();
		$mail = Input::get("Adresse_email_Telecom");

		// Check if user already exist
		if($this->memberExist($mail)){
			Session::flash('problem', "Vous êtes gourmand mais vous avez déjà fait une commande.");
			return Redirect::back();
		}
		else{
			/* Add Member */
			$member = new Member;
			$member->first_name = Input::get("Prénom");
			$member->last_name = Input::get("Nom");
			$member->email = Input::get("Adresse_email_Telecom");
			$member->number = Input::get("Numéro_de_téléphone");
			$member->confirmation_code = md5(uniqid(mt_rand(), true));;
			$member->save();


			/* Add Order */
			$order = new Order;
			$order->member_id = $member->id;
			$order->formule = Input::get("Formule");
			$order->address_delivery = Input::get("Adresse_de_livraison");
			$order->date_delivery = Input::get("Date_de_Livraison");
			$order->hour_delivery = Input::get("Heure_de_livraison");
			$order->comment = Input::get("Commentaires");
			$order->save();

			Session::flash('success', "Commande enregistrée, on est déjà aux fourneaux. Il te manque plus qu'à la valider. Check tes mails!");
			return Redirect::back();
		}

	}


	public function memberExist($memberEmail) {
		$member = Member::whereEmail($memberEmail)->first();
		// dd($member);
		if(!$member){
			return false;
		}
		else{
			return true;
		}
	}
}

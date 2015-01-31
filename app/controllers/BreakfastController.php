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

			Mail::send('emails.breakfast.order',
				array('first_name'=> $member->first_name,
							'id'				=> $member->id,
							'formule' 	=> $order->formule,
							'code' 			=> $member->confirmation_code),
				function($message) use ($member, $order)
			{
				$message->to($member->email, $member->first_name)->subject('Commande Shockwave');
			});

			Session::flash('success', "Commande enregistrée, on est déjà aux fourneaux. Il te manque plus qu'à la valider. Check tes mails!");
			return Redirect::back();
		}

	}

	/* Validate code */
	public function checkCode(){

		$rules = array(
				'id'		=> 'required|numeric',
				'code' 	=> 'required|alpha_num',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			Session::flash('problem', "Le lien que vous avez ajouté n'est pas correct.");
			return Redirect::to('ptit-dej');
		}
		else{
			$id = Input::get("id");
			$code = Input::get("code");

			$member = Member::where('confirmation_code', $code)->first();
			if(!$member){
				Session::flash('problem', "C'est pas le bon utilisateur… Humm on va faire comme si on avait rien vu …");
				return Redirect::to('ptit-dej');
			}
			else{
				$idMember = $member->id;
				$codeMember = $member->confirmation_code;
				$statusConfirmed = $member->confirmed;

				if($idMember=$id){

					if($codeMember=$code){

						if($statusConfirmed===0){
							$member->confirmed = 1;
							$member->update();

							Session::flash('success', "Ton compte est validé, ça y est là on peut vraiment cuisiner");
							return Redirect::to('ptit-dej');
						}
						else{
							Session::flash('problem', "Tu as déjà validé ton compte ! Ah la gourmandise … :-) ");
							return Redirect::to('ptit-dej');
						}
					}
					else{
						Session::flash('problem', "C'est pas le bon code … Clique-bien sur le lien si tu veux manger!");
						return Redirect::to('ptit-dej');
					}
				}
				else{
					Session::flash('problem', "C'est pas le bon utilisateur… Humm on va faire comme si on avait rien vu …");
					return Redirect::to('ptit-dej');
				}
			}
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

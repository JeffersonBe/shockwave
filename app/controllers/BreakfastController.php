<?php

class BreakfastController extends \BaseController {

	public function showForm(){
		return View::make('breakfast.form');
	}

	public function create(){
		dd(Input::get('g-recaptcha-response'));
		$rules = array(
			'first_name'      => 'required|max:15|alpha',
			'last_name'       => 'required|max:15|alpha',
			'number'          => 'required|numeric',
			'email'           => 'required|email',
			'adress_delivery' => 'required|max:25',
			'date_delivery'   => 'required',
			'hour_delivery'   => 'required|max:7',
			'comment'         => 'max:500|alpha-num',
			'g-recaptcha-response'  => 'required|recaptcha',
		);

		$validator = Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		$input = Input::all();
		$mail = Input::get("Adresse_email_Telecom");

		// Check if user already exist
		if($this->memberExist($mail)){
			Session::flash('problem', "Vous êtes gourmand mais vous avez déjà fait une commande.");
			return Redirect::back();
		}

		/* Add Member */
		$member = new Member;
		$member->first_name = Input::get("first_name");
		$member->last_name = Input::get("last_name");
		$member->email = Input::get("email");
		$member->number = Input::get("number");
		$member->confirmation_code = md5(uniqid(mt_rand(), true));;
		$member->save();

		/* Add Order */
		$order = new Order;
		$order->member_id = $member->id;
		$order->formule = Input::get("formule");
		$order->address_delivery = Input::get("adress_delivery");
		$order->date_delivery = Input::get("date_delivery");
		$order->hour_delivery = Input::get("hour_delivery");
		$order->comment = Input::get("comment");
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

	/*
	*	Get @id and @code from mail to validate account
	*
	*
	*/
	public function checkCode(){

		/* Input checkup */
		$rules = array(
				'id'		=> 'required|numeric',
				'code' 	=> 'required|alpha_num',
		);
		$messages = array(
				'required'		=> "Le :attribute est requis",
				'numeric'    	=> "L':attribute doit être un chiffre",
				'alpha_num'		=> "Le :attribute doit être alpha-numérique",
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails())
		{
			return Redirect::to('ptit-dej')->withErrors($validator)->withInput();
		}

		$id = Input::get("id");
		$code = Input::get("code");

		$member = Member::where('confirmation_code', $code)->first();
		$idMember = $member->id;
		$codeMember = $member->confirmation_code;
		$statusConfirmed = $member->confirmed;

		if(!$member){
			Session::flash('problem', "C'est pas le bon code… Humm on va faire comme si on avait rien vu …");
			return Redirect::to('ptit-dej');
		}
		elseif($idMember!=$id){
			Session::flash('problem', "C'est pas le bon utilisateur… Humm on va faire comme si on avait rien vu …");
			return Redirect::to('ptit-dej');
		}
		elseif($codeMember!=$code){
			Session::flash('problem', "C'est pas le bon code … Clique-bien sur le lien si tu veux manger!");
			return Redirect::to('ptit-dej');
		}
		elseif($statusConfirmed===1){
			Session::flash('problem', "Tu as déjà validé ton compte ! Ah la gourmandise … :-)");
			return Redirect::to('ptit-dej');
		}

		$member->confirmed = 1;
		$member->update();

		Session::flash('success', "Ton compte est validé, ça y est là on peut vraiment cuisiner.");
		return Redirect::to('ptit-dej');
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

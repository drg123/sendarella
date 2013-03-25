<?php
App::uses('AppController', 'Controller');
/**
 * TextTextfollowups Controller
 *
 * @property Email $Email
 */
class TextfollowupsController extends AppController {

	public function send2() {
	
		require_once("../Vendor/avid/MCSOAPClient.php");
	
//		$ServiceUrl = "https://login.avidmobile.com/MCSOAP2.1/MarketingCenter2-1.php?wsdl";
//		$MCUsername = "sendarella"; //REPLACE WITH: Your customer username
//		$MCPassword = "1b7dd4c9946f98"; //REPLACE WITH: Your customer password
//		$MCCustomerId = 1691; //REPLACE WITH: Your customer id

//		$MySOAPClient = new AvidMobileSOAPClient($ServiceUrl, $MCUsername, $MCPassword, $MCCustomerId, 1);
//
//		$arguments = array(array("Key" => "customer_name", "Value" => "CreateM2CTest"),
//		 array("Key" => "customer_readable_name", "Value" => "Marketing Center 1818"),
//		 array("Key" => "shortcode", "Value" => "72727"),
//		 array("Key" => "username", "Value" => "admin"),
//		 array("Key" => "password", "Value" => "yourpassword"));

		$ServiceUrl = "https://login.avidmobile.com/MCSOAP2.1/MarketingCenter2-1.php?wsdl";
		$MCUsername = "admin"; //REPLACE WITH: Your customer username
		$MCPassword = "yourpassword"; //REPLACE WITH: Your customer password
		$MCCustomerId = 15294; //REPLACE WITH: Your customer id
	
		$MySOAPClient = new AvidMobileSOAPClient($ServiceUrl, $MCUsername, $MCPassword, $MCCustomerId);


//$arguments = array(array("Key" => "name", "Value" => "Blast1"),
// array("Key" => "blast_text", "Value" => "Hello world"),
//   array("Key" => "addl_text", "Value" => "\nReply STOP to stop"));
//
//$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("blast.create", $arguments));

//$arguments = array(array("Key" => "id", "Value" => "26830"),
// array("Key" => "group_id", "Value" => "43036"));

//$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("blast.addgroup", $arguments));


$arguments = array(array("Key" => "id", "Value" => "26830"));

$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("blast.send", $arguments));


//$arguments = array(array("Key" => "id", "Value" => "26815"),
// array("Key" => "group_id", "Value" => "43036"));
//
//$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("blast.addgroup", $arguments));
//

//$arguments = array(array("Key" => "id", "Value" => "952523"),
// array("Key" => "group_id", "Value" => 43036));
//
//$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("member.addtogroup", $arguments));


//$arguments = array(array("Key" => "phone_num", "Value" => "6024819661"),
// array("Key" => "first_name", "Value" => "Jim"),
// array("Key" => "last_name", "Value" => "Clanders"));
//
//$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("member.create", $arguments));

//		$arguments = array(array("Key" => "name", "Value" => "General"),
//		 array("Key" => "type", "Value" => "STATIC"));
//
//		$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("group.create", $arguments));


//		$arguments = array(array("Key" => "mobile", "Value" => "6024819661"),
//		 array("Key" => "message", "Value" => "hello sms world!"));
//
//		$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams("misc.sendsms", $arguments));
		
		echo "\nResult: ";
		print_r($result);
		exit;
	
	}



	public function send_old() {
	
//		$endpoint = 'https://api.wbsrvc.com/Client/create/';
//		$data = array(
//			'company_name' => 'Test Client',
//			'contact_same_as_admin' => 1,
//			'admin_email' => 'leonk4@klepfish.com',
//			'admin_first_name' => 'Leon',
//			'admin_last_name' => 'Klepfish',
//			'admin_password' => 'password',
//			'admin_password_confirmation' => 'password',
//			'parent_id' => 96264
//		);
		
//		$endpoint = 'https://api.wbsrvc.com/User/passwordRecovery/';
//		$data = array(
//			'email' => 'leon@klepfish.com',
//			'subject' => 'Password Recovery',
//			'text' => '[password]'		
//		);
		
//		$endpoint = 'https://api.wbsrvc.com/User/login/';
//		$data = array(
//			'email' => 'leon@klepfish.com',
//			'password' => 'hellohello'		
//		);		
		
//		$endpoint = 'https://api.wbsrvc.com/Client/activate/';
//		$data = array(
//			'confirmation' => '93ab35a24368a619ec4fa3fe20e86bf1'		
//		);	

//		$endpoint = 'https://api.wbsrvc.com/Client/getList/';
//		$data = array(
//			'user_key' => '09a06f74644d7c1c4c13db106fa46f10'		
//		);	

//		$endpoint = 'https://api.wbsrvc.com/Relay/send/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'email' => 'klepfish@gmail.com',
//			'sender_name' => 'Test',
//			'sender_email' => 'test@test.com',
//			'subject' => 'Sendarella Test',
//			'text_message' => 'Testing test test'		
//		);		
		
//		$endpoint = 'https://api.wbsrvc.com/List/getList/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb'	
//		);		

//		$endpoint = 'https://api.wbsrvc.com/List/create/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'name' => 'General2',
//			'sender_name' => 'Sendarella',
//			'sender_email' => 'leon@klepfish.com'
//		);	

//		$endpoint = 'https://api.wbsrvc.com/List/setInfo/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'list_id' => 836227,
//			'policy' => 'accepted'		
//		);	

//		$endpoint = 'https://api.wbsrvc.com/List/subscribeEmail/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'list_id' => 835967,
//			'email' => 'klepfish2@gmail.com'	
//		);	

//		$endpoint = 'https://api.wbsrvc.com/Mailing/create/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'name' => 'Mailing2'
//		);	

//		$endpoint = 'https://api.wbsrvc.com/Mailing/setInfo/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'mailing_id' => '1123176',
//			'list_id' => 835967,
//			'subject' => 'Test Mailing',
//			'text_message' => 'This is the body'
//		);	
		
//		$endpoint = 'https://api.wbsrvc.com/Mailing/sendTestEmail/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'mailing_id' => '1122845',
//			'test_email' => 'klepfish@gmail.com',
//			'test_type' => 'merged'
//		);	

//		$endpoint = 'https://api.wbsrvc.com/Mailing/schedule/';
//		$data = array(
//			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
//			'mailing_id' => '1122845'
//		);	

		$endpoint = 'https://api.wbsrvc.com/Trigger/create/';
		$data = array(
			'user_key' => '684a7640653c42ca9d91e42b1202d7eb',
			'name' => 'Welcome',
			'list_id' => '1122845'
		);	

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $endpoint); 
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('apikey: 1b7dd4c9946f98ff900c2fdbab5fc292'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$result = curl_exec($ch);
		
		if ($result === false) {
			unset($result);
			echo 'Curl error: ' . curl_error($ch);
		}
		
		curl_close($ch);
		
		if (isset($result)) {
			$json_object = json_decode($result, true);
		
			if ($json_object['status'] == 'success') {
				print_r($json_object['data']);
			} else {
				echo $json_object['data'];
			}
		}
	exit;	
	}


/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
		$this->Textfollowup->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Textfollowup.group_id =' => $id, 'Textfollowup.user_id =' => $this->Auth->User('id')),
      		'limit' => 10,
      		'order' => array('Textfollowup.days' => 'asc')
  		);

    	$groups = $this->Textfollowup->Group->find('list');
    	  
    	$this->set('groupid', $id);  	
    	$this->set('groups',$groups);    	
		$this->set('emails', $this->paginate('Textfollowup'));

	}

	public function index2($id = 0) {
	$this->layout = 'admin';

		$this->Textfollowup->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Textfollowup.group_id =' => $id, 'Textfollowup.user_id =' => $this->Auth->User('id')),
      		'limit' => 50,
      		'order' => array('Textfollowup.days' => 'asc')
  		);

    	$groups = $this->Textfollowup->Group->find('list');
    	  
    	$this->set('groupid', $id);  	
    	$this->set('groups',$groups);    	
		$this->set('emails', $this->paginate('Textfollowup'));

	}


/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Textfollowup->id = $id;
		if (!$this->Textfollowup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		$this->set('email', $this->Textfollowup->read(null, $id));
	}




/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Textfollowup']['user_id'] = $this->Auth->user('id');
		    if ($this->request->data['Textfollowup']['group_id'] == '') {$this->request->data['Textfollowup']['group_id'] = 0;}
			$this->Textfollowup->create();
			if ($this->Textfollowup->save($this->request->data)) {
			
				$group_id = $this->request->data['Textfollowup']['group_id'];
				
				if ($group_id != 0) {
					$group = $this->Textfollowup->Group->findById($group_id);
					$cakelistid = $group['Group']['cakeid'];				
				}
				else {$cakelistid = $this->Auth->user('cakelistid');}
				
				include('../Vendor/cakemail.php');

				$data = array(
					'user_key' => $this->Auth->user('cakekey'),
					'name' => 'Textfollowup'.$this->Textfollowup->id,
					'list_id' => $cakelistid
				);
				$triggerid = cakeMail('Trigger','create', $data);
				if (!$triggerid) {echo "Error: Cannot create new Textfollowup on CakeMail. Please contact support."; exit;}
				$this->Textfollowup->set('triggerid', $triggerid);
			
				$seconds = $this->request->data['Textfollowup']['days']*60*60*24;
				if ($seconds == 0) {$seconds = 1;}

				$data = array(
					'action' => 'opt-in',
					'delay' => $seconds,
					'send_to' => '[email]',
					'sender_name' => $this->Auth->user('fname').' '.$this->Auth->user('lname'),
					'sender_email' => $this->Auth->user('email'),
					'user_key' => $this->Auth->user('cakekey'),
					'trigger_id' => $triggerid,
					'subject' => $this->request->data['Textfollowup']['subject'],
					'text_message' => $this->request->data['Textfollowup']['text_content'],
					'html_message' => $this->request->data['Textfollowup']['html_content']
				);
				$reply = cakeMail('Trigger','setInfo', $data);			
				if (!$reply) {echo "Error: Cannot update Text on Avid. Please contact support."; exit;}							
				
				$this->Textfollowup->save();
						
				$this->Session->setFlash(__('The text has been saved'));
				$this->redirect(array('action' => 'index', $group_id));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Textfollowup->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add2() {
		if ($this->request->is('post')) {
		    $this->request->data['Textfollowup']['user_id'] = $this->Auth->user('id');
		    
		    if ($this->request->data['Textfollowup']['keyword'] == '') {
			    $this->Session->setFlash(__('You need to enter a keyword.'));
			    $this->redirect(array('controller' => 'members', 'action' => 'form2'));
		    }

		    if ($this->request->data['Textfollowup']['textseries'] == 0) {
		    	$this->request->data['Textfollowup']['content'] = 'If u have a friend or family member who is in pain and u feel that we may be able to help, then forward the next message we send you, to that person.' ;
		    }
		    if ($this->request->data['Textfollowup']['textseries'] == 1) {
		    	$this->request->data['Textfollowup']['content'] = 'If u have a friend or family member who you would like to do something nice for during this holiday, we may be able to help. Forward the next message we send you, to that person.';
		    }
		    if ($this->request->data['Textfollowup']['textseries'] == 2) {
		    	$this->request->data['Textfollowup']['content'] = 'If u have a friend or family member who would like to receive our free, must have health newsletter, then forward the next message we send you, to that person';
		    }
		    if ($this->request->data['Textfollowup']['textseries'] == 3) {
		    	$this->request->data['Textfollowup']['content'] = 'If u have a friend or family member who\'s having a B-day & u would like to do something nice 4 them. Forward the next message we send u, to that person' ;
		    }


		    if ($this->request->data['Textfollowup']['group_id'] == '') {$this->request->data['Textfollowup']['group_id'] = 0;}
			$this->Textfollowup->create();
			if ($this->Textfollowup->save($this->request->data)) {
			
				$group_id = $this->request->data['Textfollowup']['group_id'];
				
				if ($group_id != 0) {
					$group = $this->Textfollowup->Group->findById($group_id);
					$cakelistid = $group['Group']['cakeid'];				
				}
				else {$cakelistid = $this->Auth->user('cakelistid');}
				
//				include('../Vendor/cakemail.php');

//				$data = array(
//					'user_key' => $this->Auth->user('cakekey'),
//					'name' => 'Textfollowup'.$this->Textfollowup->id,
//					'list_id' => $cakelistid
//				);
//				$triggerid = cakeMail('Trigger','create', $data);
//				if (!$triggerid) {echo "Error: Cannot create new Textfollowup on CakeMail. Please contact support."; exit;}
//				$this->Textfollowup->set('triggerid', $triggerid);
			
//				$seconds = $this->request->data['Textfollowup']['days']*60*60*24;
//				if ($seconds == 0) {$seconds = 1;}

//				$data = array(
//					'action' => 'opt-in',
//					'delay' => $seconds,
//					'send_to' => '[email]',
//					'sender_name' => $this->Auth->user('fname').' '.$this->Auth->user('lname'),
//					'sender_email' => $this->Auth->user('email'),
//					'user_key' => $this->Auth->user('cakekey'),
//					'trigger_id' => $triggerid,
//					'subject' => $this->request->data['Textfollowup']['subject'],
//					'text_message' => $this->request->data['Textfollowup']['text_content'],
//					'html_message' => $this->request->data['Textfollowup']['html_content']
//				);
//				$reply = cakeMail('Trigger','setInfo', $data);			
//				if (!$reply) {echo "Error: Cannot update Text on Avid. Please contact support."; exit;}							
				
				$this->Textfollowup->save();
				
				
				$this->Textfollowup->create();
				 if ($this->request->data['Textfollowup']['textseries'] == 0) {
		    	$this->request->data['Textfollowup']['content'] = 'I would like to help u feel better, text relief to 72727 and you will receive a free vip consultation from my favorite chiropractor.';
		    }
		    if ($this->request->data['Textfollowup']['textseries'] == 1) {
		    	$this->request->data['Textfollowup']['content'] = 'Happy Holidays, here is something from me to u, text "gift" to 72727 and u will receive a free vip consultation from my favorite chiropractor';
		    }
		    if ($this->request->data['Textfollowup']['textseries'] == 2) {
		    	$this->request->data['Textfollowup']['content'] = 'If you\'re in the market for a good Chiropractor then you should read what mine has to say about your health. Text keyword to 72727 ';
		    }
		    if ($this->request->data['Textfollowup']['textseries'] == 3) {
		    	$this->request->data['Textfollowup']['content'] = 'Happy B-day! Text "massage" to 72727 to receive a gift certificate for a 30 min massage, courtesy of me. Enjoy!';
		    }
		    
		    $this->Textfollowup->save($this->request->data);

						
				$this->Session->setFlash(__('The referral program has been activated and the text will be scheduled.'));
				$this->redirect(array('controller' => 'members', 'action' => 'form2'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Textfollowup->Group->find('list');
		$this->set(compact('groups'));
	}


/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Textfollowup->id = $id;
		if (!$this->Textfollowup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Textfollowup->save($this->request->data)) {
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Textfollowup->read(null, $id);
		}
		$groups = $this->Textfollowup->Group->find('list');
		$this->set(compact('groups'));
	}
	
	public function edit2($id = null) {
		$this->Textfollowup->id = $id;
	$this->layout = 'admin';
		if (!$this->Textfollowup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Textfollowup->save($this->request->data)) {
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect('/admin/textreferrals');
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Textfollowup->read(null, $id);
		}
		$groups = $this->Textfollowup->Group->find('list');
		$this->set(compact('groups'));
	}	

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Textfollowup->id = $id;
		if (!$this->Textfollowup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->Textfollowup->delete()) {
			$this->Session->setFlash(__('Email deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Email was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

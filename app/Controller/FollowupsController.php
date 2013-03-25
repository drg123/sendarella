<?php
App::uses('AppController', 'Controller');
/**
 * Followups Controller
 *
 * @property Email $Email
 */
class FollowupsController extends AppController {

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
		$this->Followup->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Followup.group_id =' => $id, 'Followup.user_id =' => $this->Auth->User('id')),
      		'limit' => 10,
      		'order' => array('Followup.days' => 'asc')
  		);

    	$groups = $this->Followup->Group->find('list');
    	  
    	$this->set('groupid', $id);  	
    	$this->set('groups',$groups);    	
		$this->set('emails', $this->paginate('Followup'));

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Followup->id = $id;
		if (!$this->Followup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		$this->set('email', $this->Followup->read(null, $id));
	}




/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Followup']['user_id'] = $this->Auth->user('id');
		    if ($this->request->data['Followup']['group_id'] == '') {$this->request->data['Followup']['group_id'] = 0;}
			$this->Followup->create();
			if ($this->Followup->save($this->request->data)) {
			
				$group_id = $this->request->data['Followup']['group_id'];
				
				if ($group_id != 0) {
					$group = $this->Followup->Group->findById($group_id);
					$cakelistid = $group['Group']['cakeid'];				
				}
				else {$cakelistid = $this->Auth->user('cakelistid');}
				
				include('../Vendor/cakemail.php');

				$data = array(
					'user_key' => $this->Auth->user('cakekey'),
					'name' => 'Followup'.$this->Followup->id,
					'list_id' => $cakelistid
				);
				$triggerid = cakeMail('Trigger','create', $data);
				if (!$triggerid) {echo "Error: Cannot create new Followup on CakeMail. Please contact support."; exit;}
				$this->Followup->set('triggerid', $triggerid);
			
				$seconds = $this->request->data['Followup']['days']*60*60*24;
				if ($seconds == 0) {$seconds = 1;}

				$data = array(
					'action' => 'opt-in',
					'delay' => $seconds,
					'send_to' => '[email]',
					'sender_name' => $this->Auth->user('fname').' '.$this->Auth->user('lname'),
					'sender_email' => $this->Auth->user('email'),
					'user_key' => $this->Auth->user('cakekey'),
					'trigger_id' => $triggerid,
					'subject' => $this->request->data['Followup']['subject'],
					'text_message' => $this->request->data['Followup']['text_content'],
					'html_message' => $this->request->data['Followup']['html_content']
				);
				$reply = cakeMail('Trigger','setInfo', $data);			
				if (!$reply) {echo "Error: Cannot update Followup on CakeMail. Please contact support."; exit;}							
				
				$this->Followup->save();
						
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index', $group_id));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Followup->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Followup->id = $id;
		if (!$this->Followup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Followup->save($this->request->data)) {
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Followup->read(null, $id);
		}
		$groups = $this->Followup->Group->find('list');
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
		$this->Followup->id = $id;
		if (!$this->Followup->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->Followup->delete()) {
			$this->Session->setFlash(__('Email deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Email was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

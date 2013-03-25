<?php
App::uses('AppController', 'Controller');
/**
 * Emails Controller
 *
 * @property Email $Email
 */
class EmailsController extends AppController {

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
		$this->Email->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Email.group_id =' => $id, 'Email.user_id =' => $this->Auth->User('id')),
      		'limit' => 10
  		);
  		
  		$pending = $this->Email->find('all', array(
        	'conditions' => array('Email.sent =' => 0, 'Email.group_id =' => $id, 'Email.user_id =' => $this->Auth->User('id'))
    	));

    	$groups = $this->Email->Group->find('list');
    	  
    	$this->set('groupid', $id);  	
    	$this->set('groups',$groups);    	
    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Email', array('Email.sent =' => 1)));

	}


/**
 * advanced method
 *
 * @param string $id
 * @return void
 */
	public function advanced($id = null) {
		$this->redirect('http://email.sendarella.com/signin/sso/'.$this->Auth->User('cakekey'));
	}

/**
 * view2 method
 *
 * @param string $id
 * @return void
 */
	public function view2($id = null) {
		$this->layout = '';
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
				$this->loadModel('User');
		$user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->User('id'))));
		
		if (($user['User']['logo'] == 1) && ($user['User']['pic'] == 1)) { 
		
		$clinic_info = '
		<div style="width:311px;float:right;">
<img src="http://www.sendarella.com/img/public/'.$user["User"]["id"].'/logo.jpg" alt="image dsc" style="max-height:200px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="300" />
<h3>'.$user["User"]["clinicname"].'</h3>
<p>'.$user["User"]["clinicaddress"].'<br>

Phone: '.$user["User"]["clinicphone"].'<br></p>

</div>
<div style="float:left;">
<img src="http://www.sendarella.com/img/public/'.$user['User']['id'].'/profile.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="200" />
<br>
<b>'.$user['User']['clinicdocname'].'</b>
</div>'; 

} 

else if ($user['User']['logo'] == 1) {

$clinic_info = '<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/'.$user['User']['id'].'/logo.jpg" alt="image dsc" style="max-height:200px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="600" />
<h3>'.$user['User']['clinicname'].'</h3>
<p>'.$user['User']['clinicaddress'].'<br>

Phone: '.$user['User']['clinicphone'].'<br></p>
</div>';

} else if ($user['User']['pic'] == 1) {

$clinic_info = '<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/'.$user['User']['id'].'/profile.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="250" /><br>
<b>'.$user['User']['clinicdocname'].'</b><br><br>
<h3>'.$user['User']['clinicname'].'</h3>
<p>'.$user['User']['clinicaddress'].'<br>

Phone: '.$user['User']['clinicphone'].'<br></p>

</div>';} else {
	
	$clinic_info = '<div style="width:100%;float:right;">
<h3>'.$user['User']['clinicname'].'</h3>
<p>'.$user['User']['clinicaddress'].'<br>

Phone: '.$user['User']['clinicphone'].'<br></p>
</div>';	
} 

		
		$email_content = $this->Email->read(null, $id);		
		$email_content['Email']['html_content'] = str_replace("%%CLINICINFO%%", $clinic_info, $email_content['Email']['html_content']);		
						
		$this->set('email', $email_content);
	}



/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		$this->set('email', $this->Email->read(null, $id));
	}

/**
 * send method
 *
 * @param string $id
 * @return void
 */
	public function send($id = null) {
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
						$email = $this->Email->findById($id);

			
		 		$group_id = $email['Email']['group_id'];
				
				if ($group_id != 0) {
					$group = $this->Email->Group->findById($group_id);
					$cakelistid = $group['Group']['cakeid'];				
				}
				else {$cakelistid = $this->Auth->user('cakelistid');}
				
				include('../Vendor/cakemail.php');

				$data = array(
					'user_key' => $this->Auth->user('cakekey'),
					'name' => 'Mailing'.$this->Email->id
				);
				$mailingid = cakeMail('Mailing','create', $data);			
				if (!$mailingid) {echo "Error: Cannot create new Mailing on CakeMail. Please contact support."; exit;}
				$this->Email->set('mailingid', $mailingid);
if (($this->Auth->user('logo') == 1) && ($this->Auth->user('pic') == 1)) { 
$clinic_info = '
		<div style="width:311px;float:right;">
<img src="http://www.sendarella.com/img/public/'.$this->Auth->user('id').'/logo.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="300" />
<h3>'.$this->Auth->user('clinicname').'</h3>
<p>'.$this->Auth->user('clinicaddress').'<br>

Phone: '.$this->Auth->user('clinicphone').'<br></p>

</div>
<div style="float:left;">
<img src="http://www.sendarella.com/img/public/'.$this->Auth->user('id').'/profile.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="200" />
<br>
<b>'.$this->Auth->user('clinicdocname').'</b>
</div>'; 

} 

else if ($this->Auth->user('logo') == 1) {

$clinic_info = '<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/'.$this->Auth->user('id').'/logo.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="600" />
<h3>'.$this->Auth->user('clinicname').'</h3>
<p>'.$this->Auth->user('clinicaddress').'<br>

Phone: '.$this->Auth->user('clinicphone').'<br></p>
</div>';

} else if ($this->Auth->user('pic') == 1) {

$clinic_info = '<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/'.$this->Auth->user('id').'/profile.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="250" /><br>
<b>'.$this->Auth->user('clinicdocname').'</b><br><br>
<h3>'.$this->Auth->user('clinicname').'</h3>
<p>'.$this->Auth->user('clinicaddress').'<br>

Phone: '.$this->Auth->user('clinicphone').'<br></p>

</div>';} else {
	
	$clinic_info = '<div style="width:100%;float:right;">
<h3>'.$this->Auth->user('clinicname').'</h3>
<p>'.$this->Auth->user('clinicaddress').'<br>

Phone: '.$this->Auth->user('clinicphone').'<br></p>
</div>';	
} 

				$email['Email']['html_content'] = str_replace("%%CLINICINFO%%", $clinic_info, $email['Email']['html_content']);		
				$data = array(
					'sender_name' => $this->Auth->user('fname').' '.$this->Auth->user('lname'),
					'sender_email' => $this->Auth->user('email'),
					'user_key' => $this->Auth->user('cakekey'),
					'mailing_id' => $mailingid,
					'list_id' => $cakelistid,
					'subject' => $email['Email']['subject'],
					'text_message' => $email['Email']['text_content'],
					'html_message' => $email['Email']['html_content']
				);
				$reply = cakeMail('Mailing','setInfo', $data);			
				if (!$reply) {echo "Error: Cannot update Mailing on CakeMail. Please contact support."; exit;}							
				
			//$mailingid = $email['Email']['mailingid'];
			$group_id = $email['Email']['group_id'];
			
			if (time() < strtotime($email['Email']['scheduledon'])) {
				$data = array(
    				'user_key' => $this->Auth->user('cakekey'),
    				'mailing_id' => $mailingid,
    				'date' => $email['Email']['scheduledon']
    				);
    		} else {
				$data = array(
    				'user_key' => $this->Auth->user('cakekey'),
    				'mailing_id' => $mailingid
    				);
    		}
    		
    		$reply = cakeMail('Mailing','schedule', $data);		
			if (!$reply) {echo "Error: Cannot send out Email. Please contact support."; exit;}    		
    		
    		$this->Email->set('sent', 1);
    		$this->Email->save();

			$this->Session->setFlash(__('The email will now be sent.'));
			$this->redirect(array('action' => 'index', $group_id));
		} else {
			throw new NotFoundException(__('Invalid action'));
		}
	}



/**
 * reset method
 *
 * @param string $id
 * @return void
 */
	public function reset($id = null) {
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
						
			$email = $this->Email->findById($id);
			$group_id = $email['Email']['group_id'];
			$adminemail = $email['Email']['originator'];

			$this->loadModel('Tempemail');
			$tempemail = $this->Tempemail->findById($adminemail);
			    		
    		$this->Email->set('html_content', $tempemail['Tempemail']['html_content']);
    		$this->Email->save();

			$this->Session->setFlash(__('The email has been reset to its original version.'));
			$this->redirect(array('action' => 'index', $group_id));
		} else {
			throw new NotFoundException(__('Invalid action'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Email']['user_id'] = $this->Auth->user('id');
		    if ($this->request->data['Email']['group_id'] == '') {$this->request->data['Email']['group_id'] = 0;}
			$this->Email->create();
			if ($this->Email->save($this->request->data)) {
			
//		 		$group_id = $this->request->data['Email']['group_id'];
//				
//				if ($group_id != 0) {
//					$group = $this->Email->Group->findById($group_id);
//					$cakelistid = $group['Group']['cakeid'];				
//				}
//				else {$cakelistid = $this->Auth->user('cakelistid');}
//				
//				include('../Vendor/cakemail.php');
//
//				$data = array(
//					'user_key' => $this->Auth->user('cakekey'),
//					'name' => 'Mailing'.$this->Email->id
//				);
//				$mailingid = cakeMail('Mailing','create', $data);			
//				if (!$mailingid) {echo "Error: Cannot create new Mailing on CakeMail. Please contact support."; exit;}
//				$this->Email->set('mailingid', $mailingid);
//
//				$data = array(
//					'sender_name' => $this->Auth->user('fname').' '.$this->Auth->user('lname'),
//					'sender_email' => $this->Auth->user('email'),
//					'user_key' => $this->Auth->user('cakekey'),
//					'mailing_id' => $mailingid,
//					'list_id' => $cakelistid,
//					'subject' => $this->request->data['Email']['subject'],
//					'text_message' => $this->request->data['Email']['text_content'],
//					'html_message' => $this->request->data['Email']['html_content']
//				);
//				$reply = cakeMail('Mailing','setInfo', $data);			
//				if (!$reply) {echo "Error: Cannot update Mailing on CakeMail. Please contact support."; exit;}							
				
				$this->Email->save();
						
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index', $group_id));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Email->Group->find('list');
		$this->set(compact('groups'));
		$this->set("id", $this->Auth->user('id'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Email->save($this->request->data)) {
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Email->read(null, $id);
		}
		$groups = $this->Email->Group->find('list');
		$this->set(compact('groups'));
		$this->set('email', $this->Email->read(null, $id));

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
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->Email->delete()) {
			$this->Session->setFlash(__('Email deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Email was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

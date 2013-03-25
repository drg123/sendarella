<?php
App::uses('AppController', 'Controller');
App::uses('File', 'Utility');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add'); // Letting users register themselves
    $this->Auth->allow('resetpassword'); // Letting users register themselves
   }

	public function resetpassword() {
		$this->layout = 'sales';
		
		if ($this->request->is('post')) {	
		        $this->Session->setFlash(__('Please check your email for a link to reset your password.'));
		        $this->redirect('/login');
		}
	
	}


	public function login() {
		$this->layout = 'sales';
		
		if ($this->request->is('post')) {	
		    if ($this->Auth->login()) {
		        $this->redirect($this->Auth->redirect());
		    } else {
		        $this->Session->setFlash(__('Invalid username or password, try again'));
		    }
		}
	
	}
public function logout() {
    $this->redirect($this->Auth->logout());
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
	
		if (($this->Auth->user('id') != 1) && ($this->Auth->user('id') != 7) && ($this->Auth->user('id') != 18)) {echo "Error. Please login as an Admin."; exit;}

		$this->layout = 'admin';
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'admin';
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add2() {
	
		$sslon = false;
		$chargeit = false;
		$makecake = true;
		$makeavid = false;
	
		$this->layout = 'admin';		
		if ($this->request->is('post')) {
		    $this->request->data['User']['ip'] = $this->RequestHandler->getClientIp();
			$this->User->create();
			if ($this->User->save($this->request->data)) {
			
				if ($makecake) {
					include('../Vendor/cakemail.php');
	
					$data = array(
						'company_name' => $this->request->data['User']['fname'].' '.$this->request->data['User']['lname'],
						'contact_same_as_admin' => 1,
						'admin_email' => $this->request->data['User']['email'],
						'admin_first_name' => $this->request->data['User']['fname'],
						'admin_last_name' => $this->request->data['User']['lname'],
						'admin_password' => $this->request->data['User']['password'],
						'admin_password_confirmation' => $this->request->data['User']['password'],
						'parent_id' => 96264
					);
	
					$confirmation = cakeMail('Client','create', $data);
					
					if (!$confirmation) {echo "Error: Cannot create new Client on CakeMail. Please contact support."; exit;}
	
					$data = array('confirmation' => $confirmation);	
					$usercodes = cakeMail('Client','activate', $data);
					$cakeid = $usercodes['contact_id'];
					$cakekey = $usercodes['contact_key'];
	
					$this->User->set('cakeid', $cakeid);
					$this->User->set('cakekey', $cakekey);
					
					$data = array(
						'user_key' => $cakekey,
						'name' => 'All',
						'sender_name' => $this->request->data['User']['fname'].' '.$this->request->data['User']['lname'],
						'sender_email' => $this->request->data['User']['email']
					);
					
					$cakelistid = cakeMail('List','create', $data);
					$this->User->set('cakelistid', $cakelistid);
					$data = array(
					    'user_key' => $cakekey,
					    'list_id' => $cakelistid,
					    'policy' => 'accepted'		
					);
					$done = cakeMail('List','setInfo', $data);
					
					if (!$done) {echo "Error: Cannot create new List on CakeMail. Please contact support."; exit;}
					$this->User->save();
				
				}
				
				if ($makeavid) {

					$username = $this->User->id;
					$password = $this->User->id;
	
					include('../Vendor/avid/avid.php');
	
					$arguments = array(array("Key" => "customer_name", "Value" => 'sendarella'.$username),
				  	 array("Key" => "customer_readable_name", "Value" => $this->request->data['User']['fname'].' '.$this->request->data['User']['lname']),
				  	 array("Key" => "shortcode", "Value" => "72727"),
				  	 array("Key" => "username", "Value" => $username),
				  	 array("Key" => "password", "Value" => $password),
				  	 array("Key" => "universal_username", "Value" => "sendarella".$username),
				  	 array("Key" => "js_url", "Value" => "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"),
				  	 array("Key" => "js_url2", "Value" => "http://www.sendarella.com/js/fixhelp.js"),
				  	 array("Key" => "num_blasts", "Value" => "9999"),
				  	 array("Key" => "num_keywords", "Value" => "9999"),
				  	 array("Key" => "num_social", "Value" => "9999"),
				  	 array("Key" => "num_poll", "Value" => "9999"),
				  	 array("Key" => "num_ar", "Value" => "9999"),
				  	 array("Key" => "num_tagged_events", "Value" => "9999"),
				  	 array("Key" => "num_surveys", "Value" => "9999"),
				  	 array("Key" => "num_text2win", "Value" => "9999"),
				  	 array("Key" => "num_mobilesite", "Value" => "9999"));
	
					$reply = avid('sendarella', '1b7dd4c9946f98', 1691, 'reseller', 'createmc', $arguments, 1);
					if (!$reply) {echo "Error: Cannot create new User on Avid. Please contact support."; exit;}
					
					$avidid = explode("\n", $reply);
					$avidid = $avidid[1];
													
					$this->User->set('avidusername', $username);
					$this->User->set('avidpassword', $password);
					$this->User->set('avidid', $avidid);
					
					$this->User->save();
					
					$arguments = array(array("Key" => "name", "Value" => "All"),
					 array("Key" => "type", "Value" => "STATIC"));
					 				 
					$reply = avid($username, $password, $avidid, 'group', 'create', $arguments);								
					if (!$reply) {echo "Error: Cannot create new Group on Avid. Please contact support."; exit;}				
					
					$this->User->set('avidlistid', $reply);
					$this->User->save();

				}
				
				mkdir("/home/drgranat/public_html/app/webroot/img/public/".$this->User->id);

				$this->Session->setFlash(__('User Has Been Added'));
				$this->redirect('/admin/users/');
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		$sslon = false;
		$chargeit = false;
		$makecake = true;
		$makeavid = true;
	
		$this->layout = 'stripe';
		if ($sslon) {if (!$_SERVER['HTTPS']) {$this->redirect('https://' . $_SERVER['SERVER_NAME'] . $this->here);}}
		
		if ($this->request->is('post')) {
			if ($chargeit) {
				
				require_once("/home/drgranat/public_html/app/Vendor/stripe/lib/Stripe.php");
				Stripe::setApiKey('EFbTzJkmkCMxuugnIAzqTFaci3Kec7EQ');
				$token = $_POST['stripeToken'];
				
				$customer = Stripe_Customer::create(array(
	  			  "card" => $token,
				  "email" => $this->request->data['User']['stripe'],
				  "description" => $this->request->data['User']['name']
				));
	
			    $this->request->data['User']['stripe'] = $token;	
		    
		    }
		    
		    $this->request->data['User']['ip'] = $this->RequestHandler->getClientIp();
			$this->User->create();
			if ($this->User->save($this->request->data)) {
			
				if ($makecake) {
					include('../Vendor/cakemail.php');
	
					$data = array(
						'company_name' => $this->request->data['User']['fname'].' '.$this->request->data['User']['lname'],
						'contact_same_as_admin' => 1,
						'admin_email' => $this->request->data['User']['email'],
						'admin_first_name' => $this->request->data['User']['fname'],
						'admin_last_name' => $this->request->data['User']['lname'],
						'admin_password' => $this->request->data['User']['password'],
						'admin_password_confirmation' => $this->request->data['User']['password'],
						'parent_id' => 96264
					);
	
					$confirmation = cakeMail('Client','create', $data);
					
					if (!$confirmation) {echo "Error: Cannot create new Client on CakeMail. Please contact support."; exit;}
	
					$data = array('confirmation' => $confirmation);	
					$usercodes = cakeMail('Client','activate', $data);
					$cakeid = $usercodes['contact_id'];
					$cakekey = $usercodes['contact_key'];
	
					$this->User->set('cakeid', $cakeid);
					$this->User->set('cakekey', $cakekey);
					
					$data = array(
						'user_key' => $cakekey,
						'name' => 'All',
						'sender_name' => $this->request->data['User']['fname'].' '.$this->request->data['User']['lname'],
						'sender_email' => $this->request->data['User']['email']
					);
					
					$cakelistid = cakeMail('List','create', $data);
					$this->User->set('cakelistid', $cakelistid);
					$data = array(
					    'user_key' => $cakekey,
					    'list_id' => $cakelistid,
					    'policy' => 'accepted'		
					);
					$done = cakeMail('List','setInfo', $data);
					
					if (!$done) {echo "Error: Cannot create new List on CakeMail. Please contact support."; exit;}
					$this->User->save();
				
				}
				
				if ($makeavid) {

					$username = $this->User->id;
					$password = $this->User->id;
	
					include('../Vendor/avid/avid.php');
	
					$arguments = array(array("Key" => "customer_name", "Value" => 'sendarella'.$username),
				  	 array("Key" => "customer_readable_name", "Value" => $this->request->data['User']['fname'].' '.$this->request->data['User']['lname']),
				  	 array("Key" => "shortcode", "Value" => "72727"),
				  	 array("Key" => "username", "Value" => $username),
				  	 array("Key" => "password", "Value" => $password),
				  	 array("Key" => "universal_username", "Value" => "sendarella".$username),
				  	 array("Key" => "js_url", "Value" => "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"),
				  	 array("Key" => "js_url2", "Value" => "http://www.sendarella.com/js/fixhelp.js"),
				  	 array("Key" => "num_blasts", "Value" => "9999"),
				  	 array("Key" => "num_keywords", "Value" => "9999"),
				  	 array("Key" => "num_social", "Value" => "9999"),
				  	 array("Key" => "num_poll", "Value" => "9999"),
				  	 array("Key" => "num_ar", "Value" => "9999"),
				  	 array("Key" => "num_tagged_events", "Value" => "9999"),
				  	 array("Key" => "num_surveys", "Value" => "9999"),
				  	 array("Key" => "num_text2win", "Value" => "9999"),
				  	 array("Key" => "num_mobilesite", "Value" => "9999"));
	
					$reply = avid('sendarella', '1b7dd4c9946f98', 1691, 'reseller', 'createmc', $arguments, 1);
					if (!$reply) {echo "Error: Cannot create new User on Avid. Please contact support."; exit;}
					
					$avidid = explode("\n", $reply);
					$avidid = $avidid[1];
													
					$this->User->set('avidusername', $username);
					$this->User->set('avidpassword', $password);
					$this->User->set('avidid', $avidid);
					
					$this->User->save();
					
					$arguments = array(array("Key" => "name", "Value" => "All"),
					 array("Key" => "type", "Value" => "STATIC"));
					 				 
					$reply = avid($username, $password, $avidid, 'group', 'create', $arguments);								
					if (!$reply) {echo "Error: Cannot create new Group on Avid. Please contact support."; exit;}				
					
					$this->User->set('avidlistid', $reply);
					$this->User->save();

				}
				
				mkdir("/home/drgranat/public_html/app/webroot/img/public/".$username);

				$this->Session->setFlash(__('Welcome to Sendarella!'));
				$this->Auth->login();
				$this->redirect('/members');
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function password($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;

		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
				
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your account has been updated'));
				$this->redirect(array('action' => 'edit2'));
			} else {
				$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}
	
	/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit2($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your account has been updated'));
				$this->redirect(array('action' => 'edit2'));
			} else {
				$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}


	public function delete_logo($id = null) {

		$id = $this->Auth->user('id');
		$this->User->id = $id;
						
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
	
		     $file = new File("/home/drgranat/public_html/app/webroot/img/public/$id/logo.jpg", true);
			$file->delete();
    	    $file->close();
    	    
    	    $this->User->set('logo', 0);
			$this->User->save();

				$this->Session->setFlash(__('Your clinic information has been updated'));
				$this->redirect('/members/');

				}

	public function delete_profile($id = null) {

		$id = $this->Auth->user('id');
		$this->User->id = $id;
						
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
	
		     $file = new File("/home/drgranat/public_html/app/webroot/img/public/$id/profile.jpg", true);
			$file->delete();
    	    $file->close();
    	    
    	    $this->User->set('pic', 0);
			$this->User->save();

				$this->Session->setFlash(__('Your clinic information has been updated'));
				$this->redirect('/members/');

				}


	public function update($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
						
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

		if ((isset($this->request->data['User']['cliniclogo']['tmp_name'])) && ($this->request->data['User']['cliniclogo']['tmp_name'] != "")) {
		
			$file = new File($this->request->data['User']['cliniclogo']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/img/public/$id/logo.jpg", true);
			$file->delete();
	        $file->write($data);
    	    $file->close();
    	    
    	    $this->User->set('logo', 1);
			$this->User->save();
    	   
    	}
		
		if ((isset($this->request->data['User']['profilepic']['tmp_name'])) && ($this->request->data['User']['profilepic']['tmp_name'] != "")) {
		
			$file = new File($this->request->data['User']['profilepic']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/img/public/$id/profile.jpg", true);
			$file->delete();
	        $file->write($data);
    	    $file->close();
    	    
    	    $this->User->set('pic', 1);
			$this->User->save();    	    
    	   
    	}
		
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your clinic information has been updated'));
				$this->redirect('/members/');
			} else {
				$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}
	
	public function update2($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
						
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		
//			print_r($this->request->data);exit;
		
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your email settings have been updated.'));
				$this->redirect('/members/');
			} else {
				$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}	

	public function update3($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		
				if ((isset($this->request->data['User']['firstinsert']['tmp_name'])) && ($this->request->data['User']['firstinsert']['tmp_name'] != "")) {

			$file = new File($this->request->data['User']['firstinsert']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/inserts/$id-1.doc", true);
			$file->delete();
	        $file->write($data);
    	    $file->close();
    	    
    	   
    	}
if ((isset($this->request->data['User']['secondinsert']['tmp_name'])) && ($this->request->data['User']['secondinsert']['tmp_name'] != "")) {
                                
                        $file = new File($this->request->data['User']['secondinsert']['tmp_name']);
                        $data = $file->read();
                $file->close(); 
                        
                $file = new File("/home/drgranat/public_html/app/webroot/inserts/$id-2.doc", true);
                        $file->delete();
                $file->write($data);
            $file->close();

           
        }

			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your print settings have been updated.'));

if (isset($_POST['inframe'])) {$this->redirect('/members/formstep2');}
else {


$this->redirect('/members');			
}
} else {
				$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}	


public function revertreftext($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$content = "Dear Patient,<br />
<br />

This newsletter is an effort to serve you, and improve the quality of your life. As an expanding practice, we are always available to provide our high quality services to new patients. This can include your friends and family. Word of mouth is the reason we have been so successful, and we invite your support in spreading the word about our practice<br />
<br />

You may know someone who needs a service like ours, and we will be glad to assist them. In fact, we will make your referrals a priority in our practice, and endevour to schedule and treat them as soon as possible. When you refer, you make your referral a &quot;premium patient&quot;, which helps them, should they need an immediate appointment.<br />
<br />

If you know someone who has pain and disability, and might be a candidate for therapy, please refer our newsletter to them. You will be passing on a valuable gift to your friend, by enabling them to receive a premium, patient friendly therapy newsletter that is guaranteed to improve standard of living, at no cost to them!<br />
<br />

Here's How You Can Refer<br />
<br />

Simply fill out the referral form below and we will forward your friend(s) a copy of my newsletter, filled with tips and strategies for a healthy lifestyle. You also provide them a valuable opportunity to become a high priority patient.<br />
<br />";
		
    	$this->User->set('emailreferralcontent', $content);
    	$this->User->save();  
    	$this->Session->setFlash(__('The message content has been reset.'));  	    
    	$this->redirect('/members');
	}
	
	public function revertthanktext($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$content = "Dear Patient,<br />
<br />

Thank you for referring your friends to our practice.";
		
    	$this->User->set('emailreferralcontent2', $content);
    	$this->User->save();  
    	$this->Session->setFlash(__('The message content has been reset.'));  	    
    	$this->redirect('/members');
	}


public function revertrefemail($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$content = "Hello {name}
	  		
You have been referred by {referrer} to the Healthology Newsletter.

As a bonus, you get a free gift certificate toward {doctor}'s services at the {clinic}.

The office is located at:
{address}
Phone: {phone}

To download and print out your certificate go to:

http://www.sendarella.com/refer/print/1/{id}

Best regards,
{doctor}";
		
    	$this->User->set('emailreferralcontent3', $content);
    	$this->User->save();  
    	$this->Session->setFlash(__('The email content has been reset.'));  	    
    	$this->redirect('/members');
	}


/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function billing($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your billing information has been updated'));
				$this->redirect(array('action' => 'billing'));
			//} else {
			//	$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			//}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'admin';
		//$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The account has been updated'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}


/**
 * emailsettings method
 *
 * @param string $id
 * @return void
 */
	public function emailsettings($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
						
				$this->Session->setFlash(__('The settings have been updated'));
				$this->redirect(array('action' => 'emailsettings'));
			} else {
				$this->Session->setFlash(__('The settings could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * mailsettings method
 *
 * @param string $id
 * @return void
 */
	public function mailsettings($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
			
				$this->Session->setFlash(__('The settings have been updated'));
				$this->redirect(array('action' => 'mailsettings'));
			} else {
				$this->Session->setFlash(__('The settings could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}


public function keywordcheck() {

$this->layout = null;

include('../Vendor/avid/avid.php');
						$arguments = array(array("Key" => "name", "Value" => "Keyword Campaign"),
					 array("Key" => "keyword", "Value" => $_GET['keyword']),
					 array("Key" => "reply_1", "Value" => "Thank you for signing up."),
					 array("Key" => "start_time", "Value" => "2012-01-01 00:00:00"),
					 array("Key" => "start_timezone", "Value" => "E"),
					 array("Key" => "end_time", "Value" => "2015-12-31 00:00:00"),
					 array("Key" => "end_timezone", "Value" => "E"));	
						
					$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'keyword', 'create', $arguments);
					if (!$reply) {
//						echo "This keyword is not availiable.";
					}
					else {echo "Keyword availiable.";}

}

/**
 * textsettings method
 *
 * @param string $id
 * @return void
 */
	public function textsettings($id = null) {
		$id = $this->Auth->user('id');
		$this->User->id = $id;
				
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
			
//					if ($this->Auth->user('keyword') != $this->request->data['User']['keyword']) {
					if (1 == 0) {
			
					include('../Vendor/avid/avid.php');
						
					$arguments = array(array("Key" => "name", "Value" => "Keyword Campaign"),
					 array("Key" => "keyword", "Value" => $this->request->data['User']['keyword']),
					 array("Key" => "reply_1", "Value" => "Thank you for signing up."),
					 array("Key" => "start_time", "Value" => "2012-01-01 00:00:00"),
					 array("Key" => "start_timezone", "Value" => "E"),
					 array("Key" => "end_time", "Value" => "2015-12-31 00:00:00"),
					 array("Key" => "end_timezone", "Value" => "E"));	
						
					$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'keyword', 'create', $arguments);
					if (!$reply) {
						$this->Session->setFlash(__('This keyword is not availiable.'));
						$this->redirect('/members/');
					}
					
					$this->User->set('keywordid', $reply);
					}
					
					$this->User->save();			
			
				$this->Session->setFlash(__('Mobile settings have been updated'));
				$this->redirect('/members/');
			} else {
				$this->Session->setFlash(__('The settings could not be updated. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout = 'admin';
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Emails Controller
 *
 * @property Email $Email
 */
class NewslettersController extends AppController {
var $uses = array('User', 'Newsletter', 'Tempemail', 'Tempmailer');


public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('view3'); // Letting users register themselves
    $this->Auth->allow('refer'); // Letting users register themselves
    $this->Auth->allow('referprint'); // Letting users register themselves
    $this->Auth->allow('refersend'); // Letting users register themselves
    $this->Auth->allow('view2'); // Letting users register themselves
   }

/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
	$this->layout = 'admin';
		$this->Newsletter->recursive = 1;
		$this->paginate = array(
      		'limit' => 10,
      		'order' => array('id' => 'asc')
  		);
  		
		$this->set('pending', $this->paginate('Newsletter'));

	}
/**
 * view3 method
 *
 * @param string $id
 * @return void
 */
        public function view3($id = null) {
        $this->layout = null;
                $this->Newsletter->id = $id;
                if (!$this->Newsletter->exists()) {
                        throw new NotFoundException(__('Invalid newsletter'));
                }
                $this->set('email', $this->Newsletter->read(null, $id));
        }

	public function refer($user_id = 1) {
	$this->layout = null;
  		$this->set('user', $this->User->find('first', array('conditions' => array('User.id' => $user_id))));	
	}

	public function referprint($user_id = 1, $patient_id = 1) {
	$this->layout = null;
	
		  		$this->loadModel('Patient');

  		$this->set('user', $this->User->find('first', array('conditions' => array('User.id' => $user_id))));	
  		$this->set('patient', $this->Patient->find('first', array('conditions' => array('Patient.id' => $patient_id))));	

	}


	public function refersend($user_id = 1) {
	$this->layout = null;
	$user = $this->User->find('first', array('conditions' => array('User.id' => $user_id)));
  		$this->set('user', $user);	

  		if ($this->request->is('post') || $this->request->is('put')) {
	  		
	  		include('../Vendor/cakemail.php');
	  		$this->loadModel('Patient');
	  		

	  		if ($_POST['txtEmail1'] != '') {

	  			$data2 = array(
						'user_key' => $user['User']['cakekey'],
						'list_id' => $user['User']['cakelistid'],
						'email' => $_POST['txtEmail1']
					);	
//				$reply = cakeMail('List','subscribeEmail', $data2);
//				if (!$reply) {echo "Error: Cannot create new Subscriber on CakeMail. Please contact support."; exit;}

					$this->Patient->create();
					$this->Patient->set('user_id', $user['User']['id']);
					$this->Patient->set('fname', $_POST['txtName1']);
					$this->Patient->set('email', $_POST['txtEmail1']);
					$this->Patient->set('phone', $_POST['txtPhone1']);					
					$this->Patient->save();
					
					$thankyouemail = $user['User']['emailreferralcontent3'];
					$thankyouemail = str_replace('{name}', $_POST['txtName1'], $thankyouemail);
					$thankyouemail = str_replace('{referrer}', $_POST['txtName'], $thankyouemail);
					$thankyouemail = str_replace('{doctor}', $user['User']['clinicdocname'], $thankyouemail);
					$thankyouemail = str_replace('{clinic}', $user['User']['clinicname'], $thankyouemail);
					$thankyouemail = str_replace('{address}', $user['User']['clinicaddress'], $thankyouemail);
					$thankyouemail = str_replace('{phone}', $user['User']['clinicphone'], $thankyouemail);
					$thankyouemail = str_replace('{id}', $this->Patient->id, $thankyouemail);
					
			mail($_POST['txtEmail1'], $user['User']['emailreferralsubject'], $thankyouemail);

			}
					
	  		if ($_POST['txtEmail2'] != '') {

	  			$data2 = array(
						'user_key' => $user['User']['cakekey'],
						'list_id' => $user['User']['cakelistid'],
						'email' => $_POST['txtEmail2']
					);	
//				$reply = cakeMail('List','subscribeEmail', $data2);
//				if (!$reply) {echo "Error: Cannot create new Subscriber on CakeMail. Please contact support."; exit;}

					$this->Patient->create();
					$this->Patient->set('user_id', $user['User']['id']);
					$this->Patient->set('fname', $_POST['txtName2']);
					$this->Patient->set('email', $_POST['txtEmail2']);
					$this->Patient->set('phone', $_POST['txtPhone2']);					
					$this->Patient->save();
					
					$thankyouemail = $user['User']['emailreferralcontent3'];
					$thankyouemail = str_replace('{name}', $_POST['txtName2'], $thankyouemail);
					$thankyouemail = str_replace('{referrer}', $_POST['txtName'], $thankyouemail);
					$thankyouemail = str_replace('{doctor}', $user['User']['clinicdocname'], $thankyouemail);
					$thankyouemail = str_replace('{clinic}', $user['User']['clinicname'], $thankyouemail);
					$thankyouemail = str_replace('{address}', $user['User']['clinicaddress'], $thankyouemail);
					$thankyouemail = str_replace('{phone}', $user['User']['clinicphone'], $thankyouemail);
					$thankyouemail = str_replace('{id}', $this->Patient->id, $thankyouemail);
					
										
			mail($_POST['txtEmail2'], $user['User']['emailreferralsubject'], $thankyouemail);


			}
	
	  		if ($_POST['txtEmail3'] != '') {

	  			$data2 = array(
						'user_key' => $user['User']['cakekey'],
						'list_id' => $user['User']['cakelistid'],
						'email' => $_POST['txtEmail3']
					);	
//				$reply = cakeMail('List','subscribeEmail', $data2);
//				if (!$reply) {echo "Error: Cannot create new Subscriber on CakeMail. Please contact support."; exit;}

					$this->Patient->create();
					$this->Patient->set('user_id', $user['User']['id']);
					$this->Patient->set('fname', $_POST['txtName3']);
					$this->Patient->set('email', $_POST['txtEmail3']);
					$this->Patient->set('phone', $_POST['txtPhone3']);					
					$this->Patient->save();
					
					$thankyouemail = $user['User']['emailreferralcontent3'];
					$thankyouemail = str_replace('{name}', $_POST['txtName3'], $thankyouemail);
					$thankyouemail = str_replace('{referrer}', $_POST['txtName'], $thankyouemail);
					$thankyouemail = str_replace('{doctor}', $user['User']['clinicdocname'], $thankyouemail);
					$thankyouemail = str_replace('{clinic}', $user['User']['clinicname'], $thankyouemail);
					$thankyouemail = str_replace('{address}', $user['User']['clinicaddress'], $thankyouemail);
					$thankyouemail = str_replace('{phone}', $user['User']['clinicphone'], $thankyouemail);
					$thankyouemail = str_replace('{id}', $this->Patient->id, $thankyouemail);
					
			mail($_POST['txtEmail3'], $user['User']['emailreferralsubject'], $thankyouemail);

			}
			    
	  	}

	}



/**
 * view2 method
 *
 * @param string $id
 * @return void
 */
	public function view2($user_id = 1, $id = null) {

	$this->layout = null;
		$this->Newsletter->id = $id;
		if (!$this->Newsletter->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
  		$this->set('user', $this->User->find('first', array('conditions' => array('User.id' => $user_id))));	
		$this->set('email', $this->Newsletter->read(null, $id));
	}

	public function email($id = null) {
		$this->Newsletter->id = $id;
		if (!$this->Newsletter->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
				$newsletter = $this->Newsletter->findById($id);
				$subject = $newsletter['Newsletter']['name'].' Issue #'.$newsletter['Newsletter']['issue'];
				
				$view = new View($this, false);
				
				$view->set('user', $this->User->find('first', array('conditions' => array('User.id' => 1))));	
  				$view->set('email', $this->Newsletter->read(null, $id));
  				$view->layout = null;

				$view_output = $view->render('view2');
				
				$this->Tempemail->create();
    			$this->Tempemail->set('subject', $subject);
    			$this->Tempemail->set('html_content', $view_output);
    			$this->Tempemail->set('scheduledon', date('Y-m-d'));
    			$this->Tempemail->save();
		
				$this->Session->setFlash(__('The email has been created.'));
				$this->redirect('/admin/emails');
	}
	
	public function mailer($id = null) {
		$this->Newsletter->id = $id;
		if (!$this->Newsletter->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
				$newsletter = $this->Newsletter->findById($id);
				$name = $newsletter['Newsletter']['name'].' Issue #'.$newsletter['Newsletter']['issue'];

				$thisuser = $this->User->find('first', array('conditions' => array('User.id' => 1)));
				
				$view = new View($this, false);
				
                $view->set('email', $this->Newsletter->read(null, $id));
                $view->set('user', $thisuser);
                $view->layout = null;

				$view_output = $view->render('view3');
								
				$this->Tempmailer->create();
    			$this->Tempmailer->set('name', $name);				
    			$this->Tempmailer->set('content', $view_output);
    			$this->Tempmailer->set('scheduledon', date('Y-m-d'));
    			$this->Tempmailer->save();

				$this->Session->setFlash(__('The mailer has been created.'));
				$this->redirect('/admin/mailers');
	}

	public function mailer2($id = null) {
		$this->Newsletter->id = $id;
		if (!$this->Newsletter->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
				$newsletter = $this->Newsletter->findById($id);
				$name = $newsletter['Newsletter']['name'].' Issue #'.$newsletter['Newsletter']['issue'];
				
				$view = new View($this, false);

				$thisuser = $this->User->find('first', array('conditions' => array('User.id' => 7)));
				
                $view->set('email', $this->Newsletter->read(null, $id));
                $view->set('user', $thisuser);
                $view->layout = null;

				$view_output = $view->render('view3');
								
				$text = str_replace("'", "", $thisuser['User']['clinicname']).' '.str_replace("'", "", $thisuser['User']['clinicaddress']).' Phone: '.str_replace("'", "", $thisuser['User']['clinicphone']);
			
file_put_contents('/home/drgranat/public_html/app/webroot/htmls/newsletter.html', $view_output);

//exec('/home/drgranat/wkhtmltopdf --header-spacing 0 --margin-top 10 --header-html /home/drgranat/public_html/app/webroot/htmls/header.html  /home/drgranat/public_html/app/webroot/htmls/test.html /home/drgranat/public_html/app/webroot/pdfs/test.pdf');
exec("/home/drgranat/wkhtmltopdf --header-font-size 8 --header-spacing 2 --header-center '$text' /home/drgranat/public_html/app/webroot/htmls/newsletter.html /home/drgranat/public_html/app/webroot/pdfs/newsletter.pdf");
header("Location: /pdfs/newsletter.pdf");
exit;
				
				$this->Tempmailer->create();
    			$this->Tempmailer->set('name', $name);				
    			$this->Tempmailer->set('content', $view_output);
    			$this->Tempmailer->set('scheduledon', date('Y-m-d'));
    			$this->Tempmailer->save();

				$this->Session->setFlash(__('The mailer has been created.'));
				$this->redirect('/admin/mailers');
	}



/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	$this->layout = 'admin';
		$this->Tempemail->id = $id;
		if (!$this->Tempemail->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		$this->set('email', $this->Tempemail->read(null, $id));
	}

/**
 * send method
 *
 * @param string $id
 * @return void
 */
	public function send($id = null) {
	$this->layout = 'admin';
		$this->Tempemail->id = $id;
		if (!$this->Tempemail->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$email = $this->Tempemail->findById($id);
			
//			include('../Vendor/cakemail.php');			
//			$mailingid = $email['Email']['mailingid'];
//			$group_id = $email['Email']['group_id'];
//			
//			$data = array(
//    			'user_key' => $this->Auth->user('cakekey'),
//    			'mailing_id' => $mailingid,
//    			'date' => $email['Email']['scheduledon']
//    		);
//    		$reply = cakeMail('Mailing','schedule', $data);		
//			if (!$reply) {echo "Error: Cannot send out Email. Please contact support."; exit;}    		
    		
    		$this->loadModel('Email');
    		$this->loadModel('User');
    		
    		$users = $this->User->find('all');
    		foreach ($users as $user) {
    			$this->Email->create();
    			$this->Email->set('user_id', $user['User']['id']);
    			$this->Email->set('subject', $email['Tempemail']['subject']);
    			$this->Email->set('text_content', $email['Tempemail']['text_content']);
    			$this->Email->set('html_content', $email['Tempemail']['html_content']);
    			$this->Email->set('scheduledon', $email['Tempemail']['scheduledon']);
    			$this->Email->set('admin', 1);
    			$this->Email->save();
    		}
    		
    		$this->Tempemail->set('sent', 1);
    		$this->Tempemail->save();

			$this->Session->setFlash(__('The email will now be sent to all the users.'));
			$this->redirect(array('action' => 'index'));
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
	$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Newsletter->create();
			if ($this->Newsletter->save($this->request->data)) {
			
				$this->Session->setFlash(__('The newsletter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newsletter could not be saved. Please, try again.'));
			}
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
		$this->Newsletter->id = $id;
		if (!$this->Newsletter->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Newsletter->save($this->request->data)) {
				$this->Session->setFlash(__('The newsletter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newsletter could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Newsletter->read(null, $id);
			$this->set('email', $this->Newsletter->read(null, $id));
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
		$this->Newsletter->id = $id;
		if (!$this->Newsletter->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
		if ($this->Newsletter->delete()) {
			$this->Session->setFlash(__('Newsletter deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Newsletter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

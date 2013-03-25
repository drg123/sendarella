<?php
App::uses('AppController', 'Controller');
/**
 * Emails Controller
 *
 * @property Email $Email
 */
class TempemailsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
	$this->layout = 'admin';
		$this->Tempemail->recursive = 0;
		$this->paginate = array(
      		'limit' => 10,
      		'order' => array(
            	'Tempemail.id' => 'desc'
            )
  		);
  		
  		$pending = $this->Tempemail->find('all', array(
        	'conditions' => array('Tempemail.sent =' => 0)
    	));
    	  
    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Tempemail', array('Tempemail.sent =' => 1)));

	}

/**
 * view2 method
 *
 * @param string $id
 * @return void
 */
	public function view2($id = null) {
	$this->layout = null;
		$this->Tempemail->id = $id;
		if (!$this->Tempemail->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		
		$this->loadModel('User');
		$user = $this->User->find('first', array('conditions' => array('User.id' => 7)));
		
		if (($user['User']['logo'] == 1) && ($user['User']['pic'] == 1)) { 
		
		$clinic_info = '
		<div style="width:311px;float:right;">
<img src="http://www.sendarella.com/img/public/'.$user["User"]["id"].'/logo.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
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
<img src="http://www.sendarella.com/img/public/'.$user['User']['id'].'/logo.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
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

</div>';} 

		
		$email_content = $this->Tempemail->read(null, $id);		
		$email_content['Tempemail']['html_content'] = str_replace("%%CLINICINFO%%", $clinic_info, $email_content['Tempemail']['html_content']);		
						
		$this->set('email', $email_content);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	$this->layout = null;
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

    			$html_content = $email['Tempemail']['html_content'];
//    			$html_content = str_replace("%%CLINICNAME%%", $user['User']['clinicname'], $html_content);
//  			$html_content = str_replace("%%ADDRESS%%", $user['User']['clinicaddress'], $html_content);
//    			$html_content = str_replace("%%PHONE%%", $user['User']['clinicphone'], $html_content);
//    			$html_content = str_replace("%%DOCNAME%%", $user['User']['clinicdocname'], $html_content);
    			$html_content = str_replace("/1/", "/".$user['User']['id']."/", $html_content);
    			
    			$this->Email->set('html_content', $html_content);
    			
    			$this->Email->set('scheduledon', $email['Tempemail']['scheduledon']);
    			$this->Email->set('admin', 1);
    			$this->Email->set('originator', $id);
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
			$this->Tempemail->create();
			if ($this->Tempemail->save($this->request->data)) {
			
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
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
		$this->Tempemail->id = $id;
		if (!$this->Tempemail->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tempemail->save($this->request->data)) {
				$this->Session->setFlash(__('The email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tempemail->read(null, $id);
			$this->set('email', $this->Tempemail->read(null, $id));
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
		$this->Tempemail->id = $id;
		if (!$this->Tempemail->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->Tempemail->delete()) {
		
			$this->loadModel('Email');
			$this->Email->deleteAll(array('Email.originator' => $id));
					
			$this->Session->setFlash(__('Email deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Email was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
		public function deleteall() {
	$this->layout = 'admin';
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
			$this->loadModel('Tempemail');
			$this->Tempemail->deleteAll('1 = 1');		
		
			$this->Session->setFlash(__('Texts deleted'));
			$this->redirect(array('action'=>'index'));
	}

}

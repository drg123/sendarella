<?php
App::uses('AppController', 'Controller');
/**
 * Texts Controller
 *
 * @property Text $Text
 */
class TemptextsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
	$this->layout = 'admin';
		$this->Temptext->recursive = 0;
		$this->paginate = array(
      		'limit' => 10
  		);
  		
  		$pending = $this->Temptext->find('all', array(
        	'conditions' => array('Temptext.sent =' => 0)
    	));

    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Temptext', array('Temptext.sent =' => 1)));

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	$this->layout = 'admin';
		$this->Temptext->id = $id;
		if (!$this->Temptext->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		$this->set('text', $this->Temptext->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Temptext->create();
			if ($this->Temptext->save($this->request->data)) {
			
				//include('../Vendor/avid/avid.php');
				//
				//$arguments = array(array("Key" => "name", "Value" => "blast"),
				// array("Key" => "blast_text", "Value" => $this->request->data['Text']['content']));
				 				 
				//$reply = avid($this->Auth->user('id'), $this->Auth->user('id'), $this->Auth->user('avidid'), 'blast', 'create', $arguments);								
				//if (!$reply) {echo "Error: Cannot create new Text on Avid. Please contact support."; exit;}
			
				//$this->Text->set('avidid', $reply);
				$this->Temptext->save();
				
				$this->Session->setFlash(__('The text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
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
		$this->Temptext->id = $id;
		if (!$this->Temptext->exists()) {
			throw new NotFoundException(__('Invalid Text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Temptext->save($this->request->data)) {
				$this->Session->setFlash(__('The Text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Text could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Temptext->read(null, $id);
		}
	}


/**
 * send method
 *
 * @param string $id
 * @return void
 */
	public function send($id = null) {
	$this->layout = 'admin';
		$this->Temptext->id = $id;
		if (!$this->Temptext->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$text = $this->Temptext->findById($id);
			
//			include('../Vendor/avid/avid.php');
//			
//			$avidid = $email['Text']['avidid'];
//
//				$arguments = array(array("Key" => "id", "Value" => $avidid));
//				 				 
//				$reply = avid($this->Auth->user('id'), $this->Auth->user('id'), $this->Auth->user('avidid'), 'blast', 'send', $arguments);								
//				if (!$reply) {echo "Error: Cannot send Text on Avid. Please contact support."; exit;}

    		$this->loadModel('Text');
    		$this->loadModel('User');
    		
    		$users = $this->User->find('all');
    		foreach ($users as $user) {
    			$this->Text->create();
    			$this->Text->set('user_id', $user['User']['id']);
    			$this->Text->set('content', $text['Temptext']['content']);
    			$this->Text->set('scheduledon', $text['Temptext']['scheduledon']);
    			$this->Text->set('admin', 1);
    			$this->Text->set('originator', $id);
    			$this->Text->save();
    		}
    		
    		$this->Temptext->set('sent', 1);
    		$this->Temptext->save();

			$this->Session->setFlash(__('The text will now be sent to all users.'));
			$this->redirect(array('action' => 'index'));
		} else {
			throw new NotFoundException(__('Invalid action'));
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
		$this->Temptext->id = $id;
		if (!$this->Temptext->exists()) {
			throw new NotFoundException(__('Invalid Text'));
		}
		if ($this->Temptext->delete()) {

			$this->loadModel('Text');
			$this->Text->deleteAll(array('Text.originator' => $id));		
		
			$this->Session->setFlash(__('Text deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Text was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	public function deleteall() {
	$this->layout = 'admin';
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
			$this->loadModel('Temptext');
			$this->Temptext->deleteAll('1 = 1');		
		
			$this->Session->setFlash(__('Texts deleted'));
			$this->redirect(array('action'=>'index'));
	}
}

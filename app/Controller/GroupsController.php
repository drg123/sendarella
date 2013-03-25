<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 */
class GroupsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate(array('Group.user_id =' => $this->Auth->user('id'))));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Group']['user_id'] = $this->Auth->user('id');
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {

			if (0) {			
				include('../Vendor/cakemail.php');
									
				$data = array(
					'user_key' => $this->Auth->user('cakekey'),
					'name' => $this->request->data['Group']['name'],
					'sender_name' => $this->Auth->user('fname').' '.$this->Auth->user('lname'),
					'sender_email' => $this->Auth->user('email')
				);
				
				$cakeid = cakeMail('List','create', $data);
				$this->Group->set('cakeid', $cakeid);
				$data = array(
				    'user_key' => $this->Auth->user('cakekey'),
				    'list_id' => $cakeid,
				    'policy' => 'accepted'		
				);
				$done = cakeMail('List','setInfo', $data);
				
				if (!$done) {echo "Error: Cannot create new List on CakeMail. Please contact support."; exit;}
				$this->Group->save();
				
				include('../Vendor/avid/avid.php');
				
				$arguments = array(array("Key" => "name", "Value" => $this->request->data['Group']['name']),
				 array("Key" => "type", "Value" => "STATIC"));
				 				 
				$reply = avid($username, $password, $avidid, 'group', 'create', $arguments);								
				if (!$reply) {echo "Error: Cannot create new Group on Avid. Please contact support."; exit;}				
				
				$this->Group->set('avidid', $reply);
				$this->Group->save();
			}				
			
				$this->Session->setFlash(__('The group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		}
		$patients = $this->Group->Patient->find('list', array('fields' => array('Patient.id', 'Patient.name'), 'conditions' => array('Patient.user_id =' => $this->Auth->user('id'))));
		$this->set(compact('patients', 'patients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Group->read(null, $id);
		}
		$patients = $this->Group->Patient->find('list', array('fields' => array('Patient.id', 'Patient.name'), 'conditions' => array('Patient.user_id =' => $this->Auth->user('id'))));
		$this->set(compact('patients', 'patients'));
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
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('Group deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

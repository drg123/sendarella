<?php
App::uses('AppController', 'Controller');
/**
 * Texts Controller
 *
 * @property Text $Text
 */
class AppointmentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
		$this->Appointment->recursive = 0;
		$this->paginate = array(
      		'limit' => 10
  		);
  		
  		$pending = $this->Appointment->find('all', array(
        	'conditions' => array('Appointment.sent =' => 0)
    	));
    	  
    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Appointment', array('Appointment.sent =' => 1)));

	}


/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$this->set('appointment', $this->Appointment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Appointment']['user_id'] = $this->Auth->user('id');
			$this->Appointment->create();
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
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
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid Appointment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The Appointment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Appointment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Appointment->read(null, $id);
		}
		$groups = $this->Appointment->Group->find('list');
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
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid Appointment'));
		}
		if ($this->Appointment->delete()) {
			$this->Session->setFlash(__('Appointment deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Appointment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

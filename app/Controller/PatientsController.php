<?php
App::uses('AppController', 'Controller');
/**
 * Patients Controller
 *
 * @property Patient $Patient
 */
class PatientsController extends AppController {

public $paginate = array(
    'limit' => 20,
    'order' => array(
        'Patient.created' => 'asc'
    )
);

public function isAuthorized($user) {
    if (!parent::isAuthorized($user)) {
        if ($this->action === 'add') { 
            // All registered users can add patients
            return true;
        }
        if (in_array($this->action, array('edit', 'delete'))) {
            $patientId = $this->request->params['pass'][0];
            return $this->Patient->isOwnedBy($patientId, $user['id']);
        }
    }
    return false;
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Patient->recursive = 0;
		$this->set('patients', $this->paginate(array('Patient.user_id =' => $this->Auth->user('id'))));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		$this->set('patient', $this->Patient->read(null, $id));
	}

/**
 * import method
 *
 * @param string $id
 * @return void
 */
	public function import($id = null) {
	ini_set("auto_detect_line_endings", true);
		if ($this->request->is('post')) {
		
			$group_id = $this->data['Patient']['Groups'];
			// connect to main database
$maindbhost = "localhost";
$maindbusername = "drgranat_send";
$maindbpassword = '5MGHcTr3BHc[';
$maindbname = 'drgranat_sendarella';

$maindb = mysql_connect($maindbhost, $maindbusername, $maindbpassword) or exit;
mysql_select_db($maindbname,$maindb);
		
			include('../Vendor/cakemail.php');
			
			$row = 0;
			$dupes = 0;
			if (($handle = fopen($this->data['Patient']['patientfile']['tmp_name'], "r")) !== FALSE) {
			    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

					$thispatient = $this->Patient->find('first', array('conditions' => array('Patient.email' => $data[2])));
				    if ($thispatient === false) {				   

				    $data2 = array(
						'user_key' => $this->Auth->user('cakekey'),
						'list_id' => $this->Auth->user('cakelistid'),
						'email' => $data[2]
					);	
					
//					print_r($data);exit;
	
					$reply = cakeMail('List','subscribeEmail', $data2);
					if (!$reply) {echo "Error: Cannot create new Subscriber on CakeMail. Please contact support."; exit;}
			    
					$this->Patient->create();
					
					$this->Patient->set('user_id', $this->Auth->user('id'));
					$this->Patient->set('fname', $data[0]);
					$this->Patient->set('lname', $data[1]);
					$this->Patient->set('email', $data[2]);
					$this->Patient->set('address', $data[3]);
					$this->Patient->set('city', $data[4]);
					$this->Patient->set('state', $data[5]);
					$this->Patient->set('zip', $data[6]);
					$this->Patient->set('phone', $data[7]);
					$this->Patient->set('gender', $data[8]);
					$this->Patient->set('condition', $data[9]);
					
					$this->Patient->save();
					$result = mysql_query("INSERT INTO groups_patients VALUES('".$group_id."','".$this->Patient->id."');",$maindb);
					
					$thegroup = $this->Patient->Group->find('first', array('conditions' => array('Group.id' => $group_id)));			
					$cakeid = $thegroup['Group']['cakeid'];
					$data = array(
						'user_key' => $this->Auth->user('cakekey'),
						'list_id' => $cakeid,
						'email' => $data[2]
					);	
	
					$reply = cakeMail('List','subscribeEmail', $data);
//					if (!$reply) {echo "Error: Cannot add Subscriber to Group on CakeMail. Please contact support."; exit;}

					
					$row++;					
					
					}
					else {
					
						$dupes++;
						
						$result = mysql_query("INSERT INTO groups_patients VALUES('".$group_id."','".$thispatient['Patient']['id']."');",$maindb);
						
					}

			    }
			    fclose($handle);
			}
			$this->Session->setFlash(__("You have imported $row patients. Skipped $dupes duplicates."));
		}
	
		$groups = $this->Patient->Group->find('list');
		$this->set(compact('groups'));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Patient']['user_id'] = $this->Auth->user('id');
			$this->Patient->create();
			if ($this->Patient->save($this->request->data)) {
			
			if (0) { // add to CakeMail or not
			
				include('../Vendor/cakemail.php');
				$data = array(
					'user_key' => $this->Auth->user('cakekey'),
					'list_id' => $this->Auth->user('cakelistid'),
					'email' => $this->request->data['Patient']['email']	
				);	

				$reply = cakeMail('List','subscribeEmail', $data);
				if (!$reply) {
					$this->Patient->delete();
					throw new Exception(__('Error: Cannot create new Subscriber on CakeMail. Please contact support.'));
				}
				
				if (isset($this->request->data['Group']['Group'])) {
					
				if (is_array($this->request->data['Group']['Group'])) {
				foreach ($this->request->data['Group']['Group'] as $groupid) {
				
					$thegroup = $this->Patient->Group->find('first', array('conditions' => array('Group.id' => $groupid)));			
					$cakeid = $thegroup['Group']['cakeid'];
					$data = array(
						'user_key' => $this->Auth->user('cakekey'),
						'list_id' => $cakeid,
						'email' => $this->request->data['Patient']['email']	
					);	
	
					$reply = cakeMail('List','subscribeEmail', $data);
					if (!$reply) {echo "Error: Cannot add Subscriber to Group on CakeMail. Please contact support."; exit;}
				
				}}
				
				}
				
			}
			
			if (0) { //add to Avid or not

				include('../Vendor/avid/avid.php');
				
				$arguments = array(array("Key" => "phone_num", "Value" => $this->request->data['Patient']['phone']),
 				array("Key" => "first_name", "Value" => $this->request->data['Patient']['fname']),
				array("Key" => "last_name", "Value" => $this->request->data['Patient']['lname']));
				
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), "member", "create", $arguments);
				if (!$reply) {
					$this->Patient->delete();
					throw new Exception(__('Error 1: Cannot create new Member on Avid. Please contact support.'));
				}

				$this->Patient->set('avidid', $reply);
				$this->Patient->save();

				$arguments = array(array("Key" => "id", "Value" => $reply),
 				array("Key" => "group_id", "Value" => $this->Auth->user('avidlistid')));
				
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), "member", "addtogroup", $arguments);
				if (!$reply) {
					$this->Patient->delete();
					throw new Exception(__('Error 2: Cannot create new Member on Avid. Please contact support.'));
				}


			}				
			
				$this->Session->setFlash(__('The patient has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patient could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Patient->Group->find('list');
		$this->set(compact('groups'));

	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		
		$groups = $this->Patient->find('all', array('contain' => 'Group'));
		
			if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('The patient has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patient could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Patient->read(null, $id);
		}
		$groups = $this->Patient->Group->find('all');
		$this->set(compact('groups'));
	}
	
/**
 * change email status method
 *
 * @param string $id
 * @return void
 */
	public function change_email($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$email_on = $this->Patient->field('email_on');
			if ($email_on) {
				$this->Patient->set('email_on', false);
				$this->Patient->save();
				$this->Session->setFlash(__('The patient has been disabled for emails.'));
				$this->redirect(array('action' => 'index'));				
			}
			else {
				$this->Patient->set('email_on', true);
				$this->Patient->save();
				$this->Session->setFlash(__('The patient has been enabled for emails.'));
				$this->redirect(array('action' => 'index'));					
			}
			
		} else {
			throw new NotFoundException(__('Not accessible'));
		}
	}

/**
 * change mail status method
 *
 * @param string $id
 * @return void
 */
	public function change_mail($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$email_on = $this->Patient->field('mail_on');
			if ($email_on) {
				$this->Patient->set('mail_on', false);
				$this->Patient->save();
				$this->Session->setFlash(__('The patient has been disabled for mail.'));
				$this->redirect(array('action' => 'index'));				
			}
			else {
				$this->Patient->set('mail_on', true);
				$this->Patient->save();
				$this->Session->setFlash(__('The patient has been enabled for mail.'));
				$this->redirect(array('action' => 'index'));					
			}
			
		} else {
			throw new NotFoundException(__('Not accessible'));
		}
	}

/**
 * change text status method
 *
 * @param string $id
 * @return void
 */
	public function change_text($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$email_on = $this->Patient->field('text_on');
			if ($email_on) {
				$this->Patient->set('text_on', false);
				$this->Patient->save();
				$this->Session->setFlash(__('The patient has been disabled for texting.'));
				$this->redirect(array('action' => 'index'));				
			}
			else {
				$this->Patient->set('text_on', true);
				$this->Patient->save();
				$this->Session->setFlash(__('The patient has been enabled for texting.'));
				$this->redirect(array('action' => 'index'));					
			}
			
		} else {
			throw new NotFoundException(__('Not accessible'));
		}
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
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->Patient->delete()) {
			$this->Session->setFlash(__('Patient deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Patient was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

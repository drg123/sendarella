<?php
App::uses('AppController', 'Controller');
/**
 * Texts Controller
 *
 * @property Text $Text
 */
class TextsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
		$this->Text->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Text.group_id =' => $id, 'Text.user_id =' => $this->Auth->User('id')),
      		'limit' => 10
  		);
  		
  		$pending = $this->Text->find('all', array(
        	'conditions' => array('Text.sent =' => 0, 'Text.group_id =' => $id, 'Text.user_id =' => $this->Auth->User('id'))
    	));

    	$groups = $this->Text->Group->find('list');
    	  
    	$this->set('groupid', $id);  	
    	$this->set('groups',$groups);    	
    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Text', array('Text.sent =' => 1)));

	}

/**
 * advanced method
 *
 * @param string $id
 * @return void
 */
	public function advanced($id = null) {
	$this->layout = null;
	}


/**
 * reset method
 *
 * @param string $id
 * @return void
 */
	public function reset($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
						
			$text = $this->Text->findById($id);
			$group_id = $text['Text']['group_id'];
			$admintext = $text['Text']['originator'];

			$this->loadModel('Temptext');
			
			$temptext = $this->Temptext->findById($admintext);
			
    		$this->Text->set('content', $temptext['Temptext']['content']);
    		$this->Text->save();

			$this->Session->setFlash(__('The text has been reset to its original version.'));
			$this->redirect(array('action' => 'index', $group_id));
		} else {
			throw new NotFoundException(__('Invalid action'));
		}
	}

/**
 * advanced2 method
 *
 * @param string $id
 * @return void
 */
	public function advanced2($id = null) {
    	$this->set('username', $this->Auth->user('avidusername'));
    	$this->set('password', $this->Auth->user('avidpassword'));	
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		$this->set('text', $this->Text->read(null, $id));
	}



	public function add2() {
		if ($this->request->is('post')) {
		    $this->request->data['Text']['user_id'] = $this->Auth->user('id');
		    if ($this->request->data['Text']['group_id'] == '') {$this->request->data['Text']['group_id'] = 0;}


		    $this->request->data['Text']['content1'] = str_replace('KEYWORD', $this->request->data['Text']['keyword'], $this->request->data['Text']['content1']);
		    $this->request->data['Text']['content2'] = str_replace('KEYWORD', $this->request->data['Text']['keyword'], $this->request->data['Text']['content2']);

		    $this->loadModel('Group');
						
    		$this->Group->set('user_id', $this->Auth->user('id'));
    		$this->Group->set('name', $this->request->data['Text']['campaign'].' Group');
    		$this->Group->set('textkeyword', $this->request->data['Text']['keyword']);
    		$this->Group->save();


			$today = getdate();
			include('../Vendor/avid/avid.php');

			$this->Text->create();
			$this->Text->set('user_id', $this->Auth->user('id'));
			$this->Text->set('group_id', $this->request->data['Text']['group_id']);
			$this->Text->set('content', $this->request->data['Text']['content1']);


				$arguments = array(array("Key" => "name", "Value" => "blast"),
				 array("Key" => "blast_text", "Value" => $this->request->data['Text']['content1']."\n\n"),
				 array("Key" => "blast.addl_text", "Value" => "Reply with STOP to no longer receive messages."),				 
				 array("Key" => "blast_type", "Value" => "text"));
				 				 
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'create', $arguments);								

				if (!$reply) {echo "Error: Cannot create new Text on Avid. Please contact support."; exit;}
			
				$this->Text->set('avidid', $reply);
				
				$arguments = array(array("Key" => "id", "Value" => $reply),
			           array("Key" => "group_id", "Value" => $this->Auth->user('avidlistid')));
			           
			    $reply2 = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'addgroup', $arguments);								
				

				$arguments = array(array("Key" => "id", "Value" => $reply),
   			       array("Key" => "month", "Value" => $today['mon']),
				   array("Key" => "day_of_month", "Value" => $today['mday']),
                   array("Key" => "day_of_week", "Value" => "*"),
				   array("Key" => "year", "Value" => $today['year']),
				   array("Key" => "hour", "Value" => $today['hours']),
				   array("Key" => "minute", "Value" => $today['minutes']),
   			       array("Key" => "timezone", "Value" => "C"));

				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'schedule', $arguments);								
				if (!$reply) {echo "Error: Cannot send Text on Avid. Please contact support."; exit;}

    		
    		$this->Text->set('sent', 1);


			$this->Text->save();

			$this->Text->create();
			$this->Text->set('user_id', $this->Auth->user('id'));
			$this->Text->set('group_id', $this->request->data['Text']['group_id']);
			$this->Text->set('content', $this->request->data['Text']['content2']);
			$this->Text->save();

				$arguments = array(array("Key" => "name", "Value" => "blast"),
				 array("Key" => "blast_text", "Value" => $this->request->data['Text']['content2']."\n\n"),
				 array("Key" => "blast.addl_text", "Value" => "Reply with STOP to no longer receive messages."),				 
				 array("Key" => "blast_type", "Value" => "text"));
				 				 
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'create', $arguments);								

				if (!$reply) {echo "Error: Cannot create new Text on Avid. Please contact support."; exit;}
			
				$this->Text->set('avidid', $reply);
				
				$arguments = array(array("Key" => "id", "Value" => $reply),
			           array("Key" => "group_id", "Value" => $this->Auth->user('avidlistid')));
			           
			    $reply2 = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'addgroup', $arguments);								
				

				$arguments = array(array("Key" => "id", "Value" => $reply),
   			       array("Key" => "month", "Value" => $today['mon']),
				   array("Key" => "day_of_month", "Value" => $today['mday']),
                   array("Key" => "day_of_week", "Value" => "*"),
				   array("Key" => "year", "Value" => $today['year']),
				   array("Key" => "hour", "Value" => $today['hours']),
				   array("Key" => "minute", "Value" => $today['minutes']),
   			       array("Key" => "timezone", "Value" => "C"));

				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'schedule', $arguments);								
				if (!$reply) {echo "Error: Cannot send Text on Avid. Please contact support."; exit;}

    		
    		$this->Text->set('sent', 1);

			$this->Text->save();

			
//			if ($this->Text->save($this->request->data)) {
			
//				include('../Vendor/avid/avid.php');
				
//				$arguments = array(array("Key" => "name", "Value" => "blast"),
//				 array("Key" => "blast_text", "Value" => $this->request->data['Text']['content']."\n\n"),
//				 array("Key" => "blast.addl_text", "Value" => "Reply with STOP to no longer receive messages."),				 
//				 array("Key" => "blast_type", "Value" => "text"));
//				 				 
//				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'create', $arguments);								

//				if (!$reply) {echo "Error: Cannot create new Text on Avid. Please contact support."; exit;}
//			
//				$this->Text->set('avidid', $reply);
//				$this->Text->save();
				
//				$arguments = array(array("Key" => "id", "Value" => $reply),
//			           array("Key" => "group_id", "Value" => $this->Auth->user('avidlistid')));
			           
//			    $reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'addgroup', $arguments);								
				
				$this->Session->setFlash(__('The referral texts have been saved and will be sent out.'));
				$this->redirect('/members/form2');
//			} else {
//				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
//			}
		}
		$groups = $this->Text->Group->find('list');
		$this->set(compact('groups'));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		    $this->request->data['Text']['user_id'] = $this->Auth->user('id');
		    if ($this->request->data['Text']['group_id'] == '') {$this->request->data['Text']['group_id'] = 0;}
			$this->Text->create();
			if ($this->Text->save($this->request->data)) {
			
				include('../Vendor/avid/avid.php');
				
				$arguments = array(array("Key" => "name", "Value" => "blast"),
				 array("Key" => "blast_text", "Value" => $this->request->data['Text']['content']."\n\n"),
				 array("Key" => "blast.addl_text", "Value" => "Reply with STOP to no longer receive messages."),				 
				 array("Key" => "blast_type", "Value" => "text"));
				 				 
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'create', $arguments);								

				if (!$reply) {echo "Error: Cannot create new Text on Avid. Please contact support."; exit;}
			
				$this->Text->set('avidid', $reply);
				$this->Text->save();
				
				$arguments = array(array("Key" => "id", "Value" => $reply),
			           array("Key" => "group_id", "Value" => $this->Auth->user('avidlistid')));
			           
			    $reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'addgroup', $arguments);								
				
				$this->Session->setFlash(__('The text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Text->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid Text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('The Text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Text could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Text->read(null, $id);
		}
		$groups = $this->Text->Group->find('list');
		$this->set(compact('groups'));
	}

	public function editajax($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid Text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->Text->set('content', $_POST['content']);
			$this->Text->save();
			
				echo "Saved";
			
		} else {
			$this->request->data = $this->Text->read(null, $id);
		}
		$groups = $this->Text->Group->find('list');
		$this->set(compact('groups'));
	}


/**
 * send method
 *
 * @param string $id
 * @return void
 */
	public function send($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			include('../Vendor/avid/avid.php');
			
			$text = $this->Text->findById($id);
			$avidid = $text['Text']['avidid'];
			$group_id = $text['Text']['group_id'];
			
			//if ($avidid == 0) {			
			if (1 == 1) {
				$arguments = array(array("Key" => "name", "Value" => "blast"),
				 array("Key" => "blast_text", "Value" => $text['Text']['content']."\n\n"),
				 array("Key" => "blast.addl_text", "Value" => "Reply with STOP to no longer receive messages."),				 
				 array("Key" => "blast_type", "Value" => "text"));
				 				 
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'create', $arguments);								

				if (!$reply) {echo "Error: Cannot create new Text on Avid. Please contact support."; exit;}
			
				$this->Text->set('avidid', $reply);
				$this->Text->save();
				$avidid = $reply;
				
				$arguments = array(array("Key" => "id", "Value" => $reply),
			           array("Key" => "group_id", "Value" => $this->Auth->user('avidlistid')));
			           
			    $reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'addgroup', $arguments);								
			}
			
			//print_r($text['Text']);
			$today = getdate();
			$month = date("m",strtotime($text['Text']['scheduledon']));
			$day = date("d",strtotime($text['Text']['scheduledon']));
			$year = date("y",strtotime($text['Text']['scheduledon']));

			$hour = date("H",strtotime($text['Text']['scheduledon']));
			$minute = date("i",strtotime($text['Text']['scheduledon']));
			

			$check = mktime($hour, $minute, 0, $month, $day, $year);
			$rightnow = mktime(date("H"), date("i"), 0, date("m"), date("d"), date("y"));

			if ($check < $rightnow) {

				$arguments = array(array("Key" => "id", "Value" => $avidid),
   			       array("Key" => "month", "Value" => $today['mon']),
				   array("Key" => "day_of_month", "Value" => $today['mday']),
                   array("Key" => "day_of_week", "Value" => "*"),
				   array("Key" => "year", "Value" => $today['year']),
				   array("Key" => "hour", "Value" => $today['hours']),
				   array("Key" => "minute", "Value" => $today['minutes']),
   			       array("Key" => "timezone", "Value" => "C"));
   			       
   			  }
   			  else {

				$arguments = array(array("Key" => "id", "Value" => $avidid),
   			       array("Key" => "month", "Value" => $month),
				   array("Key" => "day_of_month", "Value" => $day),
                   array("Key" => "day_of_week", "Value" => "*"),
				   array("Key" => "year", "Value" => $year),
				   array("Key" => "hour", "Value" => $hour),
				   array("Key" => "minute", "Value" => $minute),
   			       array("Key" => "timezone", "Value" => "C"));
   			       
   			  }

				 				 
				$reply = avid($this->Auth->user('avidusername'), $this->Auth->user('avidpassword'), $this->Auth->user('avidid'), 'blast', 'schedule', $arguments);								
				if (!$reply) {echo "Error: Cannot send Text on Avid. Please contact support."; exit;}

    		
    		$this->Text->set('sent', 1);
    		$this->Text->save();

			$this->Session->setFlash(__('The text will now be sent.'));
			$this->redirect(array('action' => 'index', $group_id));
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
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid Text'));
		}
		if ($this->Text->delete()) {
			$this->Session->setFlash(__('Text deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Text was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

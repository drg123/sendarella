<?php
App::uses('AppController', 'Controller');
/**
 * Mailers Controller
 *
 * @property Mailer $Mailer
 */
class MailersController extends AppController {


function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('view2', 'patients');    
}

/**
 * reset method
 *
 * @param string $id
 * @return void
 */
	public function reset($id = null) {
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
						
			$mailer = $this->Mailer->findById($id);
			$group_id = $mailer['Mailer']['group_id'];
			$adminmailer = $mailer['Mailer']['originator'];

			$this->loadModel('Tempmailer');
			
			$tempmailer = $this->Tempmailer->findById($adminmailer);
			
    		$this->Mailer->set('content', $tempmailer['Tempmailer']['content']);
    		$this->Mailer->save();

			$this->Session->setFlash(__('The mailer has been reset to its original version.'));
			$this->redirect(array('action' => 'index', $group_id));
		} else {
			throw new NotFoundException(__('Invalid action'));
		}
	}



	public function send($id = null) {
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
				$mailer = $this->Mailer->read(null, $id);
		$group_id = $mailer['Mailer']['group_id'];
		$color = $mailer['Mailer']['color'];

		
		mail("leon@klepfish.com", "New Print Job", "PDF To Be Printed: \nhttp://www.sendarella.com/members/mailers/view2/$id \n\nList Of Recipients: \nhttp://www.sendarella.com/members/mailers/patients/$id \n\nPaper Color: $color \n\nInsert #1: http://www.http://www.sendarella.com/inserts/$id-1.doc \n\nInsert #2: http://www.http://www.sendarella.com/inserts/$id-2.doc");
			mail("drgranat@yahoo.com", "New Print Job", "PDF To Be Printed: \nhttp://www.sendarella.com/members/mailers/view2/$id \n\nList Of Recipients: \nhttp://www.sendarella.com/members/mailers/patients/$id \n\nPaper Color: $color \n\nInsert #1: http://www.http://www.sendarella.com/inserts/$id-1.doc \n\nInsert #2: http://www.http://www.sendarella.com/inserts/$id-2.doc");
		$this->Mailer->set('sent', 1);
		$this->Mailer->save();	
		
		$this->Session->setFlash(__('The mailer has been sent.'));
				$this->redirect('/members/mailers/group/'.$group_id);
		
	}

	public function patients($id = null) {
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}		
		$mailer = $this->Mailer->read(null, $id);
		$group_id = $mailer['Mailer']['group_id'];
		
		if ($group_id == 0) {
			$this->loadModel('User');		
			$user = $this->User->read(null, $mailer['Mailer']['user_id']);		
			
			$patients = $user['Patient'];
		}
		else {

		$this->loadModel('Group');		
		$group = $this->Group->read(null, $group_id);
		$patients = $group['Patient'];
		
		}
		
		foreach ($patients as $patient) {
			echo $patient['name'].','.$patient['address'].','.$patient['city'].','.$patient['state'].','.$patient['zip'];
			echo "<br>";
			
		}
		
		 exit;
		
		$this->Mailer->set('sent', 1);
		$this->Mailer->save();	
		
		$this->Session->setFlash(__('The mailer has been sent.'));
				$this->redirect('/members/mailers');
		
	}



/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
		$this->Mailer->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Mailer.group_id =' => $id, 'Mailer.user_id =' => $this->Auth->User('id')),
      		'limit' => 10
  		);
  		
  		$pending = $this->Mailer->find('all', array(
        	'conditions' => array('Mailer.sent =' => 0, 'Mailer.group_id =' => $id, 'Mailer.user_id =' => $this->Auth->User('id'))
    	));

    	$groups = $this->Mailer->Group->find('list');
    	  
    	$this->set('groupid', $id);  	
    	$this->set('groups',$groups);    	
    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Mailer', array('Mailer.sent =' => 1)));

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
		$this->set('Mailer', $this->Mailer->read(null, $id));
	}

	public function view2($id = null) {
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid newsletter'));
		}
				$newsletter = $this->Mailer->findById($id);
				//$name = $newsletter['Mailer']['name'].' Issue #'.$newsletter['Mailer']['issue'];
				
//				$view = new View($this, false);
				$this->loadModel('User');

				$thisuser = $this->User->find('first', array('conditions' => array('User.id' => $newsletter['Mailer']['user_id'])));
				
//                $view->set('email', $this->Mailer->read(null, $id));
//                $view->set('user', $thisuser);
//                $view->layout = null;

//				$view_output = $view->render('view3');
				$view_output = $newsletter['Mailer']['content'];

				$view_output = str_replace('/1/', '/'.$thisuser['User']['id'].'/', $view_output);

				
				$view_output = str_replace('%%DOCNAME%%', $thisuser['User']['clinicdocname'], $view_output);
								
				$text = str_replace("'", "", $thisuser['User']['clinicname']).' '.str_replace("'", "", $thisuser['User']['clinicaddress']).' Phone: '.str_replace("'", "", $thisuser['User']['clinicphone']);
			
file_put_contents('/home/drgranat/public_html/app/webroot/htmls/'.$id.'.html', $view_output);

//exec('/home/drgranat/wkhtmltopdf --header-spacing 0 --margin-top 10 --header-html /home/drgranat/public_html/app/webroot/htmls/header.html  /home/drgranat/public_html/app/webroot/htmls/test.html /home/drgranat/public_html/app/webroot/pdfs/test.pdf');
exec("/home/drgranat/wkhtmltopdf --header-font-size 8 --header-spacing 2 --header-center '$text' /home/drgranat/public_html/app/webroot/htmls/$id.html /home/drgranat/public_html/app/webroot/pdfs/$id.pdf");
header("Location: /pdfs/$id.pdf");
exit;
				
//				$this->Tempmailer->create();
//    			$this->Tempmailer->set('name', $name);				
//    			$this->Tempmailer->set('content', $view_output);
//    			$this->Tempmailer->set('scheduledon', date('Y-m-d'));
//    			$this->Tempmailer->save();
//
//				$this->Session->setFlash(__('The mailer has been created.'));
//				$this->redirect('/admin/mailers');
	}



/**
 * download method
 *
 * @param string $id
 * @return void
 */
	public function download($id = null) {
		header('Content-disposition: attachment; filename=mailer.docx');
		header('Content-type: application/msword');
		readfile('/home/drgranat/public_html/mailers/$id.docx');
	}


/**
 * latest method
 *
 * @param string $id
 * @return void
 */
	public function latest($id = null) {
		header('Content-disposition: attachment; filename=mailer.docx');
		header('Content-type: application/msword');
		readfile('/home/drgranat/public_html/mailers/$id.docx');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
				    $this->request->data['Mailer']['user_id'] = $this->Auth->user('id');
		    if ($this->request->data['Mailer']['group_id'] == '') {$this->request->data['Mailer']['group_id'] = 0;}

			$this->Mailer->create();
			if ($this->Mailer->save($this->request->data)) {
			
			if ($this->request->data['Mailer']['insert']['tmp_name'] != "") {
		
			$file = new File($this->request->data['User']['insert']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$id = $this->Mailer->id;
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/inserts/$id.docx", true);
	        $file->write($data);
    	    $file->close();
    	   
    	}

			if ($this->request->data['Mailer']['worddoc']['tmp_name'] != "") {
		
			$file = new File($this->request->data['User']['worddoc']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$id = $this->Mailer->id;
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/mailers/$id.docx", true);
	        $file->write($data);
    	    $file->close();
    	   
    	}
			
			
				$this->Session->setFlash(__('The Mailer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Mailer could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Mailer->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mailer->save($this->request->data)) {
				$this->Session->setFlash(__('The Mailer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Mailer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mailer->read(null, $id);
		}
		$groups = $this->Mailer->Group->find('list');
		$this->set(compact('groups'));
		$this->set('mailer', $this->Mailer->read(null, $id));

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
		$this->Mailer->id = $id;
		if (!$this->Mailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
		if ($this->Mailer->delete()) {
			$this->Session->setFlash(__('Mailer deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mailer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

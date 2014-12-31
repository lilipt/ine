<?php
	class ComputerController extends AppController{
		public $helpers = array('Html', 'Form');
		public $components = array('Session');
		
		public function index(){
			$this->set('computadoras', $this->Computer->find('all'));
		}
		
		public function add() {
			if($this->request->is('post')):
				if($this->Computer->save($this->request->data)):
					$this->Session->setFlash('Equipo guardado');
					$this->redirect(array('action' => index));
				endif;
			endif;
		}
	}

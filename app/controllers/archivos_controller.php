<?php
class ArchivosController extends AppController {

	var $name = 'Archivos';

	function index() {
		$this->Archivo->recursive = 0;
		$this->set('archivos', $this->paginate());
	}
	function admin_download($id){
		$this->view = 'Media';
		$archivo=$this->Archivo->read(null,$id);
		$partes=explode(".",$archivo["Archivo"]["path"]);
		$params = array(
	 		'id' => $archivo["Archivo"]["path"],
	 		'name' => $partes[0],
	 		'download' => true,
	 		'extension' => $partes[1],
	 		'mimeType' => array('docx' => "application/vnd.openxmlformats-officedocument.wordprocessingml.document","dotx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.template","pptx"=>"application/vnd.openxmlformats-officedocument.presentationml.presentation","ppsx"=>"application/vnd.openxmlformats-officedocument.presentationml.slideshow","potx"=>"application/vnd.openxmlformats-officedocument.presentationml.template","xlsx"=>"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","xltx"=>"application/vnd.openxmlformats-officedocument.spreadsheetml.template"),
	 		'path' =>  WWW_ROOT.'img'.DS
 		);
		$this->set($params);
	
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid archivo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('archivo', $this->Archivo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Archivo->create();
			if ($this->Archivo->save($this->data)) {
				$this->Session->setFlash(__('The archivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archivo could not be saved. Please, try again.', true));
			}
		}
	}
	function ajaxAdd() {
		if (!empty($this->data)) {
			$this->Archivo->create();
			if ($this->Archivo->save($this->data)) {
				echo true;
			} else {
				echo false;
			}
		}else{
			echo false;
		}
		Configure::write("debug",0);
		$this->autoRender=0;
		exit(0);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid archivo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Archivo->save($this->data)) {
				$this->Session->setFlash(__('The archivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archivo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Archivo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for archivo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Archivo->delete($id)) {
			$this->Session->setFlash(__('Archivo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Archivo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Archivo->recursive = 0;
		$this->set('archivos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid archivo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('archivo', $this->Archivo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Archivo->create();
			if ($this->Archivo->save($this->data)) {
				$this->Session->setFlash(__('The archivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archivo could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid archivo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Archivo->save($this->data)) {
				$this->Session->setFlash(__('The archivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archivo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Archivo->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for archivo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Archivo->delete($id)) {
			$this->Session->setFlash(__('Archivo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Archivo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
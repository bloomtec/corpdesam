<?php
class FilesController extends AppController {

	var $name = 'Files';

	function admin_index() {
		$this->File->recursive = 0;
		$this->set('files', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid file', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('file', $this->File->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->File->create();
			if ($this->File->save($this->data)) {
				$this->Session->setFlash(__('The file has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file could not be saved. Please, try again.', true));
			}
		}

}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid file', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->File->save($this->data)) {
				$this->Session->setFlash(__('The file has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->File->read(null, $id);
		}
}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for file', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->File->delete($id)) {
			$this->Session->setFlash(__('File deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('File was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
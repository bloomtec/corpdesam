<?php
class PagesController extends AppController {

	var $name = 'Pages';
	function home(){
		$this->layout="home";
		$this->set("title","home");
	}
	function educativa(){
		$this->layout="internas2";
		$this->set("title","educativa y social");
	}
	function ambiental(){
		$this->layout="internas";
		$this->set("title","ambiental");
	}
	function mineria(){
		$this->layout="internas";
		$this->set("title","mineria");
		
	}
	function index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}
	function admin_location($location){
		$this->Session->write("locale",$location);
		$this->redirect($this->referer());
	}

	function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Page->recursive=1;
		$page=$this->Page->findBySlug($slug);
		//debug($page);
		$slides="";
		if(count($page["Image"])>0){
			foreach($page["Image"] as $image){
				$slides.="{image : '/img/".$image["path"]."', title : '".$image["caption"]."', url : '#'},";
			}	
		}else{
			$slides="{image : '/img/success1.jpg', title : '', url : '#'},{image : '/nyecg/img/success2.jpg', title : '', url : '#'}";
			/** Si una página no tiene imagenes relacionadas se muestran estas que qeudarian siendo las imagenes por defecto*/
		}
		$this->set('slides', $slides);
		$this->set('page', $this->Page->findBySlug($slug));
	}

	
	function admin_index() {
		$this->Page->recursive = 0;
		//debug($this->paginate());
		$this->set('pages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->data["Page"]["order"]=$this->Page->find("count")+1;
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		$images = $this->Page->Image->find('list');
		$this->set(compact('images'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if($this->data["Page"]["locale"]=="es_es"){
				$this->Page->locale = 'es_es';
			}
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
			//debug($this->data);
		}

		$images = $this->Page->Image->find('list');
		$this->set(compact('images'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Page->delete($id)) {
			$this->Session->setFlash(__('Page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Page was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function display(){
		$slides="{image : '/img/light1.jpg', title : '', url : '#'},{image : '/img/light6.jpg', title : '', url : '#'},{image : '/img/light5.jpg', title : '', url : '#'},{image : '/img/light3.jpg', title : '', url : '#'},{image : '/img/light4.jpg', title : '', url : '#'}";
		$this->set('slides', $slides);

	}
	
	function reOrder(){
	 	 /* 
	   		* Ordena las categorias se une con el widget de sortable
	    * */
	    foreach($this->data["Item"] as $id=>$posicion){
	    $this->Page->id=$id;
	    $this->Page->saveField("order",$posicion);
	
			$this->set(compact('page', 'subpage', 'title_for_layout'));
	   
	    if($title_for_layout=="Home"){
	      $this->render(implode('/', $path),"default");
	    }else{
	      $this->render(implode('/', $path));
	
	    }
	    
	    echo "yes";
	    Configure::write('debug', 0);   
	    $this->autoRender = false;   
	    exit(); 
	  }
	 
	}
}
?>

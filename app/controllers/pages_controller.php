<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $uses=array("Page");
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('planeacion','home','educativa','ambiental','mineria','hojaDeVida','perfilProfesional','corpdesam','juridica');

	}
	
	function home(){
		$this->layout="home";
		$this->set("title","home");
		
	}
	function hojaDeVida(){
		$this->layout="ajax";
		$this->set("title","Envianos tu hoja de vida");
		$this->set("fondo","background.jpg");
	}
	function educativa(){
		$this->layout="ajax";
		$this->set("title","educativa y social");
		$this->set("fondo","fondo_educacion.jpg");
		$this->set("page",$this->Page->findByTitle("educativa y social"));
	}
	function ambiental(){
		$this->layout="ajax";
		$this->set("title","ambiental");
		$this->set("fondo","fondo_ambiental.jpg");
		$this->set("page",$this->Page->findByTitle("ambiental"));
	}
	function mineria(){
		$this->layout="ajax";
		$this->set("title","mineria");
		$this->set("fondo","fondo_mineria.jpg");
		$this->set("page",$this->Page->findByTitle("mineria"));
		
	}
	function perfilProfesional(){
		$this->layout="ajax";
		$this->set("title","Perfil Profesional");
		$this->set("fondo","fondo_background.jpg");
		$this->set("page",$this->Page->findByTitle("perfil profesional"));
	}
	function corpdesam(){
		$this->layout="ajax";
		$this->set("title","Perfil Profesional");
		$this->set("fondo","fondo_corpdesam.jpg");
		$this->set("page",$this->Page->findByTitle("corpdesam"));
	}
	function juridica(){
		$this->layout="ajax";
		$this->set("title","Perfil Profesional");
		$this->set("fondo","fondo_juridica.jpg");
		$this->set("page",$this->Page->findByTitle("juridica"));
	}
	function planeacion(){
		$this->layout="ajax";
		$this->set("title","Perfil Profesional");
		$this->set("fondo","fondo_planeacion.jpg");
		$this->set("page",$this->Page->findByTitle("Planeación, urbanismo y servicios públicos"));
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
	
		$this->set(compact('images'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			/*if($this->data["Page"]["locale"]=="es_es"){
				$this->Page->locale = 'es_es';
			}*/
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('La página ha sido guardada', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar la página. Por favor, intente de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
			//debug($this->data);
		}

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

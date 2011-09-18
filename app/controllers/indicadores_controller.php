<?php
class IndicadoresController extends AppController {

	public $name = 'Indicadores';
	public $uses = 'Indicador';

	public function dashboard(){
		
	}

	public function index() {
		$this->Indicador->recursive = 0;
		$this->set('indicadores', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de indicador inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('Indicador', $this->Indicador->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Indicador->create();
			if ($this->Indicador->save($this->data)) {
				$this->Session->setFlash(__('O indicador foi salvo com sucesso', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O indicador não pode ser salvo, por favor tente novamente', true));
			}
		}
		$tipoIndicadores = array('' => NULL);
		$tipoMedidas = array('' => null);
		$tipoIndicadores += $this->Indicador->TipoIndicador->find('list');
		$tipoMedidas += $this->Indicador->TipoMedida->find('list');
		$this->set(compact('tipoIndicadores', 'tipoMedidas'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tipo de indicador inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Indicador->save($this->data)) {
				$this->Session->setFlash(__('O indicador foi editado com sucesso', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O indicador não pode ser editado, por favor tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Indicador->read(null, $id);
		}
		$tipoIndicadores = $this->Indicador->TipoIndicador->find('list');
		$tipoMedidas = $this->Indicador->TipoMedida->find('list');
		$this->set(compact('tipoIndicadores', 'tipoMedidas'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de indicador inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Indicador->delete($id)) {
			$this->Session->setFlash(__('Indicador deletedo', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Indicador não pode ser deletado', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
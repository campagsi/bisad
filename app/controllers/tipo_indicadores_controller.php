<?php
class TipoIndicadoresController extends AppController {

	public $name = 'TipoIndicadores';
	public $uses = 'TipoIndicador';

	public function index() {
		$this->TipoIndicador->recursive = 0;
		$this->set('tipoIndicadores', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de indicador inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoIndicador', $this->TipoIndicador->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->TipoIndicador->create();
			if ($this->TipoIndicador->save($this->data)) {
				$this->Session->setFlash(__('O indicador foi salvo com sucesso', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O indicador não pode ser salvo, por favor tente novamente', true));
			}
		}
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tipo de indicador inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TipoIndicador->save($this->data)) {
				$this->Session->setFlash(__('O indicador foi editado com sucesso', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O indicador não pode ser editado, por favor tente novamente', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TipoIndicador->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de indicador inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoIndicador->delete($id)) {
			$this->Session->setFlash(__('Indicador deletado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Indicador não pode ser deletado', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
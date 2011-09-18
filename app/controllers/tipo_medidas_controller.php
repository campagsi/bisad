<?php
class TipoMedidasController extends AppController {

	public $name = 'TipoMedidas';

	public function index() {
		$this->TipoMedida->recursive = 0;
		$this->set('tipoMedidas', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de Medidar inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$TipoMedida = $this->TipoMedida->read(null, $id);
		$this->set('tipoMedida', $TipoMedida);
	}

	public function add() {
		if (!empty($this->data)) {
			$this->TipoMedida->create();
			if ($this->TipoMedida->save($this->data)) {
				$this->Session->setFlash(__('O Tipo de Medida foi salvo com sucesso', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Tipo de Medida não pode ser salvo, por favor tente novamente', true));
			}
		}
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tipo de Medida inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TipoMedida->save($this->data)) {
				$this->Session->setFlash(__('O Tipo de Medida foi editado com sucesso', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Tipo de Medida não pode ser editado, por favor tente novamente', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TipoMedida->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de Medida inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoMedida->delete($id)) {
			$this->Session->setFlash(__('Tipo de Medida deletado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo de Medida não pode ser deletado', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
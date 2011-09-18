<div class="indicadores form">
<?php echo $this->Form->create('Indicador', array('url' => array('controller' => 'indicadores', 'action' => 'edit')));?>
	<fieldset>
 		<legend><?php __('Editar Indicador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_indicadore_id', array('label' => 'Indicador'));
		echo $this->Form->input('data', array('label' => 'Data'));
		echo $this->Form->input('tipo_medida_id',  array('label' => 'Tipo de Medida'));
		echo $this->Form->input('meta', array('label' => 'Meta'));
		echo $this->Form->input('tolerancia', array('label' => 'Tolerância(%)'));
		echo $this->Form->input('aviso', array('label' => 'Aviso(%)'));
		echo $this->Form->input('realizacao', array('label' => 'Realização'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<?php echo $this->element('menu/menu_principal'); ?>
<br />
<?php echo $this->element('menu/menu_actions'); ?>
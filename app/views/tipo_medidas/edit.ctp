<div class="tipoMedidas form">
<?php echo $this->Form->create('TipoMedida');?>
	<fieldset>
 		<legend><?php __('Editar Tipo de Medida'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
		echo $this->Form->input('ativo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<?php echo $this->element('menu/menu_principal'); ?>
<br />
<?php echo $this->element('menu/menu_actions'); ?>
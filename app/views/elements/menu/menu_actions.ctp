<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Indicador', true), array('controller' => 'indicadores', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Novo Tipo de Indicador', true), array('controller' => 'tipo_indicadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tipo de Medida', true), array('controller' => 'tipo_medidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Página Inicial', true), array('controller' => 'indicadores', 'action' => 'dashboard')); ?> </li>
	</ul>
</div>
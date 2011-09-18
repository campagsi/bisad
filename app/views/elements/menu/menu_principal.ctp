<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Indicadores', true), array('controller' => 'indicadores', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Tipos de indicadores', true), array('controller' => 'tipo_indicadores', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Tipos de Medidas', true), array('controller' => 'tipo_medidas', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="tipoIndicadores view">
<h2><?php  __('Tipo Indicador');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoIndicador['TipoIndicador']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricão'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoIndicador['TipoIndicador']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoIndicador['TipoIndicador']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('menu/menu_principal'); ?>
<br />
<?php echo $this->element('menu/menu_actions'); ?>
<div class="related">
	<?php if (!empty($tipoIndicador['Indicador'])):?>
	<h3><?php __('Indicadores Relacionados');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Indicador'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Tipo Medida'); ?></th>
		<th><?php __('Meta'); ?></th>
		<th><?php __('Tolerância'); ?></th>
		<th><?php __('Aviso'); ?></th>
		<th><?php __('Realização'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoIndicador['Indicador'] as $indicador):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tipoIndicador['TipoIndicador']['descricao'];?></td>
			<td><?php echo $indicador['data'];?></td>
			<td><?php echo $indicador['tipo_medida_id'];?></td>
			<td><?php echo $indicador['meta'];?></td>
			<td><?php echo $indicador['tolerancia'];?></td>
			<td><?php echo $indicador['aviso'];?></td>
			<td><?php echo $indicador['realizacao'];?></td>
			<?php echo $this->element('actions/options', array('id' => $indicador['id']), array('cache' => '+7 days')); ?>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

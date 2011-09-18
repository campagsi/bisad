<div class="Indicadores index">
	<h2><?php __('Indicadores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Indicador','tipo_Indicadore_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('Tipo de Medida', 'tipo_medida_id');?></th>
			<th><?php echo $this->Paginator->sort('meta');?></th>
			<th><?php echo $this->Paginator->sort('Tolerância', 'tolerancia');?></th>
			<th><?php echo $this->Paginator->sort('aviso');?></th>
			<th><?php echo $this->Paginator->sort('Realização', 'realizacao');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($indicadores as $Indicador):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($Indicador['TipoIndicador']['descricao'], array('controller' => 'tipo_Indicadores', 'action' => 'view', $Indicador['TipoIndicador']['id'])); ?>
		</td>
		<td><?php echo $Indicador['Indicador']['data']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($Indicador['TipoMedida']['descricao'], array('controller' => 'tipo_medidas', 'action' => 'view', $Indicador['TipoMedida']['id'])); ?>&nbsp;
		</td>
		<td><?php echo $Indicador['Indicador']['meta']; ?>&nbsp;</td>
		<td><?php echo $Indicador['Indicador']['tolerancia']; ?>&nbsp;</td>
		<td><?php echo $Indicador['Indicador']['aviso']; ?>&nbsp;</td>
		<td><?php echo $Indicador['Indicador']['realizacao']; ?>&nbsp;</td>
		<?php echo $this->element('actions/options', array('id' => $Indicador['Indicador']['id']), array('cache' => '+7 days')); ?>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('paging/paginator'); ?>
</div>
<?php echo $this->element('menu/menu_principal', array('cache' => '+7 days')); ?>
<br />
<?php echo $this->element('menu/menu_actions', array('cache' => '+7 days')); ?>
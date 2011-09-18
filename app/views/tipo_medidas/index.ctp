<div class="tipoMedidas index">
	<h2><?php __('Tipo de Medidas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Descricão','descricao');?></th>
			<th><?php echo $this->Paginator->sort('Ativo', 'ativo');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipoMedidas as $tipoMedida):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipoMedida['TipoMedida']['descricao']; ?>&nbsp;</td>
		<td><?php echo $tipoMedida['TipoMedida']['ativo']; ?>&nbsp;</td>
		<?php echo $this->element('actions/options', array('id' => $tipoMedida['TipoMedida']['id']), array('cache' => '+7 days')); ?>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('paging/paginator'); ?>
</div>
<?php echo $this->element('menu/menu_principal', array('cache' => '+7 days')); ?>
<br />
<?php echo $this->element('menu/menu_actions', array('cache' => '+7 days')); ?>
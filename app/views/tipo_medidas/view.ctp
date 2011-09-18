<div class="tipoMedidas view">
<h2><?php  __('Tipo de Medida');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoMedida['TipoMedida']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricão'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoMedida['TipoMedida']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoMedida['TipoMedida']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('menu/menu_principal'); ?>
<br />
<?php echo $this->element('menu/menu_actions'); ?>

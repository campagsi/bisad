<p>
<?php
echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%', true)
));
?>	</p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
 |
	<?php echo $this->Paginator->next(__('Próxima', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>
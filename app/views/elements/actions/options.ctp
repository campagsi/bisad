<td class="actions">
	<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $id)); ?>
	<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $id)); ?>
	<?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $id), null, sprintf(__('Tem certeza que deseja deletar # %s?', true), $id)); ?>
</td>

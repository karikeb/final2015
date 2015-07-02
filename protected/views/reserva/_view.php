<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alojamiento_id')); ?>:</b>
	<?php echo CHtml::encode($data->alojamiento_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->fechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSalida')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inquilino')); ?>:</b>
	<?php echo CHtml::encode($data->inquilino); ?>
	<br />


</div>
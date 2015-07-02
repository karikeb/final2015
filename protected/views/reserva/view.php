<?php
$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Reserva','url'=>array('index')),
array('label'=>'Create Reserva','url'=>array('create')),
array('label'=>'Update Reserva','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Reserva','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Reserva','url'=>array('admin')),
);
?>

<h1>View Reserva #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'alojamiento_id',
		'fechaIngreso',
		'fechaSalida',
		'inquilino',
),
)); ?>

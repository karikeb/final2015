<?php
$this->breadcrumbs=array(
	'Reservas',
);

$this->menu=array(
array('label'=>'Create Reserva','url'=>array('create')),
array('label'=>'Manage Reserva','url'=>array('admin')),
);
?>

<h1>Reservas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

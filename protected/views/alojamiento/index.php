<br><br><br><?php

$this->breadcrumbs=array(
	'Alojamientos',
);

$this->menu=array(
array('label'=>'Create Alojamiento','url'=>array('create')),
array('label'=>'Manage Alojamiento','url'=>array('admin')),
);
?>

<h1>Mis Alojamientos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

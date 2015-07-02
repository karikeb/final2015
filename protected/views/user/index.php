<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
array('label'=>'Crear','url'=>array('create')),
array('label'=>'Administrar','url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

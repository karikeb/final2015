<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Crear','url'=>array('create')),
	array('label'=>'Ver','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar','url'=>array('admin')),
	);
	?>

	<h1>Update User <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
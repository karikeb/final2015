<?php
$this->breadcrumbs = array(
    'Alojamientos' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Alojamiento', 'url' => array('index')),
    array('label' => 'Create Alojamiento', 'url' => array('create')),
    array('label' => 'Update Alojamiento', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Alojamiento', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Alojamiento', 'url' => array('admin')),
);
?>

<h1>Ver Alojamiento #<?php echo $model->id; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'direccion',
        'capacidad',
        'servicios',
        array(
            'name' => 'nombre propietario',
            'value' => $model->propietario->username,
        ),
        array(
            'name' => 'Email',
            'value' => $model->propietario->email,
        ),
    ),
));
?>

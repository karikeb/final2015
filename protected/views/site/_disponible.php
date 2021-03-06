<?php
$this->breadcrumbs = array(
    'Reservas' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Reserva', 'url' => array('index')),
    array('label' => 'Create Reserva', 'url' => array('create')),
);


?>

<h1>Manage Reservas</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'reserva-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'nombre',
        'fechaIngreso',
        'fechaSalida',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>

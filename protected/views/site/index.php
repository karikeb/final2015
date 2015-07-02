<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('reserva-grid', {
data: $(this).serialize()
});
return false;
});
");
?>


<div class="search-form col-md-8 col-md-offset-2 clear" >
    <h1>Busque alojamientos</h1>
    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'htmlOptions' => array('class' => 'well'),
    ));
    ?>

    <?php echo $form->datePickerGroup($model, 'fechaIngreso', array('widgetOptions' => array('options' => array('format' => 'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

    <?php echo $form->datePickerGroup($model, 'fechaSalida', array('widgetOptions' => array('options' => array('format' => 'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

    <div class="form-actions">
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
            'context' => 'primary',
            'label' => 'Buscar',
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbListView', array(
    'id' => 'reserva-grid',
    'dataProvider' => $model->searchDisponible(),
    'itemView' => '_view',
    'htmlOptions' => array('class' => 'clear'),
));

$this->widget('booster.widgets.TbGridView', array(
    'id' => 'reserva-grid',
    'dataProvider' => $model->searchDisponible(),
    'columns' => array(
        'id',
        array(
            'name' => 'alojamiento',
            'value' => '$data->alojamiento->propietario_id',
        ),
        array(
            'name' => 'alojamiento',
            'value' => '$data->alojamiento->direccion',
        ),
        'fechaIngreso',
        'fechaSalida',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>

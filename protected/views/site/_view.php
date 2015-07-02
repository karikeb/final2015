<div class="view">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <?php //echo CHtml::encode($data->getAttributeLabel('alojamiento')); ?>:
                <?php echo CHtml::link(CHtml::encode('Alojamiento'), array('alojamiento/view', 'id' => $data->alojamiento_id)); ?>

            </h3>
        </div>
        <div class="panel-body">
            <div class="icon">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/logopanel.png">
            </div>
            
            <b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
            <?php echo CHtml::encode($data->alojamiento->direccion); ?>
            <br />
            <b><?php echo CHtml::encode($data->getAttributeLabel('capacidad')); ?>:</b>
            <?php echo CHtml::encode($data->alojamiento->capacidad); ?>
            <br />
            <b><?php echo CHtml::encode($data->getAttributeLabel('servicios')); ?>:</b>
            <?php echo CHtml::encode($data->alojamiento->servicios); ?>
            <br />
            <b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
            <?php echo CHtml::encode($data->alojamiento->propietario_id); ?>
            <br />
        </div>
    </div>

    <?php
//    $this->widget('booster.widgets.TbPanel', array(
//        'title' => CHtml::link(CHtml::encode('Reserva #'.$data->id), array('view', 'id' => $data->id)),
//        'headerIcon' => 'home',
//        'context' => 'success',
//        'content' => '<b>Direccion: </b>'.$data->alojamiento->direccion.'<br>'.
//                     '<b>Capacidad: </b>'.$data->alojamiento->capacidad.' personas<br>'.
//                     '<b>Servicios: </b>'.$data->alojamiento->servicios.'<br>'.
//                     '<b>Propietario: </b>'.$data->alojamiento->propietario_id.'<br>'
//            )
//    );
    ?>
</div>
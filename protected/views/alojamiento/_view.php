<div class="view">
    <?php
    $this->widget('booster.widgets.TbPanel', array(
        'title' => CHtml::link(CHtml::encode('Alojamiento #'.$data->id), array('view', 'id' => $data->id)),
        'headerIcon' => 'home',
        'context' => 'success',
        'content' => '<b>Direccion: </b>'.$data->direccion.'<br>'.
                     '<b>Capacidad: </b>'.$data->capacidad.' personas<br>'.
                     '<b>Servicios: </b>'.$data->servicios.'<br>'.
                     '<b>Propietario: </b>'.$data->propietario->username.'<br>',
            )
    );
    ?>
</div>
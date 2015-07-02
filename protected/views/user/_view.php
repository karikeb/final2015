<div class="view">
    <?php
    $this->widget('booster.widgets.TbPanel', array(
        'context' => 'info',
        'title' => '<b>'.CHtml::link(CHtml::encode('Usuario #'.$data->id), array('view', 'id' => $data->id)).'</b>',
        'headerIcon' => 'user',
        'content' => 
                    '<b>'.$data->getAttributeLabel('nombre').': </b>'.$data->nombre.'<br>'.
                    '<b>'.$data->getAttributeLabel('apellido').': </b>'.$data->apellido.'<br>'.
                    '<b>'.$data->getAttributeLabel('username').': </b>'.$data->username.'<br>'.
                    '<b>'.$data->getAttributeLabel('email').': </b>'.$data->email.'<br>'.
                    '<b>'.$data->getAttributeLabel('password').': </b>'.$data->password.'<br>',
            )
    );
    ?>

</div>
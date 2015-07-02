<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id='cabecera'>
         <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/encabezado.png">
    </div>


    <?php 
    $this->widget(
    'booster.widgets.TbNavbar',
    array(
        'type' => 'inverse',
        'brand' => 'Title',
        'collapse' => true, 
        'fixed' => false,
    	'fluid' => true,
        'items' => array(
            array(
                'class' => 'booster.widgets.TbMenu',
            	'type' => 'navbar',
                'items' => array(
                    array('label'=>'HOME', 'url'=>array('/site/index')),
                    array('label' => 'ALOJAMIENTOS', 'url' => array('/alojamiento/index')),
                    array('label'=>'RESERVA', 'url'=>array('/reserva/create')),
                    //array('label'=>'ADMIN USUARIOS', 'url'=>Yii::app()->user->ui->userManagementAdminUrl, 'visible'=>!Yii::app()->user->isGuest),
                    array(
                        'label' => 'ADMIN USUARIOS',
                        'items' => Yii::app()->user->ui->adminItems,
                            'htmlOptions' => array('class' => 'operations'),
                        'visible'=>Yii::app()->user->isSuperAdmin,
                        ),
                    array('label'=>'LOGIN', 'url'=>array('/cruge/ui/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                )
            )
        )
    )
);
    ?>


    
        <?php 
            echo $content;
        ?>
      <div class="clear"></div>
      
      <div id="pie">
          <br><br><p>-- Las Grutas Alquileres --</p>
      </div>

  </body>
</html>


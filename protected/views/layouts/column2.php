<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
        <div id="content">
            
            <div class="col-md-3">
                <?php
                $this->widget('booster.widgets.TbTabs', array(
                    'type' => 'pills',
                    'stacked' => true,
                    'tabs' => $this->menu,
                        )
                );
                ?>
            </div>

            <div class="col-md-9">
                <h3></h3>
                <?php echo $content; ?>
            </div>


        </div><!-- content -->
</div><!-- /.container -->
<?php $this->endContent(); ?>
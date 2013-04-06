<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
	<?php // Yii::app()->chartjs->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	 'type'=>'inverse', // null or 'inverse'
	'collapse'=>true,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                //array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Cuentas', 'url'=>array('/accounts')),
                array('label'=>'Facturas', 'url'=>array('/facture')),                
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                //array('label'=>'Link', 'url'=>'#'),
                 array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Settings', 'url'=>'#', 
                    'visible'=>!Yii::app()->user->isGuest,
                    'items'=>array(
                    //'visible'=>(!Yii::app()->user->isGuest),
                    array('label'=>'Config',  'icon'=>'cog','url'=>array('/entity')),
                    array('label'=>'Perfil',  'icon'=>'user','url'=>array('/users/'.Yii::app()->user->id)),
                    array('label'=>'Something else here', 'icon'=>'home', 'url'=>'#'),
                    '---',
                   
	                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
	                )),
            ),
        ),
    ),

)); ?>



<?php
 //$indexP= $this->pageDescription;
$indexP="1";
  if ($indexP=="0") { ?>

	

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/slide-01.jpg', 
        	'label'=>'First Thumbnail label', 
        	'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'images/slide-02.jpg', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'images/slide-03.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>

	
<?php } ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Rafael Socarras WEB and Networks Tools.
		All Rights Reserved.
		<?php // echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

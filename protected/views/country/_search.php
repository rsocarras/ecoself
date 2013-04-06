<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'iso2',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'short_name',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'long_name',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'iso3',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'numcode',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'un_member',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'calling_code',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'cctld',array('class'=>'span5','maxlength'=>5)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

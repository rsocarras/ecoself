<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'publico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'label',array('class'=>'span5','maxlength'=>45)); ?>

	<?php //echo $form->textFieldRow($model,'country_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'country_id', CHtml::listData(country::model()->findAll(),'id','short_name')); ?>


	<?php echo $form->textFieldRow($model,'tipo',array('class'=>'span5','maxlength'=>2)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

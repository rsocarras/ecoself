<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'entity-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'label',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'family',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>45)); ?>

	<?php //echo $form->textFieldRow($model,'city_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'city_id', CHtml::listData(city::model()->findAll(),'id','label')); ?>

	<?php echo $form->textFieldRow($model,'city_region_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'city_region_country_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

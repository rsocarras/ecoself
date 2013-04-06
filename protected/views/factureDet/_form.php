<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'facture-det-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'facture_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'label',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tax',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'consumo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'medida',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_venc',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datecreate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

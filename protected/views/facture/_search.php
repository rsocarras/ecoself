<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'facture_num',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'accounts_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tax',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'t_pay_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'datecreate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datemodify',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'users_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'entity_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

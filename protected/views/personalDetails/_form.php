<?php
/* @var $this PersonalDetailsController */
/* @var $model PersonalDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moblie_number'); ?>
		<?php echo $form->textField($model,'moblie_number',array('size'=>60,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'moblie_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_you'); ?>
		<?php echo $form->textArea($model, 'about_you', array('rows' => 4, 'cols' => 25)); ?>
		<?php echo $form->error($model,'about_you'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_day'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			    'name'=>'birth_day',
				'model'=>$model,
				'attribute'=>'birth_day',
				'value'=>Yii::app()->dateFormatter->format("yy-mm-dd",strtotime($model->birth_day)),
			    'options'=>array(
				'showAnim'=>'fold',
				'dateFormat' =>'yy-mm-dd',
				'changeMonth'=>'true', 
            			'changeYear'=>'true',   
			    ),
			    'htmlOptions'=>array(
				'style'=>'height:20px;'
			    ),
			));
		?>
		<?php echo $form->error($model,'birth_day'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
/* @var $this ThesisController */
/* @var $model Thesis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thesis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'thesis_name'); ?>
		<?php echo $form->textField($model,'thesis_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'thesis_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score_instructor'); ?>
		<?php echo $form->textField($model,'score_instructor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_instructor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score_reviewer'); ?>
		<?php echo $form->textField($model,'score_reviewer',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_reviewer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score_council'); ?>
		<?php echo $form->textField($model,'score_council',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_council'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score_total'); ?>
		<?php echo $form->textField($model,'score_total',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'score_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'have_disk'); ?>
		<?php echo $form->textField($model,'have_disk'); ?>
		<?php echo $form->error($model,'have_disk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'counter'); ?>
		<?php echo $form->textField($model,'counter'); ?>
		<?php echo $form->error($model,'counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
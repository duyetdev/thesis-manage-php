<?php
/* @var $this ThesisController */
/* @var $model Thesis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'thesis_id'); ?>
		<?php echo $form->textField($model,'thesis_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thesis_name'); ?>
		<?php echo $form->textField($model,'thesis_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score_instructor'); ?>
		<?php echo $form->textField($model,'score_instructor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score_reviewer'); ?>
		<?php echo $form->textField($model,'score_reviewer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score_council'); ?>
		<?php echo $form->textField($model,'score_council',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score_total'); ?>
		<?php echo $form->textField($model,'score_total',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'have_disk'); ?>
		<?php echo $form->textField($model,'have_disk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'counter'); ?>
		<?php echo $form->textField($model,'counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
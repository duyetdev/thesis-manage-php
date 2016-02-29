<?php
/* @var $this ThesisController */
/* @var $data Thesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('thesis_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->thesis_id), array('view', 'id'=>$data->thesis_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thesis_name')); ?>:</b>
	<?php echo CHtml::encode($data->thesis_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intro')); ?>:</b>
	<?php echo CHtml::encode($data->intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score_instructor')); ?>:</b>
	<?php echo CHtml::encode($data->score_instructor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score_reviewer')); ?>:</b>
	<?php echo CHtml::encode($data->score_reviewer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score_council')); ?>:</b>
	<?php echo CHtml::encode($data->score_council); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score_total')); ?>:</b>
	<?php echo CHtml::encode($data->score_total); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('have_disk')); ?>:</b>
	<?php echo CHtml::encode($data->have_disk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('counter')); ?>:</b>
	<?php echo CHtml::encode($data->counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	*/ ?>

</div>
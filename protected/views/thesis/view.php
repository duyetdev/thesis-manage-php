<?php
/* @var $this ThesisController */
/* @var $model Thesis */

$this->breadcrumbs=array(
	'Thesises'=>array('index'),
	$model->thesis_id,
);

$this->menu=array(
	array('label'=>'List Thesis', 'url'=>array('index')),
	array('label'=>'Create Thesis', 'url'=>array('create')),
	array('label'=>'Update Thesis', 'url'=>array('update', 'id'=>$model->thesis_id)),
	array('label'=>'Delete Thesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->thesis_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Thesis', 'url'=>array('admin')),
);
?>

<h1>View Thesis #<?php echo $model->thesis_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'thesis_id',
		'thesis_name',
		'intro',
		'score_instructor',
		'score_reviewer',
		'score_council',
		'score_total',
		'have_disk',
		'counter',
		'created',
		'status',
		'note',
	),
)); ?>

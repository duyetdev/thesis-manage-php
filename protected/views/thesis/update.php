<?php
/* @var $this ThesisController */
/* @var $model Thesis */

$this->breadcrumbs=array(
	'Thesises'=>array('index'),
	$model->thesis_id=>array('view','id'=>$model->thesis_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Thesis', 'url'=>array('index')),
	array('label'=>'Create Thesis', 'url'=>array('create')),
	array('label'=>'View Thesis', 'url'=>array('view', 'id'=>$model->thesis_id)),
	array('label'=>'Manage Thesis', 'url'=>array('admin')),
);
?>

<h1>Update Thesis <?php echo $model->thesis_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
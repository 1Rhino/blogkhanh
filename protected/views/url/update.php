<?php
/* @var $this UrlController */
/* @var $model Url */

$this->breadcrumbs=array(
	'Urls'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Url', 'url'=>array('index')),
	array('label'=>'Create Url', 'url'=>array('create')),
	array('label'=>'View Url', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Url', 'url'=>array('admin')),
);
?>

<h1>Update Url <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
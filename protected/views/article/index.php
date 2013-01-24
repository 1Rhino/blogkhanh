<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles',
);

/**
$this->menu=array(
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
*/
?>
<?php if(!empty($_GET['tag'])): ?>
<h2>Posts Tagged with "<i><?php echo CHtml::encode($_GET['tag']); ?></i>"</h2>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    //'template'=>"{items}\n{pager}",
)); ?>

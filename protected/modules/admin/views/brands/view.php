<?php
$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Brands','url'=>array('index')),
	array('label'=>'Create Brands','url'=>array('create')),
	array('label'=>'Update Brands','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Brands','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brands','url'=>array('admin')),
);
?>

<h1>View Brands #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'update_time',
	),
)); ?>

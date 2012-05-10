<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Products','url'=>array('index')),
	array('label'=>'Create Products','url'=>array('create')),
	array('label'=>'Update Products','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Products','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products','url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'seo_url',
		'category_id',
		'brand_id',
		'update_time',
	),
)); ?>

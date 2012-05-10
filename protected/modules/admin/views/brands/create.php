<?php
$this->breadcrumbs=array(
	'Brands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Brands','url'=>array('index')),
	array('label'=>'Manage Brands','url'=>array('admin')),
);
?>

<h1>Create Brands</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
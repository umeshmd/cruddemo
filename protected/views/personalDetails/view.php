<?php
/* @var $this PersonalDetailsController */
/* @var $model PersonalDetails */

$this->breadcrumbs=array(
	'Personal Details'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PersonalDetails', 'url'=>array('index')),
	array('label'=>'Create PersonalDetails', 'url'=>array('create')),
	array('label'=>'Update PersonalDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PersonalDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonalDetails', 'url'=>array('admin')),
);
?>

<h1>View PersonalDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'country',
		'email',
		'moblie_number',
		'about_you',
		'birth_day',
	),
)); ?>

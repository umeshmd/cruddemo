<?php
/* @var $this PersonalDetailsController */
/* @var $model PersonalDetails */

$this->breadcrumbs=array(
	'Personal Details',
	//$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List PersonalDetails', 'url'=>array('index')),
	array('label'=>'Add Personal Details', 'url'=>array('create')),
	//array('label'=>'View PersonalDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Personal Details', 'url'=>array('admin')),
);
?>

<h1>Update Personal Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
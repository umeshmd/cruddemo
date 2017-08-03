<?php
/* @var $this PersonalDetailsController */
/* @var $model PersonalDetails */

$this->breadcrumbs=array(
	'Personal Details',
	'Create',
);

$this->menu=array(
	//array('label'=>'List PersonalDetails', 'url'=>array('index')),
	array('label'=>'Manage Personal Details', 'url'=>array('admin')),
);
?>

<h1>Create Personal Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
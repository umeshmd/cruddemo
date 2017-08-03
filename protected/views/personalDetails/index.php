<?php
/* @var $this PersonalDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal Details',
);

$this->menu=array(
	array('label'=>'Create PersonalDetails', 'url'=>array('create')),
	array('label'=>'Manage PersonalDetails', 'url'=>array('admin')),
);
?>

<h1>Personal Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

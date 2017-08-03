<?php
/* @var $this PersonalDetailsController */
/* @var $model PersonalDetails */

$this->breadcrumbs = array(
    'Personal Details',
    'Manage',
);

$this->menu = array(
    //array('label'=>'List PersonalDetails', 'url'=>array('index')),
    array('label' => 'Create Personal Details', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('personal-details-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personal Details</h1>
<!-- 
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /* $this->renderPartial('_search',array(
  'model'=>$model,
  )); */ ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'personal-details-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'name',
        'country',
        'email',
        'moblie_number',
        'about_you',
        /*
          'birth_day',
         */
        /* array(
          'class'=>'CButtonColumn',
          ), */
        array
            (
            'class' => 'CButtonColumn',
            'header' => 'Action',
            'template' => '{update}{delete}',
           
        ),
    ),
));
?>

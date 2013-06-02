<?php
$this->breadcrumbs=array(
	'Fifa Rankings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FifaRanking','url'=>array('index')),
	array('label'=>'Create FifaRanking','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('fifa-ranking-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fifa Rankings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'fifa-ranking-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'rank',
		'fifa3',
		'ranking',
		'points',
		'change_ranking',
		/*
		'change_status',
		'change_points',
		'c_ranking',
		'c_change_ranking',
		'c_change_status',
		'cn_name',
		'cn_id',
		'c_id',
		'c_fifa_id',
		'c_abbreviation',
		'ts',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

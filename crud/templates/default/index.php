<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

<?php $this->menu=array(
	array('label'=>'Inserir <?php echo $this->modelClass; ?>', 'url'=>array('inserir')),
	array('label'=>'Gerenciar <?php echo $this->modelClass; ?>', 'url'=>array('gerenciar')),
);
?>

<h1><?php echo $label; ?></h1>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_exibir',
)); ?>

<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>\n"; ?>

	<p class="note">Campos marcados com <span class="required">*</span> são de preenchimento obrigatório.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
	<div class="row">
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>

<?php
}
?>
	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Inserir' : 'Atualizar'); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->

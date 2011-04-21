<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weeknum'); ?>
		<?php echo $form->textField($model,'weeknum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rtxname'); ?>
		<?php echo $form->textField($model,'rtxname',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project'); ?>
		<?php echo $form->textField($model,'project'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task'); ?>
		<?php echo $form->textField($model,'task',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complete'); ?>
		<?php echo $form->textField($model,'complete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'continue'); ?>
		<?php echo $form->textField($model,'continue'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
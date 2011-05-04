<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rtxid'); ?>
		<p><?php echo $model->rtxid; ?></p>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
        <?php echo $form->dropDownList($model,'project_id',$model->projects);?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'task_name'); ?>
		<?php echo $form->textArea($model,'task_name',array('maxlength'=>128)); ?>
		<?php echo $form->error($model,'task_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'complete'); ?>
		<?php echo $form->textField($model,'complete'); ?>
		<?php echo $form->error($model,'complete'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'continue'); ?>
		<?php echo $form->checkBox($model,'continue'); ?>
		<?php echo $form->error($model,'continue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_number'); ?>
		<?php echo $form->dropDownList($model,'week_number',$model->weekIDs); ?>
		<?php echo $form->error($model,'week_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
		<?php echo $form->textField($model,'end_time'); ?>
		<?php echo $form->error($model,'end_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
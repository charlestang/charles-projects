<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'week-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'start'); ?>
		<?php //echo $form->textField($model,'start'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'=> $model,
            'attribute'=> 'start',
            'options'=> array(
                'dateFormat' => 'yy-mm-dd',
            ),
        ));?>
		<?php echo $form->error($model,'start'); ?>
        
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
		<?php //echo $form->textField($model,'end'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'=> $model,
            'attribute'=> 'end',
            'options'=> array(
                'dateFormat' => 'yy-mm-dd',
            ),
        ));?>
		<?php echo $form->error($model,'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'count'); ?>
		<?php echo $form->textField($model,'count'); ?>
		<?php echo $form->error($model,'count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
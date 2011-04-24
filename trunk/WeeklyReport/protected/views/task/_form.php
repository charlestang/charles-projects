<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'weeknum'); ?>
		<?php echo $form->dropDownList($model,'weeknum',$weeks);?>
		<?php echo $form->error($model,'weeknum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rtxname'); ?>
        <?php echo Yii::app()->user->id;?>
		<?php echo $form->hiddenField($model,'rtxname',array('value'=> Yii::app()->user->id)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project'); ?>
        <?php echo $form->dropDownList($model,'project',$projects);?>
		<?php echo $form->error($model,'project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'task'); ?>
		<?php echo $form->textField($model,'task',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'task'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php //echo $form->textField($model,'cost'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiSliderInput', array(
            'model'=> $model,
            'attribute'=> 'cost',
            'options' => array(
                'min'=> 0,
                'max'=> 100,
                'step'=> 5,
            ),
        ));?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complete'); ?>
		<?php //echo $form->textField($model,'complete'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiSliderInput', array(
            'model'=> $model,
            'attribute'=> 'complete',
            'options' => array(
                'min'=> 0,
                'max'=> 100,
                'step'=> 5,
            ),
        ));?>
		<?php echo $form->error($model,'complete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'continue'); ?>
		<?php echo $form->checkBox($model,'continue'); ?> 需要后续跟进？
		<?php echo $form->error($model,'continue'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
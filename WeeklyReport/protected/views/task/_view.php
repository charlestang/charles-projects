<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weeknum')); ?>:</b>
	<?php echo CHtml::encode($data->weeknum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rtxname')); ?>:</b>
	<?php echo CHtml::encode($data->rtxname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project')); ?>:</b>
	<?php echo CHtml::encode($data->project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task')); ?>:</b>
	<?php echo CHtml::encode($data->task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complete')); ?>:</b>
	<?php echo CHtml::encode($data->complete); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('continue')); ?>:</b>
	<?php echo CHtml::encode($data->continue); ?>
	<br />

	*/ ?>

</div>
<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<h2>周列表</h2>

<table>
    <thead>
        <tr>
            <td>周次</td>
            <td>起止日期</td>
            <td>天数</td>
        </tr>
    </thead>
    <tbody>
        <?php 
            $weeks = $weeks->data;
            foreach ($weeks as $week){
                echo '<tr>';
                echo '<td>', $week->id,'</td>';
                echo '<td>', $curr_week != $week->id ? CHtml::link($week->start.'~~'.$week->end, array("site/index", 'week_id' => $week->id)) : $week->start.'~~'.$week->end, '</td>';
                echo '<td>', $week->count, '</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<h2>周报</h2>
<table>
    <thead>
        <tr>
            <td>上周</td>
            <td>本周</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><!--上周-->
                <table>
                    <thead>
                        <tr>
                            <td>RTX Name</td>
                            <td>Project</td>
                            <td>Task</td>
                            <td>Cost</td>
                            <td>Complete</td>
                            <td>Continue?</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if ($last_week_tasks)
                            foreach ($last_week_tasks as $user => $tasks) {
                                $row_count = count($tasks);
                                $task = $tasks[0];
                                echo '<tr>';
                                echo CHtml::tag('td', array('rowspan' => $row_count), $task->rtxname);
                                echo CHtml::tag('td', array(), $task->project);
                                echo CHtml::tag('td', array(), $task->task);
                                echo CHtml::tag('td', array(), $task->cost . '%');
                                echo CHtml::tag('td', array(), $task->complete . '%');
                                echo CHtml::tag('td', array(), $task->continue);
                                echo '</tr>';
                                for ($i = 1; $i < $row_count; $i++) {
                                    $task = $tasks[$i];
                                    echo '<tr>';

                                    echo CHtml::tag('td', array(), $task->project);
                                    echo CHtml::tag('td', array(), $task->task);
                                    echo CHtml::tag('td', array(), $task->cost . '%');
                                    echo CHtml::tag('td', array(), $task->complete . '%');
                                    echo CHtml::tag('td', array(), $task->continue);
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            
            
            </td><!--上周-->
            <td><!--本周-->
                <table>
                    <thead>
                        <tr>
                            <td>RTX Name</td>
                            <td>Project</td>
                            <td>Task</td>
                            <td>Cost</td>
                            <td>Complete</td>
                            <td>Continue?</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($curr_week_tasks as $user => $tasks) {
                                $row_count = count($tasks);
                                $task = $tasks[0];
                                echo '<tr>';
                                echo CHtml::tag('td', array('rowspan' => $row_count), $task->rtxname);
                                echo CHtml::tag('td', array(), $task->project);
                                echo CHtml::tag('td', array(), $task->task);
                                echo CHtml::tag('td', array(), $task->cost . '%');
                                echo CHtml::tag('td', array(), $task->complete . '%');
                                echo CHtml::tag('td', array(), $task->continue);
                                echo '</tr>';
                                for ($i = 1; $i < $row_count; $i++) {
                                    $task = $tasks[$i];
                                    echo '<tr>';

                                    echo CHtml::tag('td', array(), $task->project);
                                    echo CHtml::tag('td', array(), $task->task);
                                    echo CHtml::tag('td', array(), $task->cost . '%');
                                    echo CHtml::tag('td', array(), $task->complete . '%');
                                    echo CHtml::tag('td', array(), $task->continue);
                                    echo '</tr>';
                                }
                            }
                        
                        
                        ?>
                    </tbody>
                </table>
            
            </td><!--本周-->
        </tr>
    </tbody>
</table>
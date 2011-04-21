<?php

/**
 * This is the model class for table "task".
 *
 * The followings are the available columns in table 'task':
 * @property integer $id
 * @property integer $weeknum
 * @property string $rtxname
 * @property integer $project
 * @property string $task
 * @property integer $cost
 * @property integer $complete
 * @property integer $continue
 */
class Task extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('weeknum, rtxname, project, task, cost, continue', 'required'),
			array('weeknum, project, cost, complete, continue', 'numerical', 'integerOnly'=>true),
			array('rtxname', 'length', 'max'=>64),
			array('task', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, weeknum, rtxname, project, task, cost, complete, continue', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'weeknum' => 'Weeknum',
			'rtxname' => 'Rtxname',
			'project' => 'Project',
			'task' => 'Task',
			'cost' => 'Cost',
			'complete' => 'Complete',
			'continue' => 'Continue',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('weeknum',$this->weeknum);
		$criteria->compare('rtxname',$this->rtxname,true);
		$criteria->compare('project',$this->project);
		$criteria->compare('task',$this->task,true);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('complete',$this->complete);
		$criteria->compare('continue',$this->continue);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
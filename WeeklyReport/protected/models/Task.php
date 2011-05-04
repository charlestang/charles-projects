<?php

/**
 * This is the model class for table "tbl_task".
 *
 * The followings are the available columns in table 'tbl_task':
 * @property integer $id
 * @property string $rtxid
 * @property string $task_name
 * @property integer $project_id
 * @property integer $complete
 * @property integer $cost
 * @property integer $continue
 * @property integer $week_number
 * @property integer $year
 * @property string $start_time
 * @property string $end_time
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
		return 'tbl_task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rtxid, task_name, project_id, week_number, year, start_time, end_time', 'required'),
			array('project_id, complete, cost, continue, week_number, year', 'numerical', 'integerOnly'=>true),
			array('rtxid', 'length', 'max'=>32),
			array('task_name', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rtxid, task_name, project_id, complete, cost, continue, week_number, year, start_time, end_time', 'safe', 'on'=>'search'),
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
			'rtxid' => 'Rtxid',
			'task_name' => '任务',
			'project_id' => '所属项目',
			'complete' => '完成进度',
			'cost' => '花费时间',
			'continue' => '后续跟进？',
			'week_number' => '周次',
			'year' => '年份',
			'start_time' => '起始时间',
			'end_time' => '结束时间',
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
		$criteria->compare('rtxid',$this->rtxid,true);
		$criteria->compare('task_name',$this->task_name,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('complete',$this->complete);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('continue',$this->continue);
		$criteria->compare('week_number',$this->week_number);
		$criteria->compare('year',$this->year);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
    
    public function getProjects()
    {
        $projects = Project::model()->findAll();
        $projects_arr = array();
        foreach ($projects as $key => $value){
            $projects_arr[$value->id] = $value->project_name . ' ' . $value->version;
        }
        return $projects_arr;
    }
    
    public function getWeekIDs()
    {
        $weeks = array();
        for ($i = 1; $i <= 52; $i++){
            $weeks[$i] = $i;
        }
        return $weeks;
    }
    
    /**
     * 计算一周的开始日期
     * @return string 返回日期字符串Y-m-d格式
     */
    function weekstart()
    {
        $year = $this->year;
        $week = $this->week_number;
        
        $referent_date = $year . '-07-01';
        $referent_info = date('W w', strtotime($referent_date));
        list($referent_week, $referent_week_day) = explode(' ', $referent_info);
        if ($week > $referent_week) {
            $days_offest = ($week - $referent_week) * 7 - $referent_week_day + 1;
            $date = strtotime($referent_date) + $days_offest * 3600 * 24;
        }
        else {
            $days_offest = ($referent_week - $week) * 7 + $referent_week_day - 1;
            $date = strtotime($referent_date) - $days_offest * 3600 * 24;
        }

        return date('Y-m-d', $date);
    }

}
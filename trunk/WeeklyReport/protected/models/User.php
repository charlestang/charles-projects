<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $name
 * @property string $rtxid
 * @property string $password
 * @property integer $status
 * @property string $create_time
 * @property string $last_login_time
 */
class User extends CActiveRecord
{
    public $password_repeat; //重复密码
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rtxid, password, create_time, password_repeat', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('name, rtxid', 'length', 'max'=>32),
			array('password', 'length', 'max'=>64),
            array('password', 'compare'),
			array('last_login_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, rtxid, password, status, create_time, last_login_time', 'safe', 'on'=>'search'),
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
			'name' => '中文姓名',
			'rtxid' => 'RTX用户名',
			'password' => '密码',
            'password_repeat' => '重复密码',
			'status' => '在职状态',
			'create_time' => 'Create Time',
			'last_login_time' => 'Last Login Time',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('rtxid',$this->rtxid,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
    
    public function afterValidate()
    {
        $this->password = $this->encrypt($this->password);
        parent::afterValidate();
    }
    
    public function encrypt($str)
    {
        return md5($str);
    }
}
<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $rtxname
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $status
 */
class User extends CActiveRecord
{
    public $password_repeat;
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rtxname, password, password_repeat, email, status', 'required'),
            array('password', 'compare'),
            array('password_repeat', 'safe'),
			array('rtxname', 'length', 'max'=>64),
			array('name, password, status', 'length', 'max'=>128),
			array('email', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rtxname, name, password, email, status', 'safe', 'on'=>'search'),
		);
	}
    
    public function afterValidate()
    {
        
        parent::afterValidate();
        $this->password = $this->encrypt($this->password);
    }
    
    public function encrypt($str)
    {
        return md5($str);
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
			'rtxname' => 'Rtxname',
			'name' => 'Name',
			'password' => 'Password',
            'password_repeat' => '再一次',
			'email' => 'Email',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('rtxname',$this->rtxname,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
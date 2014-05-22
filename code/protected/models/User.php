<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $uid
 * @property string $email
 * @property integer $phone
 * @property string $nickname
 * @property string $password
 * @property string $regip
 * @property string $lastip
 * @property integer $regtime
 * @property integer $lasttime
 */
class User extends CActiveRecord
{
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
			array('uid, nickname, password, regip, lastip, regtime, lasttime', 'required'),
			array('uid, phone, regtime, lasttime', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>150),
			array('nickname, password', 'length', 'max'=>100),
			array('regip, lastip', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, email, phone, nickname, password, regip, lastip, regtime, lasttime', 'safe', 'on'=>'search'),
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
			'uid' => '用户UID',
			'email' => '登录邮箱',
			'phone' => '手机',
			'nickname' => '昵称',
			'password' => 'Password',
			'regip' => '注册IP',
			'lastip' => '最后登录ip',
			'regtime' => '注册时间',
			'lasttime' => '最后登录时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('uid',$this->uid);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('regip',$this->regip,true);
		$criteria->compare('lastip',$this->lastip,true);
		$criteria->compare('regtime',$this->regtime);
		$criteria->compare('lasttime',$this->lasttime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

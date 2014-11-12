<?php

/**
 * This is the model class for table "user_expand".
 *
 * The followings are the available columns in table 'user_expand':
 * @property integer $uid
 * @property string $photo
 * @property integer $isactive
 * @property string $isstr
 * @property integer $sex
 * @property string $like
 * @property integer $score
 * @property integer $addtime
 * @property integer $updatetime
 */
class UserExpand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_expand';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, addtime, updatetime', 'required'),
			array('uid, isactive, sex, score, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('photo, like', 'length', 'max'=>150),
			array('isstr', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, photo, isactive, isstr, sex, like, score, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'photo' => '头像',
			'isactive' => '0未激活1激活',
			'isstr' => '激活字符串',
			'sex' => '0女1男',
			'like' => '爱好',
			'score' => '积分',
			'addtime' => 'Addtime',
			'updatetime' => 'Updatetime',
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
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('isstr',$this->isstr,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('like',$this->like,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('addtime',$this->addtime);
		$criteria->compare('updatetime',$this->updatetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserExpand the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "herbs".
 *
 * The followings are the available columns in table 'herbs':
 * @property integer $id
 * @property integer $uid
 * @property string $title
 * @property integer $cid
 * @property integer $belong
 * @property string $belongs
 * @property string $shape
 * @property string $efficacy
 * @property string $grow
 * @property string $associated
 * @property integer $evolution
 * @property string $evolutionary
 * @property string $guardian
 * @property string $action
 * @property string $parameter
 * @property integer $level
 * @property string $describe
 * @property integer $state
 * @property string $pic
 * @property integer $addtime
 * @property integer $updatetime
 */
class Herbs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'herbs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, title, addtime, updatetime', 'required'),
			array('uid, cid, belong, evolution, level, state, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('title, belongs, shape, efficacy, grow, associated, evolutionary, action', 'length', 'max'=>150),
			array('guardian', 'length', 'max'=>100),
			array('parameter, describe, pic', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, title, cid, belong, belongs, shape, efficacy, grow, associated, evolution, evolutionary, guardian, action, parameter, level, describe, state, pic, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'title' => 'Title',
			'cid' => '分类id',
			'belong' => '0其他,1游戏,2小说,3自创',
			'belongs' => 'Belongs',
			'shape' => '外形',
			'efficacy' => '功效',
			'grow' => '生长环境',
			'associated' => '伴生',
			'evolution' => '0不可进化1可进化',
			'evolutionary' => '进化物',
			'guardian' => '守护兽',
			'action' => '作用',
			'parameter' => '参数',
			'level' => '级别',
			'describe' => 'Describe',
			'state' => '0未审核,1已审核,2未通过',
			'pic' => 'Pic',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('belong',$this->belong);
		$criteria->compare('belongs',$this->belongs,true);
		$criteria->compare('shape',$this->shape,true);
		$criteria->compare('efficacy',$this->efficacy,true);
		$criteria->compare('grow',$this->grow,true);
		$criteria->compare('associated',$this->associated,true);
		$criteria->compare('evolution',$this->evolution);
		$criteria->compare('evolutionary',$this->evolutionary,true);
		$criteria->compare('guardian',$this->guardian,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('parameter',$this->parameter,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('describe',$this->describe,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('pic',$this->pic,true);
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
	 * @return Herbs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "weapon".
 *
 * The followings are the available columns in table 'weapon':
 * @property integer $id
 * @property integer $uid
 * @property string $title
 * @property integer $cid
 * @property integer $belong
 * @property string $belongs
 * @property string $shape
 * @property string $usage
 * @property string $attack
 * @property string $material
 * @property string $parameter
 * @property string $people
 * @property string $consume
 * @property string $effect
 * @property string $describe
 * @property integer $state
 * @property string $pic
 * @property integer $addtime
 * @property integer $updatetime
 */
class Weapon extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'weapon';
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
			array('uid, cid, belong, state, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('title, belongs, shape, usage, attack, material, people, consume, effect', 'length', 'max'=>150),
			array('parameter, describe, pic', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, title, cid, belong, belongs, shape, usage, attack, material, parameter, people, consume, effect, describe, state, pic, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'usage' => '使用方式',
			'attack' => '攻击方式',
			'material' => 'Material',
			'parameter' => '参数',
			'people' => '使用人',
			'consume' => '消耗',
			'effect' => '特效',
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
		$criteria->compare('usage',$this->usage,true);
		$criteria->compare('attack',$this->attack,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('parameter',$this->parameter,true);
		$criteria->compare('people',$this->people,true);
		$criteria->compare('consume',$this->consume,true);
		$criteria->compare('effect',$this->effect,true);
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
	 * @return Weapon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

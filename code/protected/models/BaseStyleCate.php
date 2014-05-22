<?php

/**
 * This is the model class for table "base_style_cate".
 *
 * The followings are the available columns in table 'base_style_cate':
 * @property integer $id
 * @property integer $fid
 * @property string $title
 * @property string $remark
 * @property string $brands
 * @property string $purposes
 * @property string $material
 * @property integer $addtime
 * @property integer $updatetime
 */
class BaseStyleCate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base_style_cate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, remark, brands, purposes, addtime, updatetime', 'required'),
			array('fid, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('title, remark, brands, purposes, material', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fid, title, remark, brands, purposes, material, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'fid' => '父类ID',
			'title' => '种类名',
			'remark' => 'Remark',
			'brands' => '品牌',
			'purposes' => '用途',
			'material' => 'Material',
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
		$criteria->compare('fid',$this->fid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('brands',$this->brands,true);
		$criteria->compare('purposes',$this->purposes,true);
		$criteria->compare('material',$this->material,true);
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
	 * @return BaseStyleCate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

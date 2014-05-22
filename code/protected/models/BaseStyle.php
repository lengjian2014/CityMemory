<?php

/**
 * This is the model class for table "base_style".
 *
 * The followings are the available columns in table 'base_style':
 * @property integer $style_id
 * @property integer $cat_id
 * @property string $title
 * @property string $fabric
 * @property string $pop_elements
 * @property string $color_id
 * @property string $texture
 * @property string $img
 * @property string $keywords
 * @property string $description
 * @property integer $status
 * @property integer $p_uid
 * @property integer $addtime
 * @property integer $updatetime
 */
class BaseStyle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base_style';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_id, title, fabric, pop_elements, color_id, texture, img, keywords, description, addtime, updatetime', 'required'),
			array('cat_id, status, p_uid, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('fabric, pop_elements, img, keywords', 'length', 'max'=>250),
			array('color_id, texture', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('style_id, cat_id, title, fabric, pop_elements, color_id, texture, img, keywords, description, status, p_uid, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'style_id' => 'Style',
			'cat_id' => '所属分类',
			'title' => '款式名称',
			'fabric' => '结构，通常指衣服的外形框架 json数据',
			'pop_elements' => '流行元素，通常指衣服的图案、颜色、搭配等等json数据',
			'color_id' => '颜色 101,111',
			'texture' => '质地，通常指所选用的面料类型;复选面料表 1011,11,12',
			'img' => 'Img',
			'keywords' => '关键字，分类，样式，颜色等元素构成',
			'description' => '描述',
			'status' => '0正常,1需付费,2禁用',
			'p_uid' => '如果是用户发布 则发布人UID',
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

		$criteria->compare('style_id',$this->style_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fabric',$this->fabric,true);
		$criteria->compare('pop_elements',$this->pop_elements,true);
		$criteria->compare('color_id',$this->color_id,true);
		$criteria->compare('texture',$this->texture,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('p_uid',$this->p_uid);
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
	 * @return BaseStyle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

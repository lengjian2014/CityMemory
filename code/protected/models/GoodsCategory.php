<?php

/**
 * This is the model class for table "goods_category".
 *
 * The followings are the available columns in table 'goods_category':
 * @property integer $cat_id
 * @property string $cat_name
 * @property string $keywords
 * @property string $cat_desc
 * @property integer $parent_id
 * @property integer $sort_order
 * @property integer $show_in_nav
 * @property integer $is_show
 * @property integer $grade
 * @property integer $filter_attr
 */
class GoodsCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'goods_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_name, keywords, cat_desc', 'required'),
			array('parent_id, sort_order, show_in_nav, is_show, grade, filter_attr', 'numerical', 'integerOnly'=>true),
			array('cat_name', 'length', 'max'=>90),
			array('keywords, cat_desc', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cat_id, cat_name, keywords, cat_desc, parent_id, sort_order, show_in_nav, is_show, grade, filter_attr', 'safe', 'on'=>'search'),
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
			'cat_id' => '自增ID号',
			'cat_name' => '分类名称',
			'keywords' => '分类的关键字，可能是为了搜索',
			'cat_desc' => '分类描述',
			'parent_id' => '该分类的父id，取值于该表的cat_id字段',
			'sort_order' => '该分类在页面显示的顺序，数字越大顺序越靠后；同数字，id在前的先显示',
			'show_in_nav' => '是否显示在导航栏，0，不；1，显示在导航栏',
			'is_show' => '是否在前台页面显示，1，显示；0，不显示',
			'grade' => '该分类的最高和最低价之间的价格分级，当大于1时，会根据最大最小价格区间分成区间，会在页面显示价格范围，如0-300,300-600,600-900这种',
			'filter_attr' => '如果该字段有值，则该分类将还会按照该值对应在表goods_attr的goods_attr_id所对应的属性筛选，如，封面颜色下有红，黑分类筛选 ',
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
	public function search($info)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		var_dump($info);exit;
		$criteria=new CDbCriteria;

		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('cat_desc',$this->cat_desc,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('show_in_nav',$this->show_in_nav);
		$criteria->compare('is_show',$this->is_show);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('filter_attr',$this->filter_attr);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GoodsCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

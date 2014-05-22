<?php

/**
 * This is the model class for table "base_fabric".
 *
 * The followings are the available columns in table 'base_fabric':
 * @property integer $id
 * @property integer $cuid
 * @property integer $fid
 * @property string $colorcar
 * @property string $remark
 * @property string $property
 * @property string $description
 * @property string $img
 * @property string $purposes
 * @property string $material
 * @property string $pattern
 * @property string $style
 * @property string $crafts
 * @property integer $updatetime
 * @property integer $addtime
 */
class BaseFabric extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base_fabric';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('img, purposes, material, pattern, style, crafts, updatetime, addtime', 'required'),
			array('cuid, fid, updatetime, addtime', 'numerical', 'integerOnly'=>true),
			array('colorcar', 'length', 'max'=>20),
			array('remark', 'length', 'max'=>200),
			array('img', 'length', 'max'=>250),
			array('purposes', 'length', 'max'=>150),
			array('material, pattern, style, crafts', 'length', 'max'=>50),
			array('property, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cuid, fid, colorcar, remark, property, description, img, purposes, material, pattern, style, crafts, updatetime, addtime', 'safe', 'on'=>'search'),
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
			'cuid' => '创建者UID',
			'fid' => '所属父面料，0为父',
			'colorcar' => '颜色色卡编号',
			'remark' => '备注',
			'property' => '面料属性',
			'description' => '面料说明',
			'img' => 'Img',
			'purposes' => '布料用途',
			'material' => '布料材质',
			'pattern' => '图案类型',
			'style' => '布料风格',
			'crafts' => '工艺',
			'updatetime' => 'Updatetime',
			'addtime' => 'Addtime',
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
		$criteria->compare('cuid',$this->cuid);
		$criteria->compare('fid',$this->fid);
		$criteria->compare('colorcar',$this->colorcar,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('property',$this->property,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('purposes',$this->purposes,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('pattern',$this->pattern,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('crafts',$this->crafts,true);
		$criteria->compare('updatetime',$this->updatetime);
		$criteria->compare('addtime',$this->addtime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BaseFabric the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

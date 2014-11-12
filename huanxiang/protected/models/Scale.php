<?php

/**
 * This is the model class for table "scale".
 *
 * The followings are the available columns in table 'scale':
 * @property integer $id
 * @property integer $suid
 * @property integer $score
 * @property integer $type
 * @property integer $pid
 * @property integer $puid
 * @property integer $addtime
 * @property integer $updatetime
 */
class Scale extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scale';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('suid, addtime, updatetime', 'required'),
			array('suid, score, type, pid, puid, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, suid, score, type, pid, puid, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'suid' => '评分人',
			'score' => 'Score',
			'type' => '0装备1武器2草药3矿石4其他',
			'pid' => 'Pid',
			'puid' => '所属人',
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
		$criteria->compare('suid',$this->suid);
		$criteria->compare('score',$this->score);
		$criteria->compare('type',$this->type);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('puid',$this->puid);
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
	 * @return Scale the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

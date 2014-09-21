<?php

/**
 * This is the model class for table "tp_ex2musc".
 *
 * The followings are the available columns in table 'tp_ex2musc':
 * @property integer $id
 * @property integer $ex_id
 * @property integer $musc_id
 *
 * The followings are the available model relations:
 * @property Exercises $ex
 * @property Muscles $musc
 */
class Exercises2muscles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tp_ex2musc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ex_id, musc_id', 'required'),
			array('ex_id, musc_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ex_id, musc_id', 'safe', 'on'=>'search'),
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
			'ex' => array(self::BELONGS_TO, 'Exercises', 'ex_id'),
			'musc' => array(self::BELONGS_TO, 'Muscles', 'musc_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ex_id' => 'Ex',
			'musc_id' => 'Musc',
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
		$criteria->compare('ex_id',$this->ex_id);
		$criteria->compare('musc_id',$this->musc_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Exercises2muscles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

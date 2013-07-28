<?php

/**
 * This is the model class for table "Horario".
 *
 * The followings are the available columns in table 'Horario':
 * @property integer $id
 * @property string $horainicio
 * @property string $horafin
 * @property integer $idsalon
 * @property integer $idtaller
 */
class Horario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idsalon, idtaller', 'numerical', 'integerOnly'=>true),
			array('horainicio, horafin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, horainicio, horafin, idsalon, idtaller', 'safe', 'on'=>'search'),
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
			'horainicio' => 'Horainicio',
			'horafin' => 'Horafin',
			'idsalon' => 'Idsalon',
			'idtaller' => 'Idtaller',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('horainicio',$this->horainicio,true);
		$criteria->compare('horafin',$this->horafin,true);
		$criteria->compare('idsalon',$this->idsalon);
		$criteria->compare('idtaller',$this->idtaller);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
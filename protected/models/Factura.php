<?php

/**
 * This is the model class for table "Factura".
 *
 * The followings are the available columns in table 'Factura':
 * @property integer $id
 * @property string $fecha
 * @property boolean $cancelado
 * @property integer $idpersona
 * @property integer $idprecio
 * @property integer $idtaller
 * @property integer $numeroDeposito
 * @property string $fechaDeposito
 *
 * The followings are the available model relations:
 * @property Persona $idpersona0
 * @property Precio $idprecio0
 * @property Taller $idtaller0
 */
class Factura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Factura the static model class
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
		return 'Factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpersona, idprecio, idtaller, numeroDeposito', 'numerical', 'integerOnly'=>true),
			array('fecha, cancelado, fechaDeposito', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha, cancelado, idpersona, idprecio, idtaller, numeroDeposito, fechaDeposito', 'safe', 'on'=>'search'),
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
			'idpersona0' => array(self::BELONGS_TO, 'Persona', 'idpersona'),
			'idprecio0' => array(self::BELONGS_TO, 'Precio', 'idprecio'),
			'idtaller0' => array(self::BELONGS_TO, 'Taller', 'idtaller'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'cancelado' => 'Cancelado',
			'idpersona' => 'Idpersona',
			'idprecio' => 'Idprecio',
			'idtaller' => 'Idtaller',
			'numeroDeposito' => 'Numero Deposito',
			'fechaDeposito' => 'Fecha Deposito',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('cancelado',$this->cancelado);
		$criteria->compare('idpersona',$this->idpersona);
		$criteria->compare('idprecio',$this->idprecio);
		$criteria->compare('idtaller',$this->idtaller);
		$criteria->compare('numeroDeposito',$this->numeroDeposito);
		$criteria->compare('fechaDeposito',$this->fechaDeposito,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
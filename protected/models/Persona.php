<?php

/**
 * This is the model class for table "Persona".
 *
 * The followings are the available columns in table 'Persona':
 * @property integer $id
 * @property string $Cedula
 * @property string $Nombre
 * @property string $Apellido
 * @property string $FechaNac
 * @property string $Direccion
 * @property string $correo
 * @property boolean $esEmpleado
 * @property string $Password
 *
 * The followings are the available model relations:
 * @property Telefono[] $telefonos
 * @property ProfesorTaller[] $profesorTallers
 * @property Asistencia[] $asistencias
 * @property Factura[] $facturas
 */
class Persona extends CActiveRecord {
    public $PasswordConfirm;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Persona the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Persona';
    }

    public function validatePassword($password) {
        return $this->hashPassword($password) === $this->Password;
    }

    public function hashPassword($password) {
        return md5($password);
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('Nombre, FechaNac, Direccion, correo, Apellido', 'required','message'=>'Este campo es requerido'),
            array('Cedula', 'numerical', 'integerOnly'=>true, 'message'=>'El campo solo debe poseer numeros'),
            array('Cedula, Nombre', 'length', 'max' => 10,'message'=>'Debe tener un maximo de 10 caracteres'),
            array('Apellido', 'length', 'max' => 15,'message'=>'Debe tener un maximo de 15 caracteres'),
            array('Direccion', 'length', 'max' => 50,'message'=>'Debe tener un maximo de 50 caracteres'),
            array('correo', 'length', 'max' => 20,'message'=>'Debe tener un maximo de 20 caracteres'),
            array('FechaNac, esEmpleado, Password', 'safe'),
            array('correo', 'email','message'=>'Correo no valido'),
            array('Cedula', 'unique', 'attributeName'=>'Cedula','message'=>'Cedula ya existente en la base de datos'),
            array('Password', 'compare', 'compareAttribute' => 'PasswordConfirm', 'message' => 'Las contrasenias deben ser iguales'),
            array('Password, PasswordConfirm', 'length', 'max' => 50, 'min' => 6, 'tooShort' => 'Password debe ser mayor a 6 caracteres'),
            array('id, Cedula, Nombre, Apellido, FechaNac, Direccion, correo, esEmpleado, Password', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'telefonos' => array(self::HAS_MANY, 'Telefono', 'idpersona'),
            'profesorTallers' => array(self::HAS_MANY, 'ProfesorTaller', 'idpersona'),
            'asistencias' => array(self::HAS_MANY, 'Asistencia', 'idpersona'),
            'facturas' => array(self::HAS_MANY, 'Factura', 'idpersona'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'Cedula' => 'Cedula',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'FechaNac' => 'Fecha Nac',
            'Direccion' => 'Direccion',
            'correo' => 'Correo',
            'esEmpleado' => 'Es Empleado',
            'Password' => 'Password',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('Cedula', $this->Cedula, true);
        $criteria->compare('Nombre', $this->Nombre, true);
        $criteria->compare('Apellido', $this->Apellido, true);
        $criteria->compare('FechaNac', $this->FechaNac, true);
        $criteria->compare('Direccion', $this->Direccion, true);
        $criteria->compare('correo', $this->correo, true);
        $criteria->compare('esEmpleado', $this->esEmpleado);
        $criteria->compare('Password', $this->Password, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
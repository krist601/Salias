<?php

/**
 * This is the model class for table "Telefono".
 *
 * The followings are the available columns in table 'Telefono':
 * @property integer $id
 * @property string $codigo
 * @property string $numero
 * @property integer $idpersona
 */
class Telefono extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Telefono the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function relations() {
        return array('persona' => array(self::BELONGS_TO, 'Persona', 'idpersona'));
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Telefono';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idpersona', 'numerical', 'integerOnly' => true),
            array('codigo, numero', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, codigo, numero, idpersona', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'codigo' => 'Codigo',
            'numero' => 'Numero',
            'idpersona' => 'Idpersona',
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
        $criteria->compare('codigo', $this->codigo, true);
        $criteria->compare('numero', $this->numero, true);
        $criteria->with =array('persona');
        $criteria->addSearchCondition('persona.Nombre', $this->idpersona);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
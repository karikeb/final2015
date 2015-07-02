<?php

/**
 * This is the model class for table "tbl_reserva".
 *
 * The followings are the available columns in table 'tbl_reserva':
 * @property integer $id
 * @property integer $alojamiento_id
 * @property string $fechaIngreso
 * @property string $fechaSalida
 * @property string $inquilino
 *
 * The followings are the available model relations:
 * @property Alojamiento $alojamiento
 */
class Reserva extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_reserva';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('alojamiento_id, fechaIngreso, fechaSalida, inquilino', 'required'),
            array('alojamiento_id', 'numerical', 'integerOnly' => true),
            array('inquilino', 'length', 'max' => 125),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, alojamiento_id, fechaIngreso, fechaSalida, inquilino', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'alojamiento' => array(self::BELONGS_TO, 'Alojamiento', 'alojamiento_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'alojamiento_id' => 'Alojamiento',
            'fechaIngreso' => 'Fecha Ingreso',
            'fechaSalida' => 'Fecha Salida',
            'inquilino' => 'Inquilino',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('alojamiento_id', $this->alojamiento_id);
        $criteria->compare('fechaIngreso', $this->fechaIngreso, true);
        $criteria->compare('fechaSalida', $this->fechaSalida, true);
        $criteria->compare('inquilino', $this->inquilino, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchDisponible() {
//        $newFechaIngreso = preg_replace("/(\d+)\D+(\d+)\D+(\d+)/", "$1$2$3", $this->fechaIngreso);
//        $newFechaSalida = preg_replace("/(\d+)\D+(\d+)\D+(\d+)/", "$1$2$3", $this->fechaSalida);
//        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        if (isset($this->fechaIngreso)) {
           // $criteria->condition = "fechaSalida <'" . $this->fechaIngreso . "'";
        }


//        $criteria->addBetweenCondition('fechaIngreso', $this->fechaIngreso, $newFechaSalida, 'AND');
//        $criteria->addBetweenCondition('fechaSalida', $newFechaIngreso, $newFechaSalida);
//        $criteria->compare('id', $this->id);
//        $criteria->compare('alojamiento_id', $this->alojamiento_id);
//        $criteria->compare('fechaIngreso', $this->fechaIngreso, true);
//        $criteria->compare('fechaSalida', $this->fechaSalida, true);
//        $criteria->compare('inquilino', $this->inquilino, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Reserva the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

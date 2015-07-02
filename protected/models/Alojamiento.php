<?php

/**
 * This is the model class for table "tbl_alojamiento".
 *
 * The followings are the available columns in table 'tbl_alojamiento':
 * @property integer $id
 * @property string $direccion
 * @property integer $capacidad
 * @property string $servicios
 * @property integer $propietario_id
 *
 * The followings are the available model relations:
 * @property CrugeUser $propietario
 * @property Reserva[] $reservas
 */
class Alojamiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_alojamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('direccion, capacidad, servicios, propietario_id', 'required'),
			array('capacidad, propietario_id', 'numerical', 'integerOnly'=>true),
			array('direccion', 'length', 'max'=>125),
			array('servicios', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, direccion, capacidad, servicios, propietario_id', 'safe', 'on'=>'search'),
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
			'propietario' => array(self::BELONGS_TO, 'CrugeStoredUser', 'propietario_id'),
			'reservas' => array(self::HAS_MANY, 'Reserva', 'alojamiento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'direccion' => 'Direccion',
			'capacidad' => 'Capacidad',
			'servicios' => 'Servicios',
			'propietario_id' => 'Propietario',
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
                $criteria->condition='propietario_id='.Yii::app()->user->id;

		$criteria->compare('id',$this->id);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('capacidad',$this->capacidad);
		$criteria->compare('servicios',$this->servicios,true);
		$criteria->compare('propietario_id',$this->propietario_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alojamiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

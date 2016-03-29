<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property string $idProveedor
 * @property string $nombresProveedor
 * @property string $descripcion
 * @property string $numeroContactoProveedor
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombresProveedor, descripcion, numeroContactoProveedor, activo', 'required'),
			array('activo', 'numerical', 'integerOnly'=>true),
			array('nombresProveedor, numeroContactoProveedor', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProveedor, nombresProveedor, descripcion, numeroContactoProveedor, activo', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'idProveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProveedor' => 'Id Proveedor',
			'nombresProveedor' => 'Proveedor',
			'descripcion' => 'Descripción',
			'numeroContactoProveedor' => 'Número de contacto',
			'activo' => 'Activo',
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

		if ( $_GET["Proveedor"]['activo'] == "ACTIVO") {
			$this->activo ='1';
		}
		
		else
		
		if ( $_GET["Proveedor"]['activo'] == "INACTIVO") {
			$this->activo ='0';
		}
		else {
			$this->activo = "";
		}

		$criteria=new CDbCriteria;

		$criteria->compare('idProveedor',$this->idProveedor,true);
		$criteria->compare('nombresProveedor',$this->nombresProveedor,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('numeroContactoProveedor',$this->numeroContactoProveedor,true);
		$criteria->compare('activo',$this->activo);
		$this->activo = $_GET["Proveedor"]['activo'];

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'nombresProveedor ASC',
				)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

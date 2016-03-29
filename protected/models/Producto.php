<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property string $idProducto
 * @property string $descripcion
 * @property double $precioCosto
 * @property double $precioVenta
 * @property integer $stock
 * @property string $fechaIngreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Baja[] $bajas
 * @property Detalle[] $detalles
 * @property Pedido[] $pedidos
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, precioCosto, precioVenta, stock, fechaIngreso, activo', 'required'),
			array('stock, activo', 'numerical', 'integerOnly'=>true),
			array('precioCosto, precioVenta', 'numerical'),
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProducto, descripcion, precioCosto, precioVenta, stock, fechaIngreso, activo', 'safe', 'on'=>'search'),
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
			'bajas' => array(self::HAS_MANY, 'Baja', 'idProducto'),
			'detalles' => array(self::HAS_MANY, 'Detalle', 'idProducto'),
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'idProducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProducto' => 'Id Producto',
			'descripcion' => 'Descripción',
			'precioCosto' => 'Precio de costo',
			'precioVenta' => 'Precio de venta',
			'stock' => 'Cantidad',
			'fechaIngreso' => 'Fecha de ingreso',
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

		if ( $_GET["Producto"]['activo'] == "ACTIVO") {
			$this->activo ='1';
		}
		
		else
		
		if ( $_GET["Producto"]['activo'] == "INACTIVO") {
			$this->activo ='0';
		}
		else {
			$this->activo = "";
		}

		$criteria=new CDbCriteria;

		$criteria->compare('idProducto',$this->idProducto,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('precioCosto',$this->precioCosto);
		$criteria->compare('precioVenta',$this->precioVenta);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('fechaIngreso',$this->fechaIngreso,true);
		$criteria->compare('activo',$this->activo);
		$this->activo = $_GET["Producto"]['activo'];

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'descripcion ASC',
			)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getProductoPrecio()
	{
		return $this->descripcion.' -PRECIO- $'.$this->precioVenta;
	}
}

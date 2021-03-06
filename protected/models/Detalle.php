<?php

/**
 * This is the model class for table "detalle".
 *
 * The followings are the available columns in table 'detalle':
 * @property string $idDetalle
 * @property string $idFactura
 * @property string $idProducto
 * @property integer $cantidad
 */
class Detalle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	
	public function comprobarStock($attribute,$params)
    {
        $stock = Producto::model()->findByPK($this->idProducto);
        
        if($this->$attribute > $stock->stock)
        	$this->addError($attribute,"La cantidad no debe ser mayor al stock del producto.");
    }

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProducto, cantidad', 'required'),
			array('cantidad', 'numerical', 'integerOnly'=>true, 'min'=>1),
			array('idFactura, idProducto', 'length', 'max'=>10),
			array('cantidad', 'comprobarStock'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDetalle, idFactura, idProducto, cantidad', 'safe', 'on'=>'search'),
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
			'producto' => array(self::BELONGS_TO, 'Producto', 'idProducto'),
			'factura' => array(self::BELONGS_TO, 'Factura', 'idFactura'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDetalle' => 'Id Detalle',
			'idFactura' => 'Factura',
			'idProducto' => 'Producto',
			'cantidad' => 'Cantidad',
			//'precioVenta' => 'Precio de venta',
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

		$criteria->compare('idDetalle',$this->idDetalle,true);
		$criteria->compare('idFactura',$this->idFactura,true);
		
		//$criteria->compare('idProducto',$this->idProducto,true);
		$criteria->with =array('producto');
		$criteria->addSearchCondition('producto.descripcion', $this->idProducto);

		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detalle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave()
	{
		$stock = Producto::model()->findByPK($this->idProducto);
		
		$resultado = $stock->stock - $this->cantidad;
		$stock->stock = $resultado;
		$stock->save();

		return parent::beforeSave();
	}
}

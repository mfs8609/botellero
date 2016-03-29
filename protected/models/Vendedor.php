<?php

/**
 * This is the model class for table "vendedor".
 *
 * The followings are the available columns in table 'vendedor':
 * @property string $idVendedor
 * @property string $nombresVendedor
 * @property string $apellidosVendedor
 * @property string $idTipoDocumento
 * @property string $numeroIdentificacion
 * @property string $fechaNacimiento
 * @property string $genero
 * @property string $numeroContacto
 * @property string $fechaInicio
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Factura[] $facturas
 * @property Tipodocumento $idTipoDocumento0
 */
class Vendedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vendedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombresVendedor, apellidosVendedor, idTipoDocumento, numeroIdentificacion, fechaNacimiento, genero, numeroContacto, fechaInicio, activo', 'required'),
			array('activo', 'numerical', 'integerOnly'=>true),
			array('nombresVendedor, apellidosVendedor, numeroIdentificacion, numeroContacto', 'length', 'max'=>50),
			array('idTipoDocumento', 'length', 'max'=>10),
			array('genero', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idVendedor, nombresVendedor, apellidosVendedor, idTipoDocumento, numeroIdentificacion, fechaNacimiento, genero, numeroContacto, fechaInicio, activo', 'safe', 'on'=>'search'),
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
			'facturas' => array(self::HAS_MANY, 'Factura', 'idVendedor'),
			'tipodocumento' => array(self::BELONGS_TO, 'Tipodocumento', 'idTipoDocumento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVendedor' => 'Id Vendedor',
			'nombresVendedor' => 'Nombres',
			'apellidosVendedor' => 'Apellidos',
			'idTipoDocumento' => 'Tipo de documento',
			'numeroIdentificacion' => 'Número de identificación',
			'fechaNacimiento' => 'Fecha de nacimiento',
			'genero' => 'Género',
			'numeroContacto' => 'Número de contacto',
			'fechaInicio' => 'Fecha de inicio',
			'tipoDocumento' => 'Tipo de documento',
			'edad' => 'Edad',
			'activo' => 'Actividad',
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
		
		if ( $_GET["Vendedor"]['activo'] == "ACTIVO") {
			$this->activo ='1';
		}
		
		else
		
		if ( $_GET["Vendedor"]['activo'] == "INACTIVO") {
			$this->activo ='0';
		}
		else {
			$this->activo = "";
		}
		
		if($_GET["Vendedor"]['fechaNacimiento'] != "")
		{
			$edad = $_GET["Vendedor"]['fechaNacimiento'];
			$this->fechaNacimiento = date('Y', strtotime("-$edad year"));
		}

		if ( $_GET["Vendedor"]['genero'] == "MASCULINO") {
			$this->genero ='M';
		}
		
		else
		
		if ( $_GET["Vendedor"]['genero'] == "FEMENINO") {
			$this->genero ='F';
		}

		else {
			$this->genero = "";
		}

		$criteria=new CDbCriteria;

		$criteria->compare('idVendedor',$this->idVendedor,true);
		$criteria->compare('nombresVendedor',$this->nombresVendedor,true);
		$criteria->compare('apellidosVendedor',$this->apellidosVendedor,true);
		
		//$criteria->with =array('tipodocumento');
		//$criteria->addSearchCondition('tipodocumento.tipoDocumento', $this->idTipoDocumento);
		$criteria->compare('idTipoDocumento',$this->idTipoDocumento,true);

		$criteria->compare('numeroIdentificacion',$this->numeroIdentificacion,true);
		
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$this->fechaNacimiento = $_GET["Vendedor"]['fechaNacimiento'];
		
		$criteria->compare('genero',$this->genero,true);
		$this->genero = $_GET["Vendedor"]['genero'];

		$criteria->compare('numeroContacto',$this->numeroContacto,true);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		
		$criteria->compare('activo',$this->activo);
		$this->activo = $_GET["Vendedor"]['activo'];
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'apellidosVendedor ASC',
				)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vendedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getFullName()
	{
		return $this->nombresVendedor.' '.$this->apellidosVendedor;
	}
}

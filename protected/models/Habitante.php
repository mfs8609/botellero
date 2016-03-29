<?php

/**
 * This is the model class for table "habitante".
 *
 * The followings are the available columns in table 'habitante':
 * @property string $idHabitante
 * @property string $nombresHabitante
 * @property string $apellidosHabitante
 * @property string $genero
 * @property string $fechaNacimiento
 * @property string $numeroContactoHabitante
 * @property integer $propietario
 * @property integer $activo
 * @property string $idCasa
 *
 * The followings are the available model relations:
 * @property Casa $idCasa0
 */
class Habitante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'habitante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombresHabitante, apellidosHabitante, genero, propietario, activo, idCasa', 'required'),
			array('propietario, activo', 'numerical', 'integerOnly'=>true),
			array('nombresHabitante, apellidosHabitante, numeroContactoHabitante', 'length', 'max'=>50),
			array('genero', 'length', 'max'=>1),
			array('idCasa', 'length', 'max'=>10),
			array('fechaNacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idHabitante, nombresHabitante, apellidosHabitante, genero, fechaNacimiento, numeroContactoHabitante, propietario, activo, idCasa', 'safe', 'on'=>'search'),
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
			'casa' => array(self::BELONGS_TO, 'Casa', 'idCasa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idHabitante' => 'Id Habitante',
			'nombresHabitante' => 'Nombres',
			'apellidosHabitante' => 'Apellidos',
			'genero' => 'Género',
			'fechaNacimiento' => 'Fecha de nacimiento',
			'numeroContactoHabitante' => 'Número de contacto',
			'propietario' => 'Propietario',
			'activo' => 'Actividad',
			'idCasa' => 'Casa',
			'edad' => 'Edad',
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

		if($_GET['Habitante']['fechaNacimiento'] != "")
		{
			$edad = $_GET["Habitante"]['fechaNacimiento'];
			$this->fechaNacimiento = date('Y', strtotime("-$edad year"));
		}

		if ( $_GET["Habitante"]['activo'] == "ACTIVO") {
			$this->activo ='1';
		}
		
		else
		
		if ( $_GET["Habitante"]['activo'] == "INACTIVO") {
			$this->activo ='0';
		}
		else {
			$this->activo = "";
		}

		if ( $_GET["Habitante"]['genero'] == "MASCULINO") {
			$this->genero ='M';
		}
		
		else
		
		if ( $_GET["Habitante"]['genero'] == "FEMENINO") {
			$this->genero ='F';
		}

		else {
			$this->genero = "";
		}

		if ( $_GET["Habitante"]['idCasa'] == "A1") {
			$this->idCasa ='1';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A2") {
			$this->idCasa ='2';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A3") {
			$this->idCasa ='3';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A4") {
			$this->idCasa ='4';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A5") {
			$this->idCasa ='5';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A6") {
			$this->idCasa ='6';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A7") {
			$this->idCasa ='7';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A8") {
			$this->idCasa ='8';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A9") {
			$this->idCasa ='9';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "A10") {
			$this->idCasa ='10';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B1") {
			$this->idCasa ='11';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B2") {
			$this->idCasa ='12';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B3") {
			$this->idCasa ='13';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B4") {
			$this->idCasa ='14';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B5") {
			$this->idCasa ='15';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B6") {
			$this->idCasa ='16';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B7") {
			$this->idCasa ='17';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B8") {
			$this->idCasa ='18';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B9") {
			$this->idCasa ='19';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "B10") {
			$this->idCasa ='20';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C1") {
			$this->idCasa ='21';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C2") {
			$this->idCasa ='22';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C3") {
			$this->idCasa ='23';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C4") {
			$this->idCasa ='24';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C5") {
			$this->idCasa ='25';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C6") {
			$this->idCasa ='26';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C7") {
			$this->idCasa ='27';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C8") {
			$this->idCasa ='28';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C9") {
			$this->idCasa ='29';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "C10") {
			$this->idCasa ='30';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D1") {
			$this->idCasa ='31';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D2") {
			$this->idCasa ='32';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D3") {
			$this->idCasa ='33';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D4") {
			$this->idCasa ='34';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D5") {
			$this->idCasa ='35';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D6") {
			$this->idCasa ='36';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D7") {
			$this->idCasa ='37';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D8") {
			$this->idCasa ='38';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D9") {
			$this->idCasa ='39';
		}
		
		else
		
		if ( $_GET["Habitante"]['idCasa'] == "D10") {
			$this->idCasa ='40';
		}
		
		else
			$this->idCasa ="";
		
		if ( $_GET["Habitante"]['propietario'] == "SI") {
			$this->propietario ='1';
		}
		
		else
		
		if ($_GET["Habitante"]['propietario'] == "NO") {
			$this->propietario = '0';
		}

		else {
			$this->propietario = "";
		}

		$criteria=new CDbCriteria;

		$criteria->compare('idHabitante',$this->idHabitante,true);
		$criteria->compare('nombresHabitante',$this->nombresHabitante,true);
		$criteria->compare('apellidosHabitante',$this->apellidosHabitante,true);
		
		$criteria->compare('genero',$this->genero,true);
		$this->genero = $_GET["Habitante"]['genero'];

		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$this->fechaNacimiento = $_GET["Habitante"]['fechaNacimiento'];

		$criteria->compare('numeroContactoHabitante',$this->numeroContactoHabitante,true);
		
		$criteria->compare('propietario',$this->propietario);
		$this->propietario = $_GET["Habitante"]['propietario'];

		$criteria->compare('activo',$this->activo);
		$this->activo = $_GET["Habitante"]['activo'];
		
		$criteria->compare('idCasa',$this->idCasa,false);
		$this->idCasa = $_GET["Habitante"]['idCasa'];

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Habitante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

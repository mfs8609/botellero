<?php

/**
 * This is the model class for table "casa".
 *
 * The followings are the available columns in table 'casa':
 * @property string $idCasa
 * @property string $idManzana
 * @property string $idNumero
 * @property string $citofono
 * @property integer $servicio
 *
 * The followings are the available model relations:
 * @property Manzana $idManzana0
 * @property Numero $idNumero0
 * @property Habitante[] $habitantes
 */
class Casa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'casa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idManzana, idNumero, citofono, servicio', 'required'),
			array('servicio', 'numerical', 'integerOnly'=>true),
			array('idManzana, idNumero', 'length', 'max'=>10),
			array('citofono', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCasa, idManzana, idNumero, citofono, servicio', 'safe', 'on'=>'search'),
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
			'manzana' => array(self::BELONGS_TO, 'Manzana', 'idManzana'),
			'numero' => array(self::BELONGS_TO, 'Numero', 'idNumero'),
			'habitantes' => array(self::HAS_MANY, 'Habitante', 'idCasa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCasa' => 'Id Casa',
			'idManzana' => 'Manzana',
			'idNumero' => 'Número',
			'citofono' => 'Citófono',
			'servicio' => 'Servicio',
			'manzana' => 'Manzana',
			'numero' => 'Número',
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

		//echo '<pre>';
		//var_dump($_GET);
		
		
		//*****************************************************************************************************
		//Para que la busqueda de Servicio funcione en busqueda avanzada y en busqueda normal

		if ( $_GET["Casa"]['servicio'] == "SI") {
			$this->servicio ='1';
		}

		else

		if ($_GET["Casa"]['servicio'] == "NO") {
			$this->servicio = '0';
		}

		else {
			$this->servicio = "";
		}

		//*****************************************************************************************************

		$criteria=new CDbCriteria;

		$criteria->compare('idCasa',$this->idCasa,true);
		$criteria->compare('idManzana',$this->idManzana,false);
		$criteria->compare('idNumero',$this->idNumero,false);
		
		// Esto se usa si los datos no estan en un ComboBox
		/*$criteria->with =array('manzana', 'numero');
		$criteria->addSearchCondition('manzana.manzana', $this->idManzana);
		$criteria->addSearchCondition('LOWER(manzana.manzana)', strtolower($this->idManzana));
		$criteria->addSearchCondition('numero.numero', $this->idNumero);
		$criteria->addSearchCondition('LOWER(numero.numero)', strtolower($this->idNumero));
		*/

		$criteria->compare('citofono',$this->citofono,true);
		
		$criteria->compare('servicio',$this->servicio,true);
		$this->servicio = $_GET["Casa"]['servicio']; // Dejar en la busqueda el servicio por Si o No, en vez de 1 o 0
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Casa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

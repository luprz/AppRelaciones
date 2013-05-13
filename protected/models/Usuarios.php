<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $id
 * @property string $ciudad_id
 * @property string $nombres
 * @property string $identificacion
 * @property string $email
 * @property integer $estado
 * @property string $genero
 */
class Usuarios extends CActiveRecord
{
	public static $generos = array('' => '-- Seleccione el genero --', 'M' => 'Masculino', 'F' => 'Femenino');
	public static $estados = array('' => '-- Seleccione el estado --', '1' => 'Activo', '0' => 'Inactivo');
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ciudad_id, nombres, identificacion, email, genero', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('ciudad_id, identificacion', 'length', 'max'=>100),
			array('nombres, email', 'length', 'max'=>255),
			array('genero', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ciudad_id, nombres, identificacion, email, estado, genero', 'safe', 'on'=>'search'),
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
			'ciudad'=>array(self::BELONGS_TO, 'Ciudad', 'ciudad_id'),
			'experiencias'=>array(self::HAS_MANY, 'Experiencia', 'usuarios_id'),
			'estudio'=>array(self::HAS_MANY, 'Estudios', 'usuarios_id'),
			'folio'=>array(self::HAS_ONE, 'Folio', 'usuarios_id'),
			'vacantes'=>array(self::MANY_MANY, 'Vacantes', 'vacante_usuarios(usuarios_id, vacantes_id)'),
			'experienciaCount'=>array(self::STAT, 'Experiencia', 'usuarios_id', 'select'=>'count(t.id)'),
			'estudiosCount'=>array(self::STAT, 'Estudios', 'usuarios_id', 'select'=>'count(t.id)'),
			);
	}

	public static function getGenero($key=null){
		if($key!==null)
			return self::$generos[$key];		
		return self::$generos;		
	}

	public static function getEstado($key=null){
		if($key!==null)
			return self::$estados[$key];		
		return self::$estados;		
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ciudad_id' => 'Ciudad',
			'nombres' => 'Nombres',
			'identificacion' => 'Identificacion',
			'email' => 'Email',
			'estado' => 'Estado',
			'genero' => 'Genero',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('ciudad_id',$this->ciudad_id,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('identificacion',$this->identificacion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('genero',$this->genero,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
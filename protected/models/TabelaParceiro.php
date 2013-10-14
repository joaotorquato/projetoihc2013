<?php

/**
 * This is the model class for table "tabela_parceiro".
 *
 * The followings are the available columns in table 'tabela_parceiro':
 * @property integer $id_parceiro
 * @property string $nome
 * @property string $cnpj
 * @property string $cep
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $telefone
 * @property string $celular
 * @property string $email
 */
class TabelaParceiro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tabela_parceiro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_parceiro, nome, cnpj, cep, endereco, complemento, bairro, cidade, uf, telefone, celular, email', 'required'),
			array('id_parceiro', 'numerical', 'integerOnly'=>true),
			array('nome, cnpj, cep, bairro, cidade, email', 'length', 'max'=>100),
			array('endereco, complemento', 'length', 'max'=>500),
			array('uf', 'length', 'max'=>2),
			array('telefone, celular', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_parceiro, nome, cnpj, cep, endereco, complemento, bairro, cidade, uf, telefone, celular, email', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_parceiro' => 'Id Parceiro',
			'nome' => 'Nome',
			'cnpj' => 'Cnpj',
			'cep' => 'Cep',
			'endereco' => 'Endereco',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'uf' => 'Uf',
			'telefone' => 'Telefone',
			'celular' => 'Celular',
			'email' => 'Email',
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

		$criteria->compare('id_parceiro',$this->id_parceiro);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabelaParceiro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

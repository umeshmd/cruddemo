<?php

/**
 * This is the model class for table "personal_details".
 *
 * The followings are the available columns in table 'personal_details':
 * @property integer $id
 * @property string $name
 * @property string $country
 * @property string $email
 * @property string $moblie_number
 * @property string $about_you
 * @property string $birth_day
 */
class PersonalDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PersonalDetails the static model class
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
		return 'personal_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('name, email, moblie_number', 'required'),
                        array('email', 'email'),
                        array('moblie_number', 'length', 'max' => 10,'min' => 10, 'tooLong' => 'Mobile Number is too long (max is 10 characters).'),
			array('name, email, moblie_number, about_you', 'length', 'max'=>255),
			array('country', 'length', 'max'=>45),
			array('birth_day', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, country, email, moblie_number, about_you, birth_day', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'country' => 'Country',
			'email' => 'Email',
			'moblie_number' => 'Moblie Number',
			'about_you' => 'About You',
			'birth_day' => 'Birth Day',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('moblie_number',$this->moblie_number,true);
		$criteria->compare('about_you',$this->about_you,true);
		$criteria->compare('birth_day',$this->birth_day,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
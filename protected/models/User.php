<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $realm
 * @property string $username
 * @property string $password
 * @property string $credentials
 * @property string $challenges
 * @property string $email
 * @property integer $emailVerified
 * @property string $verificationToken
 * @property string $status
 * @property string $created
 * @property string $lastUpdated
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Rating[] $ratings
 * @property Thesis[] $thesises
 * @property Role[] $roles
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, email', 'required'),
			array('emailVerified', 'numerical', 'integerOnly'=>true),
			array('realm, username, password, email, verificationToken, status', 'length', 'max'=>512),
			array('credentials, challenges, created, lastUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, realm, username, password, credentials, challenges, email, emailVerified, verificationToken, status, created, lastUpdated', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comment', 'user_id'),
			'ratings' => array(self::HAS_MANY, 'Rating', 'user_id'),
			'thesises' => array(self::MANY_MANY, 'Thesis', 'ThesisMapping(user_id, thesis_id)'),
			'roles' => array(self::MANY_MANY, 'Role', 'UserRole(user_id, role_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'realm' => 'Realm',
			'username' => 'Username',
			'password' => 'Password',
			'credentials' => 'Credentials',
			'challenges' => 'Challenges',
			'email' => 'Email',
			'emailVerified' => 'Email Verified',
			'verificationToken' => 'Verification Token',
			'status' => 'Status',
			'created' => 'Created',
			'lastUpdated' => 'Last Updated',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('realm',$this->realm,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('credentials',$this->credentials,true);
		$criteria->compare('challenges',$this->challenges,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('emailVerified',$this->emailVerified);
		$criteria->compare('verificationToken',$this->verificationToken,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('lastUpdated',$this->lastUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

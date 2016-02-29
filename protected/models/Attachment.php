<?php

/**
 * This is the model class for table "Attachment".
 *
 * The followings are the available columns in table 'Attachment':
 * @property integer $attachment_id
 * @property integer $thesis_id
 * @property string $name
 * @property string $description
 * @property string $type
 * @property string $url
 * @property string $limitation
 * @property integer $visible
 * @property string $created
 *
 * The followings are the available model relations:
 * @property Thesis $thesis
 */
class Attachment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Attachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thesis_id, visible', 'numerical', 'integerOnly'=>true),
			array('name, url, limitation', 'length', 'max'=>250),
			array('type', 'length', 'max'=>25),
			array('description, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attachment_id, thesis_id, name, description, type, url, limitation, visible, created', 'safe', 'on'=>'search'),
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
			'thesis' => array(self::BELONGS_TO, 'Thesis', 'thesis_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'attachment_id' => 'Attachment',
			'thesis_id' => 'Thesis',
			'name' => 'Name',
			'description' => 'Description',
			'type' => 'Type',
			'url' => 'Url',
			'limitation' => 'Limitation',
			'visible' => 'Visible',
			'created' => 'Created',
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

		$criteria->compare('attachment_id',$this->attachment_id);
		$criteria->compare('thesis_id',$this->thesis_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('limitation',$this->limitation,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attachment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

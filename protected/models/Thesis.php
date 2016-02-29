<?php

/**
 * This is the model class for table "Thesis".
 *
 * The followings are the available columns in table 'Thesis':
 * @property integer $thesis_id
 * @property string $thesis_name
 * @property string $intro
 * @property string $score_instructor
 * @property string $score_reviewer
 * @property string $score_council
 * @property string $score_total
 * @property integer $have_disk
 * @property integer $counter
 * @property string $created
 * @property string $status
 * @property string $note
 *
 * The followings are the available model relations:
 * @property Attachment[] $attachments
 * @property Comment[] $comments
 * @property Rating[] $ratings
 * @property User[] $users
 * @property Tag[] $tags
 */
class Thesis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Thesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('have_disk, counter', 'numerical', 'integerOnly'=>true),
			array('thesis_name', 'length', 'max'=>250),
			array('score_instructor, score_reviewer, score_council, score_total', 'length', 'max'=>10),
			array('status', 'length', 'max'=>25),
			array('intro, created, note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('thesis_id, thesis_name, intro, score_instructor, score_reviewer, score_council, score_total, have_disk, counter, created, status, note', 'safe', 'on'=>'search'),
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
			'attachments' => array(self::HAS_MANY, 'Attachment', 'thesis_id'),
			'comments' => array(self::HAS_MANY, 'Comment', 'thesis_id'),
			'ratings' => array(self::HAS_MANY, 'Rating', 'thesis_id'),
			'users' => array(self::MANY_MANY, 'User', 'ThesisMapping(thesis_id, user_id)'),
			'tags' => array(self::MANY_MANY, 'Tag', 'ThesisTag(thesis_id, tag_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'thesis_id' => 'Thesis',
			'thesis_name' => 'Thesis Name',
			'intro' => 'Intro',
			'score_instructor' => 'Score Instructor',
			'score_reviewer' => 'Score Reviewer',
			'score_council' => 'Score Council',
			'score_total' => 'Score Total',
			'have_disk' => 'Have Disk',
			'counter' => 'Counter',
			'created' => 'Created',
			'status' => 'Status',
			'note' => 'Note',
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

		$criteria->compare('thesis_id',$this->thesis_id);
		$criteria->compare('thesis_name',$this->thesis_name,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('score_instructor',$this->score_instructor,true);
		$criteria->compare('score_reviewer',$this->score_reviewer,true);
		$criteria->compare('score_council',$this->score_council,true);
		$criteria->compare('score_total',$this->score_total,true);
		$criteria->compare('have_disk',$this->have_disk);
		$criteria->compare('counter',$this->counter);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Thesis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "a_fifa_ranks".
 *
 * The followings are the available columns in table 'a_fifa_ranks':
 * @property integer $rank
 * @property integer $mf_id
 * @property string $rank_date
 * @property string $next_rank
 * @property string $description
 * @property string $ts
 */
class FifaRanks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FifaRanks the static model class
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
		return 'a_fifa_ranks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rank, mf_id, rank_date, next_rank, description, ts', 'required'),
			array('rank, mf_id', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rank, mf_id, rank_date, next_rank, description, ts', 'safe', 'on'=>'search'),
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
			'rank' => 'Rank',
			'mf_id' => 'Mf',
			'rank_date' => 'Rank Date',
			'next_rank' => 'Next Rank',
			'description' => 'Description',
			'ts' => 'Ts',
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

		$criteria->compare('rank',$this->rank);
		$criteria->compare('mf_id',$this->mf_id);
		$criteria->compare('rank_date',$this->rank_date,true);
		$criteria->compare('next_rank',$this->next_rank,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('ts',$this->ts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
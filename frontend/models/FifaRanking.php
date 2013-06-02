<?php

/**
 * This is the model class for table "a_fifa_ranking".
 *
 * The followings are the available columns in table 'a_fifa_ranking':
 * @property integer $id
 * @property integer $rank
 * @property string $fifa3
 * @property integer $ranking
 * @property integer $points
 * @property integer $change_ranking
 * @property string $change_status
 * @property integer $change_points
 * @property integer $c_ranking
 * @property integer $c_change_ranking
 * @property string $c_change_status
 * @property string $cn_name
 * @property integer $cn_id
 * @property integer $c_id
 * @property integer $c_fifa_id
 * @property string $c_abbreviation
 * @property string $ts
 */
class FifaRanking extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FifaRanking the static model class
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
		return 'a_fifa_ranking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rank, fifa3, ranking, points, change_ranking, change_points, c_ranking, c_change_ranking, cn_name, cn_id, c_id, c_fifa_id, c_abbreviation, ts', 'required'),
			array('rank, ranking, points, change_ranking, change_points, c_ranking, c_change_ranking, cn_id, c_id, c_fifa_id', 'numerical', 'integerOnly'=>true),
			array('fifa3', 'length', 'max'=>3),
			array('change_status, c_change_status', 'length', 'max'=>5),
			array('cn_name', 'length', 'max'=>100),
			array('c_abbreviation', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rank, fifa3, ranking, points, change_ranking, change_status, change_points, c_ranking, c_change_ranking, c_change_status, cn_name, cn_id, c_id, c_fifa_id, c_abbreviation, ts', 'safe', 'on'=>'search'),
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
			'rank' => 'Rank',
			'fifa3' => 'Fifa3',
			'ranking' => 'Ranking',
			'points' => 'Points',
			'change_ranking' => 'Change Ranking',
			'change_status' => 'Change Status',
			'change_points' => 'Change Points',
			'c_ranking' => 'C Ranking',
			'c_change_ranking' => 'C Change Ranking',
			'c_change_status' => 'C Change Status',
			'cn_name' => 'Cn Name',
			'cn_id' => 'Cn',
			'c_id' => 'C',
			'c_fifa_id' => 'C Fifa',
			'c_abbreviation' => 'C Abbreviation',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('rank',$this->rank);
		$criteria->compare('fifa3',$this->fifa3,true);
		$criteria->compare('ranking',$this->ranking);
		$criteria->compare('points',$this->points);
		$criteria->compare('change_ranking',$this->change_ranking);
		$criteria->compare('change_status',$this->change_status,true);
		$criteria->compare('change_points',$this->change_points);
		$criteria->compare('c_ranking',$this->c_ranking);
		$criteria->compare('c_change_ranking',$this->c_change_ranking);
		$criteria->compare('c_change_status',$this->c_change_status,true);
		$criteria->compare('cn_name',$this->cn_name,true);
		$criteria->compare('cn_id',$this->cn_id);
		$criteria->compare('c_id',$this->c_id);
		$criteria->compare('c_fifa_id',$this->c_fifa_id);
		$criteria->compare('c_abbreviation',$this->c_abbreviation,true);
		$criteria->compare('ts',$this->ts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
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
class FifaRanking extends CModel
{

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		 array('rank, fifa3, ranking, points, change_ranking, change_points, c_ranking, c_change_ranking, cn_name, cn_id, c_id, c_fifa_id, c_abbreviation, ts', 'required'),
		 array('rank, ranking, points, change_ranking, change_points, c_ranking, c_change_ranking, cn_id, c_id, c_fifa_id', 'numerical', 'integerOnly' => true),
		 array('fifa3', 'length', 'max' => 3),
		 array('change_status, c_change_status', 'length', 'max' => 5),
		 array('cn_name', 'length', 'max' => 100),
		 array('c_abbreviation', 'length', 'max' => 10),
		 // The following rule is used by search().
		 // Please remove those attributes that should not be searched.
		 array('id, rank, fifa3, ranking, points, change_ranking, change_status, change_points, c_ranking, c_change_ranking, c_change_status, cn_name, cn_id, c_id, c_fifa_id, c_abbreviation, ts', 'safe', 'on' => 'search'),
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
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeNames()
	{
		array('id', 'rank', 'fifa3', 'ranking', 'points', 'change_ranking', 'change_points', 'c_ranking', 'c_change_ranking', 'cn_name', 'cn_id', 'c_id', 'c_fifa_id', 'c_abbreviation', 'ts');
	}

}
<?php

/**
 * This is the model class for table "{{_user}}".
 *
 * The followings are the available columns in table '{{_user}}':
 * @property integer $id
 * @property string $member_num
 * @property string $password
 * @property integer $dl_id
 * @property integer $origin_id
 * @property integer $s2
 * @property integer $s3
 * @property integer $s4
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{_user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_num, password, dl_id, origin_id, s2, s3, s4', 'required'),
			array('dl_id, origin_id, s2, s3, s4', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, member_num, password, dl_id, origin_id, s2, s3, s4', 'safe', 'on'=>'search'),
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
			'id' => '用户id',
			'member_num' => '用户会员卡',
			'password' => '用户密码',
			'dl_id' => '驾驶证ID',
			'origin_id' => '用户渠道ID',
			's2' => '保留字段',
			's3' => '保留字段',
			's4' => '保留字段',
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
		$criteria->compare('member_num',$this->member_num,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('dl_id',$this->dl_id);
		$criteria->compare('origin_id',$this->origin_id);
		$criteria->compare('s2',$this->s2);
		$criteria->compare('s3',$this->s3);
		$criteria->compare('s4',$this->s4);

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
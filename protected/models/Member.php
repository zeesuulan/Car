<?php

/**
 * This is the model class for table "{{_member}}".
 *
 * The followings are the available columns in table '{{_member}}':
 * @property integer $id
 * @property string $member_num
 * @property string $password
 * @property integer $dl_id
 * @property integer $origin_id
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{_member}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_num, password, dl_id, origin_id', 'required'),
			array('dl_id, origin_id', 'numerical', 'integerOnly'=>true),
			array('member_num', 'length', 'max'=>20),
			array('password', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, member_num, dl_id, origin_id', 'safe', 'on'=>'search'),
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
			"origin_name" => array(self::BELONGS_TO, 'MemberOrigin', 'origin_id', 'select'=>"name"),
			"dlInfo" => array(self::BELONGS_TO, 'Dl', 'dl_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '用户id',
			'member_num' => '会员卡号',
			'password' => '密码',
			'dl_id' => '驾驶证',
			'origin_id' => '用户渠道',
			'origin_name.name' => '用户渠道',
			'dlInfo.name' => '用户姓名',
			'dlInfo.id_num' => '用户身份证',
			'dlInfo.valid_date_start' => '驾照有效起始日期',
			'dlInfo.valid_date_end' => '驾照有效结束日期',
			'dlInfo.dl_level' => '驾照类型',
			'dlInfo.birthday' => '生日',
			'dlInfo.address' => '地址',
			'dlInfo.nationality' => '国籍',
			'dlInfo.firsttime' => '初次领证日期',
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

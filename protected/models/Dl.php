<?php

/**
 * This is the model class for table "{{_dl}}".
 *
 * The followings are the available columns in table '{{_dl}}':
 * @property integer $id
 * @property string $name
 * @property integer $id_num
 * @property integer $valid_date_start
 * @property integer $valid_date_end
 * @property integer $dl_level
 * @property integer $gender
 * @property integer $birthday
 * @property string $address
 * @property string $nationality
 * @property integer $firsttime
 */
class Dl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{_dl}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_num, valid_date_start, valid_date_end, dl_level, gender, birthday, address, nationality, firsttime', 'required'),
			array('nationality', 'default', 'setOnEmpty'=>true, 'value'=>'中国'),
			array('id_num, dl_level, gender', 'numerical', 'integerOnly'=>true),
			array('valid_date_start, valid_date_end, birthday, firsttime', 'type','dateFormat'=>'yyyy-mm-dd', 'type'=>'date'),
			array('name, nationality', 'length', 'max'=>20),
			array('address', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, id_num, valid_date_start, valid_date_end, dl_level, gender, birthday, address, nationality, firsttime', 'safe', 'on'=>'search'),
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
            'level'=>array(self::BELONGS_TO, 'DlLevel', 'dl_level', 'select'=>'name')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '驾驶证ID',
			'name' => '持有人姓名',
			'id_num' => '持有人身份证',
			'dl_level' => '驾照类型',
			'valid_date_start' => '有效期起始日期',
			'valid_date_end' => '有效期结束日期',
			'dl_level' => '驾照类型',
			'gender' => '性别',
			'birthday' => '生日',
			'address' => '住址',
			'nationality' => '国籍',
			'firsttime' => '初次领证日期',
			'level.name' => '驾照类型'
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_num',$this->id_num);
		$criteria->compare('valid_date_start',$this->valid_date_start);
		$criteria->compare('valid_date_end',$this->valid_date_end);
		$criteria->compare('dl_level',$this->dl_level);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birthday',$this->birthday);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('firsttime',$this->firsttime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

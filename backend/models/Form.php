<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "form".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $noofpeople
 * @property string $aadhar
 * @property string $fromstate
 * @property string $fromdistrict
 * @property string $todistrict
 * @property string $traveldatefrom
 * @property string $traveldateto
 * @property string $viastate1
 * @property string $viastate2
 * @property string $viastate3
 * @property int $applicationno
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'noofpeople', 'aadhar', 'fromstate', 'fromdistrict' , 'todistrict', 'traveldatefrom', 'traveldateto' , 'viastate1', 'applicationno' , 'status'], 'required'],
            [['noofpeople', 'applicationno'], 'integer'],
            [['traveldatefrom', 'traveldateto'], 'safe'],
            [['aadhar'] , 'string' , 'max' => 12 , 'min' => 12] ,
            [['noofpeople'] , 'integer' , 'max'=>50],
            [['phone'] , 'string' , 'max' => 10 , 'min' => 10] ,
            [['name', 'phone', 'fromstate', 'fromdistrict', 'todistrict' , 'viastate1', 'viastate2', 'viastate3' , 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'noofpeople' => 'No of people',
            'aadhar' => 'Aadhar Number',
            'fromstate' => 'From State',
            'fromdistrict' => 'From District',
            'tostate' => 'To State',
            'todistrict' => 'To District',
            'traveldatefrom' => 'Travel Date From',
            'traveldateto' => 'Travel Date To',
            'viastate1' => 'Via State',
            'viastate2' => 'Via State',
            'viastate3' => 'Via State',
            'applicationno' => 'Application No',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $creation_time
 * @property string $fio
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string|null $filejson_path
 * @property string|null $filebd_path
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['creation_time', 'fio', 'email', 'phone', 'password'], 'required'],
            [['creation_time'], 'safe'],
            [['fio', 'filejson_path', 'filebd_path'], 'string', 'max' => 122],
            [['email', 'phone', 'password'], 'string', 'max' => 64],
            [['email'], 'unique'],
            [['phone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'creation_time' => 'Creation Time',
            'fio' => 'Fio',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
            'filejson_path' => 'Filejson Path',
            'filebd_path' => 'Filebd Path',
        ];
    }
}

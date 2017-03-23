<?php
namespace common\models;

use yii\base\Model;
/**
 * Signup form
 */
class UserForm extends Model
{
    public $name;
    public $email;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['name', 'string', 'min' => 2, 'max' => 10],
            ['email', 'email'],
        ];
    }

}

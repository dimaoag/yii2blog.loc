<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 27.10.17
 * Time: 19:35
 */


namespace app\models;

//use Yii;
//use yii\base\Model;

class MyList extends \yii\db\ActiveRecord {

    public function rules()
    {
        return [
            [['title','description'], 'required'],
        ];
    }

    public static function tableName(){
        return 'list';
    }

    public static function getAll(){

        $data = self::find()
            ->all();

        return $data;
    }

    public static function getOneTask($id){

        $data = self::find()
            -> where(['id' => $id])
            -> one();

        return $data;
    }

}
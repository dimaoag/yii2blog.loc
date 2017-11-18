<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.10.17
 * Time: 20:28
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;


    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png'],
        ];
    }


    public function uploadFile(UploadedFile $file, $currentImage){


        $this->image = $file;

        if ($this->validate()){

            $this->deleteCurrentImage($currentImage);

            //$filename = strtolower(md5(uniqId($file->baseName)) . '.' . $file->extension);

            $filename = $this->generateFileName();

            $file->saveAs($this->getFolder() . $filename);

            return $filename;
        }

    }


    private function getFolder(){

        return Yii::getAlias('@web') . 'uploads/';
    }

    private function generateFileName(){

        return strtolower(md5(uniqId($this->image->baseName)) . '.' . $this->image->extension);
    }

    public function deleteCurrentImage($currentImage){

        if(!empty($currentImage) && $currentImage != null){

            if(file_exists($this->getFolder() . $currentImage)){

                unlink($this->getFolder() . $currentImage);
            }

        }
    }




}
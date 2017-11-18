<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii;
use app\models\MyList;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $array = MyList::getAll();

        return $this->render('index', ['model' => $array]);
    }

    public function actionEdit($id){

        $model = MyList::getOneTask($id);


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('edit', ['model' => $model]);
        }


    }


    public function actionCreate(){

        $model = new MyList();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    public function actionDelete($id) {

        $model = MyList::getOneTask($id);
        $model->delete();

        return $this->redirect(['index']);
    }

}

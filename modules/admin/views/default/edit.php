<?php
$this->title = 'Edit';
$this->params['breadcrumbs'][''] = $this->title;
?>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput()?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'description')->textInput() ?>
        </div>
        <div class="col-md-12">
            <?= Html::submitButton('Save', ['class' => 'btn btn-warning']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>
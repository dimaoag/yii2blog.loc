<?php
use yii\helpers\Html;

$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $var ?></h1>
<h2><?= $her ?></h2>

<div>
    <?php foreach ($array as $item): ?>
        <p>
            <a href="<?= \yii\helpers\Url::to(['site/view','id'=>$item->id])?>"><?php echo $item -> title ?></a>
        </p>
    <?php endforeach ?>
</div>


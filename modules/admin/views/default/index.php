<?php
$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Admin panel</h1>


<div>
    <table class="table-bordered" style="width: 400px">
        <thead>
        <tr>
            <td># </td>
            <td>Title</td>
            <td>Description </td>
            <td>Action </td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($model as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->title ?></td>
                <td><?= $item->description ?></td>
                <td>
                    <a href="<?= \yii\helpers\Url::to(['default/edit', 'id'=>$item->id])?>" class="btn btn-warning">Edit</a>
                    <a href="<?= \yii\helpers\Url::to(['default/delete', 'id'=>$item->id])?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<br>
<a href="<?= \yii\helpers\Url::to(['default/create'])?>" class="btn btn-primary">Creare</a>
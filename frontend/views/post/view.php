<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <hr>
        <?=$model->content?>
        <hr>
        <div class="row">
            <div class="col-xs-6">
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                ]) ?>
            </div>
            <div class="col-xs-6">
                <p class="text-right">
                    <?=$model->updated_at?>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'title',
            // 'slug',
            'lead_photo',
            // 'lead_text:ntext',
            'content:ntext',
            // 'meta_description',
            // 'created_at',
            'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'category_id',
        ],
    ]) ?>




 -->
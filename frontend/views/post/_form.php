<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>




<!--     <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
 -->
<!--      <?= $form->field($model, 'lead_photo')->textInput(['maxlength' => true]) ?> -->

<!--     <?= $form->field($model, 'lead_text')->textarea(['rows' => 6]) ?>
 -->
    <?= $form->field($model, 'content')->textarea(['rows' => 6,]) ?> <?php //'class'=> 'summernote']) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'created_at')->textInput() ?>
 -->
<!--     <?= $form->field($model, 'updated_at')->textInput() ?>
 -->
<!--     <?= $form->field($model, 'created_by')->textInput() ?>
 -->
<!--     <?= $form->field($model, 'updated_by')->textInput() ?>
 -->
     <?= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

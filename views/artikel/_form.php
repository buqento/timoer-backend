<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use app\models\Kategori;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artikel-form">

    <?php $form = ActiveForm::begin(); ?>
   <?php
    $kategoris = Kategori::find()->select('name')->indexBy('id')->column();

    echo $form->field($model, 'kategori_id')->dropDownlist($kategoris);?>
    
    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konten_pertama')->textArea(['rows' => 3]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'konten')->textArea(['rows' => 10]) ?>
    <?php  
    // $form->field($model, 'konten')->widget(TinyMce::className(), [
    //     'options' => ['rows' => 10],
    //     'language' => 'en',
    //     'clientOptions' => [
    //         'plugins' => [
    //             "advlist autolink lists link charmap print preview anchor",
    //             "searchreplace visualblocks code fullscreen",
    //             "insertdatetime media table contextmenu paste"
    //         ],
    //         'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    //     ]
    // ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

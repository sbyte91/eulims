<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\lab\Sampletypetestname */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sampletypetestname-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sampletype_id')->textInput() ?>

    <?= $form->field($model, 'testname_id')->textInput() ?>

    <?= $form->field($model, 'added_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClinicQ */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinic-q-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'q')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '999-999',
]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

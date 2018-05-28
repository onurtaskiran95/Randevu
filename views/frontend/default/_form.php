<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Randevu\models\TblAppointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-appointment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'appointment_date')->textInput() ?>

    <?= $form->field($model, 'appointment_name')->textInput() ?>

    <?= $form->field($model, 'appointment_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

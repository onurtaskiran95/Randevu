<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Randevu\models\TblAppointment */

$this->title = 'Güncelle: ' . $model->appointment_name . ' Randevu';
$this->params['breadcrumbs'][] = ['label' => 'Randevu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->appointment_name, 'url' => ['view', 'id' => $model->appointment_id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="tbl-appointment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

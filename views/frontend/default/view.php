<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\Randevu\models\TblAppointment */

$this->title = $model->appointment_id;
$this->params['breadcrumbs'][] = ['label' => 'Randevu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-appointment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->appointment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->appointment_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Silmek istediğinize emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'appointment_id',
            'appointment_date',
            'appointment_name:ntext',
            'appointment_text:ntext',
        ],
    ]) ?>

</div>

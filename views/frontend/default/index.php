<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Randevu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-appointment-index">

    <h1>Randevu Listesi</h1>

    <p>
        <?= Html::a('Randevu Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'appointment_id',
            'appointment_date',
            'appointment_name',
            'appointment_text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

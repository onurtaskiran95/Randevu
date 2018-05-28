<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\Randevu\models\TblAppointment */

$this->title = 'Randevu Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Randevu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-appointment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

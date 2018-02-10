<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClinicQSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clinic Qs';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">

    <div class="page-header">
        <h3> ระบบคิว ห้อง LAB</h3>
    </div>
    <div class="row>">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    เรียกคิว clinic
                </div>
                <div class="panel-body">
                    
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
                
        </div>
        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    คิวที่เรียกไปแล้ว
                </div>
                <div class="panel-body">
                    
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
                
        </div>
    </div>
</div>
<div class="clinic-q-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clinic Q', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'q',
            'clinic',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

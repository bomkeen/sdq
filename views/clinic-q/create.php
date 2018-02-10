<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClinicQ */

$this->title = 'Create Clinic Q';
$this->params['breadcrumbs'][] = ['label' => 'Clinic Qs', 'url' => ['index']];
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
                     <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
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


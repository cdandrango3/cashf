<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BankdetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Detalle Bancario');
$this->params['breadcrumbs'][] = $this->title;
Yii::error('message', 'category');
?>
<div class="bank-details-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Banco'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'number_account',
            [
                'attribute' => 'chart_account_id',
                'label'=>'Cuenta Contable Bancaria',
                'value' => function ($data){
                   $var=\app\models\ChartAccountsSearch::findOne(["id" => $data->chart_account_id]);
                    return $var->slug ;
                }
            ],
            [
                'attribute' => 'city_id',
                'label'=>'Ciudad',
                'value' => function ($data){
                    $var=\app\models\City::findOne(["id" => $data->city_id]);
                    return $var->cityname ;
                }
            ],

            //'status:boolean',
            //'bank_type_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

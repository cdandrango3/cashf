<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\productSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Productos', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);
    $dataProvider->pagination->pageSize=10;


     ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'status:boolean',
            'category',
            //'product_type_id',
            //'brand',
            //'purpose',
            //'product_iva_id',
            //'precio',
            //'costo',

            ['class' => 'yii\grid\ActionColumn','template'=>' &nbsp;&nbsp;&nbsp;&nbsp; {update} &nbsp;&nbsp;&nbsp;&nbsp;  {delete} &nbsp;&nbsp;&nbsp;&nbsp;  {view}</div>'],
        ],
    ]); ?>


</div>

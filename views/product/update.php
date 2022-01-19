<?php

use app\models\ProductType;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\product */
/* @var $model2 app\models\product_type */
$this->title = 'Update Product: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
$type=ProductType::find()->select("name")->all();
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'model2'=>$type
    ]) ?>

</div>

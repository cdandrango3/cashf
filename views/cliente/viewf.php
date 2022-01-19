<?php

use app\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Consultar Documento Fisico';
$this->params['breadcrumbs'][] = $this->title;
$producto=New Product;
$this->registerCss("");
?>


    <div class="row">
        <div class="col text-right " style="margin-right: 60px">
            <div class="btn-group" role="group">
            <?php if($model->tipo_de_documento=="Cliente"){?>
                <a href='<?=Url::to(['cobros/cobros', 'id' => $model->n_documentos])?>' class="btn btn-default" title="Registro de cobros" data-toggle="tooltip"> <i class="fas fa-donate"></i></a>

            <?php }else{?>
                <a href='<?=Url::to(['cobros/cobros', 'id' => $model->n_documentos])?>' class="btn btn-default" title="Registro de pagos" data-toggle="tooltip"> <i class="fas fa-donate"></i></a>
            <?php }?>
            <div class="dropdown show">
                <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-file-pdf text-red"></i>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a href='<?=Url::to(['cliente/pdfview', 'id' => $model->n_documentos,"ischair"=>true])?>'class="btn btn-default" target="_blank" title="Exportar a pdf" data-toggle="tooltip"> Pdf con asiento</a>
                    <a href='<?=Url::to(['cliente/pdfview', 'id' => $model->n_documentos,"ischair"=>false])?>'class="btn btn-default" target="_blank" title="Exportar a pdf" data-toggle="tooltip"> Pdf sin asiento</a>
                </div>

            </div>
                </div>
        </div>
        </div>


<br>
<div class="container">
    <div class="card">
        <div class="card-head bg-primary p-2">
            <div class="container">
                <h3>Datos de la factura</h3>
            </div>

        </div>
        <div class="card-body">
            <table border="0" cellpadding="5" cellspacing="4" style=" padding:40px;width:100%;font-family: Arial;font-size:9pt">
           <tr>
            <div class="" style="font-size:12px">
                <?= "Fecha de emisión:".$model->f_timestamp?>
            </div>
                </tr>
                <tr>
                <div class="" style="font-size:12px">
              <td><p>Tipo de documento</p></td><td><?=$model->tipo_de_documento?></td>
            </div>
                </tr>
                <tr>
                <div class="" style="font-size:12px">
                <?= "Número de documento:".$model->n_documentos?>
            </div>
            </tr>
                <tr>
                    <div class="" style="font-size:12px">
                <?= "Persona:".$personam->name?>
            </div>
                </tr>
                <?php if(!is_null($salesman)):?>
            <tr>
                <?= "Vendedor:".$salesman->name?>
            </tr>

                <?php endif ?>
        </div>
    </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div class="card">
        <div class="card-body">
          <table class="table table-striped table-bordered">
              <thead >
              <tr>
              <td>Cantidad</td>
              <td> Producto </td>
              <td> Valor unitario </td>
              <td> Valor final </td>
              </tr>
              </thead>
          <tbody>
          <?php foreach($model2 as $mbody): ?>
          <?php $pro=$producto::findOne($mbody->id_producto)?>
          <tr>
              <td><?=$mbody->cant?></td>
              <td><?=$pro->name?></td>
              <td><?=$mbody->precio_u?></td>
              <td><?=$mbody->precio_total?></td>

          </tr>
          <?php endforeach ?>
          </tbody>

          </table>
        </div>
    </div>

</div>
<div class="container">
    <div class="card p-2">
    <div class="row">
        <div class="col-7">
            <table border="0" cellpadding="5" cellspacing="4" style=" padding:40px;width:100%;font-family: Arial;font-size:9pt">
                <tr>
                    <td><strong><p>Descripción</p></strong></td>
                    <td><p><?= $modelfin->description ?></p></td>
                </tr>

            </table>
        </div>
        <div class="col"></div>
       ddererwer4

                <table border="0" cellpadding="5" cellspacing="4" style=" padding:40px;width:100%;font-family: Arial;font-size:9pt">
                <tr>
                    <td>
                <strong>Subtotal:   </strong> </td> <td> <div class="su"><?=$modelfin->subtotal12?></div></td>
                </tr>
                <tr>
                <td><strong>Iva: </strong> </td> <td> <div class="su"> <?=$modelfin->iva ?></td></div>
            <tr> <td> <strong>Descuento: </strong> </td> <div class="su">  <td><?=$modelfin->descuento ?></td></div></tr>
            <tr> <td> <strong>Total: </strong> </td> <td><div class="su"><?=$modelfin->total ?></td></div></tr>

                </table>
            </div>
        </div>
    </div>
</div>

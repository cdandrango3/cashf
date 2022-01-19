
<?php
use kartik\select2\Select2;
use yii\helpers\Url;
/* @var $this yii\web\View */


//$this->params['breadcrumbs'][] = ['label' => $this->title, 'active' => true];
?>
<center><b><h3>Bienvenidos a Casbook, ¿Qué deseas hacer?</h3></b></center>

<br>
<div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <a href= "<?= Yii::getAlias('@web') . "/product/create" ?>" class="small-box-footer" >
			   <br>
			   <img src="<?= Yii::getAlias('@web') . "/images/crearservicio.png"; ?>" width="90" class="img-circle elevation-2" alt="User Image">
			   <br><br>
			 <h5> Crear un Servicio/Producto</h5>
			  </a>
            </div>
          </div>
       
	   <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <a href= "<?= Yii::getAlias('@web') . "/person/index" ?>" class="small-box-footer" >
			   <br>
			   <img src="<?= Yii::getAlias('@web') . "/images/grupo.png"; ?>" width="90" class="img-circle elevation-2" alt="User Image">
			   <br><br>
			  <h5>Registrar prersonas</h5>
			  </a>
            </div>
          </div>
		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <a href= "<?= Yii::getAlias('@web') . "/cliente/index?tipos=Cliente" ?>" class="small-box-footer" >
			   <br>
			   <img src="<?= Yii::getAlias('@web') . "/images/cobro.png"; ?>" width="90" class="img-circle elevation-2" alt="User Image">
			   <br><br>
			  <h5>Registrar una cobro</h5>
			  </a>
            </div>
          </div>
		 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <a href= "<?= Yii::getAlias('@web') . "/cliente/index?tipos=Proveedor" ?>" class="small-box-footer" >
			   <br>
			   <img src="<?= Yii::getAlias('@web') . "/images/servicioproducto.png"; ?>" width="90" class="img-circle elevation-2" alt="User Image">
			   <br><br>
			  <h5>Registrar una compra</h5>
			  </a>
            </div>
          </div>
		  
        </div>
        
          
          
      </div>


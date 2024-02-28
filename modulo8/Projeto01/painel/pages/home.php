<?php
    $usuariosOnline = Painel::listarUsuariosOnline();

    $totalDeVisitas = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
    $totalDeVisitas->execute();

    $totalDeVisitas = $totalDeVisitas->rowCount();

    $visitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE data = ?");
    $visitasHoje->execute(array(date('Y-m-d')));

    $visitasHoje = $visitasHoje->rowCount();

?>

<div class="box-content left w100">
    <h2><i class="fa fa-home"></i> Painel de Controle - <?php $nomeEmpresa = "Teteu Dev"; echo NOME_EMPRESA ?></h2>	

    <div class="box-metricas">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuários Online</h2>
                <p><?php echo count($usuariosOnline);?></p>
            </div><!--box-metrica-wraper-->
        </div><!--box-metrica-single-->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de Visitas</h2>
                <p><?php echo $totalDeVisitas;?></p>
            </div><!--box-metrica-wraper-->
        </div><!--box-metrica-single-->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas Hoje</h2>
                <p><?php echo $visitasHoje;?></p>
            </div><!--box-metrica-wraper-->
        </div><!--box-metrica-single-->
        <div class="clear"></div>
    </div><!--box-metricas-->
</div><!--box-content-->
<div class="clear"></div>

<div class="box-content w100">
    <h2><i class="fa fa-rocket"></i>  Usuários Online</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!--col-->
            <div class="col">
                <span>Última Ação</span>
            </div>
            <div class="clear"></div>
        </div><!--row-->

        <?php
            foreach($usuariosOnline as $key => $value){
        ?>

        <div class="row">
            <div class="col">
                <span><?php echo $value['ip'] ?></span>
            </div><!--col-->
            <div class="col">
                <span><?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao'])) ?></span>
            </div>
            <div class="clear"></div>
        </div><!--row-->
        <?php } ?>
    </div><!--table-responsive-->
</div><!--box-content-->



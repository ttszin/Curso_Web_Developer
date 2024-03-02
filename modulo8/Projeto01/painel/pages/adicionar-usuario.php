<?php
    verificaPermissaoPagina(1);
?>


<div class="box-content">
    <h2><i class="fa fa-pencil"></i> Adicionar Usuário</h2>

    <form method="post" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                
            }
        ?>

        <div class="form-group row">
            <label>Login:</label>
            <input type="text" name="login" required ">
        </div><!--form-group-->

        <div class="form-group row">
            <label>Nome:</label>
            <input type="text" name="nome" required ">
        </div><!--form-group-->

        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="password" required ">
        </div><!--form-group-->

        <div class="form-group">
            <label>Cargo:</label>
            <select name="cargo">
                <?php
                    foreach(Painel::$cargos as $key => $value){
                        echo '<option value="'.$key.'">'.$value.'</option>';
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="imagem" required>
        </div><!--form-group-->

        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!--form-group-->


    </form>
</div><!--box-content-->

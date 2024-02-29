<div class="box-content">
    <h2><i class="fa fa-pencil"></i> Editar Usuário</h2>

    <form method="post" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                //enviei meu formulário
                Painel::alert('sucesso','Atualizado com sucesso!');
            }else{
                Painel::alert('erro','Erro ao atualizar');
            }
        ?>

        <div class="form-group row">
            <label>Nome:</label>
            <input type="text" name="nome" required value ="<?php echo $_SESSION['nome']?>">
        </div><!--form-group-->

        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="senha" required value ="<?php echo $_SESSION['password']?>">
        </div><!--form-group-->

        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value ="<?php echo $_SESSION['img']?>" >
        </div><!--form-group-->

        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!--form-group-->


    </form>
</div><!--box-content-->

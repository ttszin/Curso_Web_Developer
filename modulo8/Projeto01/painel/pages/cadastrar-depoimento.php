<div class="box-content">
    <h2><i class="fa fa-pencil"></i> Adicionar Depoimentos</h2>

    <form method="post" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                if(Painel::insert($_POST)){
                    Painel::alert('sucesso','O cadastro do depoimento foi realizado com sucesso!');
                }else{
                    Painel::alert('erro','Campos vazios não são permitidos!');
                }
            }
        ?>

        <div class="form-group row">
            <label>Nome da pessoa:</label>
            <input type="text" name="nome">
        </div><!--form-group-->

        <div class="form-group">
            <label>Depoimento:</label>
            <textarea name="depoimento"></textarea>
        </div><!--form-group-->
        
        <div class="form-group">
            <label>Data:</label>
            <input formato="data" type="text" name=data>        
        </div><!--form-group-->

        <div class="form-group">
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos" />
            <input type="submit" name="acao" value="Atualizar!">
        </div><!--form-group-->


    </form>
</div><!--box-content-->

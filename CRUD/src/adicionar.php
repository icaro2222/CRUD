<?php
include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth"> Novo Clientes </h3>
        <form action="create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" id="nome" name="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" id="sobrenome" name="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            
            <div class="input-field col s12">
                <input type="email" id="email" name="email">
                <label for="email">Email</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" id="idade" name="idade">
                <label for="idade">Idade</label>
            </div>

            <button tye="submit" name="btn-cadastrar" class="btn"> Cadastrar</button>
            <a href="index.php" class="btn green"> Lista de Clientes</a>
        </form>
    </div>
</div>
<?php
include_once 'includes/footer.php';

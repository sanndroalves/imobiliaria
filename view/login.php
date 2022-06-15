<?php 
        ob_start();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="position: relative; left: 25%;">
            <form action="" name="cadLogin" id="idLogin" method="post">
                <div class="card" style="top:40px; width: 50%">
                    <div class="card-header">
                        <span class="card-title">
                            Login
                        </span>
                        <div class="card-body"></div>
                        <div class="form-group form-row">
                            <label class="col-sm-2 col-form-label text-right">Usuário:</label>
                            <input type="text" name="login" id="login" class="form-control col-sm-8">
                        </div>

                        <div class="form-group form-row">
                            <label class="col-sm-2 col-form-label text-right">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control col-sm-8">
                        </div>

                        <div class="card-footer">
                            <input type="submit" name="btnLogar" class="btn btn-success" value="Logar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>

<?php
    if(isset($_POST['btnLogar'])){
        $_SESSION['logado'] = call_user_func(array('UsuarioController', 'logar'));

        if($_SESSION['logado'] == true){
            $_SESSION['login'] = $_POST['login'];
            header('Location: index.php');
        }else{
            header('Location: index.php?error');
        }

        

        ob_end_flush();
    }
?>
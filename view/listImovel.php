<?php
    require_once 'controller/ImovelController.php';      

?>
<br>
<div class="container">
    <div class="row">
        
        <h1>Imóveis<h1>
        <hr>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th><button type="button" class="btn btn-light" onclick="window.location.href='index.php?action=imovelNovo'">Novo</button></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $imoveis = call_user_func(array('ImovelController', 'listar'));

                    if(isset($imoveis) && !empty($imoveis)){
                        foreach($imoveis as $imovel){
                            ?>
                                <tr>
                                    <td><?php echo $imovel->getDescricao(); ?></td>
                                    <td><?php echo "<img src='model/img/". $imovel->getFoto() ."' alt='Foto de exibição' width='100px'/>"; ?></td>
                                    <td><?php echo $imovel->getValor(); ?></td>
                                    <td><?php echo $imovel->getTipo(); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?action=imovelEditar&id=<?php echo $imovel->getId();?>'">Editar</button>
                                        <button type="button" class="btn btn-danger"  onclick="window.location.href='index.php?action=imovelExcluir&id=<?php echo $imovel->getId();?>'">Excluir</button>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="5">Nenhum registro encontrado</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
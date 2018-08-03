<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 09/01/2018
 * Time: 13:33
 */

include_once 'estrutura/Template.php';
require_once 'db/instituicaoDAO.php';

$template = new Template();

$template->header();
$template->sidebar();
$template->navbar();

$object = new instituicaoDAO();

// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
    $sigla = (isset($_POST["sigla"]) && $_POST["sigla"] != null) ? $_POST["sigla"] : "";
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $nome = NULL;
    $sigla = NULL;
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {

    $instituicao = new instituicao($id, '', '');

    $resultado = $object->atualizar($instituicao);
    $nome = $resultado->getNome();
    $sigla = $resultado->getSigla();
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    $instituicao = new instituicao($id, $nome, $sigla);
    $msg = $object->salvar($instituicao);
    $id = null;
    $nome = null;
    $sigla = null;
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    $instituicao = new instituicao($id, '', '');
    $msg = $object->remover($instituicao);
    $id = null;
}

?>
    <div class='content' xmlns="http://www.w3.org/1999/html">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='card'>
                        <div class='header'>
                            <h4 class='title'>Instituições</h4>
                            <p class='category'>Lista de instituições do sistema</p>

                        </div>
                        <div class='content table-responsive'>

                            <form action="?act=save" method="POST" id="form1">
                                <hr>
                                <i class="ti-save"></i>
                                <input type="hidden" name="id" value="<?php
                                // Preenche o id no campo id com um valor "value"
                                echo (isset($id) && ($id != null || $id != "")) ? $id : '';
                                ?>"/>
                                Nome:
                                <input type="text" size="50" name="nome" value="<?php
                                // Preenche o nome no campo nome com um valor "value"
                                echo (isset($nome) && ($nome != null || $nome != "")) ? $nome : '';
                                ?>"/>
                                Sigla:
                                <input type="text" size="25" name="sigla" value="<?php
                                // Preenche o sigla no campo sigla com um valor "value"
                                echo (isset($sigla) && ($sigla != null || $sigla != "")) ? $sigla : '';
                                ?>"/>
                                <input type="submit" VALUE="Cadastrar"/>
                                <hr>
                            </form>

                            <?php

                            echo (isset($msg) && ($msg != null || $msg != "")) ? $msg : '';

                            //chamada a paginação
                            $object->tabelapaginada();

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$template->footer();
?>
<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 09/01/2018
 * Time: 10:53
 */
//carrega o template
include_once "estrutura/Template.php";

$template = new Template();
$template->header();
$template->sidebar();
$template->navbar();

?>
    <div class='content' xmlns="http://www.w3.org/1999/html">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='card'>
                        <div class='header'>
                            <h3 class='title'>EconomiC Analyzer</h3>
                            <p class='category'></p>
                        </div>
                        <div class='content table-responsive'>
                            <h4 class="title">Bem-vindo ao sistema <?=$logado;?> </h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$template->footer();
?>

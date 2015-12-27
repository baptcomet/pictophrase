<?php
$pictogrammesJson = file_get_contents("assets/pictogrammes.json");
$arbreJson = file_get_contents("assets/arbre.json");

$pictogrammes = json_decode($pictogrammesJson, true);
$arbre = json_decode($arbreJson, true);

$currentArbre = $arbre;
?>
<br/>
<div class="row">
    <div class="col-md-1">
        <h4>Phrase</h4>
    </div>
    <div class="col-md-11">
        <?php include 'partial/phrase.php' ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Pictogrammes</h4>
            </div>
            <div class="panel-body">
                <?php include 'partial/liste.php' ?>
            </div>
        </div>
    </div>
</div>

<?php include 'partial/script.php' ?>

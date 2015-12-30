<div class="row" id="liste">
    <?php foreach ($arbre as $pictoId => $suite) : ?>
        <?php $picto = $pictogrammes[$pictoId] ?>
        <div class="col-md-2">
            <div class="panel panel-default panel-clickable" id="<?php echo $pictoId ?>">
                <img src="assets/pictogrammes/<?php echo $picto['image'] ?>"
                     class="img-responsive">
                <div class="panel-body">
                    <?php echo $picto['texte'] ?>
                    <br/>
                    <?php // TODO : abstraire ce controle avec un glyphicon play/pause + ecrire ça dans le JS à la génération de picto ?>
                    <audio controls>
                        <source src="assets/sons/<?php echo $picto['son'] ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

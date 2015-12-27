<div class="row" id="liste">
    <?php foreach ($arbre as $pictoId => $suite) : ?>
        <?php $picto = $pictogrammes[$pictoId] ?>
        <div class="col-md-2">
            <div class="panel panel-default panel-clickable" id="<?php echo $pictoId ?>">
                <img src="assets/pictogrammes/<?php echo $picto['image'] ?>"
                     class="img-responsive">
                <div class="panel-body">
                    <?php echo $picto['texte'] ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

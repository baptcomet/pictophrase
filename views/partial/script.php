<script>
    var arbre = <?php echo $arbreJson ?>;
    var pictogrammes = <?php echo $pictogrammesJson ?>;

    handlePictoClick();

    function handlePictoClick() {
        $('.panel-clickable').click(function() {
            var pictoId = $(this).attr('id');
            var nouveauxPictos = arbre[pictoId];
            console.log(nouveauxPictos);

            // TODO gestion du cas ou ya plus de nouveaux pictos

            var liste = $('#liste');
            liste.fadeOut('slow', function() {
                var listeHtml = '';
                var i;
                for (i = 0; i < nouveauxPictos.length; i++) {
                    var nouveauPictoId = nouveauxPictos[i];
                    var nouveauPicto = pictogrammes[nouveauPictoId];
                    listeHtml += '<div class="col-md-2">';
                    listeHtml += '<div class="panel panel-default panel-clickable" id="' + nouveauPictoId + '">';
                    listeHtml += '<img src="assets/pictogrammes/' + nouveauPicto['image'] + '" class="img-responsive">';
                    listeHtml += '<div class="panel-body">' + nouveauPicto['texte'] + '</div>';
                    listeHtml += '</div>';
                    listeHtml += '</div>';
                }
                liste.html(listeHtml);
                handlePictoClick();
                liste.fadeIn('slow');
            });
        });
    }

</script>
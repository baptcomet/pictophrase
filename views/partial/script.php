<script>
    var arbre = <?php echo $arbreJson ?>;
    var pictogrammes = <?php echo $pictogrammesJson ?>;

    handleHomeClick();
    handlePictoClick();

    function handlePictoClick() {
        $('.panel-clickable').click(function() {
            var pictoId = $(this).attr('id');
            var picto = pictogrammes[pictoId];
            var nouveauxPictos = arbre[pictoId];

            var liste = $('#liste');
            liste.fadeOut('slow', function() {
                var listeHtml = '';
                if (nouveauxPictos) {
                    for (var nouveauPictoId in nouveauxPictos) {
                        var nouveauPicto = pictogrammes[nouveauPictoId];
                        listeHtml += '<div class="col-md-2">';
                        listeHtml += '<div class="panel panel-default panel-clickable" id="' + nouveauPictoId + '">';
                        listeHtml += '<img src="assets/pictogrammes/' + nouveauPicto['image'] + '" class="img-responsive">';
                        listeHtml += '<div class="panel-body">';
                        listeHtml += nouveauPicto['texte'];
                        listeHtml += '<br/>';
                        listeHtml += '<audio controls>';
                        listeHtml += '<source src="assets/sons/' + nouveauPicto['son'] + '" type="audio/mpeg">';
                        listeHtml += 'Your browser does not support the audio element.';
                        listeHtml += '</audio>';
                        listeHtml += '</div>';
                        listeHtml += '</div>';
                        listeHtml += '</div>';
                    }
                } else {
                    listeHtml = '<div class="col-md-12">';
                    listeHtml += '<div class="alert alert-warning">Il n\'y a plus de pictogramme</div>';
                    listeHtml += '</div>';
                }
                liste.html(listeHtml);
                handlePictoClick();
                liste.fadeIn('slow');
            });

            var breadcrumbHtml = '<li>' + picto['texte'] + '</li>';
            $('#phrase').append(breadcrumbHtml);

            var phrasePanelPart = '<div class="col-md-2">';
            phrasePanelPart += '<div class="panel panel-default">';
            phrasePanelPart += '<img src="assets/pictogrammes/' + picto['image'] + '" class="img-responsive">';
            phrasePanelPart += '<div class="panel-body">';
            phrasePanelPart += picto['texte'];
            phrasePanelPart += '<br/>';
            phrasePanelPart += '<audio controls>';
            phrasePanelPart += '<source src="assets/sons/' + picto['son'] + '" type="audio/mpeg">';
            phrasePanelPart += 'Your browser does not support the audio element.';
            phrasePanelPart += '</audio>';
            phrasePanelPart += '</div>';
            phrasePanelPart += '</div>';
            phrasePanelPart += '</div>';
            $('#panel-phrase-body').append(phrasePanelPart);
        });
    }

    function handleHomeClick() {
        $('#home').click(function() {
            location.reload();
        });
    }

</script>
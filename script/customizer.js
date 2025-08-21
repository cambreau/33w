jQuery(document).ready(function ($) {
  "use strict";

  // Fonction pour masquer/afficher les champs d'images selon le nombre configuré
  function toggleImageFields() {
    var nombreImages =
      parseInt($("#customize-control-hero_background_count input").val()) || 3;

    // Masquer tous les champs d'images d'abord
    for (var i = 0; i < 10; i++) {
      var control = $("#customize-control-hero_background_" + i);
      if (control.length) {
        if (i < nombreImages) {
          control.show();
        } else {
          control.hide();
        }
      }
    }
  }

  // Exécuter au chargement de la page
  toggleImageFields();

  // Écouter les changements sur le champ nombre d'images
  $(document).on(
    "change",
    "#customize-control-hero_background_count input",
    function () {
      toggleImageFields();
    }
  );

  // Écouter les changements sur le champ nombre d'images (pour les contrôles WordPress)
  wp.customize("hero_background_count", function (value) {
    value.bind(function (newval) {
      toggleImageFields();
    });
  });
});

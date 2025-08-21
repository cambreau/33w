(function () {
  const carrousels = document.querySelectorAll(".carrousel");
  const radios = document.querySelectorAll(".carrousel__radio");

  // Debug
  // console.log(carrousels.length);
  // console.log(radios.length);

  let currentIndex = 0;
  let autoPlayInterval;

  // Fonction pour passer à l'image suivante
  function nextImage() {
    // Debug :
    // console.log( currentIndex, carrousels.length);

    // Calculer le prochain index
    let nextIndex = (currentIndex + 1) % carrousels.length;

    // Debug
    // console.log(nextIndex);

    showImage(nextIndex);
  }

  // Fonction pour afficher une image
  function showImage(index) {
    // console.log(index);
    // console.log(carrousels.length);

    // Masquer l'image actuelle avec fade out
    if (carrousels[currentIndex]) {
      carrousels[currentIndex].style.opacity = 0;
    }

    // Afficher la nouvelle image
    carrousels[index].style.opacity = 1;

    // Cocher le bon bouton radio
    if (radios[index]) {
      radios[index].checked = true;
    }

    // Mettre à jour l'index actuel
    currentIndex = index;
  }

  // Fonction pour démarrer le défilement automatique
  function startAutoPlay() {
    autoPlayInterval = setInterval(nextImage, 5000); // 5 secondes
  }

  // Fonction pour arrêter le défilement automatique
  function stopAutoPlay() {
    if (autoPlayInterval) {
      clearInterval(autoPlayInterval);
    }
  }

  // Écouter les clics sur les boutons radio
  radios.forEach((radio, index) => {
    radio.addEventListener("change", () => {
      showImage(index);
      // Redémarrer le défilement automatique après un clic manuel
      stopAutoPlay();
      startAutoPlay();
    });
  });

  // Démarrer le défilement automatique au chargement
  startAutoPlay();

  // Arrêter le défilement quand la page n'est pas visible
  function initialise_carrousel() {
    carrousels.forEach((carrousel, i) => {
      carrousel.style.opacity = 0;
    });
  }
})();

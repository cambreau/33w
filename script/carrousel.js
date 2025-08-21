(function () {
  const carrousels = document.querySelectorAll(".carrousel");
  const radios = document.querySelectorAll(".carrousel__radio");

  let currentIndex = 0;
  let autoPlayInterval;

  // Fonction pour passer à l'image suivante
  function nextImage() {
    currentIndex = (currentIndex + 1) % carrousels.length;
    showImage(currentIndex);
  }

  // Fonction pour afficher une image spécifique
  function showImage(index) {
    initialise_carrousel();
    carrousels[index].style.opacity = 1;

    // Cocher le bon bouton radio
    if (radios[index]) {
      radios[index].checked = true;
    }

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

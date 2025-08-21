(function () {
  const list_categories = document.querySelectorAll(
    ".destination__categories__list li"
  );
  console.log("list_categories.length", list_categories.length);
  list_categories.forEach((categorie) => {
    categorie.addEventListener("click", (e) => {
      // console.log(categorie.dataset.id);
      console.log(categorie.dataset.id);
      mon_fetch(categorie.dataset.id);
    });
  });

  // const categoryId = 4; // Remplacez par l'ID de la catégorie souhaitée
  const domaine = document.querySelector("base").href;
  // mon_fetch(categoryId);

  function mon_fetch(categoryId) {
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log("apiUrl = ", apiUrl);
    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        const destinationList = document.querySelector(".destination__list");
        destinationList.innerHTML = "";
        data.forEach((article) => {
          const articleElement = document.createElement("div");
          articleElement.innerHTML = `
          <label class="accordeon" for="accordeon__chk__${article.id}">
                    <h3>${article.title.rendered}</h3>
          </label>  
          <input type="checkbox" class="accordeon__chk"  id="accordeon__chk__${article.id}">        
          <div class="accordeon__excerpt">${article.excerpt.rendered}
          <a href="${article.link}">Lire plus</a>
          </div>
          
          `;
          destinationList.appendChild(articleElement);
        });
      })
      .catch((error) =>
        console.error("Erreur lors de la récupération des articles:", error)
      );
  }
})();

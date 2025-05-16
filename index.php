
   <!-- Recupere le header -->
   <?php get_header(); ?>
   <main>
      <div class="hero">
        <section class="hero__contenu">
          <h1 class="hero__titre">Club de voyage</h1>
          <p class="hero__description">
            Partez à la découverte du monde avec nos séjours soigneusement
            sélectionnés aux quatre coins de la planète.
          </p>
          <p class="hero__description">info@voyageavecnous.com</p>
          <p class="hero__description">20 rue la prairie, Brossard</p>
          <p class="hero__description">1-800-555-1234</p>
          <button class="hero__bouton">S'inscrire</button>
          <div class="reseaux-sociaux">
            <a href="https://www.facebook.com/">
              <img src="images/facebook.png" width="40" height="40" />
            </a>
            <a href="https://www.instagram.com/">
              <img src="images/instagram.png" width="40" height="40" />
            </a>
          </div>
        </section>
        <form class="inscription-form" action="">
          <div class="inscription-form__label-input">
            <label class="inscription__label" for="nom">Nom</label>
            <input
              class="inscription-form__input"
              id="nom"
              type="text"
              placeholder="Entrez votre nom"
            />
          </div>
          <div class="inscription-form__label-input">
            <label class="inscription-form__label" for="prenom">Prénom</label>
            <input
              class="inscription-form__input"
              id="prenom"
              type="text"
              placeholder="Entrez votre prénom"
            />
          </div>
          <div class="inscription-form__label-input">
            <label class="inscription__label" for="courriel">Courriel</label>
            <input
              class="inscription-form__input"
              id="courriel"
              type="email"
              placeholder="Entrez votre courriel"
            />
          </div>
          <div class="inscription-form__label-input">
            <label class="inscription-form__label" for="telephone"
              >Téléphone</label
            >
            <input
              class="inscription-form__input"
              id="telephone"
              type="text"
              placeholder="Entrez votre téléphone"
              pattern="^\d{3}-\d{3}-\d{4}$"
            />
          </div>
          <div class="inscription-form__bouton-container">
            <button class="inscription-form__bouton">S'inscrire</button>
          </div>
        </form>
      </div>
      <section class="galerie">
        <h2 class="galerie__titre">Nos destinations favorites</h2>
        <div class="galerie__images">
          <img src="images/image1.jpg" alt="" class="galerie__image" />
          <img src="images/image2.jpg" alt="" class="galerie__image" />
          <img src="images/image3.jpg" alt="" class="galerie__image" />
          <img src="images/image4.jpg" alt="" class="galerie__image" />
          <img src="images/image5.jpg" alt="" class="galerie__image" />
          <img src="images/image6.jpg" alt="" class="galerie__image" />
          <img src="images/image7.jpg" alt="" class="galerie__image" />
          <img src="images/image8.jpg" alt="" class="galerie__image" />
          <img src="images/image9.jpg" alt="" class="galerie__image" />
          <img src="images/image10.jpg" alt="" class="galerie__image" />
        </div>
      </section>
      <section class="populaire">
        <article>
        <?php if (have_posts()): 
          while (have_posts()): the_post(); ?>    
              <h2 class="populaire__titre"><?php the_title(); ?></h2>
              <div class="populaire__contenu">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endwhile; ?>
          <?php endif; ?>
      </section>
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 

<?php
require_once 'config/config.php';
$current_page = 'index.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title data-translate="home_title"> Page d'accueil </title>
  <link rel="stylesheet" href="public/css/style.css" />
</head>

<body>

  <?php include 'header.php'; ?>

  <main>
    <section id="hero">
      <div class="carousel">
        <?php
        /* Données du carrousel */
        $carousel_data = array(
          array(
            'imageKey' => 'carousel1',
            'title' => 'Développement Web Full Stack',
            'description' => 'De l\'idée à l\'interface : Créez des applications web dynamiques et intégrées.',
            'learn-more' => ' Réalisez vos visions numériques en développant des applications web complètes et fonctionnelles. En tant que développeur Full Stack, je prends en charge toutes les étapes de la création, de la conception de l’interface utilisateur (front-end) à la gestion des serveurs et des bases de données (back-end). En intégrant harmonieusement ces éléments, je veille à ce que votre application soit non seulement performante mais aussi intuitive, répondant parfaitement aux besoins des utilisateurs et aux objectifs d\'affaires.'
          ),
          array(
            'imageKey' => 'carousel2',
            'title' => 'Analyse et Modélisation de Données',
            'description' => 'Transformez les données en décisions : Expertise Python pour des insights puissants',
            'learn-more' => 'Exploitez la puissance de vos données grâce à une expertise avancée en Python pour l\'analyse et la modélisation. En utilisant des bibliothèques comme Pandas, NumPy, Matplotlib, et scikit-learn, je transforme des ensembles de données complexes en insights clairs et actionnables. Que vous ayez besoin de résoudre des problématiques spécifiques avec des algorithmes de machine learning ou d\'explorer des tendances cachées, je vous aide à prendre des décisions éclairées basées sur des analyses précises et pertinentes.'
          ),
          array(
            'imageKey' => 'carousel3',
            'title' => 'Développement Front-End Dynamique',
            'description' => 'Des interfaces réactives et engageantes : Le front-end qui captive et convertit.',
            'learn-more' => 'Concevez des expériences utilisateur exceptionnelles grâce à une maîtrise approfondie des technologies front-end. Avec une expertise en HTML5, CSS3, et JavaScript, je crée des interfaces réactives qui s\'adaptent parfaitement à tous les appareils et tailles d\'écran. En utilisant des frameworks comme Bootstrap et en intégrant des animations dynamiques, je m\'assure que chaque interaction est fluide et engageante, capturant l\'attention des utilisateurs et favorisant la conversion.'
          )
        );

        // Stocker les descriptions pour les utiliser après la boucle
        $learnMoreDescriptions = [];

        foreach ($carousel_data as $index => $item) {
          try {
            $imagePath = getImagePath($item['imageKey']); // Assurez-vous que cette fonction est définie et fonctionne correctement
            //var_dump($imagePath);

            if (!file_exists($imagePath)) {
              throw new Exception('Image not found.');
            }

            $learnMoreDescriptions[$index] = htmlspecialchars($item['learn-more'], ENT_QUOTES, 'UTF-8');

            echo '<div class="carousel-item" data-index="' . (int)$index . '">';
            echo '<img src="' . htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') . '" alt="Carousel Image ' . ($index + 1) . '" />';
            echo '<div class="carousel-caption">';
            echo '<h2 data-translate="carousel_title" data-index="' . (int)$index . '">' . htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
            echo '<p data-translate="carousel_slogan" data-index="' . (int)$index . '">' . htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<a data-translate="carousel_button" data-index="' . (int)$index . '" href="about.php" class="cta"">Learn More</a>';
            echo '<div class="carousel-description" id="description-' . (int)$index . '" style="display:none;">';
            echo '<p>' . $learnMoreDescriptions[$index] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          } catch (Exception $e) {
            error_log($e->getMessage());
            echo '<div class="carousel-item" data-index="' . (int)$index . '">';
            echo '<img src="path/to/default-image.jpg" alt="Default Image" />';
            echo '<div class="carousel-caption">';
            echo '<h2>' . htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
            echo '<p>' . htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<a data-translate="carousel_button" data-index="' . (int)$index . '" href="about.php" class="cta"">Learn More</a>';
            echo '<div class="carousel-description" id="description-' . (int)$index . '" style="display:none;">';
            echo '<p>' . htmlspecialchars($item['learn-more'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        }
        ?>
      </div>
    </section>

    <!-- <div id="current-index-description">
       <p id="current-description">Select an item to see details</p> 
    </div> -->

    <section id="skills">
      <ul class="skill-list">
        <li>
          <h3 data-translate="skills_title1">Programmation en Python et Analyse de Données</h3>
          <p data-translate="skills_title1_paragraph">
            Grâce à ma maîtrise des bibliothèques Pandas, NumPy, Matplotlib, et scikit-learn, je suis en mesure de manipuler, analyser et modéliser des ensembles de données complexes afin d'en extraire des insights précieux. De plus, je suis capable de créer une large variété de graphiques de données, facilitant ainsi l'interprétation des résultats, à l'aide d'outils tels que Matplotlib et Seaborn. Mon expertise inclut également la conception de tableaux de bord interactifs via Tableau et Power BI, permettant une prise de décision éclairée basée sur les données.
          </p>
        </li>
        <li>
          <h3 data-translate="skills_title2">Base de données</h3>
          <p data-translate="skills_title2_paragraph">
            Je possède une solide expérience dans la conception, l’interrogation et la gestion de bases de données relationnelles avec SQL, ainsi qu'une capacité à optimiser les requêtes pour une manipulation efficace des données. Par ailleurs, je maîtrise l’utilisation des bases de données NoSQL, notamment MongoDB, ce qui me permet de gérer des données non structurées ou semi-structurées et de développer des applications nécessitant une flexibilité accrue.
          </p>
        </li>
      </ul>

      <ul class="skill-list">
        <li>
          <h3 data-translate="skills_title3">Développement Full Stack</h3>
          <p data-translate="skills_title3_paragraph">
            Compétence en développement Full Stack, avec une capacité à concevoir et implémenter à la fois le front-end et le back-end d’applications web. Expérience dans l’intégration de bases de données, la gestion de serveurs, et la création d’interfaces utilisateur intuitives.
          </p>
        </li>
      </ul>

      <ul class="skill-list">
        <li>
          <h3 data-translate="skills_title4">Design UX/UI</h3>
          <p data-translate="skills_title4_paragraph">
            Capacité à concevoir des interfaces utilisateur ergonomiques et intuitives, en appliquant les principes fondamentaux de l’expérience utilisateur pour garantir une interaction fluide et agréable.
          </p>
        </li>
      </ul>

    </section>

    <section id="projects">
      <h2 data-translate="title-projects">Exemples de projets personnels</h2>
      <div class="project-grid">
        <div class="project-card">
          <img src="path/to/project1-image.jpg" alt="Project 1" />
          <h3 data-translate="project1-title">Projet 1</h3>
          <p data-translate="project1-description">Description du premier projet.</p>
        </div>
        <div class="project-card">
          <img src="path/to/project2-image.jpg" alt="Project 2" />
          <h3 data-translate="project2-title">Projet 2</h3>
          <p data-translate="project2-description">Description du deuxième projet.</p>
        </div>
        <div class="project-card">
          <img src="path/to/project3-image.jpg" alt="Project 3" />
          <h3 data-translate="project3-title">Projet 3</h3>
          <p data-translate="project3-description">Description du troisième projet.</p>
        </div>
      </div>
    </section>


  </main>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <script src="public/js/learn-more.js"></script>
  <script src="public/js/script.js"></script>
  <script src="public/js/lang.js"></script>
</body>

</html>
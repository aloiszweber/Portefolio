<?php
require_once 'config/config.php';
$current_page = 'projects.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projets - Développement web & Analyse de données</title>
  <link rel="stylesheet" href="public/css/style.css" />
  <link rel="stylesheet" href="public/css/projects.css" />
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section id="projects">
      <div class="project-grid">
        <div class="project-card">
          <img src="project1.jpg" alt="Projet 1" />
          <h3 data-translate="project11_title">Projet 1</h3>
          <p data-translate="project11_description">Description du premier projet</p>
        </div>
        <div class="project-card">
          <img src="project2.jpg" alt="Projet 2" />
          <h3 data-translate="project21_title">Projet 2</h3>
          <p data-translate="project21_description">Description du deuxième projet</p>
        </div>
        <div class="project-card">
          <img src="project3.jpg" alt="Projet 3" />
          <h3 data-translate="project31_title">Projet 3</h3>
          <p data-translate="project31_description">Description du troisième projet</p>
        </div>
        <div class="project-card">
          <img src="project4.jpg" alt="Projet 4" />
          <h3 data-translate="project41_title">Projet 4</h3>
          <p data-translate="project41_description">Description du quatrième projet</p>
        </div>
        <div class="project-card">
          <img src="project5.jpg" alt="Projet 5" />
          <h3 data-translate="project51_title">Projet 5</h3>
          <p data-translate="project51_description">Description du cinquième projet</p>
        </div>
        <div class="project-card">
          <img src="project6.jpg" alt="Projet 6" />
          <h3 data-translate="project61_title">Projet 6</h3>
          <p data-translate="project61_description">Description du sixième projet</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <script src="public/js/lang.js"></script>
</body>

</html>
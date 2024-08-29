<?php
require_once 'config/config.php';
$current_page = 'skills.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Compétences en développement web et analyse de données</title>
  <link rel="stylesheet" href="public/css/style.css" />
  <link rel="stylesheet" href="public/css/skills.css" />
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <section id="skills">
      <div class="skill-grid">
        <div class="skill-card">
          <h3 data-translate="ETL">ETL</h3>
          <p data-translate="ETL_paragraph">
            Compétent dans la conception, le développement et la gestion de flux de travail ETL complexes.
          </p>
        </div>
        <div class="skill-card">
          <h3 data-translate="data_quality">Qualité des données</h3>
          <p data-translate="data_quality_paragraph">
            Expérimenté dans la mise en œuvre de règles de qualité des données et de stratégies de profilage des données.
          </p>
        </div>
        <div class="skill-card">
          <h3 data-translate="MDM">MDM</h3>
          <p data-translate="MDM_paragraph">
            Connaissances en gestion des données de référence et meilleures pratiques de gouvernance des données.
          </p>
        </div>
        <div class="skill-card">
          <h3 data-translate="cloud_work">Travail sur cloud</h3>
          <p data-translate="cloud_work_paragraph">
            Adepte de l'utilisation d'Informatica Cloud pour l'intégration et la gestion des données dans le cloud.
          </p>
        </div>
        <div class="skill-card">
          <h3 data-translate="SQL">Gestion de base de données SQL</h3>
          <p data-translate="SQL_paragraph">
            Compétent dans l'utilisation des outils avancés d'intégration et de gestion des données dans les bases de données SQL.
          </p>
        </div>
        <div class="skill-card">
          <h3 data-translate="NOSQL">Gestion de base de données NOSQL</h3>
          <p data-translate="NOSQ_paragraph">
            Expérimenté dans la mise en œuvre de solutions Informatica pour le traitement et l'analyse de big data avec des bases de données NOSQL.
          </p>
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
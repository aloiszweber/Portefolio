<?php
require_once 'config/config.php';
$current_page = 'about.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Biographie </title>
  <link rel="stylesheet" href="public/css/style.css" />
  <!-- Conseils pour la sécurité : Configurez les en-têtes HTTP de sécurité côté serveur -->
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section id="about">
      <h2 data-translate="biography_title"> Biographie </h2>

      <div class="about-content">
        <!--<img src="public/images/image_profil.png" alt="Profile Picture" />-->
        <!-- Validation de l'image pour éviter des attaques de type LFI (Local File Inclusion) -->
        <div class="about-text">
          <p class="right_paragraph" data-translate="intro">
            Bonjour, je suis Aloïs Zweber, un professionnel qualifié d'Informatica avec une passion pour l'intégration et la transformation des données.
          </p>

          <p class="right_paragraph" data-translate="transition_to_it">
            À la fin de 2021, j'ai décidé de me tourner vers le secteur de l'informatique en entamant une formation en développement web. Avec succès, j'ai franchi les étapes de présélection de BeCode, une institution réputée pour ses formations technologiques.
          </p>

          <p class="right_paragraph" data-translate="self_learning">
            Mon apprentissage s'est déroulé sur une période de 10 mois en immersion complète. Au cours de cette période, j'ai passé 7 mois au sein de BeCode, où j'ai adopté une approche autodidacte, tout en bénéficiant des conseils avisés de plusieurs mentors. Ces mois de dévouement ont considérablement influencé ma compréhension des concepts essentiels du code, renforçant ainsi mon souhait de poursuivre une carrière dans l'IT.
          </p>

          <p data-translate="internship_experience">
            Pour compléter cette formation enrichissante, j'ai effectué un stage de 3 mois chez Contraste. Cette expérience pratique m'a offert l'opportunité de mettre en œuvre les compétences nouvellement acquises en développement web, consolidant ainsi ma confiance dans ma capacité à concrétiser des designs complexes et dynamiques.
          </p>

          <p data-translate="current_focus">
            Aujourd'hui, alors que je suis en cours de formation en analyse de données, je canalise mon enthousiasme pour convertir les données en connaissances exploitables. Mon objectif principal est de repérer des schémas et des tendances importants pour éclairer des prises de décision judicieuses. Mon parcours, initialement enraciné dans ma passion pour le développement web, s'est progressivement transformé en une passionnante exploration du monde des données.
          </p>

          <p data-translate="contact_invitation">
            Je suis enthousiaste à l'idée de contribuer à des projets stimulants et de poursuivre le développement de mes compétences dans le domaine de la data. Si vous partagez mon intérêt pour les projets stimulants liés à la data, je serais ravi de discuter avec vous. Je vous propose de me contacter pour un entretien, où nous pourrons explorer ensemble nos perspectives communes et les passionnantes opportunités de collaboration qui pourraient en découler.
          </p>
          <!-- Autres paragraphes... -->
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
<?php
require_once 'config/config.php';
$current_page = 'contact.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="public/css/style.css" />
  <link rel="stylesheet" href="public/css/contact.css" />
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section id="contact" data-translate="section_contact">
      <h2 data-translate="contact_section">Proposition d'entretien</h2>
      <div class="contact-content">
        <form action="mail.php" method="POST">
          <div class="form-group">
            <label for="firstname" data-translate="label_firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" required />
          </div>
          <div class="form-group">
            <label for="name" data-translate="label_name">Nom :</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="enterprise" data-translate="label_enterprise">Entreprise :</label>
            <input type="text" id="enterprise" name="enterprise" required />
          </div>
          <div class="form-group">
            <label for="email" data-translate="label_email">Email :</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="message" data-translate="label_message">Message :</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button type="submit" class="cta" data-translate="button_send">Envoyer le message</button>
        </form>
        <div class="contact-info" data-translate="section_contact-info">
          <h3 data-translate="contact_info_title">Coordonnées</h3>
          <p><strong data-translate="info_email">Email :</strong> alois.zweber@hotmail.com</p>
          <p><strong data-translate="info_phone">Téléphone :</strong> +32 489 25 67 61</p>
          <p><strong data-translate="info_city">Ville :</strong> Liège</p>
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
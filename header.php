<header>
    <nav>
        <ul>
            <li><a href="index.php" data-translate="nav-home" rel="noopener noreferrer" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Accueil</a></li>
            <li><a href="about.php" data-translate="nav-about" rel="noopener noreferrer" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">À propos</a></li>
            <li><a href="skills.php" data-translate="nav-skills" rel="noopener noreferrer" class="<?php echo $current_page == 'skills.php' ? 'active' : ''; ?>">Compétences</a></li>
            <li><a href="projects.php" data-translate="nav-projects" rel="noopener noreferrer" class="<?php echo $current_page == 'projects.php' ? 'active' : ''; ?>">Projets</a></li>
            <li><a href="contact.php" data-translate="nav-contact" rel="noopener noreferrer" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <div id="language-selector">
            <ul class="language-list">
                <li><a href="?lang=fr" title="Français"><img src="public/images/flags/france.png" alt="Français"> </a></li>
                <li><a href="?lang=en" title="English"><img src="public/images/flags/united_kingdom.png" alt="English"> </a></li>
                <li><a href="?lang=es" title="Español"><img src="public/images/flags/spain.png" alt="Español"> </a></li>
            </ul>
        </div>
    </nav>
</header>
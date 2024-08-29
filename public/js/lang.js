const languageSelector = document.getElementById("language-selector");
console.log(languageSelector);

const translatableElements = document.querySelectorAll("[data-translate]");

let translations = {};

// Charger les traductions depuis le fichier JSON
async function loadTranslations() {
  try {
    const response = await fetch("../data_lang.json");
    translations = await response.json();
    //console.log(translations);
  } catch (error) {
    console.error("Erreur lors du chargement des traductions:", error);
  }
}

// Traduire les éléments de la page en fonction de la langue choisie
function translatePage(language) {
  translatableElements.forEach((element) => {
    const key = element.getAttribute("data-translate");
    const index = element.getAttribute("data-index");
    console.log(index);

    if (translations[language] && translations[language][key]) {
      if (Array.isArray(translations[language][key]) && index !== null) {
        element.textContent =
          translations[language][key][index] || element.textContent;
      } else {
        element.textContent = translations[language][key];
      }
    }
  });
  document.documentElement.lang = language;
}

// Écouter les clics sur les liens de langue pour changer la langue
languageSelector.addEventListener("click", (event) => {
  const target = event.target.closest("a");
  if (target) {
    const selectedLanguage = new URL(target.href).searchParams.get("lang");
    if (selectedLanguage) {
      translatePage(selectedLanguage);
      // Mémoriser la langue sélectionnée dans l'URL
      history.pushState(null, "", `?lang=${selectedLanguage}`);
    }
  }
});

// Charger les traductions et traduire la page au chargement initial
loadTranslations().then(() => {
  const urlParams = new URLSearchParams(window.location.search);
  const language = urlParams.get("lang") || "fr"; // Langue par défaut si non spécifiée
  translatePage(language);
});

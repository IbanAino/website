let currentLang = 'fr';

function switchLanguage(lang) {
	// Mettre à jour la langue courante
	currentLang = lang;
	
	// Mettre à jour l'attribut lang du HTML
	document.documentElement.lang = lang;
	
	// Cacher tous les contenus
	const allContents = document.querySelectorAll('.lang-content');
	allContents.forEach(content => {
		content.classList.add('hidden');
	});
	
	// Afficher les contenus de la langue sélectionnée
	const selectedContents = document.querySelectorAll(`.lang-content[data-lang="${lang}"]`);
	selectedContents.forEach(content => {
		content.classList.remove('hidden');
	});
	
	// Mettre à jour les boutons actifs
	document.querySelectorAll('.lang-btn').forEach(btn => {
		btn.classList.remove('active');
	});
	document.getElementById(`btn-${lang}`).classList.add('active');
	
	// Sauvegarder la préférence dans le localStorage (optionnel)
	localStorage.setItem('preferredLanguage', lang);
}

// Initialiser la langue au chargement de CHAQUE page
window.addEventListener('DOMContentLoaded', () => {
    const savedLang = localStorage.getItem('preferredLanguage') || 'fr';
    if (['fr', 'en', 'es', 'de'].includes(savedLang)) {
        switchLanguage(savedLang);
    }
});
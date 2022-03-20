let darkMode = localStorage.getItem('darkMode'); //maintient un espace de stockage même après le redémarrage du navigateur web

const darkModeToggle = document.querySelector('#dark-mode-toggle'); //trouver le premier élément qui correspond au sélecteur de l'icon du darkmode sur le header

//variables stockant les images qui changent de couleur 
var elyseeLogo = document.getElementById('elysee-logo');
var elyseeDraw = document.getElementById('elysee-draw'); 
var elyseeLogoFooter = document.getElementById('elysee-logo-footer');

//constante qui active le darkmode
const enableDarkMode = () => {
  document.body.classList.add('darkmode'); //on ajoute la classe darkmode au body
  localStorage.setItem('darkMode', 'enabled'); //on met à jour le localstorage en activant  la classe darkmode

  //on change les sources des images stockées dans les variables définies au début
  elyseeLogo.src='images/logo_elysee_blanc.png';
  elyseeLogoFooter.src='images/logo_elysee_blanc.png';
  elyseeDraw.src='images/palais_dessin_blanc.png'; 
}

//constante qui désactive le darkmode
const disableDarkMode = () => {
  document.body.classList.remove('darkmode'); //on enlève la classe darkmode au body
  localStorage.setItem('darkMode', null); //on met à jour le localstorage en désactivant la classe darkmode
}

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode === 'enabled') {
  enableDarkMode();
}

//quand l'user clique sur l'icon du darkmode
darkModeToggle.addEventListener('click', () => {
  darkMode = localStorage.getItem('darkMode'); 

  //on active le darkmode s'il est n'est pas encore activé
  if (darkMode !== 'enabled') {
    enableDarkMode();
  //sinon on le désactive  
  } else {  
    disableDarkMode(); 
  }
});

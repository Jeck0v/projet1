const cookiesBanner = document.querySelector('.cookies-banner');
const acceptCookiesBtn = document.querySelector('.accept-cookies-btn');

// Vérifie si l'utilisateur a déjà accepté les cookies
if (localStorage.getItem('cookiesAccepted')) {
cookiesBanner.style.display = 'none';
}

// Ajoute un écouteur d'événement au bouton "Accepter" pour enregistrer l'acceptation des cookies et fermer le bandeau de cookies
acceptCookiesBtn.addEventListener('click', () => {
localStorage.setItem('cookiesAccepted', true);
cookiesBanner.style.display = 'none';
});
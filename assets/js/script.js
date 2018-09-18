// fonction regex verification des champs logIn
function login(){
  var reg = /^[a-zA-Z1-9]$/;
  var log = document.getElementById('pseudo').value;
  var pwd = document.getElementById('password').value;
  if (reg.test(log) && reg.test(pwd) == true){
    alert('valide');
  } else {
    alert('vous avez une erreur dans votre formulaire.');
  }
};
// regex verification des champs d'Inscription
function signFunction(){
  var regPL = /^[a-zA-Z1-9]+$/;
  var regEmail = /^[a-zA-Z1-9]+[@][a-zA-Z1-9]+[.][a-z]{3}$/;
  var log = document.getElementById('signLogin').value;
  var pwd = document.getElementById('signPassword').value;
  var email = document.getElementById('signEmail').value;
  var confPwd = document.getElementById('signConfirmPassword').value;
  if (regPL.test(log) && regPL.test(pwd) && regEmail.test(email) && regPL.test(confPwd) == true ){
    // valide , confirmation des 2 mdp
    if (pwd == confPwd){
      alert('Merci pour votre inscription');
    } else {
      alert('vos mots de passe ne corresponde pas.');
    }
  } else {
    alert('vous avez une erreur dans votre formulaire.');
  }
}
// modale
var modal = document.getElementById('aModal');

// le bouton pour avoir la modale
var btn = document.getElementById("aBtn");

// avoir le span pour fermer la modale
var span = document.getElementsByClassName("close")[0];

// on click ouvrir la modale
function modale() {
var modal = document.getElementById('aModal');
modal.style.display = "block";
}

// on click close la modale
span.onclick = function() {
  modal.style.display = "none";
}

// quand click a cotés close modale
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

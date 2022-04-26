const btn = document.querySelector('#docImg');
const text = document.querySelector('.nav2');
const btn2 = document.querySelector('#info');
const text2 = document.querySelector('.nav3');

let visible = false;
let active = false;

btn.addEventListener('click', () => {
   visible = !visible;
    visible ? text.classList.add('visible') : text.classList.remove('visible'), text2.classList.remove('visible'), btn2.classList.remove('active');


});

btn2.addEventListener('click', () => {
    active = !active;
    text2.classList.toggle('visible');
    btn2.classList.toggle('active');
});



document.querySelector('#dossierImage').addEventListener('hidden.bs.modal', () => {
    text2.classList.remove('visible');
    btn2.classList.remove('active');
});

/*
// Permet de supprimer toute les fenetre ouverte lors de la fermeture de la modal
document.querySelector('.ferm').addEventListener('click', () => {
    visible = !visible;
    visible ? text.classList.add('visible') : text.classList.remove('visible'), text2.classList.remove('visible');
    btn2.classList.remove('active');
});

// Permet de supprimer toute les fenetre ouverte lors de la fermeture de la modal
document.querySelector('.btn-secondary').addEventListener('click', () => {
    visible = !visible;
    visible ? text.classList.add('visible') : text.classList.remove('visible'), text2.classList.remove('visible');
    btn2.classList.remove('active');

});*/

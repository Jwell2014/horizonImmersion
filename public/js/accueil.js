const btn = document.querySelector('#docImg');
const text = document.querySelector('.nav2');
const btn2 = document.querySelector('#info');
const text2 = document.querySelector('.nav3');

let visible = false;

btn.addEventListener('click', () => {
   visible = !visible;
   visible ? text.classList.add('visible') : text.classList.remove('visible'), text2.classList.remove('visible');
});

btn2.addEventListener('click', () => {
    text2.classList.toggle('visible');
});

// Permet de supprimer toute les fenetre ouverte lors de la fermeture de la modal
document.querySelector('.ferm').addEventListener('click', () => {
    visible = !visible;
    visible ? text.classList.add('visible') : text.classList.remove('visible'), text2.classList.remove('visible');
});

// Permet de supprimer toute les fenetre ouverte lors de la fermeture de la modal
document.querySelector('.btn-secondary').addEventListener('click', () => {
    visible = !visible;
    visible ? text.classList.add('visible') : text.classList.remove('visible'), text2.classList.remove('visible');
});
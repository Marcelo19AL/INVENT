// script.js

// Selecciona el botón flotante y el card alternativo
const floatingButton = document.getElementById('floating-button');
const alternativeCard = document.getElementById('alternative-card');
const closeCardButton = document.getElementById('close-card');

// Muestra el card alternativo al hacer clic en el botón flotante
floatingButton.addEventListener('click', () => {
    alternativeCard.classList.toggle('hidden'); // Alterna la clase hidden
});

// Cierra el card alternativo al hacer clic en el botón de cerrar
closeCardButton.addEventListener('click', () => {
    alternativeCard.classList.add('hidden'); // Agrega la clase hidden
});

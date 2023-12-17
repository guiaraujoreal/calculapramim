const elementos = document.querySelectorAll('.txt_aprend');

const options = {
  threshold: 0.5 // Define o valor de visibilidade necessário para ativar o efeito (de 0 a 1)
};

const callback = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.backgroundSize = '100% 100%';
    } else {
      entry.target.style.backgroundSize = '0% 100%';
    }
  });
};

const observer = new IntersectionObserver(callback, options);

elementos.forEach(elemento => {
  observer.observe(elemento);
});

const textos = ["Inclusiva", "Saludable", "Libre de Gluten", "Libre de Huevo", "Libre de lácteos"];
const spanTexto = document.querySelector('.dinamico');

let indice = 0;

function cambiarTexto() {
  spanTexto.style.opacity = 0; // Configura la opacidad a 0 antes de cambiar el texto

  setTimeout(() => {
    spanTexto.textContent = textos[indice];
    spanTexto.style.opacity = 1; // Aumenta la opacidad a 1 después de cambiar el texto
    indice = (indice + 1) % textos.length;
  }, 500); // Retraso de 500 milisegundos para la transición suave

  setTimeout(cambiarTexto, 1750); // Cambia el texto cada 2.5 segundos (2500 milisegundos)
}

cambiarTexto();

// const imagenes = ["imagen/logo.png", "imagen/local.jpg"];
// const imgElement = document.querySelector('.dinamico');

// let indice = 0;

// function cambiarImagen() {
//   imgElement.style.opacity = 0; // Configura la opacidad a 0 antes de cambiar la imagen

//   setTimeout(() => {
//     imgElement.src = imagenes[indice];
//     imgElement.style.opacity = 1; // Aumenta la opacidad a 1 después de cambiar la imagen
//     indice = (indice + 1) % imagenes.length;
//   }, 500); // Retraso de 500 milisegundos para la transición suave

//   setTimeout(cambiarImagen, 1750); // Cambia la imagen cada 2.5 segundos (2500 milisegundos)
// }

// cambiarImagen();
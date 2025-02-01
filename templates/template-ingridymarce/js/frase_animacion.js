// Array de frases
const frases = [
  "Tú eres la razón de cada uno de mis sueños y la realidad que siempre quise vivir.",
  "Nuestro amor es la promesa de un para siempre que comienza cada día.",
  "Contigo entendí que el verdadero amor no tiene final, solo nuevos comienzos.",
  "En ti encontré un hogar donde mi alma siempre quiere quedarse.",
  "Eres mi todo, mi siempre, mi amor eterno.",
  "Cada paso que damos juntos es una prueba de que nuestro amor es infinito.",
  "El amor que compartimos es la fuerza que mueve todo en mi vida.",
  "Juntos somos invencibles, porque el amor que nos une es nuestra mayor fortaleza.",
  "Eres mi sueño hecho realidad, mi compañero de vida y mi razón para sonreír.",
  "Gracias por llenar mi vida de amor, risas y la promesa de un futuro juntos.",
  "Cada día a tu lado es una bendición que jamás daré por sentada.",
  "Nuestro amor es la chispa que enciende cada día de mi vida.",
  "Amarte es el privilegio más grande que la vida me ha dado.",
  "Juntos construimos un amor que nada ni nadie puede derribar.",
  "Eres mi lugar seguro, mi refugio y mi mayor felicidad.",
  "Prometo cuidar nuestro amor como el tesoro más valioso de mi vida.",
  "Eres la historia de amor que siempre quise escribir.",
  "Amarte y ser amado por ti es el mayor regalo que la vida me ha dado.",
  "Cada momento a tu lado es un recuerdo que guardo con el corazón lleno de amor.",
  "Nuestro matrimonio es la prueba de que el amor verdadero existe y crece con el tiempo.",
];

// Selección del elemento donde se mostrarán los nombres
const content_frases = document.getElementById("mostrar-frases");

// Índice para recorrer los nombres
let index = 0;

// Función para mostrar nombres con opacidad dinámica
function mostrarFrases() {
  if (frases) {
    // Cambiar al nombre actual
    content_frases.textContent = frases[index];

    // Aumentar opacidad para que aparezca
    content_frases.style.opacity = 1;

    // Después de 2 segundos, disminuir opacidad para que desaparezca
    setTimeout(() => {
      content_frases.style.opacity = 0;

      // Cambiar al siguiente nombre en el array
      index = (index + 1) % frases.length;

      // Llamar a la función de nuevo después de 2 segundos para completar el bucle
      setTimeout(mostrarFrases, 2000);
    }, 4000);
  }
}

// Iniciar el bucle de animación
mostrarFrases();

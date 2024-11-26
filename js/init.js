document.addEventListener("DOMContentLoaded", function () {
  const text = "Una solución a tu medida."; // Texto a animar
  const h1 = document.getElementById("animatedText");
  let index = 0;

  function typeLetterByLetter() {
    if (index < text.length) {
      h1.textContent += text[index]; // Agrega la letra al contenido
      index++; // Incrementa el índice
    } else {
      clearInterval(interval); // Detiene el intervalo cuando termina el texto
    }
  }

  const interval = setInterval(typeLetterByLetter, 100); // Cambia el tiempo en milisegundos si deseas acelerar o ralentizar
});

document.addEventListener("DOMContentLoaded", function () {
  const paragraphs = document.querySelectorAll("p");

  function typeLetterByLetter(element) {
    const text = element.getAttribute("data-text"); // Obtiene el texto desde el atributo data-text
    let index = 0;

    function type() {
      if (index < text.length) {
        element.textContent += text[index];
        index++;
        setTimeout(type, 100); // Ajusta la velocidad aquí (100 ms)
      }
    }
    type();
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const element = entry.target;
        if (!element.classList.contains("visible")) {
          element.classList.add("visible"); // Marca como visible
          typeLetterByLetter(element); // Activa la animación
        }
      }
    });
  });

  paragraphs.forEach((p) => observer.observe(p)); // Observa cada párrafo
});



document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('myForm');

  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Evita el envío del formulario

    // Obtener los valores del formulario
    const name = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const comentario = document.getElementById('comentario').value;
  


    // Crear el mensaje de confirmación
    const confirmationMessage = `Confirma el envío de los siguientes datos:\n\nNombre: ${name}
      \nEmail: ${email}
      \nTeléfono: ${telefono}
       \nComentarios: ${comentario}
        
      `;

    // Mostrar la ventana emergente
    if (confirm(confirmationMessage)) {
      // Si el usuario confirma, enviar el formulario
      form.submit();
    }
  });
});
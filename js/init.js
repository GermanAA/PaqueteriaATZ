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
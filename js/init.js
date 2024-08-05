(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space


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
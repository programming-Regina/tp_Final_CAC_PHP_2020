(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Busca los formularios a validar
    var forms = document.getElementsByClassName('needs-validation');
    // Patrullaje!!!
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();         
        }
        form.classList.add('was-validated');
      
      }, false);
    });
  }, false);
})();

// para el plugin bs-custom-file-, que resuelve el problema del input tipo file de BS : https://github.com/Johann-S/bs-custom-file-input 
$(document).ready(function () {
  bsCustomFileInput.init()
})

// muestra/oculta secciones info y nuevo voluntario de la parte administrativa de voluntarios
function show(que) {
  if (que == "new") {
    document.getElementById('info-vol').style.display = "none";
    document.getElementById('agregar-vol').style.display = "block";
  } else {
    document.getElementById('agregar-vol').style.display = "none";
    document.getElementById('info-vol').style.display = "block";
  }
}

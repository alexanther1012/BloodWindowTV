jQuery.extend(jQuery.validator.messages, {
required: "Este campo es requerido.",
remote: "Porfavor corregir este campo.",
email: "Porfavor ingresa una direccion de email valida.",
url: "Porfavor ingresa una URL valida.",
date: "Please enter a valid date.",
dateISO: "Porfavor ingresa un dato valido (ISO).",
number: "Porfavor ingresa un numero valido.",
digits: "Porfavor ingresa solo digitos.",
creditcard: "Porfavor ingresa un numero de tarjeta de credito valido.",
equalTo: "Please enter the same value again.",
accept: "Porfavor ingresa un valor con una extension valida.",
maxlength: jQuery.validator.format("Campo maximo {0} caracteres."),
minlength: jQuery.validator.format("Campo minimo {0} caracteres."),
rangelength: jQuery.validator.format("Porfavor ingresa un valor entre {0} y {1} de largo."),
range: jQuery.validator.format("Porfavor ingresa un valor entre {0} y {1}."),
max: jQuery.validator.format("Porfavor ingresa un valor menor o igual que {0}."),
min: jQuery.validator.format("Porfavor ingresa un valor mayor o igual que {0}.")
});
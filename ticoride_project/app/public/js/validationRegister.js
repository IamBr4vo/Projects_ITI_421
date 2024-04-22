document.getElementById('registerForm').addEventListener('submit', function(event) {
    var validForm = true;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const phone = document.getElementById('phone').value;
    const name = document.getElementById('name').value;
    const lastName = document.getElementById('lastName').value;

    //Validation for password matching
    if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden.");
        validForm = false;
    }

    //Validation for phone format
    if (!phone.match(/^\d{8}$/)) {
        alert("El teléfono debe ser de 8 números.");
        validForm = false;
    }

    //Validation for name
    if (!name.match(/^[a-zA-Z ]+$/)) {
        alert("El nombre debe contener solo letras y espacios.");
        validForm = false;
    }

    //Validation for last name
    if (!lastName.match(/^[a-zA-Z ]+$/)) {
        alert("El apellido debe contener solo letras y espacios.");
        validForm = false;
    }

    if (!validForm) {
        event.preventDefault();//stop form submission
    }
});

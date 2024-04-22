document.getElementById('settingsForm').addEventListener('submit', function(event) {
    var validForm = true;
    var fullName = document.getElementById('fullName').value;
    var speedAverage = document.getElementById('speedAverage').value;

    //Validation for Full Name (letters only)
    if (!fullName.match(/^[a-zA-Z ]+$/)) {
        alert("Full Name debe tener solo letras.");
        validForm = false;
    }

    //validation for Speed Average (numbers only)
    if (isNaN(speedAverage)) {
        alert("Speed Average donde deber tener numeros.");
        validForm = false;
    }

    if (!validForm) {
        event.preventDefault();
    }
});
document.getElementById('rideForm').addEventListener('submit', function(event) {
    var validForm = true;
    var rideName = document.getElementById('rideName').value;
    var startFrom = document.getElementById('startFrom').value;
    var end = document.getElementById('end').value;
    var days = document.querySelectorAll('input[type="checkbox"]:checked').length;

    // Validation for trip name
    if (!rideName.match(/^[a-zA-Z ]+$/)) {
        alert("El nombre del ride solo debe tener letras.");
        validForm = false;
    }

    //validation for Start From and End (minimum 2 characters)
    if (startFrom.length < 2 || end.length < 2) {
        alert("Estar From o End from deben ser de mas de 2 caracteres.");
        validForm = false;
    }

    //validation to ensure that at least one day is selected
    if (days === 0) {
        alert("Porfavor selecciona almenos 1 dia");
        validForm = false;
    }

    if (!validForm) {
        event.preventDefault();
    }
});
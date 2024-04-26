
function confirmDelete() {
    var confirmDelete = confirm("Are you sure you want to delete this ride?");
    //If the user confirms the deletion, redirect to the link
    if (confirmDelete) {
        window.location.href = this.getAttribute('href');
    }
}

document.getElementById('filterForm').addEventListener('submit', function(event) {
    event.preventDefault(); //Prevent the form from being submitted automatically

    // Get the values of the search fields
    const fromLocation = document.getElementById('fromLocation').value;
    const toLocation = document.getElementById('toLocation').value;

    //Make an AJAX request to the server
    fetch('/models/filterRide.php', {
        method: 'POST',
        body: new FormData(this) //Send form data
    })
    .then(response => response.json())//Convert the response to JSON
    .then(data => {
        //Display the results in the table
        const tableBody = document.querySelector('.table tbody');
        tableBody.innerHTML = ''; //Clear the table before adding new results

        data.forEach(ride => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${ride.ride_name}</td>
                <td>${ride.start_from}</td>
                <td>${ride.end_to}</td>
                <td>
                    <a href="/pages/rides/viewRide.php?rideId=${ride.id}" class="btn btn-primary">View</a>
                </td>
            `;
            tableBody.appendChild(row);//Add the row to the table
        });
    })
    .catch(error => console.error('Error:', error));
});
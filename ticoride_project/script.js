
function confirmDelete() {
    var confirmDelete = confirm("Are you sure you want to delete this ride?");
    //If the user confirms the deletion, redirect to the link
    if (confirmDelete) {
        window.location.href = this.getAttribute('href');
    }
}
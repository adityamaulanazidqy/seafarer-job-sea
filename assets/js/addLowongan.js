// Function to display the popup
function showPopup() {
  var popup = document.getElementById('popup');
  popup.style.display = 'block';
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
    footer: '<a href="#">Why do I have this issue?</a>',
  });
}

// Function to close the popup
function closePopup() {
  var popup = document.getElementById('popup');
  popup.style.display = 'none';
}

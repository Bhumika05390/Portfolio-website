document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from submitting the default way

    var formData = new FormData(this);
    fetch('submit_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        alert('Message sent successfully');
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Smooth scrolling for nav links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Mobile Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

menuToggle.addEventListener('click', function () {
    this.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Close menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', function () {
        menuToggle.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

// Close menu when clicking outside
document.addEventListener('click', function (event) {
    const isClickInside = navLinks.contains(event.target) || menuToggle.contains(event.target);
    if (!isClickInside && navLinks.classList.contains('active')) {
        menuToggle.classList.remove('active');
        navLinks.classList.remove('active');
    }
});

// Smooth scrolling for nav links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Form submission with AJAX
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending...';

    fetch('', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            // Check if PHP processed successfully
            if (data.includes('success')) {
                showAlert('Message sent successfully! We will get back to you soon.', 'success');
                document.getElementById('contactForm').reset();
            } else {
                showAlert('Failed to send message. Please try again or contact directly via email.', 'error');
            }
        })
        .catch(error => {
            showAlert('An error occurred. Please try again later.', 'error');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Message';
        });
});

// Alert function
function showAlert(message, type) {
    const alertBox = document.getElementById('formAlert');
    alertBox.textContent = message;
    alertBox.className = 'alert alert-' + type;
    alertBox.style.display = 'block';

    setTimeout(() => {
        alertBox.style.display = 'none';
    }, 5000);
}
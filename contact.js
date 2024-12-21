document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.querySelector('.contact-form');
  
  if (contactForm) { // Check if the form exists before attaching the event listener
    const formMessages = document.createElement('p');
    contactForm.prepend(formMessages);

    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const subject = document.getElementById('subject').value.trim();
      const enquiry = document.getElementById('text').value.trim();
      const orderNumber = document.getElementById('ordernumber').value.trim();

      // Clear previous messages
      formMessages.textContent = '';

      // Validate fields
      if (!name || !email || !subject || !enquiry || !orderNumber) {
        formMessages.textContent = 'Please fill in all fields.';
        formMessages.style.color = 'red';
        return;
      }

      if (!validateEmail(email)) {
        formMessages.textContent = 'Invalid email address.';
        formMessages.style.color = 'red';
        return;
      }

      formMessages.textContent = 'Form submitted successfully!';
      formMessages.style.color = 'green';

      // Reset the form after submission
      contactForm.reset();
    });
  }

  // Email validation
  function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return re.test(email);
  }
});

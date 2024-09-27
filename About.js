// Select all input elements with class 'input'
/*const inputs = document.querySelectorAll(".input");

// Focus and blur functions to add or remove 'focus' class
function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value === "") {
    parent.classList.remove("focus");
  }
}

// Add event listeners to each input element
inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});*/

// Validation functions
const form = document.getElementById('contactForm');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const msgInput = document.getElementById('msg');
const errorMessages = document.querySelectorAll('.error-message');

// Validate name (letters only)
function validateName() {
  const namePattern = /^[A-Za-z\s]+$/;
  return namePattern.test(nameInput.value);
}

// Validate email (basic email format)
function validateEmail() {
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return emailPattern.test(emailInput.value);
}

// Show error message
function showError(input, message) {
  const parent = input.parentElement;
  const errorDisplay = parent.querySelector('.error-message');
  errorDisplay.innerText = message;
  parent.classList.add('error');
}

// Clear error message
function clearError(input) {
  const parent = input.parentElement;
  const errorDisplay = parent.querySelector('.error-message');
  errorDisplay.innerText = '';
  parent.classList.remove('error');
}

// Form validation on submit
form.addEventListener('submit', function (event) {
  let isValid = true;

  // Clear previous errors
  errorMessages.forEach((msg) => (msg.innerText = ''));

  // Validate name
  if (!validateName()) {
    showError(nameInput, 'Name must contain letters only.');
    isValid = false;
  } else {
    clearError(nameInput);
  }

  // Validate email
  if (!validateEmail()) {
    showError(emailInput, 'Email must be in a valid format.');
    isValid = false;
  } else {
    clearError(emailInput);
  }

  // Ensure phone is filled
  if (phoneInput.value === '') {
    showError(phoneInput, 'Phone number is required.');
    isValid = false;
  } else {
    clearError(phoneInput);
  }

  // Ensure message is filled
  if (msgInput.value === '') {
    showError(msgInput, 'Message is required.');
    isValid = false;
  } else {
    clearError(msgInput);
  }

  // Prevent form submission if any validation fails
  if (!isValid) {
    event.preventDefault();
  }
});

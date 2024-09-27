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

// Get form and input elements
const form = document.getElementById('payment-form');
const fnameInput = document.querySelector('input[name="fname"]');
const regInput = document.querySelector('input[name="reg"]');
const amountInput = document.querySelector('input[name="amount"]');
const nicInput = document.querySelector('input[name="nic"]');
const emailInput = document.querySelector('input[name="email"]');
const cnameInput = document.querySelector('input[name="cname"]');
const imageInput = document.querySelector('input[name="image"]');

// Validation functions
function validateName() {
  const namePattern = /^[A-Za-z\s]+$/;
  return namePattern.test(fnameInput.value);
}

function validateNIC() {
  // Example NIC pattern (update based on your NIC format)
  const nicPattern = /^[0-9]{9}[vVxX]$/;  // e.g., 123456789V or 123456789X
  return nicPattern.test(nicInput.value);
}

function validateEmail() {
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return emailPattern.test(emailInput.value);
}

// Show error message
function showError(input, message) {
  const parent = input.parentElement;
  const errorDisplay = parent.querySelector('.error-message');
  if (!errorDisplay) {
    const errorSpan = document.createElement('span');
    errorSpan.className = 'error-message';
    errorSpan.innerText = message;
    parent.appendChild(errorSpan);
  } else {
    errorDisplay.innerText = message;
  }
  parent.classList.add('error');
}

// Clear error message
function clearError(input) {
  const parent = input.parentElement;
  const errorDisplay = parent.querySelector('.error-message');
  if (errorDisplay) {
    errorDisplay.innerText = '';
  }
  parent.classList.remove('error');
}

// Form validation on submit
form.addEventListener('submit', function (event) {
  let isValid = true;

  // Validate that all fields are filled
  if (fnameInput.value === '') {
    showError(fnameInput, 'Name is required.');
    isValid = false;
  } else if (!validateName()) {
    showError(fnameInput, 'Name must contain letters only.');
    isValid = false;
  } else {
    clearError(fnameInput);
  }

  if (regInput.value === '') {
    showError(regInput, 'Registration number is required.');
    isValid = false;
  } else {
    clearError(regInput);
  }

  if (amountInput.value === '') {
    showError(amountInput, 'Amount is required.');
    isValid = false;
  } else {
    clearError(amountInput);
  }

  if (nicInput.value === '') {
    showError(nicInput, 'NIC is required.');
    isValid = false;
  } else if (!validateNIC()) {
    showError(nicInput, 'NIC format is invalid.');
    isValid = false;
  } else {
    clearError(nicInput);
  }

  if (emailInput.value === '') {
    showError(emailInput, 'Email is required.');
    isValid = false;
  } else if (!validateEmail()) {
    showError(emailInput, 'Email format is invalid.');
    isValid = false;
  } else {
    clearError(emailInput);
  }

  if (cnameInput.value === '') {
    showError(cnameInput, 'Course name is required.');
    isValid = false;
  } else {
    clearError(cnameInput);
  }

  if (imageInput.files.length === 0) {
    showError(imageInput, 'Deposit slip photo is required.');
    isValid = false;
  } else {
    clearError(imageInput);
  }

  // Prevent form submission if any validation fails
  if (!isValid) {
    event.preventDefault();
  }
});

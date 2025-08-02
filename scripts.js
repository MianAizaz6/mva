
const fullName = document.getElementById('fullName');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const zip = document.getElementById('zip');
const state = document.getElementById('state');
const consent = document.getElementById('consent');

const nameError = document.getElementById('nameError');
const phoneError = document.getElementById('phoneError');
const emailError = document.getElementById('emailError');
const zipError = document.getElementById('zipError');
const stateError = document.getElementById('stateError');
const consentError = document.getElementById('consentError');

function validateName() {
  if (!/^[A-Za-z ]+$/.test(fullName.value.trim())) {
    nameError.classList.remove('hidden');
    return false;
  }
  nameError.classList.add('hidden');
  return true;
}

function validatePhone() {
  if (!/^[0-9]{10}$/.test(phone.value.trim())) {
    phoneError.classList.remove('hidden');
    return false;
  }
  phoneError.classList.add('hidden');
  return true;
}

function validateEmail() {
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
    emailError.classList.remove('hidden');
    return false;
  }
  emailError.classList.add('hidden');
  return true;
}

function validateZip() {
  if (!/^[0-9]{5}$/.test(zip.value.trim())) {
    zipError.classList.remove('hidden');
    return false;
  }
  zipError.classList.add('hidden');
  return true;
}

function validateState() {
  if (!state.value) {
    stateError.classList.remove('hidden');
    return false;
  }
  stateError.classList.add('hidden');
  return true;
}

function validateConsent() {
  if (!consent.checked) {
    consentError.classList.remove('hidden');
    return false;
  }
  consentError.classList.add('hidden');
  return true;
}

// Attach blur event handlers
fullName.addEventListener('blur', validateName);
phone.addEventListener('blur', validatePhone);
email.addEventListener('blur', validateEmail);
zip.addEventListener('blur', validateZip);
state.addEventListener('blur', validateState);

// Final submit validation
document.getElementById('medicareForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const isValid =
    validateName() &&
    validatePhone() &&
    validateEmail() &&
    validateZip() &&
    validateState() &&
    validateConsent();

  if (isValid) {
    // alert('Form submitted successfully!');
    this.submit(); // use if backend submission needed
  }
});


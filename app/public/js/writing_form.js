let currentStep = 1;

showStep(currentStep);

function showStep(step) {
  const formSteps = document.querySelectorAll('.form-step');
  formSteps.forEach((stepElement) => (stepElement.style.display = 'none'));

  const currentStepElement = document.querySelector(`.form-step[data-step="${step}"]`);
  if (currentStepElement) {
    currentStepElement.style.display = 'flex';
  }

  const nextBtn = document.getElementById('nextBtn');
  const prevBtn = document.getElementById('prevBtn');

  if (step === formSteps.length) {
    nextBtn.innerHTML = 'Submit';
    nextBtn.onclick = function () {
      document.getElementById('writingForm').submit();
    };
  } else {
    nextBtn.innerHTML = 'Next';
    nextBtn.onclick = function () {
      nextStep();
    };
  }

  prevBtn.disabled = step === 1;
}

function validateStep() {
  const currentStepElement = document.querySelector(`.form-step[data-step="${currentStep}"]`);

  if (currentStepElement) {
    const inputs = currentStepElement.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;

    inputs.forEach((input) => {
      if (!input.checkValidity()) {
        isValid = false;
        input.reportValidity();
      }
    });

    return isValid;
  }

  return false;
}

function nextStep() {
  if (validateStep()) {
    currentStep++;
    showStep(currentStep);
  }
}

function prevStep() {
  currentStep--;
  showStep(currentStep);
}

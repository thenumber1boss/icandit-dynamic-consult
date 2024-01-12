let currentStep = 1;
let formSteps;

showStep(currentStep);

function showStep(step) {
  // Hide all steps
  formSteps = document.querySelectorAll('.form-step');
  formSteps.forEach((stepElement) => {
    stepElement.style.display = 'none';
  });

  // Show the current step
  const currentStepElement = document.querySelector(`.form-step[data-step="${step}"]`);
  if (currentStepElement) {
    currentStepElement.style.display = 'flex';
  }

  // Update button visibility and text based on step
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  if (step === 1) {
    prevBtn.style.display = 'none';
  } else {
    prevBtn.style.display = 'inline-block';
  }

  if (step === formSteps.length) {
    nextBtn.innerHTML = 'Submit';
  } else {
    nextBtn.innerHTML = 'Next';
  }
}

function validateStep() {
  const currentStepElement = document.querySelector(`.form-step[data-step="${currentStep}"]`);

  if (currentStepElement) {
    const inputs = currentStepElement.querySelectorAll('input[required], select[required]');
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
  if (currentStep === formSteps.length) {
    // If it's the last step, submit the form
    document.getElementById('researchForm').submit();
  } else {
    if (validateStep()) {
      currentStep++;
      showStep(currentStep);
    }
  }
}

function prevStep() {
  currentStep--;
  showStep(currentStep);
}

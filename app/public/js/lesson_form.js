let currentStep = 1;
let studentDetails = {}; // Object to store student details
let formSteps; // Variable to store form steps

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

  // If we are on step 5, render student names
  if (step === 6) {
    showStudentNamesStep();
  }

  // If we are on step 7, show student details one by one
  if (step === 7) {
    showStudentDetails();
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

function showStudentNamesStep() {
  const numStudents = parseInt(document.getElementById('numStudents').value);
  const studentNamesDiv = document.getElementById('studentNames');
  studentNamesDiv.innerHTML = '';

  // Clear previous student details
  studentDetails = {};

  for (let i = 1; i <= numStudents; i++) {
    studentNamesDiv.innerHTML += `
      <div class="student-details" data-student-step="1" data-student-index="${i}">
        <label for="student${i}Name">Enter the Name of Student ${i}:</label>
        <input type="text" id="student${i}Name" name="student${i}Name" required>
      </div>
    `;
  }
}

function showStudentDetails() {
  // Clear previous student details
  studentDetails = {};

  // Store student names
  const numStudents = parseInt(document.getElementById('numStudents').value);

  for (let i = 1; i <= numStudents; i++) {
    const studentName = document.getElementById(`student${i}Name`).value;
    studentDetails[`student${i}`] = { name: studentName };
  }

  const studentDetailsDiv = document.getElementById('studentDetails');
  studentDetailsDiv.innerHTML = '';

  // Display student details one by one
  for (const studentName in studentDetails) {
    const student = studentDetails[studentName];
    studentDetailsDiv.innerHTML += `
      <div class="student-info-fields" data-student-step="2">
        <h3>Please enter the following information for ${student.name}:</h3>
        <label for="${studentName}Age">Age:</label>
        <input type="text" id="${studentName}Age" name="${studentName}Age" required>
        <label for="${studentName}Class">Class:</label>
        <input type="text" id="${studentName}Class" name="${studentName}Class" required>
        <label for="${studentName}Subjects">Subjects to be Tutored:</label>
        <input type="text" id="${studentName}Subjects" name="${studentName}Subjects" required>
      </div>
    `;
  }
}

function validateStep() {
  const currentStepElement = document.querySelector(`.form-step[data-step="${currentStep}"]`);

  if (currentStepElement) {
    const inputs = currentStepElement.querySelectorAll('input[required]');
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
    document.getElementById('lessonForm').submit();
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

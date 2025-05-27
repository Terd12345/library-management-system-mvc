// privacy modal

document.addEventListener('DOMContentLoaded', function () {
    if (!sessionStorage.getItem('privacyAccepted')) {
      const privacyModal = new bootstrap.Modal(document.getElementById('privacyModal'), {
        backdrop: 'static',
        keyboard: false
      });
      privacyModal.show();
    }

    document.getElementById('privacyForm').addEventListener('submit', function (e) {
      e.preventDefault();
      sessionStorage.setItem('privacyAccepted', 'true');
      const modalInstance = bootstrap.Modal.getInstance(document.getElementById('privacyModal'));
      modalInstance.hide();
    });
  });

  // end line


  // multi-step form

  const steps = document.querySelectorAll('.form-step');
  const indicators = document.querySelectorAll('.step-indicator span');
  let currentStep = 0;

  function showStep(step) {
    steps.forEach((s, i) => s.classList.toggle('active', i === step));
    indicators.forEach((ind, i) => ind.classList.toggle('active', i === step));
  }

  function validateStep(stepIndex) {
    const currentFields = steps[stepIndex].querySelectorAll('input, select');
    for (let field of currentFields) {
      if (field.hasAttribute('required') && !field.value.trim()) {
        Swal.fire({
          icon: 'warning',
          title: 'Missing Field',
          text: `Please fill out the "${field.previousElementSibling?.innerText || 'required'}" field.`,
        });
        return false;
      }
      if (field.name === 'password') {
      password = field.value;
    }
    if (field.name === 'confirm_password') {
      confirmPassword = field.value;
    }
  }

  // Check if password and confirm password match
  if (password !== null && confirmPassword !== null && password !== confirmPassword) {
    Swal.fire({
      icon: 'error',
      title: 'Password Mismatch',
      text: 'Password and Confirm Password do not match.',
    });
    return false;
  }
    return true;
  }

  document.querySelectorAll('.next-step').forEach(btn => {
    btn.addEventListener('click', () => {
      if (validateStep(currentStep)) {
        if (currentStep < steps.length - 1) {
          currentStep++;
          showStep(currentStep);
        }
      }
    });
  });

  document.querySelectorAll('.prev-step').forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    });
  });


  // end line
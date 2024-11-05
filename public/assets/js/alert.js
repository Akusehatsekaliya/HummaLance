function initAlerts() {
  const alerts = document.querySelectorAll('.alert-container .alert');
  const displayDuration = 3000;

  alerts.forEach((alert, index) => {

    setTimeout(() => {
      alert.classList.add('show');
    }, 300 * index);

    setTimeout(() => {
      alert.classList.add('hide');
    }, displayDuration + 300 * 1.25 * index);

    alert.addEventListener('transitionend', (e) => {
      if (e.propertyName === 'right' && alert.classList.contains('hide')) {
        alert.style.display = 'none';
      }
    });

    alert.addEventListener('click', () => {
      alert.classList.add('hide');
    });
  });
}

document.addEventListener('DOMContentLoaded', initAlerts);
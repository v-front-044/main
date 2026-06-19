// Установите начальные значения времени (часы, минуты, секунды)
let hours = 0;
let minutes = 29;
let seconds = 59;

// Функция, обновляющая отображение времени
function updateTimer() {
  // Получаем элементы таймера
  const hoursElement = document.querySelector(".h-timer");
  const minutesElement = document.querySelector(".m-timer");
  const secondsElement = document.querySelector(".s-timer");

  // Обновляем значения времени в элементах
  hoursElement.textContent = String(hours).padStart(2, "0");
  minutesElement.textContent = String(minutes).padStart(2, "0");
  secondsElement.textContent = String(seconds).padStart(2, "0");
}

// Функция, обратного отсчета
function countdown() {
  updateTimer();

  const timerInterval = setInterval(function () {
    seconds--;

    if (seconds < 0) {
      minutes--;
      seconds = 59;

      if (minutes < 0) {
        hours--;
        minutes = 59;
      }
    }

    updateTimer();

    if (hours === 0 && minutes === 0 && seconds === 0) {
      clearInterval(timerInterval);
    }
  }, 1000);
}

// Запускаем таймер при загрузке страницы
window.addEventListener('load', function () {
  countdown();
});

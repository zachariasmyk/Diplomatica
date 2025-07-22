document.addEventListener('DOMContentLoaded', () => {
  const logoutLink = document.querySelector('.logout-link');
  const popup = document.getElementById('logoutPopup');
  const confirmBtn = document.getElementById('confirmLogout');
  const cancelBtn = document.getElementById('cancelLogout');

  logoutLink.addEventListener('click', (e) => {
    e.preventDefault();
    popup.style.display = 'flex';
  });

  confirmBtn.addEventListener('click', () => {
    window.location.href = "../../Login/Login.html";
  });


  cancelBtn.addEventListener('click', () => {
    popup.style.display = 'none';
  });
});

function updateClock() {
  const now = new Date();

  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");
  const seconds = now.getSeconds().toString().padStart(2, "0");

  const day = now.getDate().toString().padStart(2, "0");
  const month = (now.getMonth() + 1).toString().padStart(2, "0");
  const year = now.getFullYear();

  const timeString = `${hours}:${minutes}:${seconds}`;
  const dateString = `${day}/${month}/${year}`;

  document.getElementById("clock-time").textContent = timeString;
  document.getElementById("clock-date").textContent = dateString;
}

setInterval(updateClock, 1000);
updateClock();

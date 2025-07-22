document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('diplomaFormUnique');
  const titleInput = document.getElementById('diplomaTitle');
  const outlineInput = document.getElementById('diplomaOutline');
  const filesInput = document.getElementById('diplomaFiles');
  const successMsg = document.getElementById('diplomaSuccessMsg');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const title = titleInput.value.trim();
      const outline = outlineInput.value.trim();
      const files = filesInput.files;

      if (!title || !outline) {
        successMsg.textContent = 'Παρακαλώ συμπληρώστε όλα τα πεδία.';
        successMsg.style.color = 'red';
        return;
      }

      console.log('--- Καταχώρηση Διπλωματικής ---');
      console.log('Τίτλος:', title);
      console.log('Περίγραμμα:', outline);
      console.log('Αρχεία:', files.length);
      for (let i = 0; i < files.length; i++) {
        console.log(`  ➤ ${files[i].name} (${files[i].type}, ${files[i].size} bytes)`);
      }

      // Δημιουργούμε FormData και στέλνουμε AJAX POST
      const formData = new FormData(form);

      fetch('submit_themata.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          successMsg.style.color = 'green';
          successMsg.textContent = data.message || 'Η διπλωματική καταχωρήθηκε με επιτυχία!';
          form.reset();
        } else {
          successMsg.style.color = 'red';
          successMsg.textContent = data.message || 'Παρουσιάστηκε σφάλμα κατά την αποθήκευση.';
        }
      })
      .catch(() => {
        successMsg.style.color = 'red';
        successMsg.textContent = 'Σφάλμα κατά την αποστολή.';
      });
    });
  }

  // === Λειτουργία Logout Popup ===
  const logoutLink = document.querySelector('.logout-link');
  const popup = document.getElementById('logoutPopup');
  const confirmBtn = document.getElementById('confirmLogout');
  const cancelBtn = document.getElementById('cancelLogout');

  if (logoutLink && popup && confirmBtn && cancelBtn) {
    logoutLink.addEventListener('click', (e) => {
      e.preventDefault();
      popup.style.display = 'flex';
    });

    confirmBtn.addEventListener('click', () => {
      window.location.href = "../../../Login/Login.html";
    });

    cancelBtn.addEventListener('click', () => {
      popup.style.display = 'none';
    });
  }

  // === Ρολόι (ώρα & ημερομηνία) ===
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

    const timeElem = document.getElementById("clock-time");
    const dateElem = document.getElementById("clock-date");

    if (timeElem && dateElem) {
      timeElem.textContent = timeString;
      dateElem.textContent = dateString;
    }
  }

  setInterval(updateClock, 1000);
  updateClock();
});

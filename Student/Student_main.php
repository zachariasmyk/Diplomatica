?>
<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link rel="stylesheet" href="Student_main.css">
</head>


<body>
  
  <img id="image2" src="ceid_logo_tr.png" width="370" height="75" alt="Τμήμα Μηχανικών Η/Υ και Πληροφορικής" />

    <div class="image-wrapper">
      <div class="decor-left"></div>
        <img id="image1" src="Diplomatica.png" width="180" height="180" alt="Diplomatica" />
      <div class="decor-right"></div>
    </div>
    

  <h1 class="welcome-text">Καλώς όρισες, ... !</h1>

 <div class="welcome-box">
    <p>🎓 Καλωσορίσατε στην Diplomatica!!<br><br>
      Εδώ μπορείτε εύκολα και γρήγορα να διαχειριστείτε την πορεία της διπλωματικής σας εργασίας.<br>
      Ανανεώστε τα προσωπικά σας στοιχεία, καταχωρήστε ή επεξεργαστείτε το θέμα σας, και παρακολουθήστε την πρόοδο της υποβολής.<br><br>
      👉 Η διαδικασία είναι απλή, ασφαλής και οργανωμένη — γιατί η εργασία σας αξίζει το καλύτερο περιβάλλον παρουσίασης.<br><br>
      Καλή επιτυχία!
    </p>
  </div>


  <div id="sidebar" class="sidebar">
    
    <ul>
      <li><a href="Student_Profile/Student_profile.html">📝 Επεξεργασία Προφίλ</a></li>
      <li><a href="#">📄 Προβολή Θέματος</a></li>
      <li><a href="#">🛠️ Διαχείριση Διπλωματικής</a></li>
    </ul>
    
    <div class="clock-container">
      <div id="clock-time" class="clock-time"></div>
      <div id="clock-date" class="clock-date"></div>
    </div>

    <a href="../Login/Login.html" class="logout-link">🚪 Αποσύνδεση</a>
    
  </div>

 

  <div id="logoutPopup" class="popup-overlay">
    <div class="popup-box">
      <h2>Αποσύνδεση</h2>
      <p>Είστε σίγουρος/η ότι θέλετε να αποσυνδεθείτε;</p>
      <div class="popup-buttons">
        <button id="confirmLogout">Ναι</button>
        <button id="cancelLogout">Όχι</button>
      </div>
    </div>
  </div>

  <script src="student_main.js"></script>

</body>
</html>
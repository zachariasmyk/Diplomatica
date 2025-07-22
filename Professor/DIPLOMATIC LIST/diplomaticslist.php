<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
    <link rel="stylesheet" href="diplomaticslist.css">
</head>

    <div class="image-wrapper">
      <div class="decor-left"></div>
        <img id="image1" src="Diplomatica.png" width="180" height="180" alt="Diplomatica" />
      <div class="decor-right"></div>
    </div>
  <img id="image2" src="ceid_logo_tr.png" width="370" height="75" alt="Τμήμα Μηχανικών Η/Υ και Πληροφορικής">
<body>
  
<h1 class="welcome-text">Λίστα Διπλωματικών!</h1>

  
   <div id="sidebar1" class="sidebar1">
    <div class="sidebar-icon" title="Μενού ☰">☰</div>
    <ul>
      <li><a href="../../Professor/Professor_main.php">Αρχική Σελίδα</a></li>
      <li><a href="../SHOW&CREATE SUBJECTS TO GIVE/show&createsybjectstogive.php">Προβολή και Δημιουργία θεμάτων προς ανάθεση</a></li>
      <li><a href="../START TO GIVE SUB TO STUDENT/starttogivesubjtostudent.php">Αρχική ανάθεση θέματος σε φοιτητή</a></li>
      <li><a href="../invitationstoparticipateinCommittee/invitationstoparticipateinCommittee.php">Προβολή προσκλήσεων συμμετοχής σε τριμελή Επιτροπή</a></li>
      <li><a href="../show statistics/showstatistics.php">Προβολή στατιστικών</a></li>
      <li><a href="../Diplomaticworkmanagement/Diplomaticworkmanagement.php">Διαχείριση διπλωματικών εργασιών</a></li>
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
  
  <script src="diplomaticslist.js"></script>


  
</body>
</html>

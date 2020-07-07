<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- My CSS -->
  <link href="../css/home.css" rel="stylesheet" type="text/css">
  <title>Rochester Mercy Medical</title>

</head>
<body>

<!-- NavBar -->
<div class="sidenav" id="mySidenav">
  <a href="home.php">Home</a>
  <a href="aboutUs.php">About Us</a>
  <a href="meetOurTeam.php">Meet Our Team</a>
  <a href="billingInformation.php">Billing Information</a>
  <a href="acceptedInsurance.php">Accepted Insurance</a>
  <a href="contactUs.php">Contact Us</a>
  <a href="newPatients.php">New Patients</a>
  <a class = "active" href="patientPortal.php">Patient Portal</a>
</div>

<!-- Main Content -->
<div class="main">

  <h2 class = "pageHeader">Rochester Mercy Medical</h2>
  <img class = "coverImg" src="../img/trees.jpg" alt="Trees">
  &nbsp;&nbsp;

  <a href = "action_page.php">
    <button class="portalButton" type="submit" onclick="window.location.href = 'action_page.php';">Portal</button> <!--relocating to action_page.php-->
  </a>
  &nbsp;&nbsp;
  <h6 class = "pageHeader2">Click on the button for "Portal" to access your personal</br>
    and secure patient portal account that holds many features such as:</h6>

  <div class = "paragraph">
    <h3>
      <ul>
        <li>Access billing information</li>
        <li>Access Insurance Plan</li>
        <li>Prescription Refills</li>
        <li>Make and Cancel Appointments</li>
        <li>Update Your Information</li>
        <li>View Your Statements</li>
        <li>Send the Office Messages</li>
      </ul>
    </h3>
  </div> <!--paragraph-->

  <footer>
    <hr>
    <p>Copyright © Rochester Mercy Medical, All Rights Reserved. Terms of Use | Privacy Policy</p>
    <p>Rochester, NY USA (585)360-0247 </p>
  </footer>
</div>

<!-- My js -->
<script src = "../js/home.js"></script>
</body>
</html>
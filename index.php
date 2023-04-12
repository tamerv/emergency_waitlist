<!DOCTYPE html>
<html lang="en">
<head>
    <p>In Case Any Problem or Any Recommandation : </p>
    <p><a href="mailto:">mph@mph.com</a></p>
  <meta charset="UTF-8">
  <title>Emergency Waitlist - MedicalPark Hospital</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table class = "table2">
    <div class = 'cont1'>
        <tr class = "tr2">
        <th class = "th2"><label for="services">Services:</label>
          <select id="services" name="services" class = "label">
            <option value="1">-</option>
            <option value="2">Orthopedics Clinic</option>
            <option value="3">Cancer Program</option>
            <option value="4">Dermatology</option>
            <option value="5">Ear, Nose and Throat</option>
          </select>
        </th>
          <th class = "th2"><label for="doctors">Doctors:</label>
          <select id="doctors" name="doctors" class = "label">
            <option value="1">Doctors</option>
            <option value="2">Prof. Dr. Seth Locker</option>
            <option value="3">Op. Dr. Camila Breaz</option>
            <option value="4">Dr. Ximena Santillan</option>
            <option value="5">Ord. Prof. Dr. Braydon Patras</option>
          </select>
        </th>
        <th class = "th2"><label for="about">About:</label>
            <select id="about" name="about" class = "label">
              <option value="1">-</option>
              <option value="2">Our History</option>
              <option value="3">Our Vision</option>
            </select>
          </th>
          <th class = "th2"><label for="career">Career Opportunities : </label>
            <select id="career" name="career" class = "label">
              <option value="1">-</option>
              <option value="2">Apply Now!</option>
              <option value="3">Employer Recognition Awards</option>
              <option value="4">Become A Volunteer!</option>  
            </select>
          </th>
        </tr>
    </div>
</table>

  <div class="container">
    <h1>Emergency Waitlist - Medical Park Hospital</h1>
    <form action="api.php" method="post">
      <label for="name">Name:</label>
      <input type="text"  id="name" name="name">
      <br>
      <label for="urgency">Urgency: </label>
      <input type="text"  id= "urgency" name="urgency">
      <p>1 for Control, 2 for Minor Injury, 3 for Moderate Injury, 4 for Severe Injury</p>
      <br>
      <button type="submit" name="submit" onclick="addToWaitlist()">Add to Waitlist</button>
    </form>
    <h2>Waitlist:</h2>
    <table>
      <thead>
        <tr>
          <th>Number</th>
          <th>Name</th>
          <th>Urgency Level</th>
          <th>Timestamp</th>
          <th>Estimated Wait Time</th>
        </tr>
      </thead>
      <tbody id="waitlist">
      </tbody>
    </table>
  </div>
  <div class="clients">
		<?php include("api.php"); ?>
	  </div>
  <script src="script.js"></script>
</body>
</html>

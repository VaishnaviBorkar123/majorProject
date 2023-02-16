
<html>

<head>
  <title> Prayog Project Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css"-->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div>
    <!--form action="/majorProject/index.php" method="post"-->
    <form name="formimp" id="formimp" method="post">
      <div id="container">

        <!--Honey Pot  -->
        <input type="text" name="_honey" style="display:none;">
        <!-- Disable captcha -->
        <input type="hidden" name="_captcha" value="false">

        <input type="hidden" name="_next" value="http://localhost:8080/majorProject/indexContacts.php" id="next">

        <div class="child-container" id="emailalert" style="display:none">
          echo "<div class='alert alert-success alert-dismissible alertcm'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            Email Submitted.
          </div>";
        </div>

        <div class="child-container">
          <label for="State">State:</label>
          <select name="state" id="state" class="form-select mt-3">
            <option value="All">All</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <!--option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option-->
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <!--option value="Chandigarh">Chandigarh</option-->
            <option value="Chhattisgarh">Chhattisgarh</option>
            <!--option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option-->
            <!--option value="Daman and Diu">Daman and Diu</option-->
            <!--option value="Delhi">Delhi</option-->
            <!--option value="Lakshadweep">Lakshadweep</option-->
            <!--option value="Puducherry">Puducherry</option-->
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <!--option value="Jammu and Kashmir">Jammu and Kashmir</option-->
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
        </div>

        <div class="child-container">
          <label for="Category">Theme:</label>
          <select name="category" id="category" class="form-select mt-3" onchange="OtherClick()">
            <option value="Energy">Energy</option>
            <option value="Water">Water</option>
            <option value="Digital_Data_Platform">Digital Data Platform</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Citizen_Science">Citizen Science</option>
            <option value="Human_Wildlife_Conflict">Human Wildlife Conflict</option>
            <option value="Grassroots_Innovation">Grassroots Innovation</option>
            <option value="Sanitation">Sanitation</option>
            <option value="Solid_Waste_Management">Solid Waste Management</option>
            <option value="Water_and_Sanitation">Water and Sanitation</option>
            <option value="Agricultural_Processing">Agricultural Processing</option>
            <option value="Monitoring_and_Evaluation">Monitoring and Evaluation</option>
            <option value="Land_Use_Planning">Land Use Planning</option>
            <option value="Soil_Health">Soil Health</option>
            <option value="Water_Quality">Water Quality</option>
            <option value="Agicultural_Economics">Agicultural Economics</option>
            <option value="Planning_And_Design">Planning And Design</option>
            <option value="Aquaculture">Aquaculture</option>
            <option value="Other">Other</option>
          </select>
        </div>

        <div class="form-group child-container" id="emaildiv" style="display:none">
          <label for="usr">Enter your Email:</label>
          <input type="text" class="form-control" id="usr" name="emailtxtfield">
        </div>

        <div class="form-group child-container" id="commentdiv" style="display:none">
          <label for="comment" id="Otherlbl">Type Your Query:</label>
          <textarea id="Othertxtarea" class="form-control" name="Othertxtarea" rows="4"></textarea>
        </div>

        <!--label for="Other" id="Otherlbl" style="visibility: hidden;">Mention your Query:</label> 
  <textarea id="Othertxtarea" rows="4" cols="50" style="visibility: hidden;">
    </textarea-->

        <div class="child-container">
        <input type="submit" name="profbtn" id="profbtn" class="btn btn-primary" value="Get Professors" onclick="javascript: form.action='./index.php';">
          <input type="submit" name="projbtn" id="projbtn" class="btn btn-primary" value="Other Projects" onclick="javascript: form.action='./index.php';">

          <!--input type="submit" name="profbtn" id="profbtn" class="btn btn-primary" value="Get Professors" onclick="javascript: form.action='/majorProject/indexContacts.php';"-->
          <!--input type="submit" name="projbtn" id="projbtn" class="btn btn-primary" value="Other Projects" onclick="javascript: form.action='/majorProject/indexContacts.php';"-->
          <input type="submit" name="Emailbtn" id="Emailbtn" style="visibility: hidden;" class="btn btn-primary" value="Email" onclick="javascript: form.action='https://formsubmit.co/8acf2afc94dc964692fbb4597d87bebe';">
        </div>

      </div>

    </form>
  </div>

</body>

<script src="indexJavascript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>

<!---- PHP CODE  ---->


<?php
        $dbhost = "localhost";
        //$dbuser = "shivaish";
        //$dbpass = "shivaish";
        $dbuser = "root";
        $dbpass = "shivaish123";
        $db = "projectinformation";

        //Projects List
        if (isset($_POST['projbtn'])) {

          $conn = new mysqli($dbhost, $dbuser, $dbpass, $db, 3307);
          if (!$conn) {
            die("Connection Failed" . mysqli_connect_error());
          } else {
            //echo "Successful";
          }
          $state = $_POST['state'];
          $theme = $_POST['category'];

          //$sql = "SELECT `ProjectTitle` FROM `projectinfo`";
          if ($_POST['state'] == "All") {
            $sql = "SELECT `ProjectTitle` FROM `projectinfo` where Theme LIKE '%" . $theme . "%'";
            $result = mysqli_query($conn, $sql);
          } else {
            $sql = "SELECT `ProjectTitle` FROM `projectinfo` where State LIKE '%" . $state . "%' AND Theme LIKE '%" . $theme . "%'";
            $result = mysqli_query($conn, $sql);
          }
          $numrows = mysqli_num_rows($result);
          
        //Return the rows
        if ($numrows > 0) {
          echo "<table style='font-family: arial, sans-serif;  border-collapse: collapse;'>";
          echo "<tr>;
              <th style='border: 2px solid ;text-align: left;padding: 8px; background-color: #0066b2; color:white'>ProjectTitle</th>
            </tr>";
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
              <td style='border: 3px solid #0066b2;text-align: left;padding: 8px;'>".$row['ProjectTitle']."</td>
              </tr>";
          }
          echo "</table>";
        } else {
          echo "Projects not available for theme " . $theme . " in state " . $state;
        }
      }

      ?>

<?php
$dbhost = "localhost";
//$dbuser = "shivaish";
//$dbpass = "shivaish";
$dbuser = "root";
$dbpass = "shivaish123";
$db = "projectinformation";
//Return the professor names and contact details 
if (isset($_POST['profbtn'])) {
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db, 3307);
  if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
  } else {
    //echo "Successful";
  }
  $theme = $_POST['category'];
  $sql = "SELECT `Professor_Name`,`Email`,`Contact_No` FROM `projectinfo_researchareas` WHERE Research_Keywords LIKE '%" . $theme . "%'";
  $result = mysqli_query($conn, $sql);
  $numrows = mysqli_num_rows($result);

  //Return the rows
  if ($numrows > 0) {
    echo "<table style='font-family: arial, sans-serif;  border-collapse: collapse;'>";
    echo "<tr>;
        <th style='border: 2px solid ;text-align: left;padding: 8px; background-color: #0066b2; color:white'>Professor Name</th>
        <th style='border: 2px solid ;text-align: left;padding: 8px; background-color: #0066b2; color:white'>Email</th>
        <th style='border: 2px solid ;text-align: left;padding: 8px; background-color: #0066b2; color:white'>Contact Number</th>
      </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      //echo $row['Professor_Name'];
      //echo "<br>";
      echo "<tr>
      <td style='border: 3px solid #0066b2;text-align: left;padding: 8px;'>".$row['Professor_Name']."</td>
      <td style='border: 3px solid #0066b2;text-align: left;padding: 8px;'>".$row['Email']."</td>
      <td style='border: 3px solid #0066b2;text-align: left;padding: 8px;'>".$row['Contact_No']."</td>
      </tr>";
    }
    echo "</table>";
  } else {
    echo "No Professors available in this Theme ".$theme;
  }
}
?>
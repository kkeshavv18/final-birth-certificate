<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Birth Certificate Data</title>
    <link rel="stylesheet" href="css/birthView.css" />
    <script src="./js/print.js"></script>
  </head>
  <body id="body">
    <div class="container-wrapper" id="print-section">
      <div class="header-container">
        <div class="top-header">
          <h1>Ratuwamai Municipality</h1>
          <p>Province-1, Morang</p>
        </div>
        <div class="bottom-header">
          <h1>Birth Certificate Verification</h1>
        </div>
      </div>
      <div class="data-container">
        <?php
        include "config.php";
        $childId = $_GET['childId'];

        // Here use the sql query according to the database schema you used and fetch all the data
         //of particular child using the child id we are getting from the URL
        $sql = "SELECT * FROM birthcertificate WHERE ChildId = $childId";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        if(mysqli_num_rows($result)>0) { while($row =
        mysqli_fetch_assoc($result)) {?>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- third row ends here  -->
        <!-- Add more rows and edit label and data according to the fields of your database in order to show all the data of a particular child in this single page  -->

        <!-- I am copying and pasting the above three rows for couple of time for debugging purpose. you can delete these data and add your own data label and their value.  -->
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->
        <!-- third row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Gender:</h3>
            <h3 class="data"><?php echo $row['childGender'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Issue Date:</h3>
            <h3 class="data"><?php echo $row['issueDate'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Static Data Label:</h3>
            <h3 class="data">Data from database</h3>
          </div>
        </div>
        <!-- First row starts here  -->

        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child ID:</h3>
            <h3 class="data"><?php echo $row['childId'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child First Name:</h3>
            <h3 class="data"><?php echo $row['childFname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Middle Name:</h3>
            <h3 class="data"><?php echo $row['childMname'];?></h3>
          </div>
        </div>
        <!-- First row ends here  -->
        <!-- Second row starts here  -->
        <div class="row">
          <div class="row-data-wrapper">
            <h3 class="label">Child Last Name:</h3>
            <h3 class="data"><?php echo $row['childLname'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Date of Birth:</h3>
            <h3 class="data"><?php echo $row['childDOB'];?></h3>
          </div>
          <div class="row-data-wrapper">
            <h3 class="label">Child Place of Birth:</h3>
            <h3 class="data"><?php echo $row['childPlaceofbirth'];?></h3>
          </div>
        </div>
        <!-- Second row ends here  -->

        <?php 
           } }?>
      </div>
      <div class="footer-container">
        <div class="signOfApplicant">Signature of Applicant</div>
        <div class="fingerprint-wrapper">
          <h3>Fingerprint of Applicant</h3>
          <div class="fingerprint">
            <div class="left"></div>
            <div class="right"></div>
          </div>
        </div>

        <div class="signOfVerifier">Signature of Verifier</div>
      </div>
    </div>
    <div class="print-section">
      <input
        type="button"
        value="Print the Data"
        id="printButton"
        onclick="printData()"
      />
    </div>
  </body>
</html>

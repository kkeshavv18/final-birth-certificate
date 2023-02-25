<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/birth.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Birth Certificate Data</title>
  </head>
  <body>
    <div class="container-wrapper">
      <div class="header">
        <h1>Birth Certificate Data</h1>
      </div>
      <div class="search-bar-wrapper">
        <input
          type="number"
          class="search-bar"
          id="searchId"
          placeholder="Search By Child ID"
          onkeyup="searchById()"
        />

        <input
          type="text"
          class="search-bar"
          id="searchName"
          placeholder="Search By Child Name"
          value=""
          onkeyup="searchByName()"
        />
        <input
          class="search-bar"
          id="view-data"
          type="button"
          Value="View all Data"
          value=""
          onClick="viewAllData()"
        />
      </div>

      <div class="table-container">

        <?php
                  include "config.php"; // database configuration
                
                 
                  /* select query of birth table */
                  $sql = "SELECT * FROM birthcertificate";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) >
        0) {?>
        <table id="myTable">
          <thead>
            <th>Child ID</th>
            <th>Child First Name</th>
            <th>Child Last Name</th>
            <th>Date of Birth</th>
            <th>Place of Birth</th>
            <th>Gender</th>
            <th>Issue Date</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <?php 
         
          while($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row['childId']; ?></td>
              <td><?php echo $row['childFname'];?></td>
              <td><?php echo $row['childLname'];?></td>
              <td><?php echo $row['childDOB']; ?></td>
              <td><?php echo $row['childPlaceofbirth']; ?></td>
              <td><?php echo $row['childGender']; ?></td>
              <td><?php echo $row['issueDate']; ?></td>
              <td class="view"><a href="birthView.php?childId=<?php echo $row['childId']; ?>"><i class="fa-regular fa-eye"></i></a></td>
              <td class="edit"><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
              <td class="delete"><a href="#"><i class="fa-solid fa-trash"></i></a></td>

              <?php
         }  }?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script type="text/javascript" src="js/linearSearch.js"></script>
  </body>
</html>

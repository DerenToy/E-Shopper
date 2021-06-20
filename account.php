<?php

  $page= "Account";
  include ("inc/head.php");
  
  
  ?>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/font-awesome.min.css" rel="stylesheet">
  	<link href="css/main.css" rel="stylesheet">
  	
  <h2 id="personalInfoTitle" class="title text-center" style="margin-top: 20px; display: block;">Personal Information</h2>
  <h2 id="updateInfoTitle" class="title text-center" style="margin-top: 20px; display: none;">Update Information</h2>
  
    <table id="personalInfoTable" class="personalInformation" style="display: block">
      <tr>  
        <td style="font-weight:bold">Name: </td>
        <td><?= $_SESSION['name'] ?></td>
    		 </tr>
    	  
       <tr>	  
        <td style="font-weight:bold">Lastname: </td>
        <td><?=  $_SESSION['lastname'] ?></td>
        </tr>
        
        <tr>
        <td style="font-weight:bold">Email: </td>
        <td><?=  $_SESSION['email'] ?></td>
        </tr>
        
        <tr>
        <td style="font-weight:bold">Phone: </td>
        <td><?=  $_SESSION['phone'] ?></td>
        </tr>
        
   
    </table>
     <button type="submit" id="updateBtn" onclick="updateInformation()" class="btn btn-primary btn-center orange">Update Information</button>
     
   
  <form action="updatePersonalInformation.php" method="post" id="updateForm" style="display:none;" class="text-center">
    <div class="form-group">
     <input type="text" class="form-control" id="name" name="name" placeholder="Name"/> 
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"/>
    </div>
    <div class="form-group">
  	<input type="text" class="form-control" id="email" name="email" placeholder="Email Address"/>
    </div>
    <div class="form-group">
    <input type="int"class="form-control" id="phone" name="phone" placeholder="Phone Number"/>
    </div>
    
    <button id="submitBtn" type="submit" class="btn btn-primary orange">Submit</button>
  </form>
     
     
     
     
     
     
     <script src="js/bootstrap.min.js"></script>
     <script>
     function updateInformation(){
      document.getElementById("personalInfoTitle").style.display = "none";
      document.getElementById("updateBtn").style.display = "none";
      document.getElementById("personalInfoTable").style.display = "none";
      document.getElementById("updateInfoTitle").style.display = "block";
      document.getElementById("updateForm").style.display = "block";
      
     
     }
     
    
     </script>




    
    
    
    
    
 
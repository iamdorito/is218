<?php
// Start the session
session_start();
echo "<header>";
if(isset($_SESSION['userFirstName'])){
  echo " <h1 style='margin-top:0px;'> You are Logged In As:  " . $_SESSION['userFirstName'] . " " . $_SESSION['userLastName'] . "</h1>";
  echo "<br>";
}

if(isset($_SESSION['userFirstName'])){
  echo "<a class='header'  href='./logout.php'><button class=\"btn btn-secondary\"> Logout </button> </a>";
  echo "<a class='header'  href='./userToDoList.php'><button class=\"btn btn-secondary\">To Do List </button> </a>";
}
echo "</header>";
?> 




  
<html>
<head>
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="./main.js"></script>
</head>
<body>

<div class="container">
 	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
               
                <h3>Registration and Login Page</h3>
              </div>
              <div class="modal-body">
                <div class="well">
                 
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                      <form id="register_form" class="form-horizontal" action="./db_insert.php" method="POST" target="_self">
                        <fieldset>
                          <div id="legend">
                            <legend class="">Register</legend>
                          </div>    
                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">First Name</label>
                            <div class="controls">
                              <input required type="text" id="firstname" name="firstName" placeholder="First Name" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="lastname">Last Name</label>
                            <div class="controls">
                              <input required  type="text" id="lastname" name="lastName" placeholder="Last Name" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- email -->
                            <label class="control-label"  for="username">Email</label>
                            <div class="controls">
                              <input required  type="email" id="email" name="email" placeholder="Email" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Phone Number</label>
                            <div class="controls">
                              <input required  type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Birthday</label>
                            <div class="controls">
                              <input required  style="width:175px;" type="date" id="birthday" name="birthday" placeholder="" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Gender</label>
                            <div class="controls">
                              <input required  type="text" id="gender" name="gender" placeholder="Gender" class="input-xlarge">
                            </div>
                          </div>

                           <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Password</label>
                            <div class="controls">
                              <input required  type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
                            </div>
                          </div>

                         


     
     
                          <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                              <br><button type="submit" class="btn btn-success">Sign up</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>                
                    </div>

                </div>
              </div>
            </div>
        </div>
	</div><!-- Closes span12 -->
</div><!-- Closes row -->
</div><!-- Closes container -->




<?php
if (!isset($_SESSION['userFirstName']))
{
?>


<div class="container">
  <div class="well">    
    <fieldset> <legend> Log In </legend>
      <form id="login_form" class="form-horizontal" action="./db_login.php" method="POST" target="_self">

       <div class="control-group">
         <label class="control-label"  for="username">Email</label>
            <div class="controls">
              <input required  type="email" id="email" name="email" placeholder="Email" class="input-xlarge">
           </div>
        </div>

       <div class="control-group">
         <label class="control-label"  for="password">Password</label>
            <div class="controls">
              <input required  type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
           </div>
        </div>      

       <div class="control-group">        
            <div class="controls">
              <br><button type="submit" class="btn btn-success">Login</button>
           </div>
        </div>

     </form>
   </fieldset>
 </div>
</div>

<?php
}
?>

  <footer>
    <span> &copy; 2017 </span>
  </footer> 
</body>
</html>

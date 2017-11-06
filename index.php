<!DOCTYPE html>
<html>
<title>CHOC Children's BLADE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body bgcolor="#447bba" >

<!-- Page Container -->
<img src="images/choc-logo-2014.png" alt="Girl in a jacket">
<div class="w3-content" style="max-width:1400px;">
  


  <!-- The Grid -->
  

  <ul class="nav nav-tabs w3-margin-bottom w3-margin-top">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">



    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="w3-row-padding">
        <div class="w3-row-padding">
          <div class="w3-col" style="width:20%" >
          
            <div class="w3-white w3-text-Black w3-card-4">
              <div class="w3-display-container">
                  <div class="w3-sidebar w3-bar-block w3-white w3-text-black w3-card-4" style="width:18%"> 

                    <p> </p>
                      <center><img src="images/user.jpg" style="width:50%" alt="Avatar" ></center>
                       <text class="w3-margin-left" style="font-size: 20px">Jane Doe</text><br>
                       <text class="w3-margin-left" style="font-size: 12px">Sex: Female</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Age: 14</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">DOB: 01/02/03</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Insurance No: 12344321</text>
                        <hr>
                        <text class="w3-margin-left" style="font-size: 15px">Diagnoses:</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Cardiomyopathy</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Mild Asthma</text><br>
                        <br>
                        <hr>
                        <text class="w3-margin-left" style="font-size: 15px">Contact Info:</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Phone: (760)123-4567</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Email: janedoe@gmail.com</text><br>
                        <br>
                        <hr>
                        <text class="w3-margin-left" style="font-size: 15px">Physician:</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">Dr. Anthony Chang</text><br>
                        <text class="w3-margin-left" style="font-size: 12px">PH No: 4567890</text><br>
                        <br>

                  </div>
              </div>
            </div><br>
          </div>

          <!-- Top Bar -->
          <div class="w3-col" style="width:80%" >
            <div class="w3-white w3-text-black w3-card-4 w3-margin-bottom w3-margin-top" style="height:150px">
              <div class="nav">
                <form action="phpscript.php" method="post" target="_self">

                <br>
                <span style="float:right"><button type="Expand" value="1" name="visitExpand" 
                    style="background-color:transparent; border:transparent;" 
                    class="w3-margin-right w3-text-grey">Expand</button></span>

                <text class="w3-margin-left" style="font-size: 20px">Today's Visit:</text><br/>
                <br>

                <div class="w3-col w3-margin-left" style="width:15%" >
                  <text class="w3-margin-left" style="font-size: 20px">BP: 120/80</text>
                </div>

                <div class="w3-col w3-margin-left" style="width:15%" >
                  <text class="w3-margin-left" style="font-size: 20px">Temp: 98</text>
                </div>

                <div class="w3-col w3-margin-left" style="width:15%" >
                  <text class="w3-margin-left" style="font-size: 20px">Height: 5'3"</text>
                </div>

                <div class="w3-col w3-margin-left" style="width:15%" >
                  <text class="w3-margin-left" style="font-size: 20px">Weight: 51.3kg</text>
                </div>

                <div class="w3-col w3-margin-left" style="width:15%" >
                  <text class="w3-margin-left" style="font-size: 20px">BMI: 24.2</text>
                </div>

              </form>
            </div>
          </div>
          </div>
        </div>
        <!-- End of Top Bar -->
        

        
          <!-- Side Bar Placeholder keeps integrity of layout -->
          <div class="w3-col" style="width:20%" >
            <div class="w3-white w3-text-grey w3-card-4">
              <div class="w3-display-container">
              </div>
            </div><br>
        </div>
          <!-- End Side Bar placeholder -->
          


          <!-- Top Left-->
          <div class="w3-col" style="width:40%">
            <div class="w3-container w3-card w3-white w3-margin-bottom" style="height:500px">

              <form action="phpscript.php" method="post" target="_self">
              <span class="w3-margin-top" style="float:right"><button type="Expand" value="1" name="pastExpand" 
                    style="background-color:transparent; border:transparent;" 
                    class="w3-margin-right w3-text-grey">Expand</button></span>

            </form>
            </div>
            <div class="w3-container w3-card w3-white">
            </div>
        </div>
          <!-- End Top Left -->
          

          <!-- Top Right -->
          <div class="w3-col" style="width:40%">
            <div class="w3-container w3-card w3-white w3-margin-bottom" style="height:500px">
              
              <form action="phpscript.php" method="post" target="_self">
              <span class="w3-margin-top" style="float:right"><button type="Expand" value="1" name="suggestedExpand" 
                    style="background-color:transparent; border:transparent;" 
                    class="w3-margin-right w3-text-grey">Expand</button></span>

            </form>
            </div>

            <div class="w3-container w3-card w3-white">
             
            </div>
        </div>
          <!-- End Top Right -->

          

          <!-- Place Holder to keep box integrity -->
          <div class="w3-col" style="width:20%" >
            <div class="w3-white w3-text-grey w3-card-4">
              <div class="w3-display-container">
              </div>
            </div><br>
          </div>
          <!-- End of placeholder integrity -->

          

              <!-- Bottom Left-->
          <div class="w3-col" style="width:40%">
            <div class="w3-container w3-card w3-white w3-margin-bottom" style="height:500px">
              
              <form action="phpscript.php" method="post" target="_self">
              <span class="w3-margin-top" style="float:right"><button type="Expand" value="1" name="hypergraphExpand" 
                    style="background-color:transparent; border:transparent;" 
                    class="w3-margin-right w3-text-grey">Expand</button></span>

            </form>
            </div>

            <div class="w3-container w3-card w3-white">
            </div>
          </div>
          <!-- End Bottom Left -->
          

          <!-- Bottom Right -->
          <div class="w3-col" style="width:40%">
            <div class="w3-container w3-card w3-white w3-margin-bottom" style="height:500px">
              
              <form action="phpscript.php" method="post" target="_self">
              <span class="w3-margin-top" style="float:right"><button type="Expand" value="1" name="extraExpand" 
                    style="background-color:transparent; border:transparent;" 
                    class="w3-margin-right w3-text-grey">Expand</button></span>

            </form>
            </div>

            <div class="w3-container w3-card w3-white">
             
            </div>
        </div>
          <!-- End Bottom Right -->

         
          
          </div>
          
        <!-- End Grid -->
        </div>
        
        <!-- End Page Container -->
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>


  

</body>
</html>
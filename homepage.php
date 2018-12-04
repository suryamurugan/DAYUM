<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="text.css" rel="stylesheet">
 
   
    <title>Hello, world!</title>
  </head>
 
  <body style="background: white;">


  

    <main role="main" style="background: white;">

      <section class="jumbotron text-center" style="padding-top: 30px;padding-bottom: 0px;background: white;margin-bottom:0">
        <div class="container" style="background: white;">
        <img src="n.svg" width="100" height="100" class="d-inline-block align-top" alt="">
        <h1>Welcome to <span class="badge badge-secondary">DAYUM</span></h1>
        <!--  <h1 class="jumbotron-heading">Album example</h1> -->
        <p class="lead text-muted">An Innovative content hub for poor souls like you.</p>
          <!-- some title text -->    
    <div class='console-container' style="background: white;"><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>


         
        </div>


      </section>
<!----- --->



<!----- c  --->
      <div class="album py-5 " style="background: white;" >
        <div class="container" style="background: white;">

          <div class="row"style="background: white;">
<!--Start -->


<?php 
include('dbconnect.php');
    
$sql="SELECT * FROM data";

if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
while ($row=mysqli_fetch_array($result))
{
 // echo '<h1>'.$row['subject_code'].'</h1';
  echo '<div class="col-md-4" style="background: white;">  
  <a href="subjectdata.php?subject_code='.$row['subject_code'].'&subject_name='.$row['subject_name'].'" >         
  
    <div class="card border-info mb-3" style="max-width: 18rem;cursor: pointer;" href="www.google.com">
    <!-- <div class="shadow-sm p-1 mb-1  rounded">   -->
    
    <div class="card-header" ><img src="b.svg" width="35" height="25" class="d-inline-block align-top" alt="">'.$row['subject_code'].'</div>
      <div class="card-body text-info">
        <h3 class="card-title">'.$row['subject_name'].'</h3>
        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>-->
      </div>
    </div>
<!-- </div> -->
    </a>
  </div>';
  
}
// Free result set
//mysqli_free_result($result);
}
else{
echo "query failed";
}

mysqli_close($conn);
?>


            
<!-- end -->     
          </div>
        </div>
      </div>

      
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          
        </p>
        <p>DAYUM &copy; Content Made Easier To Access</p>
        <p>Admin <a href="login.php">Login Here</a></p>
      </div>
    </footer>

    <script>
      // function([string1, string2],target id,[color1,color2])    
 consoleText(['GET NOTES!', 'GET QPAPERS!', 'GET Links!'], 'text',['tomato','rebeccapurple','lightblue']);
 
function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
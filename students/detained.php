<?php

// session_start();

// if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
//     header("location: index.php");
//     exit;
// }

require 'connection.php';
// echo "Welcome to home page"
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_data";

// //Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">

    <!-- <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> -->

    <link rel="stylesheet" href="../css/hom.css">
    <link rel="stylesheet" href="../css/hom2.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/nav2.css">
    <!-- <link rel="stylesheet" href="css/loading.css"> -->
    <link rel="stylesheet" href="../css/style55.css">

    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        /* font-family: 'Fredoka', sans-serif; */
        background-image: linear-gradient( 155deg, #845ec2,#d65db1, #ff6f91, #ff9671, #ffc75f, #f9f871 );
        /* background: url('images/back2.jpg'); */
        /* background-repeat: no-repeat; */
        /* background-size: vh; */
}
/* tr{
    color: whitesmoke;
}

table{
    border: 2px solid green;
} */

/* .container{
    display: block;
    width: 44rem;
    margin: auto;
    margin-left: 12rem;
    display: flex;
justify-content: center;
} */

   
    </style>
</head>
<body>
    
</div>
    
        <header class="primary-header">
        <div class="container">
            <div class="nav-wraper">
            <a href="../index.php"><img src="../images/vector.png" alt="Govt. Polytechnic Paonta Sahib" id="logo"></a>
            <button class="mobile-nav" aria-controls="primary-nav" aria-expanded="false">
                <img class="menu-open" src="../images/menu-open.svg" alt="" aria-hidden="true">
                <img class="menu-close" src="../images/menu-close.svg" alt="" aria-hidden="true">
                <span class="visually-hidden">Menu</span>
            </button>
            <nav class="primary-nav" id="primary-nav" >
                <ul arial-label="primary" role="list" class="nav-list" style="list-style: none;" >
                    <li><a href="../index.php">Home</a></li>
                    <li id="dropdown"><a href="../index.php">Student Details</a>
                    <ul class="option">
                        <li><a href="../year1.php">1st Year Students </a></li>
                        <li><a href="../year2.php">2nd Year Students </a></li>
                        <li><a href="../year3.php">Final Year Students </a></li>
                        <li><a href="../passout.php">Passout Students </a></li>
                    </ul></li>
                    <li><a href="../teacher.php">Teacher Details</a></li>
                    <li><a href="../advance.php">Advance Option</a></li>
                    
                </ul>
                <div id="serch"><form action="" method="POST">
                    <button class="btn-search" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg></button>
                <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
              </form></div>
                <a href="#" id="profifa-pull-left" class="button | display-sm-none display-md-inline-flex"><img src="../images/namicon.png" alt="User"  class="uu" ></a>
                <div class="user" id="show" style="display: none ;" >
                    <a href="../teacherlogin.php">Sign In</a> 
                </div>
            </nav>
         </div>
        </div>
    </header>


    <div class="container2" style="background-color: whitesmoke;">
    <table class="content-table">
    <thead>
        <tr>
            <th>Sr. No</th>
            <th>Board Roll No.</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Branch</th>
            <th>Status</th>
            <th>Samester</th>
            <th>Detained Date</th>
        </tr>
    </thead>
    <?php

if(isset($_POST['search'])){
    
    $box=$_POST['search_box'];
  $query =" SELECT * from detained_students where Board_Roll_No like '%$box%' or email like '%$box%' or first_name like '%$box%' or last_name like '%$box%' or father_name like '%$box%' or branch like '%$box%' or status like '%$box%' or sem like '%$box%' order by Board_Roll_No ASC";
//$query =" SELECT * from first_year_students where Board_Roll_No like '%$box%' or email";

// $query=" SELECT * FROM first_year_students WHERE Board_Roll_No like '%".$box."%' or email like '%$box%'  "; 

  $data= mysqli_query($connection,$query);
//   print_r($data);die();
  
  $total=mysqli_num_rows($data);
  // echo $result['Sr_No']."".$result['Board_Roll_No']."".$result['email']."".$result['mobile']."".$result['first_name']."".$result['last_name']."".$result['father_name']."".$result['branch']."".$result['status'].$result['sem'];
  if($total!=0)
  { 
    $count=1;
      while ($result=mysqli_fetch_assoc($data)) {
          echo"
          <tr>
          <td>$count</td>
          <td>".$result['Board_Roll_No']."</td>
          <td>".$result['email']."</td>
          <td>".$result['first_name']."</td>
          <td>".$result['last_name']."</td>
          <td>".$result['father_name']."</td>
          <td>".$result['branch']."</td>
          <td>".$result['status']."</td>
          <td>".$result['sem']."</td>
          <td>".$result['detained_date']."</td>
          </tr>
          ";
          $count++;
      }
  }
  else{
      echo"No records found";
  }
}

  else
     {
    $query1="SELECT * FROM detained_students  ORDER BY Board_Roll_No ASC";
    $data1= mysqli_query($connection,$query1);
    
    $total1=mysqli_num_rows($data1);
    // echo $result['Sr_No']."".$result['Board_Roll_No']."".$result['email']."".$result['mobile']."".$result['first_name']."".$result['last_name']."".$result['father_name']."".$result['branch']."".$result['status'].$result['sem'];
    if($total1!=0)
    {
        $count=1;
        while ($result=mysqli_fetch_assoc($data1)) {
            echo"
            <tr>
            <td>$count</td>
            <td>".$result['Board_Roll_No']."</td>
            <td>".$result['email']."</td>
            <td>".$result['first_name']."</td>
            <td>".$result['last_name']."</td>
            <td>".$result['father_name']."</td>
            <td>".$result['branch']."</td>
            <td>".$result['status']."</td>
            <td>".$result['sem']."</td>
            <td>".$result['detained_date']."</td>
            </tr>
            ";
            $count++;
        }
    }
    else{
        echo"No records found";
    }
}
?>
</table>
<script>
    function checkdelete()
    {
        return confirm('Are you sure want to delete');
    }

</script>
</div>
<script src="../js/nav.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            var applied =false;
            $(".uu").click(function(){
                    if (!applied) {
            $(".user").css("display","flex");
            applied = true;
        } 
        else {
                
            $(".user").hide();
            
            applied = false;
            }
        });
        });
            

    </script>
</body>

</html>
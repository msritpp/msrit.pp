<!DOCTYPE html>
<html>
<head>
  <style>
    /* Reset some default styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    /* Style the navbar */
    .navbar {
      background-color: #333;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
    }

    .nav-links li {
      margin: 0 15px;
    }

    .nav-links a {
      text-decoration: none;
      color: #fff;
    }

    /* Style the hamburger menu */
    .menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .hamburger {
      width: 25px;
      height: 3px;
      background-color: #fff;
      margin: 3px 0;
    }

    /* Media query for responsiveness */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .menu-toggle {
        display: flex;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">Your Logo</div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <?php
                session_start();
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
                    echo '<script>location.href = "login-in.php"</script>';
                }
                if(isset($_SESSION['username'])){
                    echo '<li><a href="https://e-wastemanager.000webhostapp.com/signup.php" id="replace" >'.$_SESSION["username"].'</a></li>';
                }
                else{
                    echo '<li><a href="https://e-wastemanager.000webhostapp.com/login-in.php" id="replace" >Login</a></li>';
                }
            ?>
    </ul>
    <div class="menu-toggle">
      <div class="hamburger"></div>
    </div>
  </nav>
</body>
</html>

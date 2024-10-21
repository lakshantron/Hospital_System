<style>
     * {
            padding: 0;
            margin: 0;
            box-sizing: content-box;
        }
        :root {
            --primary-color: #87bc29;
            --primary-font: Algerian;
            --bg-image-center: no-repeat center/cover;
        }
        .center {
            text-align: center;
        }
        .nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: nowrap;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            position: fixed;
            width: 100%;
            padding: 10px;
            z-index: 800;
        }
        .list-items {
            display: inline;
        }
        .list-items a {
            padding: 20px;
            text-decoration: none;
            font-family: sans-serif;
            color: #fff;
        }
        .list-items a:hover {
            border-bottom: 20px solid #fff;
        }
        .nav__logo h2 {
            color: #fff;
            font-size: 1rem;
            text-align: center;
        }
        span {
            color: var(--primary-color);
        }
        .hero {
            background: linear-gradient(to left, 
            rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.616)), url("Images/MRI.jpg") var(--bg-image-center) fixed;
        }
        .hero__headings-container {
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            font-family: sans-serif;
            margin-left: 10rem;
            color: #fff;
        }
        .hero__main-headings {
            font-size: 5rem;
            color: white;
        }
        .main-span {
            font-family: var(--primary-font);
        }
        .hero__headings-container p {
            font-weight: bold;
        }
        .main-headings {
            font-family: 'Times New Roman', Times, serif;
            font-size: 3rem;
            font-weight: normal;
            margin: 50px;
            transition-property: all;
            transition-duration: 0.5s;
        }
        .main-headings:hover {
            transform: skew(30deg);
        }
        th {
        font-weight: bold;
    }
    .btn-sm{
        margin-top: 10px;
            margin-left: 50px;
            width: 160px;
            height: 90%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 50px;
            cursor: pointer;
    }
     /* ********* FOOTER ********* */
  footer {
  height: 8vh;
  margin: 15px;
  background-color: #000000be;
  display: flex;
  justify-content: center;
}

footer > a {
  color: #fff;
  text-decoration: none;
  margin: 50px;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
</head>
<body>
    
<nav class="nav">
    <div class="nav__logo">
        <h1>Patient Pluse</h1>
    </div>

    <ul>
    <li class="list-items"><a href="../PatientPulse/Index.php">Home</a></li>
        <li class="list-items"><a href="#serives">Serives</a></li>
        <li class="list-items"><a href="#about">About</a></li>
        <li class="list-items"><a href="#Contact Us">Countact Us</a></li>
    </ul>
</nav>
<header class="hero">
<section class="hero__headings-container">
            <h3>We <span>Are</span> <span>Here</span> <span>To</span> <span>Help</span> <span>You</span></h3>
            <h2 class="hero__main-headings">
                Patient <span class="main-span">Pulse</span>
            </h2>
            <p>We are here to assist you in any way you wish.</p>
        </section>
</header>

<h1 class="main-headings center">
    Patient Medical Records
</h1>

  <table class="table">
  <thead>
  <tr>
        <th>ID</th>
        <th>Ward name</th>
        <th>Room Number</th>
        <th>Patient name</th>
        <th>Telephone number</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
        <?php
         $connection = mysqli_connect("localhost", "root", "", "patientpulse");
         $query = "SELECT ID, Ward, Room, Name,Telephone,Medical FROM `medical_assist`";
        $result = mysqli_query($connection, $query);

        if(!$connection){
            die("Database connection failed: " . mysqli_connect_error());
        }
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Ward"] . "</td>";
            echo "<td>" . $row["Room"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Telephone"] . "</td>";
            echo "<td>" . $row["Medical"] . "</td>";
            echo "</tr>";
        }
           mysqli_close($connection);
           ?>
    </tbody>
  </table>  
  <a class='btn-sm' href='../PatientPulse/ManageMedicalAssist.php'>Back to Assist</a>

  <footer>
      <a href="#">About</a>
      <a href="#">Terms of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Careers</a>
      <a href="#">Contact Us</a>
    </footer>
</body>
</html>
<?php
require("foodorder.php");

$saved = false;

if (isset($_POST["btnAdd"])) {
    try {
        $Foodorder = new Foodorder();
        $Foodorder->SetMeals($_POST["txtMeals_FoodorderPulse"]);
        $Foodorder->SetFood($_POST["txtFood_FoodorderPulse"]);
        $Foodorder->SetWard($_POST["txtWard_FoodorderPulse"]);
        $Foodorder->SetRoom($_POST["txtRoom_FoodorderPulse"]);
        $Foodorder->SetOrder($_POST["order_FoodorderPulse"]);
        $Foodorder->SetName($_POST["txtName_FoodorderPulse"]);
        $Foodorder->SetDescription($_POST["txtcustomize_FoodorderPulse"]);
        
        $id = $Foodorder->Add();
        $Foodorder->SetId($id);

        // Data saved successfully
        $saved = true;

    } catch (Exception $e) {
        echo "DB Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodorder Pulse - Home</title>
    <style>
        /* CSS styles */
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
            background: linear-gradient(to left, rgba(0, 0, 0, 0.3), 
            rgba(0, 0, 0, 0.616)), url("Images/improving.jpg") var(--bg-image-center) fixed;
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
        h1 {
            margin-left: 350px;
            margin-bottom: 50px;
            margin-top: 20px;
            font-family: 'Times New Roman', Times, serif;
            color: red;
        }
        .post {
            margin-left: 300px;
            margin-bottom: 10px;
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 10px;
        }
        .post table tr {
            margin-bottom: 5px;
        }
        .post input {
            padding: 5px;
        }
        #submit {
            margin-top: 30px;
            margin-left: 50px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 50px;
            cursor: pointer;
        }
        h5{
          margin-top: 20px;
            margin-left: 50px;
            width: 90px;
            background-color:#ff4d4d;
            color: #ffffff;
            border: none;
            padding: 8px 50px;
            cursor: pointer;
        }
        button{
          margin-top: 10px;
            margin-left: 50px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 50px;
            cursor: pointer;
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
        #popup {
                    
          position: fixed;
            top: 50%;  
            left: 50%;
            transform: translate(-50%, -50%); 
            background: #006600;
            height: 200px;
            width: 800px;
            border-radius: 15px;
            padding: 20px;
            font-size: 22px;
            color: #fff;  
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
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

    <nav class="nav">
        <div class="nav__logo">
            <h2>Patient Pulse</h2>
        </div>
        <ul>
            <li class="list-items"><a href="../PatientPulse/Index.php">Home</a></li>
            <li class="list-items"><a href="#services">Services</a></li>
            <li class="list-items"><a href="#about">About</a></li>
            <li class="list-items"><a href="#contact">Contact Us</a></li>
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

    <h2 class="main-headings center">
        Now you can order your food by yourself
    </h2>

    <div class="post">
        <form method="post" enctype="multipart/form-data" name="Patientdata">
            <table>
                <tr>
                    <td>Meals</td>
                    <td>
                        <select name="txtMeals_FoodorderPulse" id="txtMeals_FoodorderPulse">
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                        </select>
                    </td>
                </tr>
                    <td>Chosen food <span class="required">*</span></td>
                    <td>
                        <input type="text" name="txtFood_FoodorderPulse" required>
                    </td>
                </tr>
                <tr>
                    <td>Ward name <span class="required">*</span></td>
                    <td>
                        <input type="text" name="txtWard_FoodorderPulse" required>
                    </td>
                </tr>
                <tr>
                    <td>Room Number <span class="required">*</span></td>
                    <td>
                        <input type="number" name="txtRoom_FoodorderPulse" required>
                    </td>
                </tr>
                <tr>
            
                <tr>
                <tr>
                    <td>how much you order</td>
                    <td>
                        <select name="order_FoodorderPulse" id="order_FoodorderPulse">
                            <option value="1 Person">1 Person</option>
                            <option value="2 Persons">2 Persons</option>
                            <option value="3 Persons">3 Persons</option>
                            <option value="4 Persons">4 Persons</option>
                        </select>
                    </td>
                </tr>

                    <td>Name<span class="required">*</span></td>
                    <td>
                        <input type="text" name="txtName_FoodorderPulse" required>
                    </td>
                </tr>

                <tr>
             <td>customize<span class="required"></span></td>
                <td>
        <textarea name="txtcustomize_FoodorderPulse"></textarea>
    </td>
</tr>

             
                <tr>
                    <td colspan="2">
                        <input type="submit" id="submit" value="Confirm" name="btnAdd">
                    </td>                  
                </tr>                
            </table>
        </form>
        <a class='btn-sm' href='../PatientPulse/viewfoodorders.php'>View Record</a>
    </div>

    <footer>
      <a href="#">About</a>
      <a href="#">Terms of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Careers</a>
      <a href="#">Contact Us</a>
    </footer>

    <?php if ($saved): ?>
        <div id="popup">
            <p>Data saved successfully!</p>
            <button onclick="JSalert()">OK</button>
        </div>
        <script>
            // JavaScript function to show and hide the popup
            function JSalert() {
                var popup = document.getElementById('popup');
                if (popup) { 
                    popup.style.display = 'none';
                }
            }
            // Show the popup when the page loads
            document.addEventListener('DOMContentLoaded', function() {
                var popup = document.getElementById('popup');
                if (popup) { 
                    popup.style.display = 'block';
                }
            });

            document.addEventListener('DOMContentLoaded', function() {
        var submitButton = document.getElementById('submit_FoodorderPulse');

        submitButton.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'https://getbootstrap.com/docs/4.0/getting-started/download/';
        });
    });

      // Get the select element
      const selectElement = document.getElementById('order_FoodorderPulse');

// Add event listener for 'change' event
selectElement.addEventListener('change', function() {
    const selectedValue = selectElement.value;

    // Check if the selected value is '3 Persons'
    if (selectedValue === '3 Persons') {
        // Show a message (you can use a custom alert or any other message display method)
        alert('Hospital does not serve food for 3 Persons.');
    }
});
        </script>
    <?php endif; ?>

</body>
</html>

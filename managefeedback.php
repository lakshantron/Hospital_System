
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Pulse - Home</title>
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
            rgba(0, 0, 0, 0.616)), url("Images/feedback.webp") var(--bg-image-center) fixed;
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
#feedbackContainer {
    margin-top: 10px;
    padding: 30px;
    font-size: large;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-style: normal;
    color: #007bff;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
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
       Your Feedbacks
    </h2>

    <div class="post">
        <form method="post" enctype="multipart/form-data" name="Patientdata" onsubmit="displayFeedback(event)">
            <table>
                <tr>
                    <td>Name <span class="required">*</span></td>
                    <td>
                        <input type="text" name="txtName_PatientPulse" required>
                    </td>
                </tr>
                <tr>
                    <td>Email Address <span class="required">*</span></td>
                    <td>
                        <input type="email" name="txtEmail_PatientPulse" required>
                    </td>
                </tr>
                <tr>
                    <td>Your Feedback<span class="required"></span></td>
                    <td>
                        <textarea name="txtEmergency_FoodorderPulse" style="width: 100%; height: 130px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" id="submit" value="POST" name="btnAdd">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div id="feedbackContainer"></div>

    <footer>
        <a href="#">About</a>
        <a href="#">Terms of Use</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Careers</a>
        <a href="#">Contact Us</a>
    </footer>

    <script>
    function displayFeedback(event) {
        event.preventDefault();
        var form = document.forms["Patientdata"];
        var name = form["txtName_PatientPulse"].value;
        var feedback = form["txtEmergency_FoodorderPulse"].value;

        var feedbackElement = document.createElement("p");
        feedbackElement.textContent = name + ": " + feedback;
        var container = document.getElementById("feedbackContainer");
        container.appendChild(feedbackElement);
        form.reset();
        form["txtName_PatientPulse"].focus();
    }
</script>
</body>
</html>
 <!-- < summary >

                 Controller Name - PatientPiuse Site
                 Author          - Harindu Lakshan
                 Date            - 08 / 04 / 2024
                 Description     - user frandly website for the hospital patients


                 Version Control
                 -----------------------------------------------------------------------------
                Current Version         Date            Developer                   Comments
                 -----------------------------------------------------------------------------
              xxx.xxx.xxx          18/03/2024      Harindu Lakshan          Initial Version

    </ summary > -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    
<nav class="nav">
  <div class="nav__logo"> 
    <div class="card-image1 img-four"></div>
    <h1>Patient Pulse</h1>
  </div>

    <ul>
        <li class="list-items"><a href="#">home</a></li>
        <li class="list-items"><a href="#serives">Serives</a></li>
        <li class="list-items"><a href="#about">About</a></li>
        <li class="list-items"><a href="#Contact Us">Countact Us</a></li>
    </ul>
</nav>

<header class="hero">
    <selection class="hero__headings-container">
    <h3>We <span>Here</span> <span>To</span>   <span>Hep</span>  <span>You</span></h3>
        <h1 class="hero__main-headings">
        Patient <span class="main-span">Pulse</span>
            
        </h1>

        <p>We here to assist you however you wish</p>
    </selection>
</header>

<h1 class="main-headings center">
Welcome to Patient Pulse- Your Personalized Hospital Assistent
</h1>

<section class="services" id="services">

  <section class="cards">
    
  <div class="card">
  <a href="../PatientPulse/ManageMedicalAssist.php">
    <div class="card-image img-one"></div>
    <p>Medical Assist</p>
  </a>
</div>

<div class="card">
<a href="../PatientPulse/ManageFood.php">
    <div class="card-image img-two"></div>
    <p>Food ordering</p>
  </a>
</div>

<div class="card">
<a href="../PatientPulse/ManageTecnicle.php">
    <div class="card-image img-three"></div>
    <p>Tecnical Assist</p>
  </a>
</div>

<div class="card">
<a href="../PatientPulse/manageAssistence.php">
    <div class="card-image img-four"></div>
    <p>Other Assistance</p>
  </a>
</div>
<div class="card">
<a href="../PatientPulse/managepatient.php">
    <div class="card-image img-five"></div>
    <p>Assistance for Children</p>
  </a>
</div>

<div class="card">
<a href="../PatientPulse/managefeedback.php">
    <div class="card-image img-six"></div>
    <p>Feedbacks</p>
  </a>
</div>

<h1 class="main-headings">Our Sevices <span class="main-span"></span></h1>
          <section class="why-us" id="why-us">
      <div class="lists-container">
        <div class="list">
          <div class="list-number">
            <p>1</p>
          </div>
          <p class="list-info">our hospital has a best helthcare system in the entire contry</p>
        </div>

        <div class="list">
         <div class="list-number">
            <p>2</p>
          </div>
          <p class="list-info">We have a new MRI machine working 24 hours</p>
        </div> 

        <div class="list">
         <div class="list-number">
            <p>3</p>
          </div>
          <p class="list-info">We have very frendly medical staff ready for you 14 hours</p>
        </div> 
       
      
       
        <div class="list">
         <div class="list-number">
            <p>4</p>
          </div>
          <p class="list-info">We also have a free clinic</p>
        </div> 
 

            <div class="list">
                <div class="list-number"></div>
                <p></p>
              </div>
              <p class="list-info"></p>
            </div>

            <div class="owner-image-container">
        <div class="owner-image"></div>
      </div>
     </section>

  </section>
</section>

<footer>
      <a href="#">About</a>
      <a href="#">Terms of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Careers</a>
      <a href="#">Contact Us</a>
    </footer>

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
  align-items: center;
  flex-wrap: nowrap;
  text-align: center;
  background-color: rgba(0, 0, 0, 0.5);
  position: fixed;
  width: 100%;
  padding: 10px;
  z-index:800; 
  justify-content: space-between; /* Align items with space between */
  
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
.nav__logo {
  display: flex;
  align-items: center;
}

.nav__logo h1 {
  color: #fff;
  font-size: 1rem;
  text-align: center;
  display: flex;
  align-items: center;

}
span {
  color: var(--primary-color);
}

.hero {
  background: linear-gradient(to left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.616)),
    url("Images/kkk.jpg") var(--bg-image-center)
      fixed;
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

.main-btn {
  text-decoration: none;
  margin-top: 20px;
  color: #fff;
  border-bottom: 2px solid var(--primary-color);
  padding-bottom: 5px;
  font-weight: bold;
}

.main-headings {
  font-family: sans-serif;
  font-size: 3rem;
  font-weight: normal;
  margin: 50px;
  transition-property: all;
  transition-duration: 0.5s;
}


.main-headings:hover {
  transform: skew(30deg);
}

/* SECTION 02 CARDS */
.cards {
  display: flex;
  justify-content: left;
  align-items:left;
  flex-wrap: wrap;
}
.card {
  padding: 20px;
  margin: 10px;
  transition-property: none;
  transition-duration: 1s;
  border: 1px solid #ccc;
}

.card:hover {
  box-shadow: 2px 2px 2px 2px #ccc;
  transform: scale(1.1);
  cursor: pointer;
}
.card-image {
  width: 250px;
  height: 250px;
}
.card-image1 {
  width: 80px;
  height: 80px;
}

.card-image1.img-four {
  width: 100px;
  height: 100px;
  background: url("Images/senatery.png") center/cover; 
}

.h7 {
  margin-left: 10px; /* Adjust margin as needed */
  font-size: 1.5rem; /* Adjust font size as needed */
  color: #fff; 
}


.card p {
  color: rgb(39, 39, 39);
  font-family: sans-serif;
  padding: 10px;
}

.img-one {
  background: url("Images/medical.png") var(--bg-image-center);
}


.img-two {
  background: url("Images/food.jpg")center/cover;
}


.img-three {
  background: url("Images/Tecnical.png") center/cover;
}


.img-four {
  background: url("Images/senatery.png") var(--bg-image-center);
}

.img-five {
  background: url("Images/mmimages.jpg") var(--bg-image-center);
}

.img-six{

  background: url("Images/images (3).jpg") no-repeat top/cover;
}


/* ******* Our services WHY US ******* */
.why-us {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.lists-container {
  margin-left: 30px;
  font-family: sans-serif;
}

.list {
  display: flex;
  align-items: center;
  text-align: center;
}

.list-number {
  width: 30px;
  height: 30px;
  border: 2px solid var(--primary-color);
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 10px 20px;
}

.list-number p {
  color: var(--primary-color);
  text-align: center;
}

.list-info {
  color: rgb(122, 122, 122);
  transition-property: all;
  transition-duration: 0.7s;
}

.list-info:hover {
  transform: scale(1.1);
  font-weight: bold;
}

.owner-image {
  background: url(Images/MRI.jpg) top/cover;
  background-attachment:scroll;
  
  width: 300px;
  height: 300px;
  margin-right: 100px;
  border-radius: 50%;
  border: 10px solid var(--primary-color);
  transition-property: all;
  transition-duration: 1s;

}

.owner-image:hover {
  transform: scale(1.2);
}

/* ********* FOOTER ********* */
footer {
  height: 20vh;
  margin: 15px;
  background-color: #000000be;
  display: flex;
  justify-content: center;
  align-items: center;
}

footer > a {
  color: #fff;
  text-decoration: none;
  margin: 30px;
  font-family: "IBM Plex Sans Condensed", sans-serif;
}

</style>
</body>
</html>
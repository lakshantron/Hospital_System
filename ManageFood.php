 <!-- < summary >

                 Controller Name - PatientPiuse Site
                 Author          - Harindu Lakshan
                 Date            - 08 / 04 / 2024
                 Description     - user frandly website for the hospital patents


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
    <title>food ordering</title>
</head>
<body>
    
<nav class="nav">
    <div class="nav__logo">
        <h1>Patient Pulse</h1>
    </div>

    <ul>
        <li class="list-items"><a href="../PatientPulse/Index.php">home</a></li>
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
Food and Beverages
</h1>

<h1>Breakfast </h1>

<section class="services" id="services">

  <section class="cards">
    
  <div class="card">
  <a href="../PatientPulse/MFoodorder.php?meal=Breakfast&food=Hot%20Tea%20and%20Bread">
    <div class="card-image img-one"></div>
    <p class="meal-type">Breakfast</p>
    <p>Hot Tea and Bread</p>   
  </a>
</div>

<div class="card">
  <a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-two"></div>
    <p>String Hoppers</p>
    <p class="meal-type">Breakfast</p>
  </a>
</div>


    <div class="card">
    <a href="../PatientPulse/MFoodorder.php">
      <div class="card-image img-three"></div>
      <p>Soup</p>
      <p class="meal-type">Breakfast</p>
    </div>

    <div class="card">
    <a href="../PatientPulse/MFoodorder.php">
      <div class="card-image img-four"></div>
      <p>Hoppers</p>
      <p class="meal-type">Breakfast</p>
      </div>

      <div class="card">
      <a href="../PatientPulse/MFoodorder.php">
        <div class="card-image img-five"></div>
        <p>Kola Kenda</p>
        <p class="meal-type">Breakfast</p>
      </div>

      <div class="card">
      <a href="../PatientPulse/MFoodorder.php">
        <div class="card-image img-six"></div>
        <p>Rice and Curry</p>
        <p class="meal-type">Breakfast</p>
      </div>
      <div class="card">
    <p>Food Out of Stock</p>   
  </a>
</div>

<div class="card">
    <p>Food Out of Stock</p>   
  </a>
</div>

<h2>Lunch </h2>
<section class="services" id="services">

  <section class="cards">

<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-seven"></div>
    <p>Red Rice and Curry</p>   
  </a>
</div>

<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-eight"></div>
    <p>spaghetti</p>   
  </a>
</div>

<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-nine"></div>
    <p>White Rice and Curry</p>   
  </a>
</div>

<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-ten"></div>
    <p>Soup</p>   
  </a>
</div>

<h2>Dinner </h2>
<a href="../PatientPulse/MFoodorder.php">
<section class="services" id="services">

  <section class="cards">

<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-eleven"></div>
    <p>White Rice and Curry</p>   
  </a>
</div>
<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-twovel"></div>
    <p>Vegetable chopsuey</p>   
  </a>
</div>
<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-thrteen"></div>
    <p>White String Hoppers</p>   
  </a>
</div>
<div class="card">
<a href="../PatientPulse/MFoodorder.php">
    <div class="card-image img-fourteen"></div>
    <p>Bread and Curry</p>   
  </a>
</div>

<footer>
      <a href="#">About</a>
      <a href="#">Terms of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Careers</a>
      <a href="#">Contact Us</a>
    </footer>

    <script>
  
</script>



    
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
  z-index:800;
}
h2 {
  font-size: 24px;
  font-weight: bold; 
  margin-left: 130px;
  color: #333; 
  margin-bottom: 10px;
  text-align: center;

}
h3{
  font-size: 24px; 
  font-weight: bold;
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

.nav__logo h1 {
  color: #fff;
  font-size: 1rem;
  text-align: center;
}
span {
  color: var(--primary-color);
}

.hero {
  background: linear-gradient(to left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.616)),
    url("Images/gettyimages-667612121-612x612.jpg") var(--bg-image-center)
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
.meal-type {
    display: none;
  }

/* SECTION 02 CARDS */
.cards {
  display: flex;
  justify-content: left;
  align-items:left;
  flex-wrap: wrap;
}
.card {
  padding: 8px;
  margin: 8px;
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
  width: 200px;
  height: 200px;
}

.card p {
  color: rgb(39, 39, 39);
  font-family: sans-serif;
  padding: 10px;
}

.img-one {
  background: url("Images/breads.webp") var(--bg-image-center);
}

.img-two {
  background: url("Images/3-2.jpg")center/cover;
}

.img-three {
  background: url("Images/Vegetable-soup.jpg") center/cover;
}

.img-four {
  background: url("Images/hoppers.webp") var(--bg-image-center);
}

.img-five {
  background: url("Images/kola keda.jpg") var(--bg-image-center);
}

.img-six{
  background: url("Images/rice.jpg") no-repeat top/cover;
}
.img-seven{
background: url("Images/red rice.jpg") var(--bg-image-center);
}

.img-eight{
background: url("Images/spaghetti.jpg") var(--bg-image-center);
}

.img-nine{
background: url("Images/lunch.jpg") var(--bg-image-center);
}

.img-ten{
background: url("Images/Vegetable-soup-recipes-1eb6583.jpg") var(--bg-image-center);
}

.img-eleven{
background: url("Images/images (2).jpg") var(--bg-image-center);
}

.img-twovel{
background: url("Images/vegetable chopsuey.png") var(--bg-image-center);
}

.img-thrteen{
background: url("Images/White String Hoppers.png") var(--bg-image-center);
}

.img-fourteen{
background: url("Images/seafood-curry.jpg") var(--bg-image-center);
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
  background: url(Images/images.jpg) no-repeat top/cover;
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
  width: 1000px;
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
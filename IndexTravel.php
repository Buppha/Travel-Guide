<!DOCTYPE html>
<html>
<title>Travel Guide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-pink w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button">Travel Guide</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small"><?php include('get_user.php')?>
   
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <?php include("login_logout.php") ?>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="./img/Welove.jpg" alt="Makong Riverside" width="1500" height="800">
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" >Projects</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page1.php">Makong Riverside</a></div>
        <img src="./img/Rimkong1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page2.php">Wat Pho Chai</a></div>
        <img src="./img/Wat1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page3.php">Sala Keoku Park</a></div>
        <img src="./img/Sala1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page4.php">Friendship Bridge 1st</a></div>
        <img src="./img/Bridge1.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page5.php">Nong Khai Aquarium</a></div>
        <img src="./img/Aquarium1.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page6.php">Prab Ho Monument</a></div>
        <img src="./img/Monu1.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="page7.php">Tha Sadet Market</a></div>
        <img src="./img/Tha1.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><a href="https://www.facebook.com/Nongkhaidiscovery/">Travel All Month</a></div>
        <img src="./img/TravelMonth.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/KGhagYlSV_M?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    <p>&nbsp&nbsp หนองคาย เป็นจังหวัดในภาคตะวันออกเฉียงเหนือตอนบนตั้งอยู่ในแอ่งสกลนครและอยู่ในกลุ่มจังหวัดภาคตะวันออกเฉียงเหนือตอนบน 
      เป็นจังหวัดชายแดนและเป็นจังหวัดที่เงียบสงบ น่าอยู่และน่าท่องเที่ยว มีพื้นที่ส่วนใหญ่ติดฝั่งแม่น้ำโขง ตรงข้ามกับประเทศลาว 
      มีพื้นที่แคบแต่ยาว มีชื่อเสียงด้านการท่องเที่ยว 
    </p>
  </div>

  </div>
</div>


</body>
<!-- Footer -->
<footer class="w3-container  w3-center w3-padding-30 w3-margin-top  w3-pink ">
  <p>322236 Web Application Programming </p>
  <p>Khonkaen University Nong Khai Campus </p>
</footer>
</html>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only bootsrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Swiper.js -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
  <!-- font cairo -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <!-- custom Css-->
  <link rel="stylesheet" href="../css/navbar.css" type="text/css">
  <!-- <link rel="stylesheet" href="../css/chatbox.css" type="text/css"> -->
  <link rel="stylesheet" href="../css/home.css" type="text/css">
  <link rel="stylesheet" href="../css/footer.css" type="text/css">
  <link rel="stylesheet" href="../css/cyber.css" type="text/css">
  <link rel="stylesheet" href="../css/contactus.css" type="text/css">
  <link rel="stylesheet" href="../css/member.css" type="text/css">
  <link rel="stylesheet" href="../css/requestanadvice.css" type="text/css">
  <link rel="stylesheet" href="../css/signupasamember.css" type="text/css">
  <link rel="stylesheet" href="../css/commonquestions.css" type="text/css">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
  <script src="../scripts/links.json"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <title>Beladl</title>
</head>
<body>
  <nav class="navbar bg-dark navbar-dark  navbar-expand-lg text-light">
    <div class="container-fluid collapse navbar-collapse allsectionNav ">
      <div class="invisible iconMobileNav ">
        <a class="navbar-brand" href="/"><img src="../image/logoBiladl.svg" alt=""></a>
        <a class="text-decoration-none text-light" href=""><img src="../image/SEARCHIcon.svg" alt=""></a>
        <a href="" class="text-decoration-none text-light font-weight-light border border-white px-2">EN</a>
        <a class="text-decoration-none text-light " href="/pages/login.php">?????????? ????????????</a>
      </div>
      <div class="ham-search-cta">
      <button  class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="text-decoration-none text-light search-icon-mobile" href="#"><img src="../image/SEARCHIcon.svg" alt=""></a>
      </div>
 
      <a class="navbar-brand logoNavDesctop" href="../index.php"><img src="../image/logoBiladl.svg" alt=""></a>
      <div class="collapse navbar-collapse justify-content-between allListNav mobile-col-reverse"
        id="collapsibleNavbar">
        <ul class="navbar-nav justify-content-between sectiontwonav mobile-fluid-links">
          <li>
            <a class="text-decoration-none text-light nav-link" href="../index.php"> <span class="border border-warning p-2">????????????
                ????????????????</span></a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link" href="/pages/AboutUs.php">???? ????????????</a>
          </li>
          <li class="">
            <a class="text-decoration-none text-light nav-link" href="/pages/services.php"> ?????????????? </a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link" href="/pages/news.php">??????????????</a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link" href="/pages/articles.php">????????????????</a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link" href="/pages/contactus.php">???????? ??????</a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link" href="https://play.google.com/store/apps/details?id=com.biladl.biladil&pli=1">?????????? ???????????? </a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link mob-nav-link" href="/pages/login.php">?????????? ???????????? </a>
          </li>
          <li>
            <a class="text-decoration-none text-light nav-link mob-nav-link" href="">English</a>
          </li>
          <li class="col-6 mx-auto mob-nav-cta">
            <button type="button" class=" bg-warning font-weight-bold datepicker w-100 rounded regHomrB"
              >
              <b> ???????? ????????</b>
            </button>
          </li>
        </ul>
      
        <ul class="navbar-nav justify-content-end section-one  align-items-center sectiononeNav">
          <li class="right col-2">
            <a class="text-decoration-none text-light" href=""><img src="../image/SEARCHIcon.svg" alt=""></a>
          </li>
          <li class="col-2">
            <a href="" class="text-decoration-none text-light font-weight-light border border-white px-2">EN</a>
          </li>
          <li class="col-5 d-flex justify-content-center">
            <a class="text-decoration-none text-light " href="/pages/login.php">?????????? ????????????</a>
          </li>
          <li class="col-4">
            <button onclick="window.location.href='/pages/login.php'" type="button" class="bg-warning font-weight-bold datepicker w-100 rounded regHomrB">
              <b> ???????? ????????</b>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- 
  -- uncommnet to use the chat box
  <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>

	</div>
  
  <div class="chat-box">
    <div class="chat-box-header">
    <div class="chat-ops">
      <img src="/image/chatLogo.png" alt="">
      <span>?????????? ????????????</span>
      </div> 
      <span class="chat-box-toggle"><img src="/image/x-mark.svg" alt=""></span>
    </div>
    <div class="chat-box-body">
      <div class="chat-box-overlay">   
      </div>
      <div class="chat-logs">
       
      </div>
    </div>
    <div class="chat-input">      
      <form>
        <input type="text" id="chat-input" placeholder="Send a message..."/>
      <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
      </form>      
    </div>
  </div> -->
  
  
  
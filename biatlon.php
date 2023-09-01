<?php include 'includes/header.php'; ?>
<title>Начало | Олимпийски Игри</title>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/biatlon_bg.jpg');"> 
 <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <h1><a href="index.php">
          <img src="images/demo/logo1.png" alt="logo" style="width:200px ; height:90px">
        </a>
        </h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
          <li class=""><a href="index.php">Начало</a></li>
          <li><a class="drop" href="#">Летни спортове</a>
            <ul>
                <li><a class="drop" href="leka_atletika.php">Лека атлетика</a>
                <ul>
                  <li><a href="bqgane.php">Бягане</a></li>
                  <li><a href="hvarlqne.php">Хвърляне</a></li>
                  <li><a href="skokove.php">Скокове</a></li>
                </ul>
              </li>
              <li><a href="borba.php">Борба</a></li>
              <li><a href="vdigane_na_tejesti.php">Вдигане на тежести</a></li>
              <li><a href="strelba.php">Спортна стрелба</a></li>
              <li><a href="boks.php">Бокс</a></li>
              <li><a href="kanu-kaqk.php">Кану - каяк</a></li>
            </ul>
          </li>
           <li><a class="drop" href="#">Зимни спортове</a>
            <ul>
              <li><a href="biatlon.php">Биатлон</a></li>
              <li><a href="shorttrek.php">Шорттек</a></li>
              <li><a href="ski_bqgane.php">Ски бягане</a></li>
            </ul>
          </li>                                                                             
          <li><a href="uspehi.php">Успехи</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Биатлон</h6>




<div class="snow">
<style>
.editor-stage .snow {
  height:50px;
  background: #fff;
}
.snow{
  position:fixed;
  pointer-events:none;
  top:0;
  left:0;
  right:0;
  bottom:0;
  height:100vh;
  background: none;
  background-image: url('https://s3-eu-west-1.amazonaws.com/static-ressources/s1.png'), url('https://s3-eu-west-1.amazonaws.com/static-ressources/s2.png'), url('https://s3-eu-west-1.amazonaws.com/static-ressources/s3.png');
  z-index:100;
  -webkit-animation: snow 10s linear infinite;
  -moz-animation: snow 10s linear infinite;
  -ms-animation: snow 10s linear infinite;
  animation: snow 10s linear infinite;
}
@keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-moz-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 400px 1000px, 200px 400px, 100px 300px;}
}
@-webkit-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-ms-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
</style>
<p>
</div>
 <div id="snowflakeContainer">
  <span class="snowflake"></span>
</div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3" style="background-color: #d7dafb;">
  <main class="hoc container clear"> 
    <!-- main body -->
      <div class="content"> 
      <p>Биатлон е вид зимен спорт, съчетаващ ски бягане със стрелба.</p>
      <p>Организираната лека атлетика в България се ражда официално на 24 май 1924 г. През тази година е създадена Българската федерация по лека атлетика. На проведените по това време състезания за определяне на олимпийския състав за игрите в Париж са поставени и първите национални рекорди. С имената на Григорий Педан, Камен Ганчев и Любен Дончев са свързани първите български международни успешни прояви.</p>
      <br>
      <br>
      <h1>Екатерина Дафовска</h1>
      <img class="imgl borderedbox inspace-5" src="images/demo/eksterinа_dafovska.jpg" alt="">
        <p>Родена е на 28 ноември 1975 г. в град Чепеларе, област Смолян. На 15-годишна възраст се записва в спортния клуб на родния си град, където започва да се занимава с биатлон. Първият ѝ успех е през 1993 г., когато печели бронзов медал на световно първенство за девойки.</p>
        <p>На зимните олимпийски игри в Нагано става първата олимпийска шампионка за България от Зимни олимпиади в коронната си дисциплина 15 км индивидуално (1998).</p>
      </div>
      </div>
      <!-- / main body -->
  </main>
</div>
 <?php include 'includes/footer.php'; ?>

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
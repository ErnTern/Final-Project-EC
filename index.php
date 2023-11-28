<?php
$pageTitle = "Home";
include "view-header.php";
?>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

<img src="https://www.leagueoflegends.com/static/open-graph-b580f0266cc3f0589d0dc10765bc1631.jpg" alt="...">
<p>
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <strong> Champion
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> A Champion is a playable character within the game. Each Champion has a different and unique set of abilities. 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Class
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> A Class determines a Champion's ideal play style. Behavior, responses, and reactions are what help decide a class. 
          <br>
          Examples are Fighter, Mage, Tank, Marksmen, Assassin.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Lane
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> A Lane is where a Champion resides throughout the length of a game. Depending on the class and/or playstyle, this is what decides where the champion is played.
          <br>
          Examples are Top, Jungle, Mid, Bottom, and Support.
      </div>
    </div>
  </div>
</div>
</p>
</body>
   
  </div>
<?php
include "view-footer.php";
?>

<?php
$pageTitle = "Home";
include "view-header.php";
?>

<style>
  body {
    background-image: url('https://static.vecteezy.com/system/resources/previews/007/169/379/original/japanese-sayagata-asian-traditional-geometric-seamless-pattern-with-light-yellow-gold-color-background-use-for-fabric-textile-cover-interior-decoration-elements-wrapping-vector.jpg');
    background-size: cover;
    background-position: center;
    opacity: 0; 
    animation: fadeIn 1.0s ease-in-out forwards; 
  }

  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  h3 {
    text-align: center;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
</style>
</head>

<body>

<img src="https://www.leagueoflegends.com/static/open-graph-b580f0266cc3f0589d0dc10765bc1631.jpg" alt="...">
<p> </p>
  <style> h3{ text-align: center;} </style>
  <h3><span class="badge text-bg-light">Welcome, here is a quick explanation of League of Legends terminology.</span></h3>
<p>
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <strong> Champion </strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        A Champion is a playable character within the game. Each Champion has a different and unique set of abilities. 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       <strong> Class </strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        A Class determines a Champion's ideal play style. Behavior, responses, and reactions are what help decide a class. 
          <br>
          <strong>Examples:</strong> Fighter, Mage, Tank, Marksmen, Assassin.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <strong> Lane </strong>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        A Lane is where a Champion resides throughout the length of a game. Depending on the class and/or playstyle, this is what decides where the champion is played.
          <br>
          <strong>Examples:</strong> Top, Jungle, Mid, Bottom, and Support.
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

<style>
body {
    background-image: url('https://static.vecteezy.com/system/resources/previews/007/169/379/original/japanese-sayagata-asian-traditional-geometric-seamless-pattern-with-light-yellow-gold-color-background-use-for-fabric-textile-cover-interior-decoration-elements-wrapping-vector.jpg');
    background-size: cover;
    background-position: center;
.table {
    border-radius: 10px; /* Adjust the radius as needed */
    overflow: hidden; /* Ensure rounded corners are visible */
}

th {
    border-radius: 10px 10px 0 0; /* Top rounded corners */
}

td {
    border-radius: 0 0 10px 10px; /* Bottom rounded corners */
}
}
</style>
    <div class = "container">
<h1>Champions by Class</h1>
<div class="card-group">

<?php
while ($champions = $champion->fetch_assoc()) {
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $champions['champ_name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
<?php
  $class = selectClassByChampion($champions['champ_id']);
  while ($class = $class->fetch_assoc()){
?>
      <li class="list-group-item"><?php echo $class['champ_name']; ?> - <?php echo $class['lane_id'];?></li>
<?php
  }
?>
    </ul>
    </p>
    </div>
  </div>
<?php
}
?>
</div>

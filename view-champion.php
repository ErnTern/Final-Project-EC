<head>
<style>
body {
    background-image: url('https://static.vecteezy.com/system/resources/previews/007/169/379/original/japanese-sayagata-asian-traditional-geometric-seamless-pattern-with-light-yellow-gold-color-background-use-for-fabric-textile-cover-interior-decoration-elements-wrapping-vector.jpg');
    background-size: cover;
    background-position: center;
}
.table {
    border-radius: 10px; /* Adjust the radius as needed */
    overflow: hidden; /* Ensure rounded corners are visible */
}
tbody tr:nth-of-type(even) {
    background-color: #f2f2f2; /* Light grey background for even rows */
}

</style>
</head>
<body>
    <div class = "container">
        <div style="display: flex; align-items: center;">
<h1><span class="badge text-bg-light">Champions</span></h1>
    <?PHP
    include "view-champion-newform.php"
    ?>
        </div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th><h3>NAME</h3></th>
      <th><h3>CLASS</h3></th>
      <th><h3>LANE</h3></th>
      <th><h3>EDIT/DELETE</h3></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($champions = $champion->fetch_assoc()) {
?>
  <tr>
    <td><strong><?php echo $champions['champ_name']; ?></strong></td>
    <td><?php echo $champions['class_id']; ?></td>
    <td><?php echo $champions['lane_id']; ?></td>
    <td><?php include "view-champion-editform.php"; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
    </div>
    </body>

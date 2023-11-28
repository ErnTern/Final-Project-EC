<style>
body {
    background-image: url('https://st4.depositphotos.com/22949604/24475/v/1600/depositphotos_244751738-stock-illustration-chinese-traditional-oriental-ornament-background.jpg');
    background-size: cover;
    background-position: center;
}
<h1>Champions</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th><h3>NAME</h3></th>
      <th><h3>CLASS</h3></th>
      <th><h3>LANE</h3></th>
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
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

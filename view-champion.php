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

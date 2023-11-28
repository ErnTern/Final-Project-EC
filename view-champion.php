<h1>Champions</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <h4><th>Name</th></h4>
      <th>Class</th>
      <th>Lane</th>
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

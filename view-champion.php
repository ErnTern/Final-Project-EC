<h1>Champions</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Name</th>
      <th>Class</th>
      <th>Lane</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($champions = $champion->fetch_assoc()) {
?>
  <tr>
    <strong>
    <td><?php echo $champions['champ_name']; ?></td>
    <td><?php echo $champions['class_id']; ?></td>
    <td><?php echo $champions['lane_id']; ?></td>
    </strong>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

<h1>Champions</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Name</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($champions = $champion->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $champions['champ_name']; ?></td>
    <td><?php echo $champions['class_id']; ?></td>
    <td><?php echo $champions['lane_id']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

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
<h1><span class="badge text-bg-light">Champions</span></h1>
    <?PHP
    include "view-champion-newform.php"
    ?>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th><h3>NAME</h3></th>
      <th><h3>CLASS</h3></th>
      <th><h3>LANE</h3></th>
    <td>
    </td>
        <td>
            <form method = "post" action = "">
            <input type = "hidden" name="chID" value ="<?php echo $champion['champ_id']; ?>">
            <input type = "hidden" name = "actionType" value = "Delete">
            <button type="submit" class="btn" onclick = "return confirm('Confirm deletion.');">
                <img src="https://cdn.imgbin.com/12/12/11/solid-web-buttons-icon-trash-icon-delete-icon-DGwAE9mE.jpg" width="50" height="auto" alt="...">
            </button>
            </form>
        </td>
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

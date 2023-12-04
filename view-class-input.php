<select class="form-select" id="cid" name = "cid">
<?php
while ($classItem = $classList->fetch_assoc()) {
  ?>
    <option value="<?php echo $classItem['class_id"]; ?>"><?php echo $classItem['class_id"]; ?></option>
<?php
}
?>
</select>

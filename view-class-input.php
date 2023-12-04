<select class="form-select" id="class" name="class">
  <?php
while ($classItem = $classList->fetch_assoc()) {
  $selText ="";
  if ($selectedid == $classItem['class_id']) {
    $selText = "selected";
  }
  ?>
  <option value="<?php echo $classItem['class_id']; ?>"<?=$selText?>><?php echo $classItem['class_id']; ?></option>
  <?php
}https://https://github.com/ErnTern/Final-Project-EC/new/main
  ?>
</select>

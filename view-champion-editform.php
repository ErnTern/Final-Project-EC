<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editChampModal<?php echo $champion['champ_id']; ?>">
  <img src="https://p7.hiclipart.com/preview/245/890/350/computer-icons-writing-editing-write.jpg" width="20" height="auto" alt="...">
</button>

<!-- Modal -->
<div class="modal fade" id="editChampModal<?php echo $champion['champ_id']; ?>" tabindex="-1" aria-labelledby="editChampModalLable<?php echo $champion['champ_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editChampModalLable<?php echo $champion['champ_id']; ?>">Edit Champion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method="post" action="">
  <div class="mb-3">
    <label for="cName<?php echo $champion['champ_id']; ?>" class="form-label">Champion Name</label>
    <input type="text" class="form-control" id="cName<?php echo $champion['champ_id']; ?>" name="cName" value = "<?php echo $champion['champ_name']; ?>">
  </div>
    <div class="mb-3">
    <label for="cID<?php echo $champion['champ_id']; ?>" class="form-label">Class</label>
    <input type="text" class="form-control" id="cID<?php echo $champion['champ_id']; ?>" name="cID" value = "<?php echo $champion['class_id']; ?>">
  </div>
    <div class="mb-3">
    <label for="lID<?php echo $champion['champ_id']; ?>" class="form-label">Lane</label>
    <input type="text" class="form-control" id="lID<?php echo $champion['champ_id']; ?>" name="lID" value = "<?php echo $champion['lane_id']; ?>">
  </div>
            <input type ='hidden' name='chID' value = "<?php echo $champion['champ_id']; ?>">
            <input type ='hidden' name='actionType' value="Edit">
  <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

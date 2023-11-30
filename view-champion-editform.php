<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editChampModal<?php echo $champions['champ_id']; ?>">
  <img src="https://p7.hiclipart.com/preview/245/890/350/computer-icons-writing-editing-write.jpg" width="20" height="auto" alt="...">
</button>

 <form method = "post" action = "">
            <input type = "hidden" name="chID" value ="<?php echo $champions['champ_id']; ?>">
            <input type = "hidden" name = "actionType" value = "Delete">
            <button type="submit" class="btn" onclick = "return confirm('Confirm deletion.');">
                <img src="https://cdn.imgbin.com/12/12/11/solid-web-buttons-icon-trash-icon-delete-icon-DGwAE9mE.jpg" width="20" height="auto" alt="...">
            </button>
            </form>

<!-- Modal -->
<div class="modal fade" id="editChampModal<?php echo $champions['champ_id']; ?>" tabindex="-1" aria-labelledby="editChampModalLable<?php echo $champions['champ_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editChampModalLable<?php echo $champions['champ_id']; ?>">Edit champions</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method="post" action="">
  <div class="mb-3">
    <label for="cName<?php echo $champions['champ_id']; ?>" class="form-label">champions Name</label>
    <input type="text" class="form-control" id="cName<?php echo $champions['champ_id']; ?>" name="cName" value = "<?php echo $champions['champ_name']; ?>">
  </div>
    <div class="mb-3">
    <label for="cID<?php echo $champions['champ_id']; ?>" class="form-label">Class</label>
    <input type="text" class="form-control" id="cID<?php echo $champions['champ_id']; ?>" name="cID" value = "<?php echo $champions['class_id']; ?>">
  </div>
    <div class="mb-3">
    <label for="lID<?php echo $champions['champ_id']; ?>" class="form-label">Lane</label>
    <input type="text" class="form-control" id="lID<?php echo $champions['champ_id']; ?>" name="lID" value = "<?php echo $champions['lane_id']; ?>">
  </div>
            <input type ='hidden' name='chID' value = "<?php echo $champions['champ_id']; ?>">
            <input type ='hidden' name='actionType' value="Edit">
  <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

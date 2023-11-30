<!-- Button trigger modal -->
<button type="button" data-bs-toggle="modal" data-bs-target="#newChampModal">
  <img src="https://cdn.pixabay.com/photo/2017/07/11/13/56/user-2493635_1280.png" width="50" height="auto" alt="...">
</button>

<!-- Modal -->
<div class="modal fade" id="newChampModal" tabindex="-1" aria-labelledby="newChampModalLable" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newChampModalLable">New Champion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method="post" action="">
  <div class="mb-3">
    <label for="cName" class="form-label">Champion Name</label>
    <input type="text" class="form-control" id="cName" name="cName">
  </div>
    <div class="mb-3">
    <label for="cID" class="form-label">Class</label>
    <input type="text" class="form-control" id="cID" name="cID">
  </div>
    <div class="mb-3">
    <label for="lID" class="form-label">Lane</label>
    <input type="text" class="form-control" id="lID" name="lID">
  </div>
            <input type ='hidden' name='actionType' value="Add">
  <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

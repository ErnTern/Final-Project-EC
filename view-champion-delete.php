

<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteChampModal">
  <img src="https://cdn.imgbin.com/12/12/11/solid-web-buttons-icon-trash-icon-delete-icon-DGwAE9mE.jpg" width="50" height="auto" alt="...">
</button>

<!-- Modal -->
<div class="modal fade" id="deleteChampModal" tabindex="-1" aria-labelledby="deleteChampModalLable" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteChampModalLable">New Champion</h1>
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

<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#newChampModal">
 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="auto" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg>
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
 <select class="form-select" id="cID" name="cID">
              <option value="Assassin">Assassin</option>
              <option value="Fighter">Fighter</option>
              <option value="Mage">Mage</option>
              <option value="Marksman">Marksman</option>
              <option value="Tank">Tank</option>
            </select>
  </div>
    <div class="mb-3">
    <label for="lID" class="form-label">Lane</label>
   <select class="form-select" id="lID" name="lID">
              <option value="Top">Top</option>
              <option value="Jungle">Jungle</option>
              <option value="Mid">Mid</option>
              <option value="Bottom">Bottom</option>
              <option value="Support">Support</option>
            </select>
  </div>
            <input type ='hidden' name='actionType' value="Add">
  <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

<form method = "post" action = "">
        <input type = "hidden" name="chID" value ="<?php echo $champion['champ_id']; ?>">
        <input type = "hidden" name = "actionType" value = "Delete">
        <button type="submit" class="btn" onclick = "return confirm('Confirm deletion.');">
            <img src="https://cdn.imgbin.com/12/12/11/solid-web-buttons-icon-trash-icon-delete-icon-DGwAE9mE.jpg" width="50" height="auto" alt="...">
        </button>
      </form>

<?php
function selectChampion() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT champ_id, champ_name, class_id, lane_id FROM `Champion`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectClassByChampion($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT champ_name, class_id, lane_id FROM Champion WHERE champ_id = ?");
        $stmt->bind_param("i", $iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

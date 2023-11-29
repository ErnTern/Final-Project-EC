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

function addChampion($cName, $cID, $lID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Champion` (`champ_name`, `class_id`, `lane_id`) VALUES (?, ?, ?)");
        $stmt ->bind_param("sss",$cName, $cID, $lID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateChampion($cName, $cID, $lID, $chID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Champion` SET `champ_name` = ?, `class_id` = ?, `lane_id` = '?' WHERE `Champion`.`champ_id` = ?");
        $stmt ->bind_param("sssi",$cName, $cID, $lID, $chID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteChampion($chID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE 'Champion' WHERE `champ_id` = ?");
        $stmt ->bind_param("i",$chID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

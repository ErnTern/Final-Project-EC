<?php
function selectChampion() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.champ_id, c.champ_name, c.class_id, c.lane_id, cl.class_id FROM Champion c JOIN Class cl ON c.class_id = cl.class_id;");
                                //"SELECT champ_id, champ_name, class_id, lane_id FROM `Champion`" ---- old line 
                                //SELECT c.champ_id, c.champ_name, c.class_id, c.lane_id, cl.class_id FROM Champion c JOIN Class cl ON c.class_id = cl.class_id;
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectClass() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT class_id FROM Class");
                                //"SELECT class_id FROM Class"
                                //"SELECT champ_id, champ_name, class_id, lane_id FROM `Champion`" ---- old line 
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
        $stmt = $conn->prepare("SELECT champ_name, class_id, lane_id, champ_id FROM Champion WHERE class_id = `Assassin`");
                                //"SELECT champ_name, class_id, lane_id FROM Champion WHERE champ_id = ?" ---- committed old line
                                //"SELECT c.champ_name, c.class_id, c.lane_id FROM Champion c join Class cl on c.class_id=cl.class_id WHERE cl.class_id = ?" ---aarons line
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

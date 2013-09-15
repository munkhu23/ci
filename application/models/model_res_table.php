<?php

class Model_res_table extends CI_Model {

    public function get_info () {
        $this->db->where('tablet_id', 1);
        $query = $this->db->get('res_tablet')->result();
        return $query;
    }
}

?>
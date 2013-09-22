<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Munkh
 * Date: 9/22/13
 * Time: 1:41 PM
 * To change this template use File | Settings | File Templates.
 */
class Model_res_menu extends CI_Model {
    public function get_menu (){
        $menus = $this->db->get('res_menu')->result();
        return $menus;
    }
}
?>


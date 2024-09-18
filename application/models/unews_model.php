<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class unews_model extends CI_Model{
    public function sel_grid_data(){
//  SELECT DISTINCT 
// `unews`.`id_unews`, 
// `unews`.`utitle`, 
// `unews`.`udescription`, 
// `unews`.`textunews`,
// `uphotonews`.`uphotonews` 
// FROM `unews` 
// INNER JOIN `uphotonews` 
// ON `unews`.`id_unews` = `uphotonews`.`id_unews` 
// WHERE 1=1
// LIMIT 3
$this->db->select('unews.id_unews', 
'unews.utitle',
 'unews.udescription', 
 'unews.textunews',
 'uphotonews.uphotonews');
 $this->db->distinct();
 $this->db->from('unews');
 $this->db->join('uphotonews', 'unews.id_unews = uphotonews.id_unews');
 $this->db->where('1=1');
 $this->db->limit(3);
 $sql=$this->db->get();
 return $sql->result_array();
}
}
?>
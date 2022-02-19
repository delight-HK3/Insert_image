<?php
class Insert_notice_m extends CI_Model {
    public function insert($data,$no){
        $where=array("no"=>$no);
        return $this->db->update("innotice",$data,$where);
    }
    public function make(){
        $sql1 = "insert into innotice(name, writer_no, content) 
                    values (null,0,null)";
        $sql2 = "select * from innotice where writer_no like 0";
        $this->db->query($sql1);
        return $this->db->query($sql2)->row();
    }
}
?>
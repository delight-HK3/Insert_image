<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Insert_notice_m extends CI_Model {
    public function insert($data,$no){ 
    	// insert함수가 아닌 update를 사용하는 이유는 기존에 빈 테이블 행을 만들었기 때문에 
        // 빈테이블 번호와 같은 행을 view에서 가져온 값을 넣어 업데이트 합니다.
        $where=array("no"=>$no);
        return $this->db->update("innotice",$data,$where);
    }
    public function make(){ // 빈 값을 가진 행을 하나 만들고 그중에 writer_no 가 0인 행을 선택합니다.
        $sql1 = "insert into innotice(name, writer_no, content) 
                    values (null,0,null)";
        $sql2 = "select * from innotice where writer_no like 0";
        $this->db->query($sql1);
        return $this->db->query($sql2)->row();
    }
}
?>

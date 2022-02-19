<?php
class Insert_notice extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database(); //DB 연결          
        $this->load->model("insert_notice_m"); 
        $this->load->library('upload'); 
    }
    public function index(){
        $this->add();
    }
    public function add(){
        $this->load->view("insert_notice_view");
    }
    public function insert(){
        $data = array(
            'name' => $this->input->post("name",true),
            'writer_no' => 1,
            'content' => $this->input->post("content",true)
        );
        
        $new["row"] = $this->insert_notice_m->make();

        $picture=$this->upload($new["row"]->no);
        if($picture){
            $data["picture"]=$picture;
        }
        else{
            $data["picture"]="<임시 이미지>";
        }
        $this->insert_notice_m->insert($data,$new["row"]->no);
        redirect("/insert_notice");
    }
    public function upload($no){
        $config['upload_path'] = './img';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE; 
        $config['file_name'] = "img"."_".$no."_"."num";
		$this->upload->initialize($config);

        if(!$this->upload->do_upload('notice_img')){
           $picture="";
        }
        else{
           $picture=$this->upload->data("file_name"); 
        }
        
        return $picture;
    } 
}
?>
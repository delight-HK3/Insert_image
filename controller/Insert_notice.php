<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Insert_notice extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database(); // 데이터 베이스를 연결합니다.       
        $this->load->model("insert_notice_m"); // Insert_notice_m model을 연결합니다.
        $this->load->library('upload'); // upload 라이브러리를 추가시킵니다.
    }
    public function index(){
        $this->add(); // 시작하면 add함수를 호출시킵니다. 
    }
    public function add(){
        $this->load->view("insert_notice_view"); // insert_notice_view를 출력시킵니다.
    }
    public function insert(){
        $data = array( // insert_notice_view에서 입력받은 내용을 배열형태로 저장시킵니다.
            'name' => $this->input->post("name",true),
            'writer_no' => 1, 
            // 1을 넣은 이유는 make()함수에서는 writer_no의 값이 
       		// 0인 행만 고르기 때문에 1을 안넣으면 추가하는 행 마다 writer_no의 값이 0이 됩니다. 
            // 결국 writer_no의 값이 0인 행을 선택하게 되고 처음에 넣은 값은 정상적으로 입력되지만/
        	// 두 번째 부터는 빈 행이 들어가고 맨 앞에 있는 행이 갱신되는 문제가 생깁니다.
            'content' => $this->input->post("content",true)
        ); 
        
        $new["row"] = $this->insert_notice_m->make(); 
        // insert_notice_m에서 make함수를 실행시키고 리턴 값을 $new ["row"]에 저장시킵니다. 

        $picture=$this->upload($new["row"]->no); 
        // upload함수에 $new["row"]에 저장되어있는 no값을 넣어 호출합니다.
        if($picture){ // 이미지가 있으면 이미지의 이름을 반대로 없으면 img폴더에 저장되어있는 nonotice.png를 배열에 저장시킵니다.
            $data["picture"]=$picture;
        }
        else{
            $data["picture"]="nonotice.png"; // 이미지가 없으면 nonotice.png가 업로드 됩니다.
        }
        $this->insert_notice_m->insert($data,$new["row"]->no);
        redirect("/insert_notice");
    }
    public function upload($no){ 
        $config['upload_path'] = './my/img'; // 이미지 저장폴더 경로입니다.
	$config['allowed_types'] = 'gif|jpg|png'; // 저장할 파일의 타입입니다.
	$config['overwrite'] = TRUE; // 덮어쓰는 것을 허용합니다.
        $config['file_name'] = "img"."_".$no."_"."num"; 
        // 이미지의 이름을 지정하는데 img + "기본키 값" + num으로 이미지 이름을 저장시킵니다. 
	$this->upload->initialize($config); // 설정한 옵션들을 저장시킵니다.

        if(!$this->upload->do_upload('notice_img')){ 
        // 이미지 업로드에 성공하면 이미지 이름이 $data["picture"] 에 저장되고 안되면 아무것도 저장이 안 됩니다. 
           $picture="";
        }
        else{
           $picture=$this->upload->data("file_name");
        }
        return $picture; // 변수 picture을 insert에 리턴 시킵니다.
    } 
}
?>

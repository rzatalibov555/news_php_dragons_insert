<?php 
class AdminCon extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('AdminModel');
    }


    public function index(){
        echo 'log in';
    }

    public function dashboard(){
        $this->load->view('admin/dashboard');
    }

    public function profile(){
        $this->load->view('admin/profile');
    }

    public function fontawesome(){
        $this->load->view('admin/fontawesome');
    }

    public function news(){
        $this->load->view('admin/news');
    }

    public function error(){
        $this->load->view('admin/404');
    }

    public function creat(){
        $this->load->view('admin/creat');
    }

    public function create_news_act(){
        $title = $_POST['title'];
        $descr = $_POST['descr'];
        $date  = $_POST['date'];
        $cate  = $_POST['cate'];
        $status= $_POST['status'];


        if(!empty($title) && !empty($descr) && !empty($date) && !empty($cate) && !empty($status)){

            $data = [
                'n_title'       => $title,
                'n_description' => $descr,
                'n_date'        => $date,
                'n_category'    => $cate,
                'n_status'      => $status,
                'n_img'         => "",
            ];

            $this->AdminModel->insert($data);

            redirect(base_url('admin_news'));

        }else{
            redirect(base_url('admin_creat'));
        }




    
    }
}




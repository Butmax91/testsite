<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->library('email');

        $config['charset'] = 'utf-8';
        $config['wordwrap'] = true;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->load->model('AuthModel');
    }

    public function signup(){
        $this->load->helper('string');
        if(isset($_POST['login'])){
            $this->form_validation->set_error_delimiters('<p class="bg-danger">', '</p>');

            $this->form_validation->set_rules('login', 'Login', 'required|min_length[5]|max_length[15]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('repassword', '', 'matches[password]');
            if ($this->form_validation->run()) {
                $user = array(
                    'login' => $_POST['login'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                );
                $this->db->insert('users',$user);

                // 3) Отправка письма подтверждения
               /* $this->email->from('info@resto.com.ua', 'resto');
                $this->email->subject('Подтверждение регистрации на сайте resto.com.ua');
                $this->email->to($_POST['email']);

                $link = base_url()."auth/confirm/".$code;
                $this->email->message("
                    <h3>".$_POST['login'].", Вы успешно зарегистрировались на сайте ".base_url()."</h3>
                    <p>Для подтверждения почтового адреса и активации аккаунта перейдите по следующей ссылке</p>
                    <a href='{$link}'>{$link}</a>
                ");
                $this->email->send();
               /* $to      = 'butmax1991@gmail.com';
                $subject = 'the subject';
                $message = 'hello';
                $headers = 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);*/
                $_SESSION['user_ID'] = $this->db->insert_id();
                redirect('/cabinet', 'refresh');
            }

        }
        $data['content']="signup_view";
        $this->load->view('layout_view',$data);

    }

    public function login(){

            $this->form_validation->set_error_delimiters('<p class="bg-danger">', '</p>');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
            }

            if ($this->form_validation->run()){
                $user = $this->AuthModel->getUserInfo($email);
            if (empty($user)){
                echo "<p class='bg-danger'>Неверный логин или пароль!</p>";
            }else{
                $_SESSION['user_ID'] = $user['ID'];
                redirect('/cabinet', 'refresh',$email);
            }


        }
        $data['content']="login_view";
        $this->load->view('layout_view',$data);

    }
    public function logout(){
        session_destroy();
        header("Location: ".base_url());
    }
    /*public function addStuff(){
        $cloth = array(
            'cloth_title'=>'boot',
            'cloth_price'=> rand(500, 1500),
            'cloth_img' => "img/boots.jpeg",
            'cloth_description' => "it a very good stuf from ololo whre is something for somthing to do it"
        );
        $this->db->insert('Clothes',$cloth);
    }*/

}
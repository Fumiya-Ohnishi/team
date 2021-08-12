<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        // CI_Model constructor の呼び出し
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Form_model');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Tokyo');
    }

    public function index()
    {
        $data = null;
        if (!empty($_SESSION['error_message'])) {
            $data['error_message'] = $_SESSION['error_message'];
            unset($_SESSION['error_message']);
        }
        $this->load->view('LOD_form_header_view');
        $this->load->view('LOD_form_view', $data);
    }


    public function add_form()
    {
        $name = @$this->input->post('your_name', true) ?: null;
        $kana = @$this->input->post('kana', true) ?: null;
        $tel = @$this->input->post('tel', true) ?: null;
        $mail = @$this->input->post('mail', true) ?: null;
        $password = $this->input->post('password', true) ?: null;
        $year = @$this->input->post('year', true) ?: null;
        $gender = @$this->input->post('gender', true) ?: null;
        $magazine = @$this->input->post('magazine', true) ?: 0;


// CodeIgniterのバリデーション！
        $this->form_validation->set_rules('your_name', '名前', 'required', array('required'=> '※%sの入力は必須です。'));
        $this->form_validation->set_rules('kana', 'カナ', 'required', array('required' => '※%sの入力は必須です。' ));
        $this->form_validation->set_rules('tel', '電話', 'required', array('required' => '※%sの入力は必須です。'));
        $this->form_validation->set_rules('mail', 'e-mail', 'required', array('required' => '※%sの入力は必須です。'));
        $this->form_validation->set_rules('password', 'パスワード', 'required', array('required' => '※%sの入力は必須です。'));
        $this->form_validation->set_rules('year', '生まれ年', 'required', array('required' => '※%sの入力は必須です。'));
        $this->form_validation->set_rules('gender', '性別', 'required', array('required' => '※%sの入力は必須です。'));
        $this->form_validation->set_rules('magazine', 'メールマガジンの送付を希望する', 'optional');


        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('LOD_form_header_view');
            $this->load->view('LOD_form_view');

        }else{
            $data = [
                'your_name' => $name,
                'kana' => $kana,
                'tel' => $tel,
                'mail' => $mail,
                'password' => $password,
                'year' => $year,
                'gender' => $gender,
                'magazine' => $magazine,
            ];
            $this->input_info($data);
        }
    }


    public function input_info($data)
    {
        $this->load->view('LOD_form_header_view');
        $this->load->view('LOD_form_check_view', $data);
    }



    public function thankyou()
    {

        if ($this->input->post('btn_submit')) {
            $data = [
                'your_name' => $this->input->post('your_name', true),
                'tel' => $this->input->post('tel', true),
                'mail' => $this->input->post('mail', true),
                'password' => password_hash($this->input->post('password', true),PASSWORD_DEFAULT),
                'year' => $this->input->post('year', true),
                'gender' => $this->input->post('gender', true),
                'magazine' => $this->input->post('magazine', true),
            ];
            // print_r($data);
            // exit;
            $this->Form_model->insert_info($data);
        }

        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'japanesebsrtcomedy@gmail.com';
        $mail->Password = 'euqcvqvnobfzyill';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('japanesebsrtcomedy@gmail.com', 'BSRT');
        $mail->addReplyTo('japanesebsrtcomedy@gmail.com', 'BSRT');

        // Add a recipient
        $mail->addAddress($this->input->post('mail'));

        // // Add cc or bcc
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'Thank you for your resistration.登録有難うございます。';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent　メッセージを送りました。';
        }

        $this->load->view('LOD_form_thanks_header_view.php');
        $this->load->view('LOD_form_thanks_view');
    }
}

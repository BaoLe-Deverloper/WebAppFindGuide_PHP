<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Home_Controller extends Base_Controller
{
    public function index()
    {
        // echo '<h3>Token: csrf_token_name: ' . $this->config->item('csrf_token_name') . '</h3>';
         
        // // Thay đổi giá trị cho csrf_token_name
        // $this->config->set_item('csrf_token_name', 'new_token');
        // echo '<h3>Token: csrf_token_name (changed): ' . $this->config->item('csrf_token_name') . '</h3>';
         
        // // Tạo cấu hình mới tên website_name
        // $this->config->set_item('website_name', 'baole.com');
        // echo '<h3>key website_name: ' . $this->config->item('website_name') . '</h3>';
        //  // Load view
        $this -> load_header();
        $this->view->load('Home','index');
        $this -> load_footer();
       
    }
     
    public function detailAction()
    {
        echo '<h1>Detail Action</h1>';
    }
}

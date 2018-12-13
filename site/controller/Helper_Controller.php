<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Helper_Controller extends Controller
{
    public function index()
    {
        // Load heloer
        $this->helper->load('string');
         
        // Gọi đến hàm string_to_int
        echo string_to_int('freetuts.net');
        echo string_ucfirt("le van bao");
    }
}
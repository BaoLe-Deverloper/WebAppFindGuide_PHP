<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
    /**
     * Hàm chạy ứng dụng
     * 
     * @desc    tham số truyền vào gồm controller và action
     */
    function load()
    {
          // Lấy phần config khởi tạo ban đầu
        $config = include_once PATH_APPLICATION . '/config/init.php';
             // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
             // // Nếu không truyền controller thì lấy controller mặc định
             // // Danh sách tham số gồm hai phần
       
        $controller = empty($_GET['controller']) ? $config['default_controller'] : $_GET['controller'];

      // Nếu không truyền action thì lấy action mặc định 
        $action = empty($_GET['action']) ? $config['default_action'] : $_GET['action'];
        $controller = ucfirst(strtolower($controller)) . '_Controller';

    // chuyển đổi tên action vì nó có định dạng {name}Action
        $action = strtolower($action);

    // Kiểm tra file controller có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')){
            die ('Controller không tồn tại');
        }

        require_once PATH_APPLICATION . '/controller/' . $controller . '.php';

    // Kiểm tra class controller có tồn tại hay không
        if (!class_exists($controller)){
            die ('Controller không tồn tại');
        }

    // Khởi tạo controller
        $controllerObject = new $controller();

    // Kiểm tra action có tồn tại hay không
        if ( !method_exists($controllerObject, $action)){
            die ('Action không tồn tại');
        }

    // Gọi tới action
        $controllerObject->{$action}();
    }

    ?>
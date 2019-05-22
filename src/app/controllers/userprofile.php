<?php   

require_once '../app/core/Converter.php';

class UserProfile extends Controller
{
    public function index($params = [])
    {
        //create a new user object
        $user = $this->model('User', $params['userName'], $params['password'], $params['email']);
        
        //call the view method and pass the model as assoc array
        $this->view('user/profile', Converter::toAssocArray($user));
    }
} 
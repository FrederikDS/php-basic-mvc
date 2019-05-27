<?php   

require_once '../app/core/Converter.php';
require_once '../app/core/ArrayUtils.php';

class UserProfile extends Controller
{
    public function index($params = [])
    {
        if(ArrayUtils::isAssoc($params))
        {
            $user = $this->model('User', $params['userName'], $params['password'], $params['email']);
        }
        else
        {
            $user = $this->model('User', $params[0], $params[1], $params[2]);
        }

        
        //call the view method and pass the model as assoc array
        $this->view('user/profile', Converter::toAssocArray($user));
    }
} 
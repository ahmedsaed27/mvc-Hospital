<?php

require_once '../vendor/autoload.php';

use As984\Hospital\core\bootstrab;
use As984\Hospital\core\load;
use As984\Hospital\core\validation;
use As984\Hospital\model\user;
use As984\Hospital\core\auth;



load::set('auth_core' , new auth());
load::set('user_model' , new user());
load::set('validtion' , new validation());
new bootstrab();











?>
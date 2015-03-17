<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 10:34
 */

class userController extends ControllerBase {
    public function indexAction()
    {
        $users=user::find();
        $this->view->setVar("users", $users);
    }
} 
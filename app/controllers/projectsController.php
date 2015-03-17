<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 10:51
 */

class projectsController extends ControllerBase {
    public function indexAction()
    {
        $projects=projet::find();
        $this->view->setVar("projects", $projects);
    }
} 
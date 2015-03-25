<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 25/03/15
 * Time: 12:42
 */

class AuthorController extends ControllerBase {
    public function projectsAction($id)
    {
        $usecases=useCase::find(array(
            "idDev = $id"
        ));
        $projects = array();
        foreach($usecases as $usecase){
            array_push($projects, $usecase->getProjet());
        }
        $this->view->setVar("projects", $projects);
    }
}
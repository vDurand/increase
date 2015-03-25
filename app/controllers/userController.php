<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 10:34
 */

class userController extends ControllerBase {
    public function projectsAction($id)
    {
        $projects=projet::find(array(
            "idClient = $id"
        ));
        $this->view->setVar("projects", $projects);
    }
    public function projectAction($id)
    {
        $project=projet::findFirst($id);
        $this->view->setVar("project", $project);
        $usecases = $project->getUseCasesProjet();
        $devs = array();
        foreach($usecases as $usecase){
            $code = $usecase->getIdDev();
            $dev = user::findFirst($code);
            $devnom = $dev->getIdentite();
            array_push($devs, $devnom);
        }
        $devsunique = array_unique($devs);
        $this->view->setVar("devs", $devsunique);
    }
} 
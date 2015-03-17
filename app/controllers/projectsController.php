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
        $i = 0;
        foreach($projects as $projet){
            $sum = 0;
            foreach( $projet->getUseCasesProjet() as $usecase){
                $sum += $usecase->getPoids();
            }
            $poidstot[$i] = $sum;
            $i++;
        }
        $i=0;
        foreach($projects as $projet){
            $avancement[$i] = 0;
            foreach( $projet->getUseCasesProjet() as $usecase){
                $poidpercent = $usecase->getPoids()*100/$poidstot[$i];
                $avancement[$i] += round($poidpercent*$usecase->getAvancement()/100);
            }
            $i++;
        }
        $this->view->setVar("avancement", $avancement);
    }
} 
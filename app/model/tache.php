<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 09:56
 */

class tache extends \Phalcon\Mvc\Model {
    protected $id;
    protected $libelle;
    protected $date;
    protected $avancement;
    protected $codeUseCase;

    public function columnMap()
    {
        //Les clés correspondent aux noms dans la table
        //Les valeurs aux noms dans l'application
        return array(
            'id' => 'id',
            'libelle' => 'libelle',
            'date' => 'date',
            'avancement' => 'avancement',
            'codeUseCase' => 'codeUseCase'
        );
    }

    public function initialize()
    {
        $this->belongsTo("codeUseCase", "useCase", "code");
    }
} 
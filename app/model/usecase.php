<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 09:53
 */

class usecase extends \Phalcon\Mvc\Model {
    protected $code;
    protected $nom;
    protected $poids;
    protected $avancement;
    protected $idProjet;
    protected $idDev;

    public function columnMap()
    {
        //Les clés correspondent aux noms dans la table
        //Les valeurs aux noms dans l'application
        return array(
            'code' => 'code',
            'nom' => 'nom',
            'poids' => 'poids',
            'avancement' => 'avancement',
            'idProjet' => 'idProjet',
            'idDev' => 'idDev'
        );
    }

    public function initialize()
    {
        $this->belongsTo("idDev", "user", "id");
        $this->belongsTo("idProjet", "projet", "id");
        $this->hasMany("code", "tache", "codeUseCase",array("alias"=>"taches"));
    }
} 
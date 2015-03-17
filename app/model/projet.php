<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 09:56
 */

class projet extends \Phalcon\Mvc\Model {
    protected $id;
    protected $nom;
    protected $description;
    protected $dateLancement;
    protected $dateFinPrevue;
    protected $idClient;

    public function columnMap()
    {
        //Les clés correspondent aux noms dans la table
        //Les valeurs aux noms dans l'application
        return array(
            'id' => 'id',
            'nom' => 'nom',
            'description' => 'description',
            'dateLancement' => 'dateLancement',
            'dateFinPrevue' => 'dateFinPrevue',
            'idClient' => 'idClient'
        );
    }

    public function initialize()
    {
        $this->belongsTo("idClient", "user", "id");
        $this->hasMany("id", "useCase", "idProjet",array("alias"=>"usecasesProjet"));
        $this->hasMany("id", "message", "idProjet",array("alias"=>"messagesProjet"));
    }
} 
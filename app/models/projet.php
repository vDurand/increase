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

    /**
     * @param mixed $dateFinPrevue
     */
    public function setDateFinPrevue($dateFinPrevue)
    {
        $this->dateFinPrevue = $dateFinPrevue;
    }

    /**
     * @return mixed
     */
    public function getDateFinPrevue()
    {
        return $this->dateFinPrevue;
    }

    /**
     * @param mixed $dateLancement
     */
    public function setDateLancement($dateLancement)
    {
        $this->dateLancement = $dateLancement;
    }

    /**
     * @return mixed
     */
    public function getDateLancement()
    {
        return $this->dateLancement;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

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
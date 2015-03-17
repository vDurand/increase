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

    /**
     * @param mixed $avancement
     */
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;
    }

    /**
     * @return mixed
     */
    public function getAvancement()
    {
        return $this->avancement;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $idDev
     */
    public function setIdDev($idDev)
    {
        $this->idDev = $idDev;
    }

    /**
     * @return mixed
     */
    public function getIdDev()
    {
        return $this->idDev;
    }

    /**
     * @param mixed $idProjet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->idProjet;
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

    /**
     * @param mixed $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

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
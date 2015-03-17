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
     * @param mixed $codeUseCase
     */
    public function setCodeUseCase($codeUseCase)
    {
        $this->codeUseCase = $codeUseCase;
    }

    /**
     * @return mixed
     */
    public function getCodeUseCase()
    {
        return $this->codeUseCase;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
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
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

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
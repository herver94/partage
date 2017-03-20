<?php
namespace Model;

class Categories
{
    private $IDCATEGORIE,
            $LIBELLECATEGORIE,
            $ROUTECATEGORIE,
            $PHOTOCATEGORIE,
            $CHEMIN;
    
    public function __construct(
        # : Constructeur Automatique : Google OC : 
        # TP : un système de news - Programmez en orienté objet en PHP
    
        $IDCATEGORIE,
        $LIBELLECATEGORIE,
        $ROUTECATEGORIE,
        $PHOTOCATEGORIE,
        $CHEMIN) {
        
            $this->IDCATEGORIE      = $IDCATEGORIE;
            $this->LIBELLECATEGORIE = $LIBELLECATEGORIE;
            $this->ROUTECATEGORIE   = $ROUTECATEGORIE;
            $this->PHOTOCATEGORIE   = $PHOTOCATEGORIE;
            $this->CHEMIN           = $CHEMIN;
    }
            
    /**
     * @return the $IDCATEGORIE
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return the $LIBELLECATEGORIE
     */
    public function getLIBELLECATEGORIE()
    {
        return $this->LIBELLECATEGORIE;
    }

    /**
     * @return the $ROUTECATEGORIE
     */
    public function getROUTECATEGORIE()
    {
        return $this->ROUTECATEGORIE;
    }


    public function getPHOTOCATEGORIE()
    {
        return $this->PHOTOCATEGORIE;
    }



    public function getCHEMIN()
    {
        return $this->CHEMIN;
    }



    
    
}


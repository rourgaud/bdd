<?php


class CritereLibreCandidatTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CritereLibreCandidat');
    }

    public function countValid($id) {
        $q = $this->createQuery()
                ->from('CritereLibreCandidat a')
                ->where('a.critere_libre_id = ?', $id)
                ->andWhere('a.valide = 1')
                ->count();
        return $q;
    }
}
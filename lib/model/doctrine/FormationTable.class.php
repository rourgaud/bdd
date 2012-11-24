<?php


class FormationTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Formation');
    }

    public function getByCandidats($candidats)
    {
        $q = $this->createQuery()
            ->from('Formation a')
            ->whereIn('a.candidat_id', $candidats)
            ->fetchArray();

        return $q;
    }
}
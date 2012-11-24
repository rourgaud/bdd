<?php


class CandidatTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Candidat');
    }

    public function getByIds($ids)
    {
        $q = $this->createQuery()
            ->from('Candidat a')
            ->whereIn('a.id', $ids)
            ->fetchArray();

        return $q;
    }
}
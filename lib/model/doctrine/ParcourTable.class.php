<?php


class ParcourTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Parcour');
    }

    public function getByCandidats($candidats)
    {
        $q = $this->createQuery()
            ->from('Parcour a')
            ->whereIn('a.candidat_id', $candidats)
            ->fetchArray();

        return $q;
    }

    public function countBySecteurs($secteurs)
    {
        $q = $this->createQuery()
                ->from('Parcour a')
                ->leftJoin('a.Candidat p')
                ->leftJoin('p.TableauChasse d with d.contacteLe != "0000-00-00"')
                ->whereIn('a.secteur', $secteurs)
                ->groupBy('a.candidat_id')
                ->count();

        return $q;
    }

    public function countSocieteBySecteurs($secteurs)
    {
        $q = $this->createQuery()
                ->from('Parcour a')
                ->whereIn('a.secteur', $secteurs)
                ->groupBy('a.societe')
                ->count();

        return $q;
    }

    public function countSocieteByCandidats($candidats)
    {
        $q = $this->createQuery()
                ->from('Parcour a')
                ->whereIn('a.candidat_id', $candidats)
                ->groupBy('a.societe')
                ->count();

        return $q;
    }
}
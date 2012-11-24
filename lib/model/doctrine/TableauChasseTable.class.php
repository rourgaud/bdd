<?php


class TableauChasseTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TableauChasse');
    }

	/*
	*
	*	getcandidatsByMissions()
	*	Requette qui renvoie toutes les id des candidats qui correspondent aux missions et qui ont été contactés
	*	in:		tableau de int
	*	out:	tableau de int
	*
	*/
	public function getcandidatsByMissions($missions)
	{
		$q = $this->createQuery()
			->select('a.candidat_id')
			->from('TableauChasse a')
                        ->whereIn('a.mission_id', $missions)
                        ->andWhere('a.contacteLe != ?', '0000-00-00');
		
		foreach($q->fetchArray() as $candidat)
		{
			$candidats[] = $candidat['candidat_id'];
		}
		
		return $candidats;
	}

	public function countCandidatsMissions($mission_id)
	{
		$q = $this->createQuery()
			->from('TableauChasse a')
			->where('a.mission_id = ?', $mission_id);
		return $q->count();
	}

        public function countInOutBu($mission_id) {
                $inoutbu = array();

                $q = $this->createQuery()
			->from('TableauChasse a')
			->where('a.mission_id = ?', $mission_id)
                        ->andWhere('a.ctrl_statut_id= ?', 2)
                        ->count();
                $inoutbu['IN'] = $q;

                $q = $this->createQuery()
			->from('TableauChasse a')
			->where('a.mission_id = ?', $mission_id)
                        ->andWhere('a.ctrl_statut_id= ?', 4)
                        ->count();
                $inoutbu['OUT'] = $q;

                $q = $this->createQuery()
			->from('TableauChasse a')
			->where('a.mission_id = ?', $mission_id)
                        ->andWhere('a.ctrl_statut_id= ?', 3)
                        ->count();
                $inoutbu['BU'] = $q;

                return $inoutbu;
        }
}
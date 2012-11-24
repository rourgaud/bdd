<?php


class MissionTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Mission');
    }
	
	public function getIntitulePostes()
	{
		$q = new Doctrine_RawSql();

		$q->select('{a.intituleposte}')
			->from('mission a')
			->addComponent('a', 'mission')
			->distinct(true)
			->where('a.intituleposte != ?', '')
			->orderBy('a.intituleposte');
		
		$results = $q->execute(array(),Doctrine::HYDRATE_NONE);
		$intitulepostes = array();
		
		foreach ($results as $result) {
			$intitulepostes[$result['0']] = $result['0'];
		}
		return $intitulepostes;
	}
	
	/*
	*
	*	getMissionsByIntitulepostes()
	*	Requette qui renvoie toutes les id des missions qui corresspondent a l'intitulé des postes
	*	in:	tableau de string
	*	out:	tableau de int
	*
	*/
	public function getMissionsByIntitulepostes($intituleposts)
	{
		$q = $this->createQuery()
			->select('a.id')
			->from('Mission a')
			->whereIn('a.intituleposte', $intituleposts);
		
		foreach($q->fetchArray() as $mission)
		{
			$missions[] = $mission['id'];
		}
		
		return $missions;
	}

        public function countBySecteurs($secteurs)
        {
            $q = $this->createQuery()
                    ->from('Mission a')
                    ->whereIn('a.secteur', $secteurs)
                    ->count();

            return $q;
        }

        public function getIntituleposteBySecteurs($secteurs)
        {
            $q = $this->createQuery()
                    ->select('a.intituleposte')
                    ->from('Mission a')
                    //->addComponent('a', 'Mission')
                    //->distinct(true)
                    ->whereIn('a.secteur', $secteurs)
                    ->orderBy('a.intituleposte')
                    ->groupBy('a.intituleposte')
                    ->fetchArray();

            $intitulepostes = array();

            foreach ($q as $i) {
                    $intitulepostes[] = $i['intituleposte'];
            }

            return $intitulepostes;
        }

        public function getClientBySecteurs($secteurs)
        {

            $q = $this->createQuery()
                    ->select('a.client')
                    ->from('Mission a')
                    //->addComponent('a', 'Mission')
                    //->distinct(true)
                    ->whereIn('a.secteur', $secteurs)
                    ->orderBy('a.client')
                    ->groupBy('a.client')
                    ->fetchArray();

            $clients = array();

            foreach ($q as $i) {
                    $clients[] = $i['client'];
            }

            return $clients;
        }

        public function getRemMinBySecteurs($secteurs)
        {

            $q = $this->createQuery()
                    ->select('MIN(a.remunerationMin)')
                    ->from('Mission a')
                    ->whereIn('a.secteur', $secteurs)
                    ->andWhere('a.remunerationMin != 0')
                    ->fetchArray();
            return $q;
        }

        public function getRemMaxBySecteurs($secteurs)
        {

            $q = $this->createQuery()
                    ->select('MAX(a.remunerationMax)')
                    ->from('Mission a')
                    ->whereIn('a.secteur', $secteurs)
                    ->fetchArray();
            return $q;
        }
}
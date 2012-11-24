<?php

/**
 * stat actions.
 *
 * @package    opsearch-app
 * @subpackage stat
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class statActions extends sfActions
{
	/**
	* Executes index action
	*
	* @param sfRequest $request A request object
	*/
	public function executeIndex(sfWebRequest $request)
	{
		$this->plaquetteMetiers = Doctrine::getTable('PlaquetteMetier')->findBy('saved', true);
                $this->plaquetteSecteurs = Doctrine::getTable('PlaquetteSecteur')->findBy('saved', true);
                $this->reportingMissions = Doctrine::getTable('ReportingMission')->findBy('saved', true);
	}
	
	/**
	* Executes plaquetteMetier action
	*
	* @param sfRequest $request A request object
	*/
	public function executePlaquetteMetier(sfWebRequest $request)
	{
		$this->form = new PlaquetteMetierForm();
		
		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('plaquette_metier'));
			if ($this->form->isValid())
			{
				$values = $this->form->getValues();
				$myPlaquette = $this->form->save();
				
				$myPlaquette->setIntitulePost(implode(';', $values['intitule_post']));
				$myPlaquette->save();
				
				$this->redirect('@plaquetteMetierPreview?id='.$myPlaquette->getId());
			}
		}
	}
	
	/**
	* Executes plaquetteMetierPreview action
	*
	* @param sfRequest $request A request object
	*/
	public function executePlaquetteMetierPreview(sfWebRequest $request)
	{
		$this->plaquetteMetier = Doctrine::getTable('PlaquetteMetier')->find($request->getParameter('id'));
		$this->plaquetteMetier->initData();

                $this->candidatmax = Doctrine::getTable('Candidat')->find($this->plaquetteMetier->getIdCandMax());
                $this->candidatmin = Doctrine::getTable('Candidat')->find($this->plaquetteMetier->getIdCandMin());
	}

        /**
	* Executes plaquetteSecteur action
	*
	* @param sfRequest $request A request object
	*/
	public function executePlaquetteSecteur(sfWebRequest $request)
	{
		$this->form = new PlaquetteSecteurForm();

		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('plaquette_secteur'));
			if ($this->form->isValid())
			{
				$values = $this->form->getValues();
				$myPlaquette = $this->form->save();

				$myPlaquette->setSecteur(implode(';', $values['secteur']));
				$myPlaquette->save();

				$this->redirect('@plaquetteSecteurPreview?id='.$myPlaquette->getId());
			}
		}
	}

        /**
	* Executes plaquetteSecteurPreview action
	*
	* @param sfRequest $request A request object
	*/
	public function executePlaquetteSecteurPreview(sfWebRequest $request)
	{
		$this->plaquetteSecteur = Doctrine::getTable('PlaquetteSecteur')->find($request->getParameter('id'));
		$this->plaquetteSecteur->initData();

                //$this->test = $this->plaquetteSecteur->initData();
	}

        /**
	* Executes reportingMission action
	*
	* @param sfRequest $request A request object
	*/
	public function executeReportingMission(sfWebRequest $request)
	{
		$this->form = new ReportingMissionForm();

		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('reporting_mission'));
			if ($this->form->isValid())
			{
				$myPlaquette = $this->form->save();
				$this->redirect('@reportingMissionPreview?id='.$myPlaquette->getId());
			}
		}
	}

        /**
	* Executes reportingMissionPreview action
	*
	* @param sfRequest $request A request object
	*/
	public function executeReportingMissionPreview(sfWebRequest $request)
	{
		$this->reportingMission = Doctrine::getTable('ReportingMission')->find($request->getParameter('id'));
                $this->reportingMission->initData();

                $this->mission = $this->reportingMission->getMission();

                $this->candidatmax = Doctrine::getTable('Candidat')->find($this->reportingMission->getIdCandMax());
                $this->candidatmin = Doctrine::getTable('Candidat')->find($this->reportingMission->getIdCandMin());

                $this->test = $this->reportingMission->initData();
	}
}

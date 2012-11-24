<?php

/**
 * PlaquetteMetier form.
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PlaquetteMetierForm extends BasePlaquetteMetierForm
{
	public function configure()
	{
		unset(
			$this['nb_candidat'],
			$this['rem_moy'],
			$this['rem_max'],
			$this['id_cand_max'],
			$this['rem_min'],
			$this['id_cand_min'],
			$this['secteur_pourcent'],
			$this['formation_pourcent'],
			$this['loc_pourcent'],
			$this['age_moy'],
			$this['age_min'],
			$this['age_max'],
			$this['commentaire'],
			$this['aff_intitule_post'],
			$this['utilisateur_id'],
			$this['created_at'],
			$this['updated_at']
		);
		
		$this->widgetSchema->setLabels(array(
			'aff_intitule_post'         => 'Intitulé du poste',
			'aff_nb_candidat'           => 'Nombre de candidats',
			'aff_rem_moy'               => 'Rémunération moyenne',
			'aff_rem_max'               => 'Rémunération maximum',
			'aff_age_cand_max'          => 'Age du candidat',
			'aff_formation_cand_max'    => 'Formation du candidat',
			'aff_societe_prov_cand_max' => 'Société de provenance',
			'aff_rem_min'               => 'Rémunération minimum',
			'aff_age_cand_min'          => 'Age du candidat',
			'aff_formation_cand_min'    => 'Formation du candidat',
			'aff_societe_prov_cand_min' => 'Société de provenance',
			'aff_secteur_pourcent'      => 'Secteur de provenance (en %)',
			'aff_formation_pourcent'    => 'Formation (en %)',
			'aff_loc_pourcent'          => 'Localisation Géographique (en %)',
			'aff_age_moy'               => 'Age moyen',
			'aff_age_min'               => 'Age minimum',
			'aff_age_max'               => 'age maximum',
			'aff_commentaire'           => 'Commentaire',
			'taux_reussite'             => 'Taux de reussite OPSEARCH'
		));
		
		$this->widgetSchema['intitule_post'] = new sfWidgetFormChoice(array(
			'choices'  => Doctrine_Core::getTable('Mission')->getIntitulePostes(),
			'multiple' => true,
		));
		$this->validatorSchema['intitule_post'] = new sfValidatorChoice(array(
			'choices' => Doctrine_Core::getTable('Mission')->getIntitulePostes(),
			'multiple' => true,
		));
	}
}

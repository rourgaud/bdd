<?php

/**
 * PlaquetteSecteur form.
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PlaquetteSecteurForm extends BasePlaquetteSecteurForm
{
    public function configure()
    {
        unset(
            $this['nb_candidat'],
            $this['nb_societe'],
            $this['nb_mission'],
            $this['poste'],
            $this['client'],
            $this['mediane_salariale'],
            $this['loc_pourcent'],
            $this['aff_secteur'],
            $this['saved'],
            $this['utilisateur_id'],
            $this['created_at'],
            $this['updated_at']
        );

        $this->widgetSchema->setLabels(array(
            'taux_reussite' => 'Taux de reussite OPSEARCH',
            'aff_nb_candidat' => 'Nombre de candidats approchés',
            'aff_nb_societe'  => 'Nombre de sociétés',
            'aff_nb_mission'  => 'Nomre de missions',
            'aff_poste'       => 'liste des postes',
            'client'          => 'liste des clients',
            'aff_mediane_salariale' => 'Médiane salariale',
            'aff_loc_pourcent' => 'Localisation (en %)'
        ));

        $this->widgetSchema['secteur'] = new sfWidgetFormChoice(array(
            'choices'  => CtrlSecteur::getAllSecteur(),
            'multiple' => true,
        ));
        $this->validatorSchema['secteur'] = new sfValidatorChoice(array(
            'choices' => CtrlSecteur::getAllSecteur(),
            'multiple' => true,
        ));
    }
}

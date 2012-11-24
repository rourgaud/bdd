CREATE TABLE affecte_mission (mission_id INT, utilisateur_id INT, PRIMARY KEY(mission_id, utilisateur_id)) ENGINE = INNODB;
CREATE TABLE candidat (id INT AUTO_INCREMENT, civilite_id INT DEFAULT 0 NOT NULL, nom VARCHAR(255) DEFAULT '' NOT NULL, prenom VARCHAR(255) DEFAULT '' NOT NULL, tellignedirecte VARCHAR(50) DEFAULT '' NOT NULL, telstandard VARCHAR(255) DEFAULT '' NOT NULL, telmobilepro VARCHAR(255) DEFAULT '' NOT NULL, telmobileperso VARCHAR(255) DEFAULT '' NOT NULL, teldomicile VARCHAR(255) DEFAULT '' NOT NULL, email VARCHAR(255) DEFAULT '' NOT NULL, datenaissance DATE DEFAULT '0000-00-00' NOT NULL, dateexperience DATE DEFAULT '0000-00-00' NOT NULL, commentaire VARCHAR(255) DEFAULT '' NOT NULL, commentairechargerecherche VARCHAR(255) DEFAULT '' NOT NULL, competencesinformatiques VARCHAR(255) DEFAULT '' NOT NULL, cv VARCHAR(255) DEFAULT '' NOT NULL, dossier VARCHAR(255) DEFAULT '' NOT NULL, source VARCHAR(255) DEFAULT '' NOT NULL, place TINYINT DEFAULT 0 NOT NULL, valid TINYINT DEFAULT '1' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE couleurs (id VARCHAR(255), valeur VARCHAR(255) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE critere_libre (id INT AUTO_INCREMENT, libelle VARCHAR(255) DEFAULT '' NOT NULL, mission_id INT DEFAULT 0 NOT NULL, INDEX mission_id_idx (mission_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE critere_libre_candidat (candidat_id INT, critere_libre_id INT, valide TINYINT DEFAULT 0 NOT NULL, PRIMARY KEY(candidat_id, critere_libre_id)) ENGINE = INNODB;
CREATE TABLE ctrl_civilite (id INT AUTO_INCREMENT, libelle VARCHAR(25) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ctrl_fonction (fonction VARCHAR(255), PRIMARY KEY(fonction)) ENGINE = INNODB;
CREATE TABLE ctrl_langue (langue VARCHAR(255), PRIMARY KEY(langue)) ENGINE = INNODB;
CREATE TABLE ctrl_niveau_formation (niveauformation VARCHAR(255), PRIMARY KEY(niveauformation)) ENGINE = INNODB;
CREATE TABLE ctrl_secteur (secteur VARCHAR(255), PRIMARY KEY(secteur)) ENGINE = INNODB;
CREATE TABLE ctrl_source (source VARCHAR(255), PRIMARY KEY(source)) ENGINE = INNODB;
CREATE TABLE ctrl_statut (id INT AUTO_INCREMENT, libelle VARCHAR(25) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ctrl_statut_mission (id INT AUTO_INCREMENT, libelle VARCHAR(25) DEFAULT '' NOT NULL, ordre INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ctrl_zone_geographique (zonegeographique VARCHAR(255), PRIMARY KEY(zonegeographique)) ENGINE = INNODB;
CREATE TABLE feuille_check (id INT AUTO_INCREMENT, critere VARCHAR(255) DEFAULT '' NOT NULL, valeur VARCHAR(255) DEFAULT '' NOT NULL, ordre INT DEFAULT '0' NOT NULL, mission_id INT DEFAULT 0 NOT NULL, INDEX mission_id_idx (mission_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE formation (id INT AUTO_INCREMENT, candidat_id INT DEFAULT 0 NOT NULL, niveauformation VARCHAR(255) DEFAULT '' NOT NULL, ecole VARCHAR(255) DEFAULT '' NOT NULL, ville VARCHAR(255) DEFAULT '' NOT NULL, pays VARCHAR(255) DEFAULT '' NOT NULL, datediplome DATE DEFAULT '0000-00-00' NOT NULL, commentaire VARCHAR(255) DEFAULT '' NOT NULL, INDEX candidat_id_idx (candidat_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE groupe (id INT AUTO_INCREMENT, libelle VARCHAR(255) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE langue_candidat (candidat_id INT, langue VARCHAR(255), PRIMARY KEY(candidat_id, langue)) ENGINE = INNODB;
CREATE TABLE mission (id INT AUTO_INCREMENT, client VARCHAR(255) DEFAULT '' NOT NULL, intituleposte VARCHAR(255) DEFAULT '' NOT NULL, secteur VARCHAR(255) DEFAULT '' NOT NULL, zonegeographique VARCHAR(255) DEFAULT '' NOT NULL, fonction VARCHAR(255) DEFAULT '' NOT NULL, niveauformation VARCHAR(255) DEFAULT '' NOT NULL, remunerationmin FLOAT(18, 2) DEFAULT 0 NOT NULL, remunerationmax FLOAT(18, 2) DEFAULT 0 NOT NULL, agemin INT DEFAULT 0 NOT NULL, agemax INT DEFAULT 0 NOT NULL, experiencemin INT DEFAULT 0 NOT NULL, experiencemax INT DEFAULT 0 NOT NULL, datedebut DATE DEFAULT '0000-00-00' NOT NULL, datefin DATE DEFAULT '0000-00-00' NOT NULL, nbcandidats INT DEFAULT '0' NOT NULL, commentaire VARCHAR(255) DEFAULT '' NOT NULL, statut_mission_id INT DEFAULT '1' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mots (mot VARCHAR(50), PRIMARY KEY(mot)) ENGINE = INNODB;
CREATE TABLE mots_candidat (id INT AUTO_INCREMENT, mot VARCHAR(50) DEFAULT '' NOT NULL, candidat_id INT DEFAULT 0 NOT NULL, poids INT DEFAULT 0 NOT NULL, INDEX candidat_id_idx (candidat_id), INDEX mot_idx (mot), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mots_formation (id INT AUTO_INCREMENT, mot VARCHAR(50) DEFAULT '' NOT NULL, formation_id INT DEFAULT 0 NOT NULL, poids INT DEFAULT 0 NOT NULL, INDEX formation_id_idx (formation_id), INDEX mot_idx (mot), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mots_parcour (id INT AUTO_INCREMENT, mot VARCHAR(50) DEFAULT '' NOT NULL, parcour_id INT DEFAULT 0 NOT NULL, poids INT DEFAULT 0 NOT NULL, INDEX parcour_id_idx (parcour_id), INDEX mot_idx (mot), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE parcour (id INT AUTO_INCREMENT, candidat_id INT DEFAULT 0 NOT NULL, societe VARCHAR(255) DEFAULT '' NOT NULL, effectifsociete INT DEFAULT 0 NOT NULL, zonegeographique VARCHAR(255) DEFAULT '' NOT NULL, fonction VARCHAR(255) DEFAULT '' NOT NULL, intitule VARCHAR(255) DEFAULT '' NOT NULL, secteur VARCHAR(255) DEFAULT '' NOT NULL, remuneration FLOAT(18, 2) DEFAULT 0 NOT NULL, detailremuneration VARCHAR(255) DEFAULT '' NOT NULL, datedebut DATE DEFAULT '0000-00-00' NOT NULL, datefin DATE DEFAULT '0000-00-00' NOT NULL, commentaire VARCHAR(255) DEFAULT '' NOT NULL, INDEX candidat_id_idx (candidat_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE plaquette_metier (id BIGINT AUTO_INCREMENT, intitule_post LONGTEXT NOT NULL, nb_candidat BIGINT, rem_moy BIGINT, rem_max BIGINT, id_cand_max BIGINT, rem_min BIGINT, id_cand_min BIGINT, secteur_pourcent BIGINT, formation_pourcent LONGTEXT, loc_pourcent LONGTEXT, age_moy BIGINT, age_min BIGINT, age_max BIGINT, taux_reussite BIGINT, commentaire LONGTEXT, aff_intitule_post TINYINT(1) DEFAULT '1', aff_nb_candidat TINYINT(1) DEFAULT '1', aff_rem_moy TINYINT(1) DEFAULT '1', aff_rem_max TINYINT(1) DEFAULT '1', aff_age_cand_max TINYINT(1) DEFAULT '1', aff_formation_cand_max TINYINT(1) DEFAULT '1', aff_societe_prov_cand_max TINYINT(1) DEFAULT '1', aff_rem_min TINYINT(1) DEFAULT '1', aff_age_cand_min TINYINT(1) DEFAULT '1', aff_formation_cand_min TINYINT(1) DEFAULT '1', aff_societe_prov_cand_min TINYINT(1) DEFAULT '1', aff_secteur_pourcent TINYINT(1) DEFAULT '1', aff_formation_pourcent TINYINT(1) DEFAULT '1', aff_loc_pourcent TINYINT(1) DEFAULT '1', aff_age_moy TINYINT(1) DEFAULT '1', aff_age_min TINYINT(1) DEFAULT '1', aff_age_max TINYINT(1) DEFAULT '1', aff_commentaire TINYINT(1) DEFAULT '1', utilisateur_id BIGINT, saved TINYINT(1) DEFAULT '0', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX utilisateur_id_idx (utilisateur_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE plaquette_secteur (id BIGINT AUTO_INCREMENT, secteur LONGTEXT NOT NULL, nb_candidat BIGINT, nb_societe BIGINT, nb_mission BIGINT, poste LONGTEXT, client LONGTEXT, mediane_salariale BIGINT, loc_pourcent LONGTEXT, taux_reussite BIGINT, aff_secteur TINYINT(1) DEFAULT '1', aff_nb_candidat TINYINT(1) DEFAULT '1', aff_nb_societe TINYINT(1) DEFAULT '1', aff_nb_mission TINYINT(1) DEFAULT '1', aff_poste TINYINT(1) DEFAULT '1', aff_client TINYINT(1) DEFAULT '1', aff_mediane_salariale TINYINT(1) DEFAULT '1', aff_loc_pourcent TINYINT(1) DEFAULT '1', aff_taux_reussite TINYINT(1) DEFAULT '1', utilisateur_id BIGINT, saved TINYINT(1) DEFAULT '0', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE reporting_mission (id BIGINT AUTO_INCREMENT, mission_id BIGINT, nb_candidat BIGINT, nb_societe BIGINT, rem_moy BIGINT, rem_max BIGINT, id_cand_max BIGINT, rem_min BIGINT, id_cand_min BIGINT, formation_pourcent LONGTEXT, age_graph LONGTEXT, secteur_pourcent LONGTEXT, loc_pourcent LONGTEXT, sexe_pourcent LONGTEXT, inoutbu_pourcent LONGTEXT, mediane_salariale BIGINT, rap_exp_rem LONGTEXT, critere_spe LONGTEXT, aff_mission_id TINYINT(1) DEFAULT '1', aff_nb_candidat TINYINT(1) DEFAULT '1', aff_nb_societe TINYINT(1) DEFAULT '1', aff_rem_moy TINYINT(1) DEFAULT '1', aff_rem_max TINYINT(1) DEFAULT '1', aff_age_cand_max TINYINT(1) DEFAULT '1', aff_formation_cand_max TINYINT(1) DEFAULT '1', aff_societe_prov_cand_max TINYINT(1) DEFAULT '1', aff_rem_min TINYINT(1) DEFAULT '1', aff_age_cand_min TINYINT(1) DEFAULT '1', aff_formation_cand_min TINYINT(1) DEFAULT '1', aff_societe_prov_cand_min TINYINT(1) DEFAULT '1', aff_formation_pourcent TINYINT(1) DEFAULT '1', aff_age_graph TINYINT(1) DEFAULT '1', aff_secteur_pourcent TINYINT(1) DEFAULT '1', aff_loc_pourcent TINYINT(1) DEFAULT '1', aff_sexe TINYINT(1) DEFAULT '1', aff_inoutbu_pourcent TINYINT(1) DEFAULT '1', aff_mediane_salariale TINYINT(1) DEFAULT '1', aff_rap_exp_rem TINYINT(1) DEFAULT '1', aff_critere_spe TINYINT(1) DEFAULT '1', utilisateur_id BIGINT, saved TINYINT(1) DEFAULT '0', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX mission_id_idx (mission_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE tableau_chasse (mission_id INT, candidat_id INT, contactepar VARCHAR(255) DEFAULT '' NOT NULL, contactele DATE DEFAULT '0000-00-00' NOT NULL, commentairecontact VARCHAR(255) DEFAULT '' NOT NULL, rencontrepar VARCHAR(255) DEFAULT '' NOT NULL, rencontrele DATE DEFAULT '0000-00-00' NOT NULL, commentairerencontre VARCHAR(255) DEFAULT '' NOT NULL, commentaire VARCHAR(255) DEFAULT '' NOT NULL, criteres_specifiques VARCHAR(255) DEFAULT '' NOT NULL, ctrl_statut_id INT DEFAULT 0 NOT NULL, shortliste TINYINT DEFAULT 0 NOT NULL, coutextesociete VARCHAR(6) DEFAULT '000000' NOT NULL, coufondsociete VARCHAR(6) DEFAULT 'ffffff' NOT NULL, coutextecandidat VARCHAR(6) DEFAULT '000000' NOT NULL, coufondcandidat VARCHAR(6) DEFAULT 'ffffff' NOT NULL, PRIMARY KEY(mission_id, candidat_id)) ENGINE = INNODB;
CREATE TABLE tache (id INT AUTO_INCREMENT, titre VARCHAR(255) DEFAULT '' NOT NULL, commentaire VARCHAR(255) DEFAULT '' NOT NULL, affecte_le DATE DEFAULT '0000-00-00' NOT NULL, affecte_a_id INT DEFAULT 0 NOT NULL, affecte_par_id INT DEFAULT 0 NOT NULL, INDEX affecte_a_id_idx (affecte_a_id), INDEX affecte_par_id_idx (affecte_par_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user_group (utilisateur_id INT, groupe_id INT, PRIMARY KEY(utilisateur_id, groupe_id)) ENGINE = INNODB;
CREATE TABLE utilisateur (id INT AUTO_INCREMENT, username VARCHAR(255) DEFAULT '' NOT NULL, password VARCHAR(255) DEFAULT '' NOT NULL, nom VARCHAR(255) DEFAULT '' NOT NULL, prenom VARCHAR(255) DEFAULT '' NOT NULL, createdat DATE DEFAULT '0000-00-00' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE affecte_mission ADD CONSTRAINT affecte_mission_utilisateur_id_utilisateur_id FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id);
ALTER TABLE affecte_mission ADD CONSTRAINT affecte_mission_mission_id_mission_id FOREIGN KEY (mission_id) REFERENCES mission(id);
ALTER TABLE critere_libre ADD CONSTRAINT critere_libre_mission_id_mission_id FOREIGN KEY (mission_id) REFERENCES mission(id);
ALTER TABLE critere_libre_candidat ADD CONSTRAINT critere_libre_candidat_critere_libre_id_critere_libre_id FOREIGN KEY (critere_libre_id) REFERENCES critere_libre(id);
ALTER TABLE critere_libre_candidat ADD CONSTRAINT critere_libre_candidat_candidat_id_candidat_id FOREIGN KEY (candidat_id) REFERENCES candidat(id);
ALTER TABLE feuille_check ADD CONSTRAINT feuille_check_mission_id_mission_id FOREIGN KEY (mission_id) REFERENCES mission(id);
ALTER TABLE formation ADD CONSTRAINT formation_candidat_id_candidat_id FOREIGN KEY (candidat_id) REFERENCES candidat(id);
ALTER TABLE langue_candidat ADD CONSTRAINT langue_candidat_langue_ctrl_langue_langue FOREIGN KEY (langue) REFERENCES ctrl_langue(langue);
ALTER TABLE langue_candidat ADD CONSTRAINT langue_candidat_candidat_id_candidat_id FOREIGN KEY (candidat_id) REFERENCES candidat(id);
ALTER TABLE mots_candidat ADD CONSTRAINT mots_candidat_mot_mots_mot FOREIGN KEY (mot) REFERENCES mots(mot);
ALTER TABLE mots_candidat ADD CONSTRAINT mots_candidat_candidat_id_candidat_id FOREIGN KEY (candidat_id) REFERENCES candidat(id);
ALTER TABLE mots_formation ADD CONSTRAINT mots_formation_mot_mots_mot FOREIGN KEY (mot) REFERENCES mots(mot);
ALTER TABLE mots_formation ADD CONSTRAINT mots_formation_formation_id_formation_id FOREIGN KEY (formation_id) REFERENCES formation(id);
ALTER TABLE mots_parcour ADD CONSTRAINT mots_parcour_parcour_id_parcour_id FOREIGN KEY (parcour_id) REFERENCES parcour(id);
ALTER TABLE mots_parcour ADD CONSTRAINT mots_parcour_mot_mots_mot FOREIGN KEY (mot) REFERENCES mots(mot);
ALTER TABLE parcour ADD CONSTRAINT parcour_candidat_id_candidat_id FOREIGN KEY (candidat_id) REFERENCES candidat(id);
ALTER TABLE plaquette_metier ADD CONSTRAINT plaquette_metier_utilisateur_id_utilisateur_id FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE;
ALTER TABLE reporting_mission ADD CONSTRAINT reporting_mission_mission_id_mission_id FOREIGN KEY (mission_id) REFERENCES mission(id) ON DELETE CASCADE;
ALTER TABLE tableau_chasse ADD CONSTRAINT tableau_chasse_mission_id_mission_id FOREIGN KEY (mission_id) REFERENCES mission(id);
ALTER TABLE tableau_chasse ADD CONSTRAINT tableau_chasse_candidat_id_candidat_id FOREIGN KEY (candidat_id) REFERENCES candidat(id);
ALTER TABLE tache ADD CONSTRAINT tache_affecte_par_id_utilisateur_id FOREIGN KEY (affecte_par_id) REFERENCES utilisateur(id);
ALTER TABLE tache ADD CONSTRAINT tache_affecte_a_id_utilisateur_id FOREIGN KEY (affecte_a_id) REFERENCES utilisateur(id);
ALTER TABLE user_group ADD CONSTRAINT user_group_utilisateur_id_utilisateur_id FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id);
ALTER TABLE user_group ADD CONSTRAINT user_group_groupe_id_groupe_id FOREIGN KEY (groupe_id) REFERENCES groupe(id);

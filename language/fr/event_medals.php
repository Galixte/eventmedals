<?php

/**
*
* Event medals extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2014
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
		exit;
}
if (empty($lang) || !is_array($lang))
{
		$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_EVENT_MEDALS'	=>	'Médailles d’événements',
	'ACP_EVENT_MEDALS_ADD'	=>	'Ajouter des médailles d’événements',
	'ACP_EVENT_MEDALS_EDIT'	=>	'Modifier des médailles d’événements',
	'ACP_EVENT_MEDALS_GRP'	=>	'Médailles d’événements',

	'MEDALS_TITLE'	=> 'Médailles d’événements',
	'MEDALS_ADD_SCRIPT'	=>	'Script d’ajout de médailles d’événements',
	'MEDALS_ADD_STEP_ONE'	=> 'Étape 1 : Liste d’utilisateurs',
	'MEDALS_USERS_LIST'	=>	'Liste d’utilisateurs',
	'MEDALS_USERS_LIST_HINT'	=> 'Ajouter chaque nom d’utilisateur sur une nouvelle ligne.',
	'MEDALS_ADD_STEP_TWO'	=>	'Étape 2 : Type de médailles d’événements.',
	'WARNING'	=>	'Attention !',
	'INFO'	=>	'Information',
	'SUCCESS_ADD_INFO'	=>	'Les médailles d’événements ont été ajoutées avec succès',
	'BACK'	=> '« Retour à la page précédente',
	'USER'	=>	'Utilisateur(s) : ',
	'EVENT'	=>	'Évènement',
	'NOT_EXISTENT'	=>	'non existants',
	'CORRECT_WARNING_ONE'	=>	'Utiliser le bouton retour pour revenir et modifier le nom d’utilisateur ou ajouter manuellement l’utilisateur.',
	'CORRECT_WARNING_THREE'	=>	'Utiliser le bouton retour pour revenir et corriger.',
	'MEDAL_TYPE'	=>	'Type de médaille d’événement :',
	'MEDAL_TYPE_ONE'	=> 'Organisateur',
	'MEDAL_TYPE_TWO'	=> 'Participant',
	'MEDAL_TYPE_THREE'	=> 'S’enfuir',
	'MEDAL_TYPE_FOUR'	=> 'N’est pas le bienvenu !',
	'MEDALS_ADD_STEP_THREE'	=> 'Étape 3 : Dates et images personnalisées.',

	'MEDALS_EDIT_SCRIPT'	=>	'Script pour modifier les évènements !',
	'MEDALS_EDIT_STEP_ONE'	=>	'Étape 1 : Choisir l’utilisateur ou l’évènement que vous souhaitez modifier !',
	'MEDALS_USER_SELECT'	=>	'Choisir l’utilisateur',
	'MEDALS_EVENT_SELECT'	=>	'Choisir l’évènement',
	'MEDALS_SELECT_TYPE'	=>	'Que changerez-vous ?<br />',
	'MEDALS_SELECT_TYPE_EXPLENATION'	=>	'Choisir le type de changement que vous faites - de l’événement ou de l’utilisateur.',
	'MEDALS_EDIT_STEP_TWO_EVENT'	=>	'Étape 2 : Choisir le changement pour l’événement.',
	'MEDALS_EDIT_STEP_TWO_USER'	=>	'Étape 2 : Choisir le changement pour l’utilisateur.',
	'MEDAL_DELETE'	=>	'Retirer les médailles d’événements',
	'SUCCESS_EDIT_INFO'	=>	'Les médailles d’événements ont été modifiées avec succès !',

	'DATE'	=> 'Date :',
	'M_JAN'	=>	'Janvier',
	'M_FEB'	=>	'Février',
	'M_MAR'	=>	'Mars',
	'M_APR'	=>	'Avril',
	'M_MAY'	=>	'Mai',
	'M_JUN'	=>	'Juin',
	'M_JUL'	=>	'Juillet',
	'M_AUG'	=>	'Aout',
	'M_SEP'	=>	'Septembre',
	'M_OCT'	=>	'Octobre',
	'M_NOV'	=>	'Novembre',
	'M_DEC'	=>	'Décembre',
	'TOPIC_NUMBER'	=>	'ID du sujet :',
	'IMAGE_PATH'	=> 'Chemin des images personnalisées :',

	'ERR_DAY_NOT_NUM'	=>	'Vous devez savoir que le jour doit être un nombre, entendu ?',
	'ERR_DAY_NOT_IN_RANGE'	=>	'Il n’y a pas ce jour dans le mois !',
	'ERR_YEAR_NOT_NUM'	=> 'Aucune année chiffrée ?',
	'ERR_DATE_ERR'	=> 'La date est erronée ...',
	'ERR_TOPIC_ERR'	=> 'Non ! Il n’y a pas d’ID de sujet comme celui que vous avez fourni',
	'ERR_DUPLICATE_MEDAL'	=> 'Il y a déjà une telle médaille. Revenez en arrière et vérifiez la liste !',
	'ERR_NO_MEDALS'	=> 'Il n’y a aucune médaille. Veuillez en ajouter quelques-unes de sorte de pouvoir les modifier !',
	'ERR_NO_USER'	=> 'L’utilisateur n’existe pas',
	'ERR_USER_NO_MEDALS'	=> 'L’utilisateur sélectionné n’a pas de médailles',

	'NONE'	=>	'Aucune',
	'NOT_ENEMY'	=>	'Tous sauf les ennemis',
	'SPECIAL_FRIENDS'	=> 'Des amis spéciaux',

	'ACL_U_EVENT_ADD'	=> 'Ajouter des médailles d’événements',
	'ACL_U_EVENT_MODIFY'	=> 'Modifier des médailles d’événements',
));
<?php
/**
*
* gallery [Dutch]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
*
**/

/**
* DO NOT CHANGE
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
	'ADD_UPLOAD_FIELD'				=> 'Voeg meer upload velden toe',
	'ALBUM'							=> 'Album',
	'ALBUM_IS_CATEGORY'				=> 'Het album waar je heen gegaan bent is een categoriealbum..<br />Je kan niet uploaden naar categorieën.',
	'ALBUM_LOCKED'					=> 'Gesloten',
	'ALBUM_NAME'					=> 'Albumnaam',
	'ALBUM_NOT_EXIST'				=> 'Dit album bestaat niet',
	'ALBUM_PERMISSIONS'				=> 'Album Permissies',
	'ALBUM_REACHED_QUOTA'			=> 'Dit album heeft het aantal afbeeldingen dat geupload mag worden bereikt, je kan geen nieuwe afbeeldingen uploaden.<br />Neem contact op met de beheerder voor meer informatie.',
	'ALBUM_UPLOAD_NEED_APPROVAL'		=> 'Je afbeeldingen zijn succesvol geüpload.<br /><br />Je afbeeldingen moeten eerst goedgekeurd worden door een beheerder of moderator voordat deze zichtbaar zijn voor het publiek.',
	'ALBUM_UPLOAD_NEED_APPROVAL_ERROR'	=> 'Sommige afbeeldingen zijn succesvol geüpload.<br /><br />Je afbeeldingen moeten eerst goedgekeurd worden door een beheerder of moderator voordat deze zichtbaar zijn voor het publiek.<br /><br /><p class="error">%s</p>',
	'ALBUM_UPLOAD_SUCCESSFUL'		=> 'Je afbeeldingen zijn succesvol geüpload.',
	'ALBUM_UPLOAD_SUCCESSFUL_ERROR'	=> 'Sommige afbeeldingen zijn succesvol geüpload.<br /><br /><span class="error">%s</span>',
	'ALBUMS_MARKED'					=> 'Alle albums zijn als gelezen gemarkeerd.',
	'ALL'							=> 'Alle',
	'ALL_IMAGES'					=> 'Alle afbeeldingen',
	'ALLOW_COMMENTS'				=> 'Reacties op deze afbeelding toestaan.',
	'ALLOW_COMMENTS_ARY'			=> array(
		0	=> 'Reacties op deze afbeelding toestaan.',
		2	=> 'Reacties op deze afbeeldingen toestaan.',
	),
	'ALLOWED_FILETYPES'				=> 'Toegestane bestandsformaten',
	'APPROVE'						=> 'Goedkeuren',
	'DISAPPROVE'					=> 'Afkeuren',
	'APPROVE_IMAGE'					=> 'Afbeelding goedkeuren',

	//@todo
	'ALBUM_COMMENT_CAN'			=> 'Je <strong>kan</strong> reageren op afbeeldingen in dit album',
	'ALBUM_COMMENT_CANNOT'		=> 'Je <strong>kan niet</strong> reageren op afbeeldingen in dit album',
	'ALBUM_DELETE_CAN'			=> 'Je <strong>kan</strong> je eigen afbeeldingen uit dit album verwijderen',
	'ALBUM_DELETE_CANNOT'		=> 'Je kan je eigen afbeeldingen uit dit album <strong>niet</strong> verwijderen',
	'ALBUM_EDIT_CAN'			=> 'Je <strong>kan</strong> je eigen afbeeldingen uit dit album wijzigen',
	'ALBUM_EDIT_CANNOT'			=> 'Je kan je eigen afbeeldingen uit dit album <strong>niet</strong> wijzigen',
	'ALBUM_RATE_CAN'			=> 'Je <strong>kan</strong> afbeeldingen uit dit album beoordelen',
	'ALBUM_RATE_CANNOT'			=> 'Je kan afbeeldingen uit dit album <strong>niet</strong> beoordelen',
	'ALBUM_UPLOAD_CAN'			=> 'Je <strong>kan</strong> niewe afbeeldingen uploaden naar dit album',
	'ALBUM_UPLOAD_CANNOT'		=> 'Je <strong>kan geen</strong> niewe afbeeldingen uploaden naar dit album',
	'ALBUM_VIEW_CAN'			=> 'Je <strong>kan</strong> afbeeldingen uit dit album zien',
	'ALBUM_VIEW_CANNOT'			=> 'Je kan de afbeeldingen uit dit album <strong>niet</strong> zien',

	'BAD_UPLOAD_FILE_SIZE'			=> 'Je geüploade bestand is te groot',
	'BBCODES'						=> 'BBCodes',
	'BROWSING_ALBUM'				=> 'Gebruikers die dit album bekijken: %1$s',
	'BROWSING_ALBUM_GUEST'			=> 'Gebruikers die dit album bekijken: %1$s en %2$d gast',
	'BROWSING_ALBUM_GUESTS'			=> 'Gebruikers die dit album bekijken: %1$s en %2$d gasten',

	'CHANGE_AUTHOR'					=> 'Wijzig auteur',
	'CHANGE_IMAGE_STATUS'			=> 'Verander afbeeldingsstatus',
	'CHARACTERS'					=> 'karakters',
	'CLICK_RETURN_ALBUM'			=> 'Klik %shier%s om terug te gaan naar het album',
	'CLICK_RETURN_IMAGE'			=> 'Klik %shier%s om terug te gaan naar de afbeelding',
	'CLICK_RETURN_INDEX'			=> 'Klik %shier%s om terug te gaan naar de albumindex',
	'COMMENT'						=> 'Reactie',
	'COMMENT_IMAGE'					=> 'Reageren op een afbeelding in het album %s',
	'COMMENT_LENGTH'				=> 'Je kan hier een reactie invoeren, deze mag niet meer dan <strong>%d</strong> karakters bevatten.',
	'COMMENT_ON'					=> 'Reactie op',
	'COMMENT_STORED'				=> 'Je reactie is succesvol opgeslagen.',
	'COMMENT_TOO_LONG'				=> 'Je reactie is te lang.',
	'COMMENTS'						=> 'Reacties',
	'CONTEST_COMMENTS_STARTS'		=> 'Reacties op afbeeldingen in deze wedstrijd zijn toegestaan vanaf %s.',
	'CONTEST_ENDED'					=> 'Deze wedstrijd is geëindigd op %s.',
	'CONTEST_ENDS'					=> 'Deze wedstrijd eindigt op %s.',
	'CONTEST_RATING_STARTED'		=> 'De beoordelingsronde voor deze wedstrijd is begonnen op %s.',
	'CONTEST_RATING_STARTS'			=> 'De beoordelingsronde voor deze wedstrijd begint op %s.',
	'CONTEST_RATING_ENDED'			=> 'De beoordelingsronde voor deze wedstrijd is geëindigd op %s.',
	'CONTEST_RATING_HIDDEN'			=> 'verborgen',
	'CONTEST_RESULT'				=> 'Wedstrijd',
	'CONTEST_RESULT_1'				=> 'Winnaar',
	'CONTEST_RESULT_2'				=> 'Tweede',
	'CONTEST_RESULT_3'				=> 'Derde',
	'CONTEST_RESULT_HIDDEN'			=> 'De beoordelingen van deze afbeeldingen zijn verborgen tot de wedstrijd eindigt op %s.',
	'CONTEST_STARTED'				=> 'Deze wedstrijd is begonnen op %s.',
	'CONTEST_STARTS'				=> 'Deze wedstrijd begint op %s.',
	'CONTEST_USERNAME'				=> '<strong>Wedstrijd</strong>',
	'CONTEST_USERNAME_LONG'			=> '<strong>Wedstrijd</strong> » De gebruikersnaam is verborgen tot de wedsteijd eindigt op %s.',
	'CONTEST_IMAGE_DESC'			=> '<strong>Wedstrijd</strong> » De afbeeldingsomschrijving is verborgen tot de wedsteijd eindigt op %s.',
	'CONTEST_WINNERS_OF'			=> 'Wedstrijd winnaar van “%s“',
	'CONTINUE'						=> 'Doorgaan',

	'DATABASE_NOT_UPTODATE'			=> 'Je database heeft niet dezelfde versie als je bestanden. Update alstublieft je database.',
	'DELETE_COMMENT'				=> 'Verwijder reactie',
	'DELETE_COMMENT2'				=> 'Reactie verwijderen?',
	'DELETE_COMMENT2_CONFIRM'		=> 'Weet je zeker dat je deze reactie wilt verwijderen?',
	'DELETE_IMAGE'					=> 'Verwijder',
	'DELETE_IMAGE2'					=> 'Afbeelding verwijderen?',
	'DELETE_IMAGE2_CONFIRM'			=> 'Weet je zeker dat je de afbeelding wilt verwijderen?',
	'DELETED_COMMENT'				=> 'Reactie verwijderd',
	'DELETED_COMMENT_NOT'			=> 'Reactie niet verwijderd',
	'DELETED_IMAGE'					=> 'Afbeelding verwijderd',
	'DELETED_IMAGE_NOT'				=> 'Afbeelding niet verwijderd',
	'DESC_TOO_LONG'					=> 'Je omschrijving is te lang',
	'DESCRIPTION_LENGTH'			=> 'Je kan hier een omschrijving invoeren, deze mag niet meer dan <strong>%d</strong> karakters bevatten.',
	'DETAILS'						=> 'Details',
	'DISALLOWED_EXTENSION'			=> 'De afbeeldingsextensie is niet toegestaan',
	'DONT_RATE_IMAGE'				=> 'Beoordeel afbeeldingen niet',

	'EDIT_COMMENT'					=> 'Wijzig reactie',
	'EDIT_IMAGE'					=> 'Wijzig',
	'EDITED_TIME_TOTAL'				=> 'Laatst gewijzigd door %s op %s;, %d keer totaal gewijzigd',
	'EDITED_TIMES_TOTAL'			=> 'Laatst gewijzigd door %s op %s;, %d keer totaal gewijzigd',

	'FILE'							=> 'Bestand',
	'FILE_SIZE'						=> 'Bestandsgrootte',
	'FILETYPE_MIMETYPE_MISMATCH'	=> 'Het bestandstype van “<strong>%1$s</strong>“ sluit niet aan bij het mime-type (%2$s).',
	'FILETYPES_GIF'					=> 'gif',
	'FILETYPES_JPG'					=> 'jpg',
	'FILETYPES_PNG'					=> 'png',
	'FILETYPES_ZIP'					=> 'zip',

	'FULL_EDITOR'					=> 'Volledige bewerker',

	'GALLERY_IMAGE'					=> 'Afbeelding',
	'GALLERY_IMAGES'					=> 'Afbeeldingen',
	'GALLERY_VIEWS'					=> 'Weergaves',

	'IGNORE_NOTUPTODATE_MESSAGE'		=> 'Herinner mij over 7 dagen weer',
	'IMAGE_ALREADY_REPORTED'			=> 'Deze afbeelding is al gemeld.',
	'IMAGE_BBCODE'						=> 'Afbeelding BBCode',
	'IMAGE_COMMENTS_DISABLED'			=> 'Reacties zijn voor deze afbeelding uitgeschakeld.',
	'IMAGE_DAY'							=> '%.2f afbeeldingen per dag',
	'IMAGE_DESC'						=> 'Afbeelding omschrijving',
	'IMAGE_HEIGHT'						=> 'Afbeeldingshoogte',
	'IMAGE_INSERTED'					=> 'Afbeelding ingevoerd',
	'IMAGE_LOCKED'						=> 'Sorry, deze afbeelding is gesloten. Je kan geen reacties meer plaatsen op deze afbeelding.',
	'IMAGE_NAME'						=> 'Afbeeldingsnaam',
	'IMAGE_NOT_EXIST'					=> 'Deze afbeelding bestaat niet.',
	'IMAGE_PCT'							=> '%.2f%% van alle afbeeldingen',
	'IMAGE_STATUS'						=> 'Status',
	'IMAGE_URL'							=> 'Afbeeldingslink',
	'IMAGE_VIEWS'						=> 'Weergaves',
	'IMAGE_WIDTH'						=> 'Afbeeldingsbreedte',
	'IMAGES_REPORTED_SUCCESSFULLY'		=> 'Deze afbeelding is succesvol gemeld',
	'IMAGES_UPDATED_SUCCESSFULLY'		=> 'De afbeeldingsinformatie is succesvol bijgewerkt',
	'INSERT_IMAGE_POST'					=> 'Voeg afbeelding aan bericht toe',
	'INVALID_USERNAME'					=> 'Je gebruikersnaam is ongeldig',
	'INVALID_IMAGE'					    => 'De afbeelding is ongeldig',
	'FILE_DISALLOWED_EXTENSION'		=> 'Bestandstype is niet toegestaan',
	'FILE_WRONG_FILESIZE'			=> 'Verkeerde bestandsgrootte',

	'LAST_COMMENT'					=> 'Laatste reactie',
	'LAST_IMAGE'					=> 'Laatste afbeelding',
	'LAST_IMAGE_BY'					=> 'Laatste afbeelding door',
	'LOGIN_EXPLAIN_UPLOAD'			=> 'Je moet geregistreerd en aangemeld zijn om afbeeldingen te kunnen uploaden in dit album.',

	'MARK_ALBUMS_READ'				=> 'Markeer albums als gelezen',
	'MAX_DIMENSIONS'				=> 'Maximale afmetingen',
	'MAX_FILE_SIZE'					=> 'Maximale bestandsgrootte (bytes)',
	'MAX_HEIGHT'					=> 'Maximale afbeeldinghoogte (beeldpunten)',
	'MAX_WIDTH'						=> 'Maximale afbeeldingbreedte (beeldpunten)',
	'MISSING_COMMENT'				=> 'Geen bericht ingevoerd',
	'MISSING_IMAGE_NAME'			=> 'Je moet een naam opgeven bij het bewerken van een afbeelding.',
	'MISSING_MODE'					=> 'Geen modus geselecteerd',
	'MISSING_REPORT_REASON'			=> 'Je moet een reden opgeven, als je deze afbeelding wilt melden.',
	'MISSING_SLIDESHOW_PLUGIN'		=> 'Geen slideshow-plugin gevonden. Neem contact op met de forumbeheerder..',
	'MISSING_SUBMODE'				=> 'Geen sub-modus geselecteerd',
	'MISSING_USERNAME'				=> 'Geen gebruikersnaam ingevoerd',
	'MOVE_TO_ALBUM'					=> 'Verplaats naar album',
	'MOVE_TO_PERSONAL'				=> 'Verplaats naar persoonlijk album',
	'MOVE_TO_PERSONAL_MOD'			=> 'Als je deze optie selecteert, worden de afbeeldingen verplaatst naar het persoonlijke album van de gebruiker. Als de gebruiker er nog geen heeft, dan wordt deze automatisch aangemaakt.',
	'MOVE_TO_PERSONAL_EXPLAIN'		=> 'Als je deze optie selecteert, worden de afbeeldingen verplaatst naar jouw persoonlijke album. Als je er nog geen hebt, dan wordt deze automatisch aangemaakt.',

	'NEW_COMMENT'					=> 'Nieuwe Reactie',
	'NEW_IMAGES'					=> 'Nieuwe afbeeldingen',
	'NEWEST_PGALLERY'				=> 'Het nieuwste persoonlijke album %s',
	'NO_ALBUMS'						=> 'Er zijn geen albums in deze galerij.',
	'NO_COMMENTS'					=> 'Nog geen reacties',
	'NO_IMAGES'						=> 'Geen afbeeldingen',
	'NO_IMAGES_FOUND'				=> 'Geen afbeldingen gevonden.',
	'NO_NEW_IMAGES'					=> 'Geen nieuwe afbeeldingen',
	'NO_IMAGES_LONG'				=> 'Er zijn geen afbeeldingen in dit album.',
	'NOT_ALLOWED_FILE_TYPE'			=> 'Dit bestandstype is niet toegestaan',
	'NOT_RATED'						=> 'Niet beoordeeld',

	'NO_WRITE_ACCESS'				=> 'De upload map ontbreekt of phpBB heeft geen schrijfrechten.<br>Neem alstublieft contact op met de forumbeheerder!',

	'ORDER'							=> 'Volgorde',
	'ORIG_FILENAME'					=> 'Gebruik bestandsnaam als afbeeldingsnaam (het invoerveld heeft geen functie)',
	'OUT_OF_RANGE_VALUE'			=> 'Waarde is buiten bereik',
	'OWN_IMAGES'					=> 'Je eigen afbeeldingen',

	'PERCENT'						=> '%',
	'PERSONAL_ALBUMS'				=> 'Persoonlijke albums',
	'PIXELS'						=> 'pixels',
	'PLUGIN_CLASS_MISSING'			=> 'Galerij Plugin fout: Class “%s“ kan niet gevonden worden!',
	'POST_COMMENT'					=> 'Plaats een reactie',
	'POST_COMMENT_RATE_IMAGE'		=> 'Plaats een reactie en beoordeel de afbeelding',
	'POSTER'						=> 'Gebruiker',

	'QUOTA_REACHED'					=> 'Het aantal afbeeldingen dat je kan uploaden is bereikt.',
	'QUOTE_COMMENT'					=> 'Quote reactie',

	'RANDOM_IMAGES'					=> 'Willekeurige afbeeldingen',
	'RATE_IMAGE'					=> 'Beoordeel de afbeelding',
	'RATES_COUNT'					=> 'Aantal beoordelingen',
	'RATING'						=> 'Beoordeling',
	'RATING_STRINGS'				=> array(
		0	=> 'niet beoordeeld',
		1	=> '%2$s (1 beoordeling)',
		2	=> '%2$s (%1$s beoordelingen)',
	),
	'RATING_STRINGS_USER'			=> array(
		1	=> '%2$s (1 beoordeling, je eigen beoordeling: %3$s)',
		2	=> '%2$s (%1$s beoordelingen, je eigen beoordeling: %3$s)',
	),
	'RATING_SUCCESSFUL'				=> 'De afbeelding is succesvol beoordeeld.',
	'READ_REPORT'					=> 'Melding lezen',
	'RECENT_COMMENTS'				=> 'Recente reacties',
	'RECENT_IMAGES'					=> 'Recente afbeeldingen',
	'REPORT_IMAGE'					=> 'Meld deze afbeelding',
	'RETURN_ALBUM'					=> '%sGa terug naar het laatst bezochte album%s',
	'ROTATE_IMAGE'					=> 'Afbeelding draaien',
	'ROTATE_LEFT'					=> '90° links',
	'ROTATE_NONE'					=> 'geen',
	'ROTATE_RIGHT'					=> '90° rechts',
	'ROTATE_UPSIDEDOWN'				=> '180° ondersteboven ',
	'RETURN_TO_GALLERY'				=> 'Ga terug naar de galerij',

	'SEARCH_ALBUM'					=> 'Zoeken in dit album…',
	'SEARCH_ALBUMS'					=> 'Zoeken in albums',
	'SEARCH_ALBUMS_EXPLAIN'			=> 'Selecteer het album of de albums waarin je wilt zoeken. Subalbums worden automatische doorzocht als je de optie “doorzoek subalbums“ hieronder niet uitschakeld.',
	'SEARCH_COMMENTS'				=> 'Alleen reacties',
	'SEARCH_CONTEST'				=> 'Winnaars',
	'SEARCH_IMAGE_COMMENTS'			=> 'Afbeeldingsnamen, omschrijvingen ',
	'SEARCH_IMAGE_VALUES'			=> 'Alleen afbeeldingsnamen en omschrijvingen',
	'SEARCH_IMAGENAME'				=> 'Alleen afbeeldingsnamen',
	'SEARCH_RANDOM'					=> 'Willikeurige afbeeldingen',
	'NO_SEARCH_RESULTS_RANDOM'		=> 'Er zijn geen afbeeldingen of je hebt geen rechten om ze te zien!',
	'SEARCH_RECENT'					=> 'Recente afbeeldingen',
	'NO_SEARCH_RESULTS_RECENT'		=> 'Er zijn geen afbeeldingen of je hebt geen rechten om ze te zien!',
	'SEARCH_RECENT_COMMENTS'		=> 'Recente reacties',
	'NO_SEARCH_RESULTS_RECENT_COMMENTS'	=> 'Er zijn geen recente reacties of je hebt geen rechten om ze te zien!',
	'SEARCH_SUBALBUMS'				=> 'Doorzoek subalbums',
	'SEARCH_TOPRATED'				=> 'Hoogst beoordeelde afbeeldingen',
	'SEARCH_USER_IMAGES'			=> 'Zoek naar gebruikers afbeeldingen',
	'SEARCH_USER_IMAGES_OF'			=> 'Afbeeldingen van %s',
	'SELECT_ALBUM'					=> 'Selecteer een album',
	'SHOW_PERSONAL_ALBUM_OF'		=> 'Toon persoonlijk album van %s',
	'SLIDE_SHOW'					=> 'Slideshow',
	'SLIDE_SHOW_HIGHSLIDE'			=> 'Om de slideshow te starten, klik je op één van de afbeeldingsnamen en daarna klik je op het “afspelen-icoon:',
	'SLIDE_SHOW_LYTEBOX'			=> 'Om de slideshow te starten, klik je op één van de afbeeldingsnamen:',
	'SLIDE_SHOW_SHADOWBOX'			=> 'Om de slideshow te starten, klik je op één van de afbeeldingsnamen:',
	'SORT_ASCENDING'				=> 'Oplopend',
	'SORT_DEFAULT'					=> 'Standaard',
	'SORT_DESCENDING'				=> 'Aflopend',
	'STATUS'						=> 'Status',
	'SUBALBUMS'						=> 'Subalbums',
	'SUBALBUM'						=> 'Subalbum',

	'THUMBNAIL_SIZE'				=> 'Miniatuurformaat (pixels)',
	'TOTAL_COMMENTS_SPRINTF'		=> array(
		0	=> 'Aantal reacties <strong>0</strong>',
		1	=> 'Aantal reacties <strong>%d</strong>',
		2	=> 'Aantal reacties <strong>%d</strong>',
	),
	'TOTAL_IMAGES'					=> 'Aantal afbeeldingen',
	'TOTAL_IMAGES_SPRINTF'			=> array(
		0	=> 'Geen afbeeldingen',
		1	=> '%d afbeelding',
		2	=> '%d afbeeldingen',
	),
	'TOTAL_PEGAS_SHORT_SPRINTF'		=> array(
		0	=> '0 Persoonlijke galerijen',
		1	=> '%d Persoonlijke galerij',
		2	=> '%d Persoonlijke galerijen',
	),
	'TOTAL_PEGAS_SPRINTF'		=> array(
		0	=> 'Aantal persoonlijke galerijen <strong>0</strong>',
		1	=> 'Aantal persoonlijke galerijen <strong>%d</strong>',
		2	=> 'Aantal persoonlijke galerijen <strong>%d</strong>',
	),

	'UNLOCK_IMAGE'					=> 'Afbeelding heropenen',
	'UNWATCH_ALBUM'					=> 'Uitschrijven album',
	'UNWATCH_IMAGE'					=> 'Uitschrijven afbeelding',
	'UNWATCH_PEGAS'					=> 'Abonneer niet op nieuwe persoonlijke galerijen',
	'UNWATCHED_ALBUM'				=> 'Je bent niet langer geabonneerd op updates over nieuwe afbeeldingen in dit album.',
	'UNWATCHED_ALBUMS'				=> 'Je bent niet langer geabonneerd op updates over nieuwe afbeeldingen in deze albums.',
	'UNWATCHED_IMAGE'				=> 'Je bent niet langer geabonneerd op updates over nieuwe reacties op deze afbeelding.',
	'UNWATCHED_IMAGES'				=> 'Je bent niet langer geabonneerd op updates over nieuwe reacties op deze afbeeldingen.',
	'UNWATCHED_PEGAS'				=> 'Je bent niet langer geabonneerd op updates over nieuwe persoonlijke galerijen.',
	'UPLOAD_ERROR'					=> 'Tijdens het uploaden van “%1$s“ is de volgende fout opgetreden:<br />&raquo; %2$s',
	'UPLOAD_IMAGE'					=> 'Afbeelding uploaden',
	'UPLOAD_IMAGE_SIZE_TOO_BIG'		=> 'De afmetingen van je afbeelding zijn te groot',
	'UPLOAD_NO_FILE'				=> 'Je moet het pad en bestandsnaam invullen',
	'UPLOADED_BY_USER'				=> 'Geüpload door',
	'UPLOADED_ON_DATE'				=> 'Geüpload op',
	'USE_SAME_NAME'					=> 'Gebruik de zelfde afbeeldingsnaam en omschrijving voor de andere afbeeldingen.',
	'USE_NUM'						=> 'Voeg {NUM} toe voor nummers. Start het tellen bij:',
	'USER_REACHED_QUOTA'			=> array(
		0	=> 'Je mag <strong>geen</strong> afbeeldingen uploaden.<br />Neem contact op met de beheerder voor meer informatie.',
		1	=> 'Je mag niet meer dan <strong>1</strong> afbeelding uploaden.<br />Neem contact op met de beheerder voor meer informatie.',
		2	=> 'Je mag niet meer dan <strong>%s</strong> afbeeldingen uploaden.<br />Neem contact op met de beheerder voor meer informatie.',
	),
	'USER_REACHED_QUOTA_SHORT'		=> array(
		0	=> 'Je mag <strong>geen</strong> afbeeldingen uploaden.',
		1	=> 'Je mag niet meer dan <strong>1</strong> afbeelding uploaden.',
		2	=> 'Je mag niet meer dan <strong>%s</strong> afbeeldingen uploaden.',
	),
	'USERNAME_BEGINS_WITH'			=> 'Gebruikersnaam begint met',
	'USERS_PERSONAL_ALBUMS'			=> 'Persoonlijke albums van leden',

	'VISIT_GALLERY'					=> 'Bezoek gebruikers galerij',

	'VIEW_ALBUM'					=> 'Bekijk album',
	'VIEW_ALBUM_IMAGES'				=> array(
		1	=> '1 afbeelding',
		2	=> '%s afbeeldingen',
	),
	'VIEW_IMAGE'					=> 'Bekijk afbeelding',
	'VIEW_IMAGE_COMMENTS'			=> array(
		1	=> '1 reactie',
		2	=> '%s reacties',
	),
	'VIEW_LATEST_IMAGE'				=> 'Bekijk de laatste afbeeldingen',
	'VIEW_SEARCH_RECENT'			=> 'Recente afbeeldingen',
	'VIEW_SEARCH_RANDOM'			=> 'Willikeurige afbeeldingen',
	'VIEW_SEARCH_COMMENTED'			=> 'Recente reacties',
	'VIEW_SEARCH_CONTESTS'			=> 'Wedstrijd winnaars',
	'VIEW_SEARCH_TOPRATED'			=> 'Best beoordeelde afbeeldingen',
	'VIEW_SEARCH_SELF'				=> 'Je afbeeldingen',
	'VIEWING_ALBUM'					=> 'Bekijkt het album %s',
	'VIEWING_IMAGE'					=> 'Bekijkt afbeeldingen in het album %s',

	'WATCH_ALBUM'					=> 'Abonneer album',
	'WATCH_IMAGE'					=> 'Abonneer afbeelding',
	'WATCH_PEGAS'					=> 'Abonneer op nieuwe persoonlijke albums',
	'WATCHING_ALBUM'				=> 'Je hebt je geabonneerd om op de hoogte gehouden te worden van nieuwe afbeeldingen in dit album.',
	'WATCHING_IMAGE'				=> 'Je hebt je geabonneerd om op de hoogte gehouden te worden van nieuwe reacties op deze afbeelding.',
	'WATCHING_PEGAS'				=> 'Je hebt je geabonneerd om op de hoogte gehouden te worden, wanneer er nieuwe persoonlijke galerijen worden aangemaakt.',

	'YOUR_COMMENT'					=> 'Je reactie',
	'YOUR_PERSONAL_ALBUM'			=> 'Je persoonlijke album',
	'YOUR_RATING'					=> 'Je beoordeling',

	'IMAGES_MOVED'					=> array(
		1	=>	'Afbeelding verplaatst',
		2	=> 	'%s afbeeldingen verplaatst',
	),

	'QUICK_MOD'	=> 'Selecteer moderator actie',
	'WRONG_FILESIZE'	=> 'De afbeeldingsgrootte is groter dan toegestaan!',

	// Versions 1.2.1 addiotions
	'GALLERY_DROP'		=> 'Plaats je afbeeldingen hier',
	));

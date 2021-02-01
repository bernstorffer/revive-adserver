<?php

/*
  +---------------------------------------------------------------------------+
  | Revive Adserver                                                           |
  | http://www.revive-adserver.com                                            |
  |                                                                           |
  | Copyright: See the COPYRIGHT.txt file.                                    |
  | License: GPLv2 or later, see the LICENSE.txt file.                        |
  +---------------------------------------------------------------------------+
 */

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection'] = "ltr";
$GLOBALS['phpAds_TextAlignRight'] = "right";
$GLOBALS['phpAds_TextAlignLeft'] = "left";
$GLOBALS['phpAds_CharSet'] = "UTF-8";

$GLOBALS['phpAds_DecimalPoint'] = ",";
$GLOBALS['phpAds_ThousandsSeperator'] = ".";

// Date & time configuration
$GLOBALS['date_format'] = "%d-%m-%Y";
$GLOBALS['time_format'] = "%H:%M:%S";
$GLOBALS['minute_format'] = "%H:%M";
$GLOBALS['month_format'] = "%m-%Y";
$GLOBALS['day_format'] = "%d-%m";
$GLOBALS['week_format'] = "%W-%Y";
$GLOBALS['weekiso_format'] = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting'] = "#.##0;-#.##0;-";
$GLOBALS['excel_decimal_formatting'] = "#.##0,000;-#.##0,000;-";

/* ------------------------------------------------------- */
/* Translations                                          */
/* ------------------------------------------------------- */

$GLOBALS['strHome'] = "Home";
$GLOBALS['strHelp'] = "Aiuto";
$GLOBALS['strStartOver'] = "Inizia da capo";
$GLOBALS['strShortcuts'] = "Scorciatoie";
$GLOBALS['strActions'] = "Azioni";
$GLOBALS['strAndXMore'] = "e %s altri";
$GLOBALS['strAdminstration'] = "Inventario";
$GLOBALS['strMaintenance'] = "Manutenzione";
$GLOBALS['strProbability'] = "Probabilità";
$GLOBALS['strInvocationcode'] = "Codice di invocazione";
$GLOBALS['strBasicInformation'] = "Informazioni di base";
$GLOBALS['strAppendTrackerCode'] = "Aggiungi codice tracker";
$GLOBALS['strOverview'] = "Descrizione";
$GLOBALS['strSearch'] = "<u>C</u>erca";
$GLOBALS['strDetails'] = "Dettagli";
$GLOBALS['strUpdateSettings'] = "Impostazioni aggiornamenti";
$GLOBALS['strCheckForUpdates'] = "Controlla aggiornamenti";
$GLOBALS['strWhenCheckingForUpdates'] = "Durante la ricerca degli aggiornamenti";
$GLOBALS['strCompact'] = "Compatte";
$GLOBALS['strUser'] = "Utente";
$GLOBALS['strDuplicate'] = "Duplicato";
$GLOBALS['strCopyOf'] = "Copia di ";
$GLOBALS['strMoveTo'] = "Muovi verso";
$GLOBALS['strDelete'] = "Elimina";
$GLOBALS['strActivate'] = "Attiva";
$GLOBALS['strConvert'] = "Converti";
$GLOBALS['strRefresh'] = "Aggiorna";
$GLOBALS['strSaveChanges'] = "Salva modifiche";
$GLOBALS['strUp'] = "Su";
$GLOBALS['strDown'] = "Giù";
$GLOBALS['strSave'] = "Salva";
$GLOBALS['strCancel'] = "Annulla";
$GLOBALS['strBack'] = "Indietro";
$GLOBALS['strPrevious'] = "Precedente";
$GLOBALS['strNext'] = "Successivo";
$GLOBALS['strYes'] = "Sì";
$GLOBALS['strNo'] = "No";
$GLOBALS['strNone'] = "Nessuno";
$GLOBALS['strCustom'] = "Personalizzato";
$GLOBALS['strDefault'] = "Predefinito";
$GLOBALS['strUnknown'] = "Sconosciuto";
$GLOBALS['strUnlimited'] = "Illimitato";
$GLOBALS['strUntitled'] = "Senza nome";
$GLOBALS['strAll'] = "tutto";
$GLOBALS['strAverage'] = "Media";
$GLOBALS['strOverall'] = "Totale";
$GLOBALS['strTotal'] = "Totale";
$GLOBALS['strFrom'] = "Da";
$GLOBALS['strTo'] = "a";
$GLOBALS['strAdd'] = "Aggiungi";
$GLOBALS['strLinkedTo'] = "collegato a";
$GLOBALS['strDaysLeft'] = "Giorni mancanti";
$GLOBALS['strCheckAllNone'] = "Seleziona tutti / nessuno";
$GLOBALS['strKiloByte'] = "KB";
$GLOBALS['strExpandAll'] = "<u>E</u>spandi tutti";
$GLOBALS['strCollapseAll'] = "<u>C</u>hiudi tutti";
$GLOBALS['strShowAll'] = "Mostra tutto";
$GLOBALS['strNoAdminInterface'] = "L'interfaccia di amministrazione non è accessibile per manutenzione. La consegna delle tue campagne avverrà normalmente.";
$GLOBALS['strFieldStartDateBeforeEnd'] = "La data di inizio deve essere antecedente alla data di fine";
$GLOBALS['strFieldContainsErrors'] = "I seguenti campi contengono errori:";
$GLOBALS['strFieldFixBeforeContinue1'] = "Prima di continuare è necessario";
$GLOBALS['strFieldFixBeforeContinue2'] = "per correggere questi errori.";
$GLOBALS['strMiscellaneous'] = "Varie";
$GLOBALS['strCollectedAllStats'] = "Tutte le statistiche";
$GLOBALS['strCollectedToday'] = "Oggi";
$GLOBALS['strCollectedYesterday'] = "Ieri";
$GLOBALS['strCollectedThisWeek'] = "Questa settimana";
$GLOBALS['strCollectedLastWeek'] = "Scorsa settimana";
$GLOBALS['strCollectedThisMonth'] = "Questo mese";
$GLOBALS['strCollectedLastMonth'] = "Scorso mese";
$GLOBALS['strCollectedLast7Days'] = "Ultimi 7 giorni";
$GLOBALS['strCollectedSpecificDates'] = "Date specifiche";
$GLOBALS['strValue'] = "Valore";
$GLOBALS['strWarning'] = "Attenzione";
$GLOBALS['strNotice'] = "Notifica";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "La dashboard non può essere visualizzata";
$GLOBALS['strNoCheckForUpdates'] = "La dashboard non può essere visualizzata a meno che l'impostazione<br />per gli aggiornamenti non sia abilitata.";
$GLOBALS['strEnableCheckForUpdates'] = "Si prega di abilitare l'impostazione <a href='account-settings-update.php' target='_top'>per controllare gli aggiornamenti</a> nella pagina<br/><a href='account-settings-update.php' target='_top'>impostazioni di aggiornamento</a>.";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode'] = "codice";
$GLOBALS['strDashboardSystemMessage'] = "Messaggio di sistema";
$GLOBALS['strDashboardErrorHelp'] = "Se questo errore si ripete per favore descrivi il tuo problema nel dettaglio e pubblicalo sui <a href='http://forum.openx.org/'>forum OpenX</a>.";

// Priority
$GLOBALS['strPriority'] = "Priorità";
$GLOBALS['strPriorityLevel'] = "Livello di priorità";
$GLOBALS['strOverrideAds'] = "Banner provenienti da campagne \"Override\"";
$GLOBALS['strHighAds'] = "Banner provenienti da campagne a contratto";
$GLOBALS['strECPMAds'] = "Banner provenienti da campagne eCPM";
$GLOBALS['strLowAds'] = "Banner provenienti da campagne Remnant";
$GLOBALS['strLimitations'] = "Regole di consegna";
$GLOBALS['strNoLimitations'] = "Nessuna regola di consegna";
$GLOBALS['strCapping'] = "Capping";

// Properties
$GLOBALS['strName'] = "Nome";
$GLOBALS['strSize'] = "Dimensioni";
$GLOBALS['strWidth'] = "Larghezza";
$GLOBALS['strHeight'] = "Altezza";
$GLOBALS['strTarget'] = "Frame destinazione";
$GLOBALS['strLanguage'] = "Lingua";
$GLOBALS['strDescription'] = "Descrizione";
$GLOBALS['strVariables'] = "Variabili";
$GLOBALS['strID'] = "ID";
$GLOBALS['strComments'] = "Commenti";

// User access
$GLOBALS['strWorkingAs'] = "Lavora come";
$GLOBALS['strWorkingAs_Key'] = "<u>L</u>avorando come";
$GLOBALS['strWorkingAs'] = "Lavora come";
$GLOBALS['strSwitchTo'] = "Passa a";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Usa la ricerca del selettore per trovare più account";
$GLOBALS['strWorkingFor'] = "%s per...";
$GLOBALS['strNoAccountWithXInNameFound'] = "Nessun account con \"%s\" nel nome trovato";
$GLOBALS['strRecentlyUsed'] = "Utilizzati di recente";
$GLOBALS['strLinkUser'] = "Aggiungi utente";
$GLOBALS['strLinkUser_Key'] = "Aggiungi <u>u</u>tente";
$GLOBALS['strUsernameToLink'] = "Nome dell’utente da aggiungere";
$GLOBALS['strNewUserWillBeCreated'] = "Il nuovo utente verrà creato";
$GLOBALS['strToLinkProvideEmail'] = "Per aggiungere l’utente si deve fornire la sua e-mail";
$GLOBALS['strToLinkProvideUsername'] = "Per aggiungere l’utente si deve fornire il suo nome utente";
$GLOBALS['strUserLinkedToAccount'] = "L’utente è stato aggiunto all’account";
$GLOBALS['strUserAccountUpdated'] = "Account utente aggiornato";
$GLOBALS['strUserUnlinkedFromAccount'] = "L’utente è stato rimosso dall’account";
$GLOBALS['strUserWasDeleted'] = "L’utente è stato eliminato";
$GLOBALS['strUserNotLinkedWithAccount'] = "Tale utente non è collegato con l`account";
$GLOBALS['strCantDeleteOneAdminUser'] = "Non puoi cancellare l`utente. Almeno un altro utente necessita di essere collegato con l`account di amministrazione.";
$GLOBALS['strLinkUserHelp'] = "Per aggiungere un utente <b>esistente</b>, digita %1\$s e clicca %2\$s <br />Per aggiungere un <b>nuovo utente</b>, digita il %1\$s desiderato e clicca %2\$s";
$GLOBALS['strLinkUserHelpUser'] = "nome utente";
$GLOBALS['strLinkUserHelpEmail'] = "indirizzo email";
$GLOBALS['strLastLoggedIn'] = "Ultimo accesso";
$GLOBALS['strDateLinked'] = "Data collegata";

// Login & Permissions
$GLOBALS['strUserAccess'] = "Accesso utente";
$GLOBALS['strAdminAccess'] = "Accesso Amministratore";
$GLOBALS['strUserProperties'] = "Proprietà utente";
$GLOBALS['strPermissions'] = "Permessi";
$GLOBALS['strAuthentification'] = "Autenticazione";
$GLOBALS['strWelcomeTo'] = "Benvenuto su";
$GLOBALS['strEnterUsername'] = "Inserisci il tuo nome utente e la tua password per accedere";
$GLOBALS['strEnterBoth'] = "È necessario inserire sia nome utente che password";
$GLOBALS['strEnableCookies'] = "È necessario abilitare i cookie prima di poter utilizzare {$PRODUCT_NAME}";
$GLOBALS['strSessionIDNotMatch'] = "Errore nel cookie di sessione, per favore entra nuovamente.";
$GLOBALS['strLogin'] = "Nome utente";
$GLOBALS['strLogout'] = "Esci";
$GLOBALS['strUsername'] = "Nome utente";
$GLOBALS['strPassword'] = "Password";
$GLOBALS['strPasswordRepeat'] = "Ripeti la password";
$GLOBALS['strAccessDenied'] = "Accesso negato";
$GLOBALS['strUsernameOrPasswordWrong'] = "Nome utente o password non corretti. Inserire nuovamente le proprie credenziali.";
$GLOBALS['strPasswordWrong'] = "Password errata";
$GLOBALS['strNotAdmin'] = "Il tuo account non ha abbastanza privilegi per usare questa caratteristica.";
$GLOBALS['strDuplicateClientName'] = "Il nome utente fornito è già in uso, specificare un nome utente differente.";
$GLOBALS['strInvalidPassword'] = "La nuova password non è valida, utilizzare un'altra password.";
$GLOBALS['strInvalidEmail'] = "L'email non è stata inserita correttamente, per favore inserisci un indirizzo email valido.";
$GLOBALS['strNotSamePasswords'] = "Le due password inserite non coincidono";
$GLOBALS['strRepeatPassword'] = "Ripeti password";
$GLOBALS['strDeadLink'] = "Il tuo collegamento non è valido.";
$GLOBALS['strNoPlacement'] = "La campagna selezionata non esiste. Prova questo <a href='{link}'collegamento</a> invece";
$GLOBALS['strNoAdvertiser'] = "L'inserzionista selezionato non esiste. Prova questo <a href='{link}'collegamento</a> invece";

// General advertising
$GLOBALS['strRequests'] = "Richieste";
$GLOBALS['strImpressions'] = "Impressioni";
$GLOBALS['strClicks'] = "Click";
$GLOBALS['strConversions'] = "Conversioni";
$GLOBALS['strCTRShort'] = "CTR";
$GLOBALS['strCNVRShort'] = "SR";
$GLOBALS['strCTR'] = "CTR";
$GLOBALS['strTotalClicks'] = "Click totali";
$GLOBALS['strTotalConversions'] = "Conversioni totali";
$GLOBALS['strDateTime'] = "Data Ora";
$GLOBALS['strTrackerID'] = "Tracker ID";
$GLOBALS['strTrackerName'] = "Nome Tracker";
$GLOBALS['strTrackerImageTag'] = "Tag Immagine";
$GLOBALS['strTrackerJsTag'] = "Tag Javascript";
$GLOBALS['strTrackerAlwaysAppend'] = "Mostrare sempre il codice allegato, anche se nessuna conversione è registrata dal tracker?";
$GLOBALS['strBanners'] = "Banner";
$GLOBALS['strCampaigns'] = "Campagne";
$GLOBALS['strCampaignID'] = "ID Campagna";
$GLOBALS['strCampaignName'] = "Nome Campagna";
$GLOBALS['strCountry'] = "Stato";
$GLOBALS['strStatsAction'] = "Azione";
$GLOBALS['strWindowDelay'] = "Ritardo finestra";
$GLOBALS['strStatsVariables'] = "Variabili";

// Finance
$GLOBALS['strFinanceCPM'] = "CPM";
$GLOBALS['strFinanceCPC'] = "CPC";
$GLOBALS['strFinanceCPA'] = "CPA";
$GLOBALS['strFinanceMT'] = "Occupazione Mensile";
$GLOBALS['strFinanceCTR'] = "CTR";
$GLOBALS['strFinanceCR'] = "CR";

// Time and date related
$GLOBALS['strDate'] = "Data";
$GLOBALS['strDay'] = "Giorno";
$GLOBALS['strDays'] = "Giorni";
$GLOBALS['strWeek'] = "Settimana";
$GLOBALS['strWeeks'] = "Settimane";
$GLOBALS['strSingleMonth'] = "Mese";
$GLOBALS['strMonths'] = "Mesi";
$GLOBALS['strDayOfWeek'] = "Giorno della settimana";


if (!isset($GLOBALS['strDayFullNames'])) {
    $GLOBALS['strDayFullNames'] = array();
}
$GLOBALS['strDayFullNames'][0] = 'Domenica';
$GLOBALS['strDayFullNames'][1] = 'Lunedì';
$GLOBALS['strDayFullNames'][2] = 'Martedì';
$GLOBALS['strDayFullNames'][3] = 'Mercoledì';
$GLOBALS['strDayFullNames'][4] = 'Giovedì';
$GLOBALS['strDayFullNames'][5] = 'Venerdì';
$GLOBALS['strDayFullNames'][6] = 'Sabato';

if (!isset($GLOBALS['strDayShortCuts'])) {
    $GLOBALS['strDayShortCuts'] = array();
}
$GLOBALS['strDayShortCuts'][0] = 'Do';
$GLOBALS['strDayShortCuts'][1] = 'Lu';
$GLOBALS['strDayShortCuts'][2] = 'Ma';
$GLOBALS['strDayShortCuts'][3] = 'Me';
$GLOBALS['strDayShortCuts'][4] = 'Gi';
$GLOBALS['strDayShortCuts'][5] = 'Ve';
$GLOBALS['strDayShortCuts'][6] = 'Sa';

$GLOBALS['strHour'] = "Ora";
$GLOBALS['strSeconds'] = "secondi";
$GLOBALS['strMinutes'] = "minuti";
$GLOBALS['strHours'] = "ore";

// Advertiser
$GLOBALS['strClient'] = "Inserzionista";
$GLOBALS['strClients'] = "Inserzionisti";
$GLOBALS['strClientsAndCampaigns'] = "Inserzionisti e Campagne";
$GLOBALS['strAddClient'] = "Aggiungi un nuovo inserzionista";
$GLOBALS['strClientProperties'] = "Impostazioni inserzionista";
$GLOBALS['strClientHistory'] = "Statistiche Inserzionista";
$GLOBALS['strNoClients'] = "Non è stato definito alcun inserzionista. Per creare una campagna, prima <a href='advertiser-edit.php'>aggiungi un inserzionista</a>.";
$GLOBALS['strConfirmDeleteClient'] = "Vuoi veramente eliminare questo inserzionista?";
$GLOBALS['strConfirmDeleteClients'] = "Vuoi veramente eliminare questo inserzionista?";
$GLOBALS['strHideInactive'] = "Nascondere inattivi/e";
$GLOBALS['strInactiveAdvertisersHidden'] = "inserzionisti inattivi nascosti";
$GLOBALS['strAdvertiserSignup'] = "Registrazione inserzionisti";
$GLOBALS['strAdvertiserCampaigns'] = "Inserzionisti e Campagne";

// Advertisers properties
$GLOBALS['strContact'] = "Contatto";
$GLOBALS['strContactName'] = "Nome del contatto";
$GLOBALS['strEMail'] = "E-mail";
$GLOBALS['strSendAdvertisingReport'] = "Spedisci report della campagna via Email";
$GLOBALS['strNoDaysBetweenReports'] = "numero di giorni tra rapporti";
$GLOBALS['strSendDeactivationWarning'] = "Spedisci un avvertimento quando la campagna viene disattivata";
$GLOBALS['strAllowClientModifyBanner'] = "Permetti a questo utente di modificare i propri banner";
$GLOBALS['strAllowClientDisableBanner'] = "Permetti a questo utente di disattivare i propri banner";
$GLOBALS['strAllowClientActivateBanner'] = "Permetti a questo utente di attivare i propri banner";
$GLOBALS['strAllowCreateAccounts'] = "Consenti a questo utente di gestire gli utenti di questo account";
$GLOBALS['strAdvertiserLimitation'] = "Mostra solo un banner di questo editore sulla stessa pagina web";
$GLOBALS['strAllowAuditTrailAccess'] = "Permetti a questo utente di accedere all'Audit Trail";
$GLOBALS['strAllowDeleteItems'] = "Allow this user to delete items";

// Campaign
$GLOBALS['strCampaign'] = "Campagna";
$GLOBALS['strCampaigns'] = "Campagne";
$GLOBALS['strAddCampaign'] = "Aggiungi nuova campagna";
$GLOBALS['strAddCampaign_Key'] = "Aggiungi <u>n</u>uova campagna";
$GLOBALS['strCampaignForAdvertiser'] = "per inserzionista";
$GLOBALS['strLinkedCampaigns'] = "Campagne collegate";
$GLOBALS['strCampaignProperties'] = "Impostazioni campagna";
$GLOBALS['strCampaignOverview'] = "Descrizione campagne";
$GLOBALS['strCampaignHistory'] = "Statistiche Campagna";
$GLOBALS['strNoCampaigns'] = "Attualmente non sono presenti campagne definite";
$GLOBALS['strNoCampaignsAddAdvertiser'] = "Al momento non ci sono campagne definite, perché non ci sono inserzionisti. Per creare una campagna, <a href='advertiser-edit.php'>aggiungi prima un nuovo inserzionista</a>.";
$GLOBALS['strConfirmDeleteCampaign'] = "Desideri realmente procedere alla cancellazione di questa campagna?";
$GLOBALS['strConfirmDeleteCampaigns'] = "Desideri realmente procedere alla cancellazione di questa campagna?";
$GLOBALS['strShowParentAdvertisers'] = "Mostra inserzionisti padri";
$GLOBALS['strHideParentAdvertisers'] = "Nascondi inserzionisti padri";
$GLOBALS['strHideInactiveCampaigns'] = "Nascondi campagne inattive";
$GLOBALS['strInactiveCampaignsHidden'] = "campagne inattive nascoste";
$GLOBALS['strPriorityInformation'] = "Priorità in relazione ad altre campagne";
$GLOBALS['strECPMInformation'] = "Prioritizzazione eCPM";
$GLOBALS['strRemnantEcpmDescription'] = "L'eCPM è calcolato automaticamente in base alle prestazioni di questa campagna.<br />Sarà usato per assegnare la priorità delle campagne Remnant l'una rispetto all'altra.";
$GLOBALS['strEcpmMinImpsDescription'] = "Impostalo sulla base minima desiderata per calcolare l'eCPM di questa campagna.";
$GLOBALS['strHiddenCampaign'] = "Campagna";
$GLOBALS['strHiddenAd'] = "Inserzione";
$GLOBALS['strHiddenAdvertiser'] = "Inserzionista";
$GLOBALS['strHiddenTracker'] = "Tracker";
$GLOBALS['strHiddenWebsite'] = "Sito";
$GLOBALS['strHiddenZone'] = "Zona";
$GLOBALS['strCampaignDelivery'] = "Consegna campagna";
$GLOBALS['strCompanionPositioning'] = "Posizionamento del companion";
$GLOBALS['strSelectUnselectAll'] = "Seleziona / Deseleziona tutti";
$GLOBALS['strCampaignsOfAdvertiser'] = "di"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie'] = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns'] = "Calcolato per tutte le campagne";
$GLOBALS['strCalculatedForThisCampaign'] = "Calcolato per questa campagna";
$GLOBALS['strLinkingZonesProblem'] = "Si è verificato un problema durante il collegamento delle zone";
$GLOBALS['strUnlinkingZonesProblem'] = "Si è verificato un problema durante la disconnessione delle zone";
$GLOBALS['strZonesLinked'] = "zona/e collegate";
$GLOBALS['strZonesUnlinked'] = "zona/e scollegate";
$GLOBALS['strZonesSearch'] = "Cerca";
$GLOBALS['strZonesSearchTitle'] = "Cerca zone e siti web per nome";
$GLOBALS['strNoWebsitesAndZones'] = "Nessun sito web o zone";
$GLOBALS['strNoWebsitesAndZonesText'] = "con \"%s\" nel nome";
$GLOBALS['strToLink'] = "collegare";
$GLOBALS['strToUnlink'] = "Scollegare";
$GLOBALS['strLinked'] = "Collegato";
$GLOBALS['strAvailable'] = "Disponibile";
$GLOBALS['strShowing'] = "Mostrando";
$GLOBALS['strEditZone'] = "Modifica zona";
$GLOBALS['strEditWebsite'] = "Modificare sito web";


// Campaign properties
$GLOBALS['strDontExpire'] = "Non far scadere";
$GLOBALS['strActivateNow'] = "Attiva immediatamente";
$GLOBALS['strSetSpecificDate'] = "Imposta data specifica";
$GLOBALS['strLow'] = "Bassa";
$GLOBALS['strHigh'] = "Alta";
$GLOBALS['strExpirationDate'] = "Data Fine";
$GLOBALS['strExpirationDateComment'] = "La campagna finirà alla fine di questo giorno";
$GLOBALS['strActivationDate'] = "Data Inzio";
$GLOBALS['strActivationDateComment'] = "La campagna incomincerà all'inizio di questo giorno";
$GLOBALS['strImpressionsRemaining'] = "Impressioni Rimaste";
$GLOBALS['strClicksRemaining'] = "Click rimasti";
$GLOBALS['strConversionsRemaining'] = "Conversioni rimaste";
$GLOBALS['strImpressionsBooked'] = "Impressioni Prenotate";
$GLOBALS['strClicksBooked'] = "Click Prenotati";
$GLOBALS['strConversionsBooked'] = "Conversioni Prenotate";
$GLOBALS['strCampaignWeight'] = "Imposta il peso della campagna";
$GLOBALS['strAnonymous'] = "Nascondi l'inserzionista e il sito di questa campagna";
$GLOBALS['strTargetPerDay'] = "al giorno.";
$GLOBALS['strCampaignWarningRemnantNoWeight'] = "Questa campagna è stata impostata come Remnant,
ma il suo peso è impostato a zero o non è stato specificato.
Questo comporterà la disattivazione della campagna: i suoi banner
non verranno visualizzati finché il peso non sarà impostato
ad un numero valido.

Sei sicuro di voler procedere?";
$GLOBALS['strCampaignWarningEcpmNoRevenue'] = "This campaign uses eCPM optimisation
but the 'revenue' is set to zero or it has not been specified.
This will cause the campaign to be deactivated
and its banners won't be delivered until the
revenue has been set to a valid number.

Are you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight'] = "Il tipo di questa campagna è stato impostato su Override,
ma il peso è impostato a zero o non è stato specificato.
Questo farà disattivare la campagna
e i suoi banner non saranno consegnati
fino a quando il peso non sarà stato impostato su un numero valido.

Sei sicuro di voler continuare?";
$GLOBALS['strCampaignWarningNoTarget'] = "Il tipo di questa campagna è stato impostato su Contract,
ma il limite giornaliero non è specificato.
Questo farà disattivare la campagna e
i suoi banner non saranno consegnati fino a quando non
sarà stato impostato un limite valido.

Sei sicuro di voler continuare?";
$GLOBALS['strCampaignStatusPending'] = "In attesa";
$GLOBALS['strCampaignStatusInactive'] = "inattiva";
$GLOBALS['strCampaignStatusRunning'] = "In funzione";
$GLOBALS['strCampaignStatusPaused'] = "In pausa";
$GLOBALS['strCampaignStatusAwaiting'] = "In attesa";
$GLOBALS['strCampaignStatusExpired'] = "Completato";
$GLOBALS['strCampaignStatusApproval'] = "In attesa di approvazione »";
$GLOBALS['strCampaignStatusRejected'] = "Rifiutata";
$GLOBALS['strCampaignStatusAdded'] = "Aggiunto";
$GLOBALS['strCampaignStatusStarted'] = "Avviato";
$GLOBALS['strCampaignStatusRestarted'] = "Riavviato";
$GLOBALS['strCampaignStatusDeleted'] = "Eliminata";
$GLOBALS['strCampaignType'] = "Nome Campagna";
$GLOBALS['strType'] = "Tipo";
$GLOBALS['strContract'] = "Contratto";
$GLOBALS['strOverride'] = "Override";
$GLOBALS['strOverrideInfo'] = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract'] = "Contratto";
$GLOBALS['strStandardContractInfo'] = "Contract campaigns are for smoothly delivering the impressions
    required to achieve a specified time-critical performance requirement. That is, Contract campaigns are for when
    an advertiser has paid specifically to have a given number of impressions, clicks and/or conversions to be
    achieved either between two dates, or per day.";
$GLOBALS['strRemnant'] = "Remnant";
$GLOBALS['strRemnantInfo'] = "Il tipo di campagna predefinito. Le campagne Remnant hanno diverse
    opzioni di consegna, e dovresti idealmente avere sempre almeno una campagna Remnant
    collegata ad ogni zona, per garantire che ci sia sempre qualcosa da mostrare.
    Usa campagne Remnant per mostrare banner casa, banner pubblicitari o anche
    pubblicità diretta che è stata venduta, ma dove non vi è un requisito di rendimento temporale
    critico per la campagna a cui aderire.";
$GLOBALS['strECPMInfo'] = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strPricing'] = "Tariffe";
$GLOBALS['strPricingModel'] = "Modello di pricing";
$GLOBALS['strSelectPricingModel'] = "-- Seleziona il modello --";
$GLOBALS['strRatePrice'] = "Tariffa / prezzo";
$GLOBALS['strMinimumImpressions'] = "Minimo impressioni giornaliere";
$GLOBALS['strLimit'] = "Limite";
$GLOBALS['strLowExclusiveDisabled'] = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit'] = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled'] = "perché è disabilitato?";
$GLOBALS['strBackToCampaigns'] = "Torna a campagne";
$GLOBALS['strCampaignBanners'] = "Banner della campagna";
$GLOBALS['strCookies'] = "Cookies";

// Tracker
$GLOBALS['strTracker'] = "Tracker";
$GLOBALS['strTrackers'] = "Tracker";
$GLOBALS['strTrackerPreferences'] = "Preferenze tracker";
$GLOBALS['strAddTracker'] = "Aggiungi nuovo tracker";
$GLOBALS['strTrackerForAdvertiser'] = "per inserzionista";
$GLOBALS['strNoTrackers'] = "Attualmente non ci sono tracker definiti";
$GLOBALS['strConfirmDeleteTrackers'] = "Vuoi davvero procedere alla cancellazione di questo tracker?";
$GLOBALS['strConfirmDeleteTracker'] = "Vuoi davvero procedere alla cancellazione di questo tracker?";
$GLOBALS['strTrackerProperties'] = "Impostazioni tracker";
$GLOBALS['strDefaultStatus'] = "Stato predefinito";
$GLOBALS['strStatus'] = "Stato";
$GLOBALS['strLinkedTrackers'] = "Tracker collegati";
$GLOBALS['strTrackerInformation'] = "Informazioni Tracker";
$GLOBALS['strConversionWindow'] = "Finestra di conversione";
$GLOBALS['strUniqueWindow'] = "Finestra unica";
$GLOBALS['strClick'] = "Click";
$GLOBALS['strView'] = "Impressione";
$GLOBALS['strArrival'] = "Arrivo";
$GLOBALS['strManual'] = "Manuale";
$GLOBALS['strImpression'] = "Impressione";
$GLOBALS['strConversionType'] = "Tipo di conversione";
$GLOBALS['strLinkCampaignsByDefault'] = "Collega automaticamente le nuove campagne appena create";
$GLOBALS['strBackToTrackers'] = "Torna ai tracker";
$GLOBALS['strIPAddress'] = "IP Address";

// Banners (General)
$GLOBALS['strBanner'] = "Banner";
$GLOBALS['strBanners'] = "Banner";
$GLOBALS['strAddBanner'] = "Aggiungi nuovo banner";
$GLOBALS['strAddBanner_Key'] = "Aggiungi <u>n</u>uovo banner";
$GLOBALS['strBannerToCampaign'] = "Tue campagne";
$GLOBALS['strShowBanner'] = "Mostra banner";
$GLOBALS['strBannerProperties'] = "Impostazioni banner";
$GLOBALS['strBannerHistory'] = "Statistiche Banner";
$GLOBALS['strNoBanners'] = "Non è ancora stato creato nessun banner";
$GLOBALS['strNoBannersAddCampaign'] = "Non è stato definito alcun editore. Per creare una zona, prima <a href='affiliate-edit.php'>aggiungi un editore</a>.";
$GLOBALS['strNoBannersAddAdvertiser'] = "Non è stato definito alcun editore. Per creare una zona, prima <a href='affiliate-edit.php'>aggiungi un editore</a>.";
$GLOBALS['strConfirmDeleteBanner'] = "Vuoi veramente cancellare questo banner?";
$GLOBALS['strConfirmDeleteBanners'] = "Vuoi veramente cancellare questo banner?";
$GLOBALS['strShowParentCampaigns'] = "Mostra campagne";
$GLOBALS['strHideParentCampaigns'] = "Nascondi campagne";
$GLOBALS['strHideInactiveBanners'] = "Nascondi banner inattivi";
$GLOBALS['strInactiveBannersHidden'] = "banner inattivi nascosti";
$GLOBALS['strWarningMissing'] = "Attenzione, possibile omissione";
$GLOBALS['strWarningMissingClosing'] = "chiusura del tag \">\"";
$GLOBALS['strWarningMissingOpening'] = "apertura tag \"<\"";
$GLOBALS['strSubmitAnyway'] = "Invia comunque";
$GLOBALS['strBannersOfCampaign'] = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'

// Banner Preferences
$GLOBALS['strBannerPreferences'] = "Preferenze banner";
$GLOBALS['strCampaignPreferences'] = "Preferenze campagne";
$GLOBALS['strDefaultBanners'] = "Banner predefinito";
$GLOBALS['strDefaultBannerUrl'] = "URL dell'immagine predefinita";
$GLOBALS['strDefaultBannerDestination'] = "URL di destinazione predefinito";
$GLOBALS['strAllowedBannerTypes'] = "Tipi Di Banner Consentiti";
$GLOBALS['strTypeSqlAllow'] = "Consenti Banner Locali SQL";
$GLOBALS['strTypeWebAllow'] = "Consenti Banner Locali Webserver";
$GLOBALS['strTypeUrlAllow'] = "Consenti Banner Esterni";
$GLOBALS['strTypeHtmlAllow'] = "Consenti banner HTML";
$GLOBALS['strTypeTxtAllow'] = "Consentire gli annunci di testo";

// Banner (Properties)
$GLOBALS['strChooseBanner'] = "Per favore seleziona il tipo di banner";
$GLOBALS['strMySQLBanner'] = "Banner locale (SQL)";
$GLOBALS['strWebBanner'] = "Banner locale (su questo Webserver)";
$GLOBALS['strURLBanner'] = "Banner esterno";
$GLOBALS['strHTMLBanner'] = "Banner HTML";
$GLOBALS['strTextBanner'] = "Banner testuale";
$GLOBALS['strAlterHTML'] = "Modifica HTML per abilitare il tracciamento dei clic per:";
$GLOBALS['strIframeFriendly'] = "Questo banner può essere visualizzato in modo sicuro all'interno di un iframe (ad esempio non è espandibile)";
$GLOBALS['strUploadOrKeep'] = "Preferisci mantenere la<br />immagine esistente, o preferisci<br />caricarne un altra?";
$GLOBALS['strNewBannerFile'] = "Scegli <br />la immagine che vuoi <br />utilizzare per questo banner<br /><br />";
$GLOBALS['strNewBannerFileAlt'] = "Seleziona l'immagine che vuoi utilizzare nel caso il browser non supporti il file multimediale";
$GLOBALS['strNewBannerURL'] = "URL immagine (http://...)";
$GLOBALS['strURL'] = "URL di destinazione (http://...)";
$GLOBALS['strKeyword'] = "Parole chiave";
$GLOBALS['strTextBelow'] = "Testo sotto immagine";
$GLOBALS['strWeight'] = "Peso";
$GLOBALS['strAlt'] = "Testo Alternativo";
$GLOBALS['strStatusText'] = "Testo di stato";
$GLOBALS['strCampaignsWeight'] = "Peso Della Campagna";
$GLOBALS['strBannerWeight'] = "Peso del banner";
$GLOBALS['strBannersWeight'] = "Peso Del Banner";
$GLOBALS['strAdserverTypeGeneric'] = "Banner HTML Generico";
$GLOBALS['strDoNotAlterHtml'] = "Non modificare HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generico";
$GLOBALS['strBackToBanners'] = "Torna ai banner";
$GLOBALS['strUseWyswygHtmlEditor'] = "Usa Editor HTML WYSIWYG";
$GLOBALS['strChangeDefault'] = "Cambia predefinito";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML'] = "Aggiungi sempre il seguente codice HTML prima di questo banner";
$GLOBALS['strBannerAppendHTML'] = "Aggiungi sempre il seguente codice HTML dopo questo banner";

// Display Delviery Rules
$GLOBALS['strModifyBannerAcl'] = "Impostazioni di consegna";
$GLOBALS['strACL'] = "Impostazioni di consegna";
$GLOBALS['strACLAdd'] = "Aggiungi regola di consegna";
$GLOBALS['strApplyLimitationsTo'] = "Applica le regole di consegna a";
$GLOBALS['strAllBannersInCampaign'] = "Tutti i banner in questa campagna";
$GLOBALS['strRemoveAllLimitations'] = "Rimuovi tutte le regole di consegna";
$GLOBALS['strEqualTo'] = "è uguale a";
$GLOBALS['strDifferentFrom'] = "è differente da";
$GLOBALS['strLaterThan'] = "è successiva a";
$GLOBALS['strLaterThanOrEqual'] = "è successiva o uguale a";
$GLOBALS['strEarlierThan'] = "è precedente a";
$GLOBALS['strEarlierThanOrEqual'] = "è precedente o uguale a";
$GLOBALS['strContains'] = "contiene";
$GLOBALS['strNotContains'] = "non contiene";
$GLOBALS['strGreaterThan'] = "è maggiore di";
$GLOBALS['strLessThan'] = "è minore di";
$GLOBALS['strGreaterOrEqualTo'] = "è maggiore o uguale a";
$GLOBALS['strLessOrEqualTo'] = "è minore o uguale a";
$GLOBALS['strAND'] = "E";                          // logical operator
$GLOBALS['strOR'] = "O";                         // logical operator
$GLOBALS['strOnlyDisplayWhen'] = "Mostra questo banner solo quando:";
$GLOBALS['strWeekDays'] = "Giorni della settimana";
$GLOBALS['strTime'] = "Ora";
$GLOBALS['strDomain'] = "Dominio";
$GLOBALS['strSource'] = "Risorsa";
$GLOBALS['strBrowser'] = "Browser";
$GLOBALS['strOS'] = "Sistema Operativo";
$GLOBALS['strDeliveryLimitations'] = "Regole Di Consegna";

$GLOBALS['strDeliveryCappingReset'] = "Azzera contatore visualizzazioni dopo:";
$GLOBALS['strDeliveryCappingTotal'] = "in totale";
$GLOBALS['strDeliveryCappingSession'] = "per sessione";

if (!isset($GLOBALS['strCappingBanner'])) {
    $GLOBALS['strCappingBanner'] = array();
}
$GLOBALS['strCappingBanner']['title'] = "Limite di consegna per visitatore";
$GLOBALS['strCappingBanner']['limit'] = "Limita visualizzazioni banner a:";

if (!isset($GLOBALS['strCappingCampaign'])) {
    $GLOBALS['strCappingCampaign'] = array();
}
$GLOBALS['strCappingCampaign']['title'] = "Limite di consegna per visitatore";
$GLOBALS['strCappingCampaign']['limit'] = "Limita visualizzazioni campagna a:";

if (!isset($GLOBALS['strCappingZone'])) {
    $GLOBALS['strCappingZone'] = array();
}
$GLOBALS['strCappingZone']['title'] = "Limite di consegna per visitatore";
$GLOBALS['strCappingZone']['limit'] = "Limita visualizzazioni zona a:";

// Website
$GLOBALS['strAffiliate'] = "Sito";
$GLOBALS['strAffiliates'] = "Editori";
$GLOBALS['strAffiliatesAndZones'] = "Editori e Zone";
$GLOBALS['strAddNewAffiliate'] = "Aggiungi un nuovo editore";
$GLOBALS['strAffiliateProperties'] = "Impostazioni editore";
$GLOBALS['strAffiliateHistory'] = "Statistiche Sito Web";
$GLOBALS['strNoAffiliates'] = "Non è stato definito alcun editore. Per creare una zona, prima <a href='affiliate-edit.php'>aggiungi un editore</a>.";
$GLOBALS['strConfirmDeleteAffiliate'] = "Desideri realmente cancellare questo editore?";
$GLOBALS['strConfirmDeleteAffiliates'] = "Desideri realmente cancellare questo editore?";
$GLOBALS['strInactiveAffiliatesHidden'] = "editori inattivi nascosti";
$GLOBALS['strShowParentAffiliates'] = "Mostra editori padri";
$GLOBALS['strHideParentAffiliates'] = "Nascondi editori padri";

// Website (properties)
$GLOBALS['strWebsite'] = "Sito";
$GLOBALS['strWebsiteURL'] = "URL del sito";
$GLOBALS['strAllowAffiliateModifyZones'] = "Permetti a questo utente di modificare le proprie zone";
$GLOBALS['strAllowAffiliateLinkBanners'] = "Permetti a questo utente di collegare i banner alle proprie zone";
$GLOBALS['strAllowAffiliateAddZone'] = "Permetti a questo utente di definire nuove zone";
$GLOBALS['strAllowAffiliateDeleteZone'] = "Permetti a questo utente di cancellare le zone esistenti";
$GLOBALS['strAllowAffiliateGenerateCode'] = "Permetti a questo utente di generare il codice di invocazione";

// Website (properties - payment information)
$GLOBALS['strPostcode'] = "CAP";
$GLOBALS['strCountry'] = "Stato";

// Website (properties - other information)
$GLOBALS['strWebsiteZones'] = "Editori e Zone";

// Zone
$GLOBALS['strZone'] = "Zona";
$GLOBALS['strZones'] = "Zone";
$GLOBALS['strAddNewZone'] = "Aggiungi una nuova zona";
$GLOBALS['strAddNewZone_Key'] = "Aggiungi una <u>n</u>uova zona";
$GLOBALS['strZoneToWebsite'] = "Nessun sito";
$GLOBALS['strLinkedZones'] = "Zone collegate";
$GLOBALS['strAvailableZones'] = "Zone Disponibili";
$GLOBALS['strLinkingNotSuccess'] = "Collegamento non riuscito, riprova";
$GLOBALS['strZoneProperties'] = "Impostazioni zona";
$GLOBALS['strZoneHistory'] = "Storico zona";
$GLOBALS['strNoZones'] = "Attualmente non sono presenti zone definite";
$GLOBALS['strNoZonesAddWebsite'] = "Non è stato definito alcun editore. Per creare una zona, prima <a href='affiliate-edit.php'>aggiungi un editore</a>.";
$GLOBALS['strConfirmDeleteZone'] = "Desideri veramente procedere alla cancellazione di questa zona?";
$GLOBALS['strConfirmDeleteZones'] = "Desideri veramente procedere alla cancellazione di questa zona?";
$GLOBALS['strConfirmDeleteZoneLinkActive'] = "Ci sono ancora dei pagamenti per campagne collegate a questa zona, se la elimini non riuscirai ad eseguire le campagne ed ottenere i pagamenti.";
$GLOBALS['strZoneType'] = "Tipo di zona";
$GLOBALS['strBannerButtonRectangle'] = "Banner, Pulsante o Rettangolo";
$GLOBALS['strInterstitial'] = "Interstiziale o DHTML floating";
$GLOBALS['strPopup'] = "Popup";
$GLOBALS['strTextAdZone'] = "Inserzione testuale";
$GLOBALS['strEmailAdZone'] = "Zone Email/Newsletter";
$GLOBALS['strZoneVideoInstream'] = "Pubblicità video in linea";
$GLOBALS['strZoneVideoOverlay'] = "Pubblicità video sovrapposta";
$GLOBALS['strShowMatchingBanners'] = "Mostra banner corrispondenti";
$GLOBALS['strHideMatchingBanners'] = "Nascondi banner corrispondenti";
$GLOBALS['strBannerLinkedAds'] = "Banner collegati alla zona";
$GLOBALS['strCampaignLinkedAds'] = "Campagne collegate alla zona";
$GLOBALS['strInactiveZonesHidden'] = "zone inattive nascoste";
$GLOBALS['strWarnChangeZoneType'] = "Cambiando il tipo di zona a testo o email saranno persi i collegamenti a banner o campagne per via delle limitazioni di questo tipo di zona
<ul>
<li>Zone testuali possono essere collegate solo a inserzioni testuali</li>
<li>Zone delle campagne Email possono avere solo un banner attivo alla volta</li>
</ul>";
$GLOBALS['strWarnChangeZoneSize'] = 'Cambiando la dimensione della zona si perderanno i collegamenti con tutti i banner che non sono della nuova dimensione, e saranno aggiunti tutti i banner dalle campagne collegate che sono della nuova dimensione';
$GLOBALS['strWarnChangeBannerSize'] = 'Cambiando la dimensione del banner tutti i banner che non sono della nuova dimensione verranno scollegati dalle relative zone, e se la campagna di questo banner è collegato ad una zona della nuova dimensione, questo banner sarà collegato automaticamente';
$GLOBALS['strWarnBannerReadonly'] = 'Il banner è di sola lettura perchè un\'estensione è stata disabilitata. Contatta l\'amministratore del tuo sistema per maggiori informazioni.';
$GLOBALS['strZonesOfWebsite'] = 'in'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones'] = "Torna a zone";

$GLOBALS['strIab']['IAB_FullBanner(468x60)'] = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)'] = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)'] = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)'] = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)'] = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)'] = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)'] = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)'] = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*'] = "IAB Rectangle (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)'] = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)'] = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*'] = "IAB Medium Rectangle (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)'] = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*'] = "IAB Wide Skyscraper (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)'] = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)'] = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced'] = "Avanzate";
$GLOBALS['strChainSettings'] = "Impostazioni della catena";
$GLOBALS['strZoneNoDelivery'] = "Se nessun banner di questa zona <br />può essere fornito, prova a...";
$GLOBALS['strZoneStopDelivery'] = "Arrestare la consegna e non visualizzare alcun banner";
$GLOBALS['strZoneOtherZone'] = "Mostrare la zona selezionata in sostituzione";
$GLOBALS['strZoneAppend'] = "Aggiungi sempre il seguente codice HTML ai banner di questa zona";
$GLOBALS['strAppendSettings'] = "Impostazioni prefisso e suffisso";
$GLOBALS['strZonePrependHTML'] = "Codice HTML da utilizzare come prefisso per i banner testuali visualizzati in questa zona";
$GLOBALS['strZoneAppendNoBanner'] = "Utilizza come suffisso anche se non viene fornito alcun banner";
$GLOBALS['strZoneAppendHTMLCode'] = "Codice HTML";
$GLOBALS['strZoneAppendZoneSelection'] = "Popup o interstiziale";

// Zone probability
$GLOBALS['strZoneProbListChain'] = "Tutti i banner collegati alla zona selezionata sono al momento disattivati. <br />Questa è la catena di zone che verrà seguita:";
$GLOBALS['strZoneProbNullPri'] = "Tutti i banner collegati alla zona selezionata sono al momento disattivati";
$GLOBALS['strZoneProbListChainLoop'] = "Si è verificato un ciclo infinito seguendo la catena delle zone. La fornitura della zona è sospesa";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType'] = "Scegli la tipologia di collegamento con i banner";
$GLOBALS['strLinkedBanners'] = "Collega banner individuali";
$GLOBALS['strCampaignDefaults'] = "Collega banner per campagna di appartenenza";
$GLOBALS['strLinkedCategories'] = "Collega banner per categoria";
$GLOBALS['strWithXBanners'] = "Banner %d";
$GLOBALS['strRawQueryString'] = "Parola chiave";
$GLOBALS['strIncludedBanners'] = "Banner collegati";
$GLOBALS['strMatchingBanners'] = "{count} banner corrispondenti";
$GLOBALS['strNoCampaignsToLink'] = "Non ci sono attualmente campagne disponibili che possano essere collegati a questa zona";
$GLOBALS['strNoTrackersToLink'] = "Non ci sono attualmente tracker disponibili che possano essere collegati a questa campagna";
$GLOBALS['strNoZonesToLinkToCampaign'] = "Non ci sono zone disponibili a cui questa campagna possa essere collegata";
$GLOBALS['strSelectBannerToLink'] = "Seleziona il banner che vorresti collegare a questa zona:";
$GLOBALS['strSelectCampaignToLink'] = "Seleziona la campagna che vorresti collegare a questa zona:";
$GLOBALS['strSelectAdvertiser'] = "Seleziona inserzionista";
$GLOBALS['strSelectPlacement'] = "Seleziona campagna";
$GLOBALS['strSelectAd'] = "Seleziona banner";
$GLOBALS['strSelectPublisher'] = "Seleziona sito";
$GLOBALS['strSelectZone'] = "Seleziona zona";
$GLOBALS['strStatusPending'] = "In attesa";
$GLOBALS['strStatusApproved'] = "Approvato";
$GLOBALS['strStatusDisapproved'] = "Rifiutato";
$GLOBALS['strStatusDuplicate'] = "Duplicato";
$GLOBALS['strStatusOnHold'] = "Sospeso";
$GLOBALS['strStatusIgnore'] = "Ignorato";
$GLOBALS['strConnectionType'] = "Tipo";
$GLOBALS['strConnTypeSale'] = "Vendita";
$GLOBALS['strConnTypeLead'] = "Lead";
$GLOBALS['strConnTypeSignUp'] = "Iscrizione";
$GLOBALS['strShortcutEditStatuses'] = "Modifica stati";
$GLOBALS['strShortcutShowStatuses'] = "Mostra stati";

// Statistics
$GLOBALS['strStats'] = "Statistiche";
$GLOBALS['strNoStats'] = "Non ci sono statistiche disponibili";
$GLOBALS['strNoStatsForPeriod'] = "Non sono disponibili statistiche per il periodo dal %s al %s";
$GLOBALS['strGlobalHistory'] = "Statistiche Globali";
$GLOBALS['strDailyHistory'] = "Statistiche Giornaliere";
$GLOBALS['strDailyStats'] = "Statistiche Giornaliere";
$GLOBALS['strWeeklyHistory'] = "Statistiche Settimanali";
$GLOBALS['strMonthlyHistory'] = "Statistiche Mensili";
$GLOBALS['strTotalThisPeriod'] = "Totale in questo periodo";
$GLOBALS['strPublisherDistribution'] = "Distribuzione editori";
$GLOBALS['strCampaignDistribution'] = "Distribuzione campagne";
$GLOBALS['strViewBreakdown'] = "Visto da";
$GLOBALS['strBreakdownByDay'] = "Giorno";
$GLOBALS['strBreakdownByWeek'] = "Settimana";
$GLOBALS['strBreakdownByMonth'] = "Mese";
$GLOBALS['strBreakdownByDow'] = "Giorno della settimana";
$GLOBALS['strBreakdownByHour'] = "Ora";
$GLOBALS['strItemsPerPage'] = "Oggetti per pagina";
$GLOBALS['strDistributionHistoryCampaign'] = "Statistiche Di Distribuzione (Campagna)";
$GLOBALS['strDistributionHistoryBanner'] = "Statistiche Di Distribuzione (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Statistiche Di Distribuzione (Sito Web)";
$GLOBALS['strDistributionHistoryZone'] = "Statistiche Di Distribuzione (Zone)";
$GLOBALS['strShowGraphOfStatistics'] = "Mostra <u>G</u>rafico delle Statistiche";
$GLOBALS['strExportStatisticsToExcel'] = "<u>E</u>sporta Statistiche in Excel";
$GLOBALS['strGDnotEnabled'] = "E' necessario avere GD abilitato in PHP per mostrare i grafici. Per maggiori informazioni su coma abilitare GD sul tuo sistema consulta <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a>.";
$GLOBALS['strStatsArea'] = "Area";

// Expiration
$GLOBALS['strNoExpiration'] = "Data scadenza non impostata";
$GLOBALS['strEstimated'] = "Scadenza prevista";
$GLOBALS['strNoExpirationEstimation'] = "Non è ancora stata stimata nessuna scadenza.";
$GLOBALS['strDaysAgo'] = "giorni fa";
$GLOBALS['strCampaignStop'] = "Termina campagna";

// Reports
$GLOBALS['strAdvancedReports'] = "Report avanzati";
$GLOBALS['strStartDate'] = "Data Inzio";
$GLOBALS['strEndDate'] = "Data Fine";
$GLOBALS['strPeriod'] = "Periodo";
$GLOBALS['strLimitations'] = "Regole Di Consegna";
$GLOBALS['strWorksheets'] = "Fogli di lavoro";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers'] = "Tutti gli inserzionisti";
$GLOBALS['strAnonAdvertisers'] = "Inserzionisti anonimi";
$GLOBALS['strAllPublishers'] = "Tutti gli editori";
$GLOBALS['strAnonPublishers'] = "Editori anonimi";
$GLOBALS['strAllAvailZones'] = "Tutte le zone disponibili";

// Userlog
$GLOBALS['strUserLog'] = "Registro eventi";
$GLOBALS['strUserLogDetails'] = "Dettagli registro eventi";
$GLOBALS['strDeleteLog'] = "Cancella registro";
$GLOBALS['strAction'] = "Azione";
$GLOBALS['strNoActionsLogged'] = "Nessuna azione registrata";

// Code generation
$GLOBALS['strGenerateBannercode'] = "Selezione diretta";
$GLOBALS['strChooseInvocationType'] = "Seleziona il tipo di invocazione banner";
$GLOBALS['strGenerate'] = "Genera";
$GLOBALS['strParameters'] = "Impostazioni tag";
$GLOBALS['strFrameSize'] = "Dimensione frame";
$GLOBALS['strBannercode'] = "Codice banner";
$GLOBALS['strTrackercode'] = "Codice Tracker";
$GLOBALS['strBackToTheList'] = "Torna alla lista dei report";
$GLOBALS['strCharset'] = "Set di caratteri";
$GLOBALS['strAutoDetect'] = "Riconoscimento automatico";
$GLOBALS['strCacheBusterComment'] = "  * Sostituire tutte le istanze di {random} con
  * un numero casuale generato (o timestamp).
  *";
$GLOBALS['strSSLBackupComment'] = "
  * La sezione immagine di backup di questo tag è stata generata per l'uso su una pagina
  * non-SSL. Se questo tag deve essere posizionato su una pagina SSL, cambiare
  * 'http://%s/. .'
  * in
  * 'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment'] = "
  * Questo tag è stato generato per l'uso su una pagina non-SSL. Se questo tag
  * deve essere posizionato su una pagina SSL, cambia
  * 'http://%s/. .'
  * a
  * '↓ ://%s/...'
*";

// Errors
$GLOBALS['strErrorDatabaseConnection'] = "Errore di connessione al database.";
$GLOBALS['strErrorCantConnectToDatabase'] = "Errore fatale: %1\$s non può collegarsi al database. Per tanto non è possibile usare l'interfaccia amministrativa. Inoltre può essere stata compromessa la distribuzione dei banner. Possibili cause del problema:<ul><li>Il server database in questo momento non funziona</li> <li>L'indirizzo del server database è cambiato</li> <li>Le credenziali di accesso al server database non sono corrette</li> <li>L'estensione <i>%2\$s</i> di PHP non è stata caricata</li> </ul>";
$GLOBALS['strNoMatchesFound'] = "Nessuna corrispondenza trovata";
$GLOBALS['strErrorOccurred'] = "Segnalazione Errore";
$GLOBALS['strErrorDBPlain'] = "Si è verificato un errore nell'accesso al database";
$GLOBALS['strErrorDBSerious'] = "È stato riscontrato un grave problema con il database";
$GLOBALS['strErrorDBNoDataPlain'] = "Due to a problem with the database {$PRODUCT_NAME} couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious'] = "Due to a serious problem with the database, {$PRODUCT_NAME} couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt'] = "Probabilmente la tabella è corrotta ed è necessario ripararla. Per avere più informazioni su come riparare le tabelle corrotte, leggere il capitolo <i>Troubleshooting</i> della <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact'] = "Contatta l'amministratore di questo server ed informalo del problema.";
$GLOBALS['strErrorDBSubmitBug'] = "If this problem is reproducable it might be caused by a bug in {$PRODUCT_NAME}. Please report the following information to the creators of {$PRODUCT_NAME}. Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive'] = "The maintenance script has not been run in the last 24 hours.
In order for the application to function correctly it needs to run
every hour.

Please read the Administrator guide for more information
about configuring the maintenance script.";
$GLOBALS['strErrorLinkingBanner'] = "Non è stato possibile collegare questo banner a questa zona perché:";
$GLOBALS['strUnableToLinkBanner'] = "Impossibile collegare questo banner:";
$GLOBALS['strErrorEditingCampaignRevenue'] = "numero nel formato non corretto per il campo Informazioni ricavi ";
$GLOBALS['strErrorEditingCampaignECPM'] = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone'] = "Errore durante l'aggiornamento della zona:";
$GLOBALS['strUnableToChangeZone'] = "Impossibile applicare questi cambiamenti perché:";
$GLOBALS['strDatesConflict'] = "le date sono in conflitto con:";
$GLOBALS['strEmailNoDates'] = "Campaigns linked to Email Zones must have a start and end date set. {$PRODUCT_NAME} ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats'] = "Alcune di queste statistiche sono state loggate in un fuso orario non Universal Time, potrebbero non essere mostrate nel fuso orario corretto.";
$GLOBALS['strWarningInaccurateReadMore'] = "Leggi di più in proposito";
$GLOBALS['strWarningInaccurateReport'] = "Alcune delle statistiche in questo report sono state loggate in un fuso orario non Universal Time, potrebbero non essere mostrate nel fuso orario corretto";

//Validation
$GLOBALS['strRequiredFieldLegend'] = "denotes required field";
$GLOBALS['strFormContainsErrors'] = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strXRequiredField'] = "%s is required";
$GLOBALS['strEmailField'] = "Please enter a valid email";
$GLOBALS['strNumericField'] = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField'] = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField'] = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField'] = "%s must be a positive whole number";
$GLOBALS['strInvalidWebsiteURL'] = "URL del sito Web non valido";

// Email
$GLOBALS['strSirMadam'] = "Signore/Signora";
$GLOBALS['strMailSubject'] = "Rapporto inserzionista";
$GLOBALS['strMailHeader'] = "Gentile {contact},";
$GLOBALS['strMailBannerStats'] = "Di seguito troverai le statistiche di visualizzazione banner per {clientname}:";
$GLOBALS['strMailBannerActivatedSubject'] = "Campagna attivata";
$GLOBALS['strMailBannerDeactivatedSubject'] = "Campagna disattivata";
$GLOBALS['strMailBannerActivated'] = "Your campaign shown below has been activated because
the campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated'] = "La campagna segnalata di seguito è stata disattivata perché";
$GLOBALS['strMailFooter'] = "Cordiali saluti,
   {adminfullname}";
$GLOBALS['strClientDeactivated'] = "Questa campagna non risulta attualmente attiva poiché";
$GLOBALS['strBeforeActivate'] = "non ha raggiunto la data di attivazione";
$GLOBALS['strAfterExpire'] = "ha raggiunto la data di scadenza";
$GLOBALS['strNoMoreImpressions'] = "non sono rimaste visualizzazioni";
$GLOBALS['strNoMoreClicks'] = "non ci sono più Click a disposizione";
$GLOBALS['strNoMoreConversions'] = "non ci sono Vendite rimaste";
$GLOBALS['strWeightIsNull'] = "il suo peso è impostato a zero";
$GLOBALS['strRevenueIsNull'] = "its revenue is set to zero";
$GLOBALS['strTargetIsNull'] = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strNoViewLoggedInInterval'] = "Nessuna visualizzazione risulta essere stata loggata durante la creazione di questo rapporto";
$GLOBALS['strNoClickLoggedInInterval'] = "Nessun click risulta essere stata loggata durante la creazione di questo rapporto";
$GLOBALS['strNoConversionLoggedInInterval'] = "Nessuna conversione registrata durante l`arco di questo report";
$GLOBALS['strMailReportPeriod'] = "Questo rapporto include le statistiche da {startdate} fino a {enddate}.";
$GLOBALS['strMailReportPeriodAll'] = "Questo rapporto include  tutte le statistiche fino a {enddate}.";
$GLOBALS['strNoStatsForCampaign'] = "Non ci sono statistiche disponibili per questa campagna.";
$GLOBALS['strImpendingCampaignExpiry'] = "Scadenza campagna imminente";
$GLOBALS['strYourCampaign'] = "Tue campagne";
$GLOBALS['strTheCampiaignBelongingTo'] = "La campagna appartenente a";
$GLOBALS['strImpendingCampaignExpiryDateBody'] = "{clientname} mostrato di seguito sta per scadere il {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody'] = "{clientname} mostrato di seguito ha meno di {limit} impressioni rimaste.";
$GLOBALS['strImpendingCampaignExpiryBody'] = "Come risultato, la campagna verrà automaticamente disabilitata, e anche i seguenti banner verranno di conseguenza disabilitati:";

// Priority
$GLOBALS['strPriority'] = "Priorità";
$GLOBALS['strSourceEdit'] = "Modifica risorse";

// Preferences
$GLOBALS['strPreferences'] = "Preferenze";
$GLOBALS['strUserPreferences'] = "Preferenze utente";
$GLOBALS['strChangePassword'] = "Cambia password";
$GLOBALS['strChangeEmail'] = "Cambia email";
$GLOBALS['strCurrentPassword'] = "Password attuale";
$GLOBALS['strChooseNewPassword'] = "Scegli una nuova password";
$GLOBALS['strReenterNewPassword'] = "Ripeti la nuova password";
$GLOBALS['strNameLanguage'] = "Nome e lingua";
$GLOBALS['strAccountPreferences'] = "Preferenze account";
$GLOBALS['strCampaignEmailReportsPreferences'] = "Preferenze rapporti email della campagna";
$GLOBALS['strTimezonePreferences'] = "Preferenze fuso orario";
$GLOBALS['strAdminEmailWarnings'] = "Email di notifica amministratore";
$GLOBALS['strAgencyEmailWarnings'] = "Email di notifica agenzia";
$GLOBALS['strAdveEmailWarnings'] = "Email di notifica inserzionista";
$GLOBALS['strFullName'] = "Nome completo";
$GLOBALS['strEmailAddress'] = "Indirizzo email";
$GLOBALS['strUserDetails'] = "Dettagli utente";
$GLOBALS['strUserInterfacePreferences'] = "Preferenze interfaccia utente";
$GLOBALS['strPluginPreferences'] = "Preferenze principali";
$GLOBALS['strColumnName'] = "Nome colonna";
$GLOBALS['strShowColumn'] = "Mostra colonna";
$GLOBALS['strCustomColumnName'] = "Nome colonna personalizzato";
$GLOBALS['strColumnRank'] = "Colonna Rank";

// Long names
$GLOBALS['strRevenue'] = "Entrate";
$GLOBALS['strNumberOfItems'] = "Numero di oggetti";
$GLOBALS['strRevenueCPC'] = "Ricavo Cost Per Click (CPC)";
$GLOBALS['strERPM'] = "ERPM";
$GLOBALS['strERPC'] = "ERPC";
$GLOBALS['strERPS'] = "ERPS";
$GLOBALS['strEIPM'] = "EIPM";
$GLOBALS['strEIPC'] = "EIPC";
$GLOBALS['strEIPS'] = "EIPS";
$GLOBALS['strECPM'] = "ECPM";
$GLOBALS['strECPC'] = "ECPC";
$GLOBALS['strECPS'] = "ECPS";
$GLOBALS['strPendingConversions'] = "Conversioni in attesa";
$GLOBALS['strImpressionSR'] = "Visualizzazione SR";
$GLOBALS['strClickSR'] = "Click SR";

// Short names
$GLOBALS['strRevenue_short'] = "Ric.";
$GLOBALS['strBasketValue_short'] = "BV";
$GLOBALS['strNumberOfItems_short'] = "Num. Ogg.";
$GLOBALS['strRevenueCPC_short'] = "Ric. CPC";
$GLOBALS['strERPM_short'] = "ERPM";
$GLOBALS['strERPC_short'] = "ERPC";
$GLOBALS['strERPS_short'] = "ERPS";
$GLOBALS['strEIPM_short'] = "EIPM";
$GLOBALS['strEIPC_short'] = "EIPC";
$GLOBALS['strEIPS_short'] = "EIPS";
$GLOBALS['strECPM_short'] = "ECPM";
$GLOBALS['strECPC_short'] = "ECPC";
$GLOBALS['strECPS_short'] = "ECPS";
$GLOBALS['strID_short'] = "ID";
$GLOBALS['strRequests_short'] = "Ric.";
$GLOBALS['strImpressions_short'] = "Impr.";
$GLOBALS['strClicks_short'] = "Click";
$GLOBALS['strCTR_short'] = "CTR";
$GLOBALS['strConversions_short'] = "Conv.";
$GLOBALS['strPendingConversions_short'] = "Conv. in attesa";
$GLOBALS['strImpressionSR_short'] = "Impr. SR";
$GLOBALS['strClickSR_short'] = "Click SR";

// Global Settings
$GLOBALS['strConfiguration'] = "Configurazione";
$GLOBALS['strGlobalSettings'] = "Impostazioni globali";
$GLOBALS['strGeneralSettings'] = "Impostazioni generali";
$GLOBALS['strMainSettings'] = "Impostazioni principali";
$GLOBALS['strPlugins'] = "Plugin";
$GLOBALS['strChooseSection'] = 'Scegli sezione';

// Product Updates
$GLOBALS['strProductUpdates'] = "Ricerca aggiornamenti";
$GLOBALS['strViewPastUpdates'] = "Gestisci scorsi aggiornamenti e backup";
$GLOBALS['strFromVersion'] = "Dalla versione";
$GLOBALS['strToVersion'] = "alla versione";
$GLOBALS['strToggleDataBackupDetails'] = "Altera i dettagli dei dati di backup";
$GLOBALS['strClickViewBackupDetails'] = "clicca per mostrare i dettagli";
$GLOBALS['strClickHideBackupDetails'] = "clicca per nascondere i dettagli";
$GLOBALS['strShowBackupDetails'] = "Mostra i dettagli";
$GLOBALS['strHideBackupDetails'] = "Nascondi i dettagli";
$GLOBALS['strBackupDeleteConfirm'] = "Confermi l'eliminazione di tutti i backup creati da questo aggiornamento?";
$GLOBALS['strDeleteArtifacts'] = "Elimina gli artifatti";
$GLOBALS['strArtifacts'] = "Artifatti";
$GLOBALS['strBackupDbTables'] = "Backup tabelle del database";
$GLOBALS['strLogFiles'] = "File di registro";
$GLOBALS['strConfigBackups'] = "Conf. backup";
$GLOBALS['strUpdatedDbVersionStamp'] = "Aggiornato il numero di versione del database";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE'] = "Aggiornamento completato";
$GLOBALS['aProductStatus']['UPGRADE_FAILED'] = "Aggiornamento fallito";

// Agency
$GLOBALS['strAgencyManagement'] = "Gestione account";
$GLOBALS['strAgency'] = "Account";
$GLOBALS['strAddAgency'] = "Aggiungi un nuovo account";
$GLOBALS['strAddAgency_Key'] = "Aggiungi un <u>n</u>uovo account";
$GLOBALS['strTotalAgencies'] = "Account totali";
$GLOBALS['strAgencyProperties'] = "Proprietà dell'account";
$GLOBALS['strNoAgencies'] = "Non è stato definito alcun account";
$GLOBALS['strConfirmDeleteAgency'] = "Vuoi davvero cancellare questo account?";
$GLOBALS['strHideInactiveAgencies'] = "Nascondi gli account non attivi";
$GLOBALS['strInactiveAgenciesHidden'] = "account non attivi, nascosti";
$GLOBALS['strSwitchAccount'] = "Passa a questo account";
$GLOBALS['strAgencyStatusRunning'] = "Active";
$GLOBALS['strAgencyStatusInactive'] = "inattiva";
$GLOBALS['strAgencyStatusPaused'] = "Suspended";

// Channels
$GLOBALS['strChannel'] = "Set Regole Di Consegna";
$GLOBALS['strChannels'] = "Set Regole Di Consegna";
$GLOBALS['strChannelManagement'] = "Gestione Set Regole Di Consegna";
$GLOBALS['strAddNewChannel'] = "Aggiungi nuovo Set Regole di Consegna";
$GLOBALS['strAddNewChannel_Key'] = "Aggiungi <u>n</u>Nuovo Set Regole di Consegna";
$GLOBALS['strChannelToWebsite'] = "Nessun sito";
$GLOBALS['strNoChannels'] = "Al momento non ci sono set di regole di consegna definiti";
$GLOBALS['strNoChannelsAddWebsite'] = "Al momento non ci sono set di regole di consegna definiti, perché non ci sono siti web. Per creare un set di regole di consegna, <a href='affiliate-edit.php'>aggiungi prima un nuovo sito</a>.";
$GLOBALS['strEditChannelLimitations'] = "Modifica le regole di consegna per la regola di consegna impostata";
$GLOBALS['strChannelProperties'] = "Proprietà Set Regola Di Consegna";
$GLOBALS['strChannelLimitations'] = "Impostazioni di consegna";
$GLOBALS['strConfirmDeleteChannel'] = "Vuoi davvero eliminare questo set di regole di consegna?";
$GLOBALS['strConfirmDeleteChannels'] = "Vuoi davvero eliminare i set di regole di consegna selezionati?";
$GLOBALS['strChannelsOfWebsite'] = 'in'; //this is added between page name and website name eg. 'delivery rule sets in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName'] = "Nome variabile";
$GLOBALS['strVariableDescription'] = "Descrizione";
$GLOBALS['strVariableDataType'] = "Tipo di dati";
$GLOBALS['strVariablePurpose'] = "Scopo";
$GLOBALS['strGeneric'] = "Generico";
$GLOBALS['strBasketValue'] = "Valore del cesto";
$GLOBALS['strNumItems'] = "Numero di oggetti";
$GLOBALS['strVariableIsUnique'] = "Conversione Dedup?";
$GLOBALS['strNumber'] = "Numero";
$GLOBALS['strString'] = "Stringa";
$GLOBALS['strTrackFollowingVars'] = "Traccia la seguente variabile";
$GLOBALS['strAddVariable'] = "Aggiungi variabile";
$GLOBALS['strNoVarsToTrack'] = "Nessuna variabile da tracciare";
$GLOBALS['strVariableRejectEmpty'] = "Rifiuta se vuoto?";
$GLOBALS['strTrackingSettings'] = "Impostazioni tracciamenti";
$GLOBALS['strTrackerType'] = "Tipo di tracciatore";
$GLOBALS['strTrackerTypeJS'] = "Traccia variabili Javascript";
$GLOBALS['strTrackerTypeDefault'] = "Traccia variabili Javascript (compatibilità con le versioni precedenti, richiesto l'escaping)";
$GLOBALS['strTrackerTypeDOM'] = "Traccia elementi HTML utilizzando DOM";
$GLOBALS['strTrackerTypeCustom'] = "Codice Javascript personalizzato";
$GLOBALS['strVariableCode'] = "Codice tracciamento Javascript";

// Password recovery
$GLOBALS['strForgotPassword'] = "Hai dimenticato la password?";
$GLOBALS['strPasswordRecovery'] = "Password reset";
$GLOBALS['strEmailRequired'] = "Email è un campo richiesto";
$GLOBALS['strPwdRecWrongId'] = "ID errato";
$GLOBALS['strPwdRecEnterEmail'] = "Inserisci il tuo indirizzo e-mail qui sotto";
$GLOBALS['strPwdRecEnterPassword'] = "Inserisci qui sotto la nuova password";
$GLOBALS['strProceed'] = "Proceed >";
$GLOBALS['strNotifyPageMessage'] = "An e-mail has been sent to you, which includes a link that will allow you
                                         to reset your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return to the main login page.</a>";

$GLOBALS['strPwdRecEmailPwdRecovery'] = "Reset Your %s Password";
$GLOBALS['strPwdRecEmailBody'] = "Dear {name},

You, or someone pretending to be you, recently requested that your {$PRODUCT_NAME} password be reset.

If this request was made by you, then you can reset the password for your username '{username}' by
clicking on the following link:

{reset_link}

If you submitted the password reset request by mistake, or if you didn't make a request at all, simply
ignore this email. No changes have been made to your password and the password reset link will expire
automatically.

If you continue to receive these password reset mails, then it may indicate that someone is attempting
to gain access to your username. In that case, please contact the support team or system administrator
for your {$PRODUCT_NAME} system, and notify them of the situation.

{admin_signature}";
$GLOBALS['strPwdRecEmailSincerely'] = "Sincerely,";

// Audit
$GLOBALS['strAdditionalItems'] = "e oggetti aggiuntivi";
$GLOBALS['strFor'] = "per";
$GLOBALS['strHas'] = "era";
$GLOBALS['strBinaryData'] = "Dati binari";
$GLOBALS['strAuditTrailDisabled'] = "L'amministratore ha disabilitato Audit Trail. Non saranno registrati e mostrati ulteriori eventi nella lista Audit Trail.";

// Widget - Audit
$GLOBALS['strAuditNoData'] = "Nessuna attività dell`utente  è stata registrata durante il periodo di tempo che hai selezionato.";
$GLOBALS['strAuditTrail'] = "Audit Trail";
$GLOBALS['strAuditTrailSetup'] = "Importa Audit Trail oggi";
$GLOBALS['strAuditTrailGoTo'] = "Vai alla pagina Audit Trail";
$GLOBALS['strAuditTrailNotEnabled'] = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within {$PRODUCT_NAME}</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='{$PRODUCT_DOCSURL}/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo'] = "Vai alla pagina delle campagne";
$GLOBALS['strCampaignSetUp'] = "Impostare una campagna di oggi";
$GLOBALS['strCampaignNoRecords'] = "<li>Le campagne ti permettono di raggruppare insieme banner di ogni dimensione che condividono gli stessi requisiti</li><li>Risparmia tempo definendo guppi di banner e non dovrai più impostare tutti i parametri singolarmente per ogni banner</li><li>Consulta la <a class='site-link' target='help' href='{$PRODUCT_DOCSURL}/inventory/advertisersAndCampaigns/campaigns'>Documentazione sulle Campagne</a>!</li>";
$GLOBALS['strCampaignNoRecordsAdmin'] = "<li>Non ci sono attività da mostrare.</li>";

$GLOBALS['strCampaignNoDataTimeSpan'] = "Nessuna campagna avviata o finita durante il periodo selezionato";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>";
$GLOBALS['strCampaignAuditTrailSetup'] = "Attiva Audit Trail per iniziare a vedere le campagne";

$GLOBALS['strUnsavedChanges'] = "I cambiamenti effettuati su questa pagina non sono stati salvati, accertati di premere \"Salva cambiamenti\" al termine";
$GLOBALS['strDeliveryLimitationsDisagree'] = "ATTENZIONE: Le regole di consegna nella cache <strong>NON COINCIDONO</strong> con le regole di consegna mostrate di seguito<br />Si prega di salvare le modifiche per aggiornare le regole di consegna nella cache";
$GLOBALS['strDeliveryRulesDbError'] = "ATTENZIONE: Si è verificato un errore nel database durante il salvagtaggio delle regole di consegna. Si prega di controllare attentamente le regole di consegna qui sotto e, se necessario, aggiornare.";
$GLOBALS['strDeliveryRulesTruncation'] = "ATTENZIONE: MySQL troncato i dati durante il salvataggio delle regole di consegna, così i valori originali sono stati ripristinati. Si prega di ridurre la dimensione delle regole e riprovare.";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Alcune regole di consegna segnalano valori errati:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Advertiser <a href='%s'>%s</a> has been updated";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "Eliminati tutti gli inserzionisti selezionati";

$GLOBALS['strTrackerHasBeenAdded'] = "Tracker <a href='%s'>%s</a> has been added";
$GLOBALS['strTrackerHasBeenUpdated'] = "Tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "All selected trackers have been deleted";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Tracker <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Tracker <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenUpdated'] = "Campaign <a href='%s'>%s</a> has been updated";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "La campagna <b>%s</b> è stata cancellata";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "Tutte le campagne selezionate sono state eliminate";
$GLOBALS['strCampaignHasBeenDuplicated'] = "La campagna <a href='%s'>%s</a> è stata copiata in <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "La campagna <b>%s</b> è stata spostata all'inserzionista <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Il banner <a href='%s'>%s</a> è stato aggiunto";
$GLOBALS['strBannerHasBeenUpdated'] = "Il banner <a href='%s'>%s</a> è stato aggiornato";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Le impostazioni avanzate per il banner <a href='%s'>%s</a> sono state aggiornate";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Le opzioni di consegna per il banner <a href='%s'>%s</a> sono state aggiornate";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Le opzioni di consegna per il banner <a href='%s'>%s</a> sono state applicate a %d banner";
$GLOBALS['strBannerHasBeenDeleted'] = "Il banner <b>%s</b> è stato eliminato";
$GLOBALS['strBannersHaveBeenDeleted'] = "Tutti i banner selezionati sono stati eliminati";
$GLOBALS['strBannerHasBeenDuplicated'] = "Il banner <a href='%s'>%s</a> è stato copiato in <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Il banner <b>%s</b> è stato spostato nella campagna <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Il banner <a href='%s'>%s</a> è stato attivato";
$GLOBALS['strBannerHasBeenDeactivated'] = "Il banner <a href='%s'>%s</a> è stato disattivato";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zona/e collegata/e";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zona/e scollegata/e";

$GLOBALS['strWebsiteHasBeenAdded'] = "Il sito web <a href='%s'>%s</a> è stato aggiunto, <a href='%s'>aggiungi una zona</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Il sito web <a href='%s'>%s</a> è stato aggiornato";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Il sito web <b>%s</b> è stato eliminato";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "Tutti i siti web selezionati sono stati eliminati";
$GLOBALS['strWebsiteHasBeenDuplicated'] = "Il sito web <a href='%s'>%s</a> è stato copiato in <a href='%s'>%s</a>";

$GLOBALS['strZoneHasBeenAdded'] = "La zona <a href='%s'>%s</a> è stata aggiunta";
$GLOBALS['strZoneHasBeenUpdated'] = "La zona <a href='%s'>%s</a> è stata aggiornata";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Le impostazioni avanzate per la zona <a href='%s'>%s</a> sono state aggiornate";
$GLOBALS['strZoneHasBeenDeleted'] = "La zona <b>%s</b> è stata cancellata";
$GLOBALS['strZonesHaveBeenDeleted'] = "Tutte le zone selezionate sono state cancellate";
$GLOBALS['strZoneHasBeenDuplicated'] = "La zona <a href='%s'>%s</a> è stata copiata in <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "La zona <b>%s</b> è stata spostata nel sito <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Il banner è stato collegato alla zona <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "La campagna è stata collegata alla zona <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Il banner è stato scollegato dalla zona <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "La campagna è stata scollegata dalla zona <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Il set di Regole di consegna <a href='%s'>%s</a> è stato aggiunto. <a href='%s'>Imposta le regole di consegna.</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Il set di Regole di consegna <a href='%s'>%s</a> è stato aggiornato";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Le opzioni di consegna per il set di Regole di consegna <a href='%s'>%s</a> sono state aggiornate";
$GLOBALS['strChannelHasBeenDeleted'] = "Il set di Regole di consegna <b>%s</b> è stato eliminato";
$GLOBALS['strChannelsHaveBeenDeleted'] = "Tutti i set di regole di consegna selezionati sono stati eliminati";
$GLOBALS['strChannelHasBeenDuplicated'] = "Il set di Regole di consegna <a href='%s'>%s</a> è stato copiato in <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Le preferenze di <b>%s</b> sono state aggiornate";
$GLOBALS['strEmailChanged'] = "La tua e-mail è stata cambiata";
$GLOBALS['strPasswordChanged'] = "La tua password è stata cambiata";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> sono stati aggiornati";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> sono stati aggiornati";
$GLOBALS['strTZPreferencesWarning'] = "Tuttavia, l'attivazione e la scadenza della campagna non sono state aggiornate, né le regole di consegna dei banner basate sul tempo.<br />Dovrai aggiornarli manualmente se vuoi che utilizzino il nuovo fuso orario";

// Report error messages
$GLOBALS['strReportErrorMissingSheets'] = "Nessun foglio di lavoro è stato selezionato per la relazione";
$GLOBALS['strReportErrorUnknownCode'] = "Codice di errore sconosciuto #";

/* ------------------------------------------------------- */
/* Keyboard shortcut assignments                           */
/* ------------------------------------------------------- */

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome'] = "h";
$GLOBALS['keyUp'] = "u";
$GLOBALS['keyNextItem'] = ",";
$GLOBALS['keyPreviousItem'] = ".";
$GLOBALS['keyList'] = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch'] = "c";
$GLOBALS['keyCollapseAll'] = "h";
$GLOBALS['keyExpandAll'] = "e";
$GLOBALS['keyAddNew'] = "n";
$GLOBALS['keyNext'] = "n";
$GLOBALS['keyPrevious'] = "p";
$GLOBALS['keyLinkUser'] = "u";
$GLOBALS['keyWorkingAs'] = "l";

<?php
/**
 * Internationalisation file for extension TweetANew
 *
 * @addtogroup Extensions
 * @license GPL
 */

$messages = array();

/** English
 * @author Gregory Varnum
 */
$messages['en'] = array(
	'tweetanew-desc' => 'Tweets when a page is created or edited. Depending on preferences set for the entire wiki, either automatically or from the edit page.',
	'tweetanew-accesskey' => 'e',
	'tweetanew-newaction' => 'Tweet about this new page',
	'tweetanew-newtooltip' => 'Send information about this new page to Twitter',
	'tweetanew-editaction' => 'Tweet about this edit',
	'tweetanew-edittooltip' => 'Send information about this edit to Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'by',
	'tweetanew-newdefault' => 'NEW PAGE: $1 - $2',
	'tweetanew-new1' => 'Looks like $1 was created at $2',
	'tweetanew-new2' => '$1 was recently created at $2',
	'tweetanew-new3' => 'Check out $2 - it has a new page on $1',
	'tweetanew-editdefault' => 'UPDATED PAGE: $1 - $2',
	'tweetanew-edit1' => 'Looks like $1 was updated at $2',
	'tweetanew-edit2' => '$1 was recently changed at $2',
	'tweetanew-edit3' => 'Check out $2 - it has some new content on $1',
);

/** Message documentation (Message documentation)
 * @author Gregory Varnum
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'tweetanew-desc' => '{{desc|name=Tweet A New|url=http://www.mediawiki.org/wiki/Extension:TweetANew}}',
	'tweetanew-newaction' => 'Used in editpage as description for option to tweet, if auto-tweet is disabled for new page',
	'tweetanew-newtooltip' => 'Tooltip describing option to tweet about new page from edit page, if otherwise enabled',
	'tweetanew-editaction' => 'Used in editpage as description for option to tweet, if auto-tweet is disabled for edits',
	'tweetanew-edittooltip' => 'Tooltip describing option to tweet about edit from edit page, if otherwise enabled',
	'tweetanew-minoredit' => 'Indicator used when edit is marked as minor, if minor edits are not already skipped - skip following indicator can be removed using MinorSpace setting',
	'tweetanew-authorcredit' => 'Used to provide credit to author of edit or new page',
	'tweetanew-newdefault' => 'Default tweet message used for new page, if random messages are disabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension
{{Identical|New page}}',
	'tweetanew-new1' => 'First random tweet message used for new pages, if random messages are enabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
	'tweetanew-new2' => 'Second random tweet message used for new pages, if random messages are enabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
	'tweetanew-new3' => 'Third random tweet message used for new pages, if random messages are enabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
	'tweetanew-editdefault' => 'Default tweet message used for edited pages, if random messages are disabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
	'tweetanew-edit1' => 'First random tweet message used for edited pages, if random messages are enabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
	'tweetanew-edit2' => 'Second random tweet message used for edited pages, if random messages are enabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
	'tweetanew-edit3' => 'Third random tweet message used for edited pages, if random messages are enabled. Parameters:
* $1 is title of the new page
* $2 is the final URL of the new page - shortened if a service is enabled via this extension',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'tweetanew-minoredit' => 'ط',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'tweetanew-desc' => "Tuitear cuando se crea o edita una páxina. Dependiendo de les preferencies configuraes pa la wiki ensembre, o de mou automáticu o dende a páxina d'edición.",
	'tweetanew-newaction' => 'Tuitear sobro esta páxina nueva',
	'tweetanew-newtooltip' => 'Unviar información tocante a esta nueva páxina a Twitter',
	'tweetanew-editaction' => 'Tuitear sobro esta edición',
	'tweetanew-edittooltip' => 'Unviar información tocante a esta edición a Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'por',
	'tweetanew-newdefault' => 'PÁXINA NUEVA: $1 - $2',
	'tweetanew-new1' => 'Paez que creóse $1 en $2',
	'tweetanew-new2' => '$1 vien de crease en $2',
	'tweetanew-new3' => 'Revise $2  - tien una páxina nueva sobro $1',
	'tweetanew-editdefault' => 'PÁXINA ANOVADA: $1 - $2',
	'tweetanew-edit1' => "Paez que s'anovó $1 en $2",
	'tweetanew-edit2' => '$1 vien de camudase en $2',
	'tweetanew-edit3' => 'Revise $2  - tien conteníu nuevu sobro $1',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'tweetanew-desc' => 'Дасылае паведамленьне ў Twitter пасьля стварэньня ці рэдагаваньня старонкі. У залежнасьці ад наладаў, можа адсылаць як аўтаматычна, гэтак і пры пазначэньні на старонцы рэдагаваньня.',
	'tweetanew-newaction' => 'Даслаць паведамленьне ў Twitter пра новую старонку',
	'tweetanew-newtooltip' => 'Даслаць паведамленьне пра гэтую новую старонку ў Twitter',
	'tweetanew-editaction' => 'Даслаць паведамленьне ў Twitter пра гэтае рэдагаваньне',
	'tweetanew-edittooltip' => 'Даслаць паведамленьне пра гэтае рэдагаваньне ў Twitter',
	'tweetanew-minoredit' => 'д',
	'tweetanew-authorcredit' => 'ад',
	'tweetanew-newdefault' => 'НОВАЯ СТАРОНКА: $1 — $2',
	'tweetanew-new1' => 'Хтосьці стварыў старонку «$1» па адрасе $2',
	'tweetanew-new2' => 'Нядаўна была створаная старонка «$1»: $2',
	'tweetanew-new3' => 'Наведайце новую старонку «$1» — $2',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'tweetanew-desc' => "Twitañ pa vez krouet ur bajenn pe pa vez degaset kemmoù enni. Diouzh ar mod m'emañ kefluniet ar penndibaboù er wiki klok e vo adalek ar bajenn skridaozañ pe ent emgefre.",
	'tweetanew-newaction' => 'Twitañ a-zivout ar bajenn nevez-mañ.',
	'tweetanew-newtooltip' => 'Kas titouroù war twitter a-zivout ar bajenn nevez-mañ.',
	'tweetanew-editaction' => "Twitañ a-zivout ar c'hemm-mañ",
	'tweetanew-edittooltip' => "Kas titouroù war twitter a-zivout ar c'hemm-mañ.",
	'tweetanew-minoredit' => 'd',
	'tweetanew-authorcredit' => 'gant',
	'tweetanew-newdefault' => 'PAJENN NEVEZ : $1 - $2',
	'tweetanew-new1' => 'Evit doare eo bet krouet $1 e $2',
	'tweetanew-new2' => 'Krouet eo bet $1 nevez zo e $2',
	'tweetanew-editdefault' => 'PAJENNOÙ HIZIVAET : $1 - $2',
	'tweetanew-edit1' => 'Evit doare eo bet nevesaet $1 e $2',
	'tweetanew-edit2' => 'Kemmet eo bet $1 nevez zo e $2',
	'tweetanew-edit3' => 'Gwiriit $2 - tammoù boued nevez zo e $1',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'tweetanew-authorcredit' => 'لە لایەن',
);

/** Czech (česky)
 * @author Vks
 */
$messages['cs'] = array(
	'tweetanew-minoredit' => 'm',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'tweetanew-desc' => 'Ermöglicht das automatisierte oder manuell ausgelöste Tweeten von neuen oder gerade bearbeiteten Seiten',
	'tweetanew-newaction' => 'Diese neue Seite tweeten',
	'tweetanew-newtooltip' => 'Informationen zu dieser neuen Seite an Twitter senden',
	'tweetanew-editaction' => 'Diese Bearbeitung tweeten',
	'tweetanew-edittooltip' => 'Informationen zu dieser Bearbeitung an Twitter senden',
	'tweetanew-minoredit' => 'K',
	'tweetanew-authorcredit' => 'von',
	'tweetanew-newdefault' => 'NEUE SEITE: $1 - $2',
	'tweetanew-new1' => 'Gerade wurde $1 erstellt: $2',
	'tweetanew-new2' => '$1 wurde kürzlich erstellt: $2',
	'tweetanew-new3' => 'Schaut Euch den Link $2 an - die neue Seite $1',
	'tweetanew-editdefault' => 'AKTUALISIERTE SEITE:  $1 - $2',
	'tweetanew-edit1' => 'Gerade wurde $1 aktualisiert: $2',
	'tweetanew-edit2' => '$1 wurde kürzlich aktualisiert: $2',
	'tweetanew-edit3' => 'Schaut Euch den Link $2 an - die Seite $1 wurde geändert',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'tweetanew-minoredit' => 'q',
	'tweetanew-authorcredit' => 'kerden',
	'tweetanew-newdefault' => 'PERA NEWİ: $1 - $2',
	'tweetanew-editdefault' => 'PELA NEWENYÊ: $1 - $2',
);

/** Esperanto (Esperanto)
 * @author Blahma
 */
$messages['eo'] = array(
	'tweetanew-minoredit' => 'e',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'tweetanew-desc' => 'Publíquelo en Twitter cuando se cree o edite una página. Dependiendo de las preferencias que establezca para todo el wiki, ya sea automáticamente o desde la página de edición.',
	'tweetanew-newaction' => 'Publique en Twitter sobre esta página nueva',
	'tweetanew-newtooltip' => 'Enviar información acerca de esta nueva página a Twitter',
	'tweetanew-editaction' => 'Publicar en Twitter acerca de esta edición',
	'tweetanew-edittooltip' => 'Enviar información sobre esta edición a Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'por',
	'tweetanew-newdefault' => 'NUEVA PÁGINA: $1 - $2',
	'tweetanew-new1' => 'Parece que la página $1 fue creada en la dirección $2',
	'tweetanew-new2' => 'La página $1 fue recientemente creada en $2',
	'tweetanew-new3' => 'Revise $2  - hay una nueva página en $1',
	'tweetanew-editdefault' => 'PÁGINA ACTUALIZADA:  $1 - $2',
	'tweetanew-edit1' => 'Parece que la página $1 se actualizó en la dirección $2',
	'tweetanew-edit2' => 'La página $1 fue cambiada recientemente en la dirección $2',
	'tweetanew-edit3' => 'Revise $2  -hay algunos contenidos nuevos en la dirección $1',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'tweetanew-minoredit' => 'p',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'tweetanew-authorcredit' => 'توسط',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'tweetanew-desc' => 'Twiittaa sivun luomisesta tai muokkaamisesta. Tämä tapahtuu koko wikin asetusten mukaan joko automaattisesti tai muokkaussivulta.',
	'tweetanew-newaction' => 'Twiittaa tästä uudesta sivusta',
	'tweetanew-newtooltip' => 'Tiedota tästä uudesta sivusta Twitterissä',
	'tweetanew-editaction' => 'Twiittaa tästä muokkauksesta',
	'tweetanew-edittooltip' => 'Tiedota tästä muokkauksesta Twitterissä',
	'tweetanew-minoredit' => 'p',
	'tweetanew-newdefault' => 'UUSI SIVU: $1 – $2',
	'tweetanew-editdefault' => 'PÄIVITETTY SIVU: $1 – $2',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author McDutchie
 */
$messages['fr'] = array(
	'tweetanew-desc' => "Tweeter lorsqu'une page est créée ou modifiée. Selon les préférences définis pour le wiki complet, soit automatiquement, soit depuis la page de modification.",
	'tweetanew-newaction' => 'Tweeter à propos de cette nouvelle page',
	'tweetanew-newtooltip' => 'Envoyer des informations sur cette nouvelle page sur Twitter',
	'tweetanew-editaction' => 'Tweeter à propos de cette modification',
	'tweetanew-edittooltip' => 'Envoyer des informations sur cette modification à Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'par',
	'tweetanew-newdefault' => 'NOUVELLE PAGE :  $1 - $2',
	'tweetanew-new1' => 'Ressemble à $1 qui a été créé sur $2',
	'tweetanew-new2' => '$1 a été récemment créé sur $2',
	'tweetanew-new3' => 'Vérifiez $2 - il y a une nouvelle page sur $1',
	'tweetanew-editdefault' => 'PAGE MISE À JOUR :  $1 - $2',
	'tweetanew-edit1' => 'Il semblerait que $1a été mis à jour sur $2',
	'tweetanew-edit2' => '$1 a été récemment modifié sur $2',
	'tweetanew-edit3' => 'Vérifiez $2 - il y a du nouveau contenu sur $1',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'tweetanew-minoredit' => 'p',
	'tweetanew-authorcredit' => 'per',
	'tweetanew-newdefault' => 'PÂGE NOVÈLA : $1 - $2',
	'tweetanew-editdefault' => 'PÂGE BETÂYE A JORN : $1 - $2',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'tweetanew-desc' => 'Fai un chío cando se crea ou edita unha páxina. Dependendo das preferencias definidas no wiki realízase automaticamene ou desde a páxina de edición.',
	'tweetanew-newaction' => 'Facer un chío sobre esta páxina nova',
	'tweetanew-newtooltip' => 'Enviar información sobre esta páxina nova ao Twitter',
	'tweetanew-editaction' => 'Facer un chío sobre esta edición',
	'tweetanew-edittooltip' => 'Enviar información sobre esta edición ao Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'por',
	'tweetanew-newdefault' => 'PÁXINA NOVA: $1 - $2',
	'tweetanew-new1' => 'Semella que se creou a páxina "$1" no enderezo $2',
	'tweetanew-new2' => 'Creouse a páxina "$1" no enderezo $2',
	'tweetanew-new3' => 'Bótalle unha ollada a "$2", unha nova páxina no enderezo $1',
	'tweetanew-editdefault' => 'PÁXINA ACTUALIZADA: $1 - $2',
	'tweetanew-edit1' => 'Semella que se actualizou a páxina "$1" no enderezo $2',
	'tweetanew-edit2' => 'Actualizouse a páxina "$1" no enderezo $2',
	'tweetanew-edit3' => 'Bótalle unha ollada a "$2", con novos contidos no enderezo $1',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'tweetanew-minoredit' => 'S',
	'tweetanew-authorcredit' => 'wot',
	'tweetanew-newdefault' => 'NOWA STRONA: $1 - $2',
	'tweetanew-editdefault' => 'ZAKTUALIZOWANA STRONA: $1 - $2',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'tweetanew-desc' => 'Invia un "tweet" quando un pagina es create o modificate. Dependente del preferentias definite pro le wiki integre, isto es facite o automaticamente, o ab le pagina de modification.',
	'tweetanew-newaction' => 'Inviar un "tweet" super iste nove pagina',
	'tweetanew-newtooltip' => 'Inviar information super iste nove pagina a Twitter',
	'tweetanew-editaction' => 'Inviar un "tweet" super iste modification',
	'tweetanew-edittooltip' => 'Inviar information super iste modification a Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'per',
	'tweetanew-newdefault' => 'NOVE PAGINA: $1 - $2',
	'tweetanew-new1' => 'Un pagina "$1" es create a $2',
	'tweetanew-new2' => '$1 ha essite create recentemente a $2',
	'tweetanew-new3' => 'Reguarda $2 - es un nove pagina super $1',
	'tweetanew-editdefault' => 'PAGINA ACTUALISATE: $1 - $2',
	'tweetanew-edit1' => 'Actualisation del pagina "$1" a $2',
	'tweetanew-edit2' => '$1 ha essite modificate recentemente a $2',
	'tweetanew-edit3' => 'Reguarda $2 - il ha nove contento in $1',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'tweetanew-desc' => "Twitta quando una pagina viene creata o modificata. In base alle preferenze impostate per l'intero wiki, è possibile farlo automaticamente o dal modulo di modifica.",
	'tweetanew-newaction' => 'Twitta di questa nuova pagina',
	'tweetanew-newtooltip' => 'Invia informazioni riguardo questa nuova pagina su Twitter',
	'tweetanew-editaction' => 'Twitta di questa modifica',
	'tweetanew-edittooltip' => 'Invia informazioni riguardo questa modifica su Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'di',
	'tweetanew-newdefault' => 'NUOVA PAGINA: $1 - $2',
	'tweetanew-new1' => 'Guarda come $1 è stata creata su $2',
	'tweetanew-new2' => '$1 è stata recentemente creata su $2',
	'tweetanew-new3' => "Controlla $2 - c'è una nuova pagina riguardo $1",
	'tweetanew-editdefault' => 'PAGINA AGGIORNATA: $1 - $2',
	'tweetanew-edit1' => 'Guarda come $1 è stata aggiornata su $2',
	'tweetanew-edit2' => '$1 è stata recentemente aggiornata su $2',
	'tweetanew-edit3' => "Controlla $2 - c'è nuovo contenuto riguardo $1",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'tweetanew-desc' => 'ページの作成/編集時にツイートする。自動的か編集ページからかは、ウィキ全体の設定に依存する',
	'tweetanew-newaction' => 'この新しいページについてツイート',
	'tweetanew-newtooltip' => 'この新しいページについて Twitter に情報を送信',
	'tweetanew-editaction' => 'この編集についてツイート',
	'tweetanew-edittooltip' => 'この編集について Twitter に情報を送信',
	'tweetanew-minoredit' => '細',
	'tweetanew-authorcredit' => 'by',
	'tweetanew-newdefault' => '新しいページ: $1 - $2',
	'tweetanew-new1' => '$1 が作成されたようです: $2',
	'tweetanew-new2' => '$1 が作成しました: $2',
	'tweetanew-new3' => 'チェックしてください: $2 - 新しいページ「$1」があります',
	'tweetanew-editdefault' => '更新されたページ: $1 - $2',
	'tweetanew-edit1' => '「$1」が更新されたようです: $2',
	'tweetanew-edit2' => '最近「$1」が更新されました: $2',
	'tweetanew-edit3' => 'チェックしてください $2 - 「$1」の内容が更新されました',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'tweetanew-minoredit' => 'მ',
	'tweetanew-authorcredit' => 'ავტორი',
	'tweetanew-newdefault' => 'ახალი გვერდი: $1 - $2',
	'tweetanew-editdefault' => 'განახლებული გვერდი: $1 - $2',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'tweetanew-newaction' => 'Dës nei Säit tweeten',
	'tweetanew-newtooltip' => 'Informatiounen iwwer des nei Säit op Twitter schécken',
	'tweetanew-editaction' => 'Dës Ännerung tweeten',
	'tweetanew-edittooltip' => 'Informatiounen iwwer des Ännerung op Twitter schécken',
	'tweetanew-minoredit' => 'k',
	'tweetanew-authorcredit' => 'vum',
	'tweetanew-newdefault' => 'NEI SÄIT: $1 - $2',
	'tweetanew-new1' => 'Et schéngt wéi wann $1 elo grad ugeluecht gi wier op $2',
	'tweetanew-new2' => '$1 gouf rezent op $2 ugeluecht',
	'tweetanew-new3' => 'Kuckt no op $2 - et gëtt eng nei Säit iwwer $1',
	'tweetanew-editdefault' => 'AKTUALISÉIERT SÄIT:  $1 - $2',
	'tweetanew-edit1' => 'Et schéngt wéi wann $1 op $2 aktualiséiert gi wier',
	'tweetanew-edit2' => '$1 gouf rezent op $2 aktualiséiert',
	'tweetanew-edit3' => 'Kuckt no $2 - et gëtt eng neien Inhalt op $1',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'tweetanew-desc' => 'Прави објава на Twitter при создавање или уредување на страница. Ова се врши или автоматски, или од уредувањето (зависно од нагодувањата на викито во целина).',
	'tweetanew-newaction' => 'Објави за новава страница на Twitter',
	'tweetanew-newtooltip' => 'Испратете информации за оваа нова страница на Twitter',
	'tweetanew-editaction' => 'Објави за уредувањево на Twitter',
	'tweetanew-edittooltip' => 'Испратете информации за ова уредување на Twitter',
	'tweetanew-minoredit' => 'с',
	'tweetanew-authorcredit' => 'од',
	'tweetanew-newdefault' => 'НОВА СТРАНИЦА: $1 - $2',
	'tweetanew-new1' => 'Се чини дека на $2 ја создадоа страницата $1',
	'tweetanew-new2' => 'На $2 неодамна ја создадоа страницата $1',
	'tweetanew-new3' => 'Погледајте ја $2 - има нова страница за $1',
	'tweetanew-editdefault' => 'ПОДНОВЕНА СТРАНИЦА: $1 - $2',
	'tweetanew-edit1' => 'Се чини дека на $2 ја подновија страницата $1',
	'tweetanew-edit2' => 'На $2 неодамна ја изменија страницата $1',
	'tweetanew-edit3' => 'Погледајте ја $2 - има некои нови содржини за $1',
);

/** Dutch (Nederlands)
 * @author Inholland
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'tweetanew-desc' => 'Verstuurt tweets wanneer een pagina wordt aangemaakt of bewerkt. Afhankelijk van de voorkeuren die zijn ingesteld voor de wiki, gebeurt dit automatisch of vanaf de bewerkingspagina.',
	'tweetanew-newaction' => 'Tweeten over deze nieuwe pagina',
	'tweetanew-newtooltip' => 'Gegevens over deze nieuwe pagina naar Twitter verzenden',
	'tweetanew-editaction' => 'Tweeten over deze bewerking',
	'tweetanew-edittooltip' => 'Gegevens over deze bewerking naar Twitter verzenden',
	'tweetanew-minoredit' => 'k',
	'tweetanew-authorcredit' => 'door',
	'tweetanew-newdefault' => 'NIEUWE PAGINA: $1 ($2)',
	'tweetanew-new1' => '$1 is aangemaakt ($2)',
	'tweetanew-new2' => '$1 is onlangs aangemaakt ($2)',
	'tweetanew-new3' => 'Kijk eens op de nieuwe pagina $1 ($2)',
	'tweetanew-editdefault' => 'BIJGEWERKTE PAGINA:  $1 ($2)',
	'tweetanew-edit1' => '$1 is bijgewerkt op $2',
	'tweetanew-edit2' => '$1 is onlangs aangepast op $2',
	'tweetanew-edit3' => 'Kijk eens op de aangepaste pagina $1 ($2)',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'tweetanew-desc' => "Tswidscha wonä Said vaänad worre isch. Abhängisch vunde Oischdellunge fas gsomde Wiki, endweda autdomadisch oda vunde b'awaided Saide.",
	'tweetanew-newaction' => 'Tswidscha iwa die naij Said',
	'tweetanew-newtooltip' => 'Schigg Auskinfd iwa die naij Said zu Twitter',
	'tweetanew-editaction' => "Tswidscha iwa die B'awaidung",
	'tweetanew-edittooltip' => "Schigg Auskinfd iwa die B'awaidung zu Twitter",
	'tweetanew-minoredit' => 'K',
	'tweetanew-authorcredit' => 'vun',
	'tweetanew-newdefault' => 'NAIJI SAID: $1 - $2',
	'tweetanew-new1' => '$1 isch grad oagleschd worre: $2',
	'tweetanew-new2' => '$1 isch keazlisch oagleschd worre: $2',
	'tweetanew-new3' => "Guggd mol $2 oa - s'hodä naiji Said uff $1",
	'tweetanew-editdefault' => 'AGDUALISIAD SAID: $1 - $2',
	'tweetanew-edit1' => '$1 isch grad agdualisiad worre: $2',
	'tweetanew-edit2' => '$1 isch keazlisch vaänad worre: $2',
	'tweetanew-edit3' => "Guggd mol $2 oa - s'hod oinische naije Inhald uff $1",
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'tweetanew-desc' => "A zagaja quand che na pàgina a l'é creà o modificà. Sconda dij gust ampostà për la wiki antrega, o automaticament o da la pàgina ëd modifica.",
	'tweetanew-newaction' => 'Zagajé a propòsit dë sta neuva pàgina',
	'tweetanew-newtooltip' => "Spedì dj'anformassion a propòsit dë sta neuva pàgina su Twitter",
	'tweetanew-editaction' => 'Zagajé a propòsit dë sta modifica',
	'tweetanew-edittooltip' => "Spedì dj'anformassion a propòsit dë sta modìfica a Twitter",
	'tweetanew-minoredit' => 'c',
	'tweetanew-authorcredit' => 'da',
	'tweetanew-newdefault' => 'PÀGINA NEUVA: $1 - $2',
	'tweetanew-new1' => 'A smija che $1 a sia stàita creà su $2',
	'tweetanew-new2' => "$1 a l'é stàit recentement creà su $2",
	'tweetanew-new3' => "Ch'a contròla $2 - a l'ha na neuva pàgina su $1",
	'tweetanew-editdefault' => 'PÀGINA AGIORNÀ: $1 - $2',
	'tweetanew-edit1' => 'A smija che $1 a sia stàit modificà su $2',
	'tweetanew-edit2' => "$1 a l'é stàit recentement modificà su $2",
	'tweetanew-edit3' => "Ch'a contròla $2 - a l'ha dël contnù neuv su $1",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'tweetanew-newdefault' => 'نوی مخ: $1 - $2',
);

/** Portuguese (português)
 * @author SandroHc
 */
$messages['pt'] = array(
	'tweetanew-editaction' => 'Twittar sobre esta edição',
	'tweetanew-edittooltip' => 'Enviar informação sobre esta edição para o Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'por',
	'tweetanew-newdefault' => 'NOVA PÁGINA: $1 - $2',
	'tweetanew-new1' => 'Parece que $1 foi criado em $2',
	'tweetanew-new2' => '$1 foi recentemente criado em $2',
	'tweetanew-editdefault' => 'PÁGINA ATUALIZADA: $1 - $2',
	'tweetanew-edit1' => 'Parece que $1 foi atualizado em $2',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'tweetanew-editaction' => 'Tweetuiește despre această modificare',
	'tweetanew-authorcredit' => 'de',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'da',
	'tweetanew-newdefault' => 'PAGENA NOVE: $1 - $2',
);

/** Russian (русский)
 * @author Kalan
 */
$messages['ru'] = array(
	'tweetanew-desc' => 'Твитит, когда создаются или редактируются страницы. Это происходит автоматически либо со страницы редактирования, в зависимости от настроек всей вики.',
	'tweetanew-newaction' => 'Твитнуть об этой новой странице',
	'tweetanew-newtooltip' => 'Отправить информацию о создании этой страницы в Twitter',
	'tweetanew-editaction' => 'Твитнуть об этой правке',
	'tweetanew-edittooltip' => 'Отправить информацию об этой правке в Twitter',
	'tweetanew-minoredit' => 'м',
	'tweetanew-authorcredit' => 'автор —',
	'tweetanew-newdefault' => 'Новая страница: $1 – $2',
	'tweetanew-new1' => 'Похоже, создали страницу $1 – $2',
	'tweetanew-new2' => 'Недавно создали страницу $1 – $2',
	'tweetanew-new3' => 'Посмотрите на $2 — там новая страница, $1',
	'tweetanew-editdefault' => 'Обновилась страница $1 – $2',
	'tweetanew-edit1' => 'Кажется, страницу $1 обновили: $2',
	'tweetanew-edit2' => 'Недавно обновилась страница $1 – $2',
	'tweetanew-edit3' => 'Посмотрите на $2 — там обновилась страница $1',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'tweetanew-newaction' => 'මෙම නව පිටුව පිළිබඳ ටුවිට් කරන්න',
	'tweetanew-newtooltip' => 'මෙය නව පිටුව පිළිබඳ විස්තර ටුවිටර් වෙත යවන්න',
	'tweetanew-editaction' => 'මෙම සංස්කරණය පිළිබඳ ටුවිට් කරන්න',
	'tweetanew-edittooltip' => 'මෙය සංස්කරණය පිළිබඳ විස්තර ටුවිටර් වෙත යවන්න',
	'tweetanew-minoredit' => 'සු',
	'tweetanew-authorcredit' => 'විසින්',
	'tweetanew-newdefault' => 'නව පිටුව: $1 - $2',
	'tweetanew-new1' => 'පෙනෙන විදිහට $1 $2 හිදී තනා ඇත',
	'tweetanew-new2' => '$1 $2 හිදී මෑතකදි තනා ඇත',
	'tweetanew-new3' => '$2 පරීක්ෂා කරන්න - එයට $1 හී නව පිටුවක් ඇත',
	'tweetanew-editdefault' => 'යාවත්කාලීන කරන ලද පිටුව: $1 - $2',
	'tweetanew-edit1' => 'පෙනෙන විදිහට $1 $2 හිදී යාවත්කාලීන කර ඇත',
	'tweetanew-edit2' => '$1 $2 හිදී මෑතකදි වෙනස් කර ඇත',
	'tweetanew-edit3' => '$2 පරීක්ෂා කරන්න - එයට $1 හී නව අන්තර්ගතයන් ඇත',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'tweetanew-minoredit' => 'м',
	'tweetanew-authorcredit' => 'од',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'od',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'tweetanew-desc' => 'Twittrar när en sida skapas eller redigeras, beroende på de angivna inställningarna för hela wikin; antingen automatiskt eller från redigeringssidan.',
	'tweetanew-newaction' => 'Twittra om denna nya sida',
	'tweetanew-newtooltip' => 'Skicka information om denna nya sida till Twitter',
	'tweetanew-editaction' => 'Twittra om denna redigering',
	'tweetanew-edittooltip' => 'Skicka information om denna redigering till Twitter',
	'tweetanew-minoredit' => 'm',
	'tweetanew-authorcredit' => 'av',
	'tweetanew-newdefault' => 'NY SIDA: $1 - $2',
	'tweetanew-new1' => 'Ser ut som $1 skapades på $2',
	'tweetanew-new2' => '$1 skapades nyligen på $2',
	'tweetanew-new3' => 'Spana in $2 - den har en ny sida på $1',
	'tweetanew-editdefault' => 'UPPDATERAD SIDA: $1 - $2',
	'tweetanew-edit1' => 'Ser ut som $1 uppdaterades på $2',
	'tweetanew-edit2' => '$1 ändrades nyligen på $2',
	'tweetanew-edit3' => 'Spana in $2 - den har lite nytt innehåll på $1',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'tweetanew-minoredit' => 'சி',
	'tweetanew-newdefault' => 'புதிய பக்கம்: $1 - $2',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'tweetanew-minoredit' => 'చి',
	'tweetanew-newdefault' => 'కొత్త పేజీ: $1 - $2',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'tweetanew-desc' => 'Tumitiririt kapag ang isang pahina ay nalikha o pinatnugutan. Batay sa mga kanaisan na itinakda para sa buong wiki, na maaaring kusa o mula sa pahina ng pamamatnugot.',
	'tweetanew-newaction' => 'Tumiririt na patungkol sa bagong pahinang ito',
	'tweetanew-newtooltip' => 'Magpadala ng impormasyon hinggil sa bagong pahinang ito papunta sa Twitter',
	'tweetanew-editaction' => 'Tumiririt na patungkol sa pamamatnugot na ito',
	'tweetanew-edittooltip' => 'Magpadala ng impormasyon hinggil sa pamamatnugot na ito papunta sa Twitter',
	'tweetanew-minoredit' => 'maliit',
	'tweetanew-authorcredit' => 'sa pamamagitan ng',
	'tweetanew-newdefault' => 'BAGONG PAHINA: $1 - $2',
	'tweetanew-new1' => 'Mukhang nalikha na ang $1 doon sa $2',
	'tweetanew-new2' => 'Kamakailang nalikha ang $1 doon sa $2',
	'tweetanew-new3' => 'Tingnan ang $2 - mayroon itong isang bagong pahina tungkol sa $1',
	'tweetanew-editdefault' => 'NAISAPANAHONG PAHINA: $1 - $2',
	'tweetanew-edit1' => 'Mukhang naisapanahon ang $1 doon sa $2',
	'tweetanew-edit2' => 'Kamakailang nabago ang $1 doon sa $2',
	'tweetanew-edit3' => 'Tingnan ang $2 - mayroon itong isang bagong nilalaman tungkol sa $1',
);

/** Turkish (Türkçe)
 * @author Bilalokms
 * @author Emperyan
 */
$messages['tr'] = array(
	'tweetanew-newaction' => 'Bu sayfa hakkında tweet atın',
	'tweetanew-editaction' => 'Bu değişiklik hakkında tweetleyin',
	'tweetanew-minoredit' => 'k',
	'tweetanew-newdefault' => 'YENİ SAYFA: $1 - $2',
	'tweetanew-editdefault' => 'SAYFA GÜNCELLENDİ: $1 - $2',
);

/** Ukrainian (українська)
 * @author Ата
 */
$messages['uk'] = array(
	'tweetanew-desc' => 'Твітить, коли створюються або редагуються сторінки. Залежно від налаштувань вікі, це відбувається автоматично або зі сторінки редагування.',
	'tweetanew-newaction' => 'Твітнути про цю нову сторінку',
	'tweetanew-newtooltip' => 'Надіслати інформацію про цю нову сторінку до Твітера',
	'tweetanew-editaction' => 'Твітнути про це редагування',
	'tweetanew-edittooltip' => 'Надіслати інформацію про це нове редагування до Твітера',
	'tweetanew-minoredit' => 'м',
	'tweetanew-authorcredit' => 'Автор:',
	'tweetanew-newdefault' => 'Нова сторінка: $1 — $2',
	'tweetanew-new1' => 'Схоже, створили сторінку $1 — $2',
	'tweetanew-new2' => 'Нещодавно було створено сторінку $1 — $2',
	'tweetanew-new3' => 'Подивіться на $2 — там нова сторінка, $1',
	'tweetanew-editdefault' => 'Оновлена сторінка: $1 — $2',
	'tweetanew-edit1' => 'Схоже, сторінку $1 оновили: $2',
	'tweetanew-edit2' => 'Нещодавно було оновлено сторінку $1 — $2',
	'tweetanew-edit3' => 'Подивіться на $2 — там оновилась сторінка, $1',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hzy980512
 * @author Shirayuki
 * @author Xiaomingyan
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'tweetanew-desc' => '创建或编辑页面时会发出广播。主要取决于整个维基的设置。',
	'tweetanew-newaction' => '该新页面的广播',
	'tweetanew-newtooltip' => '发送该新页面的信息至Twitter',
	'tweetanew-editaction' => '推此编辑',
	'tweetanew-edittooltip' => '发送有关此编辑的信息到Twitter',
	'tweetanew-minoredit' => '小',
	'tweetanew-authorcredit' => '由',
	'tweetanew-newdefault' => '新页面：$1-­­­­$2­­',
	'tweetanew-editdefault' => '已更新页面：$1 - $2',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'tweetanew-desc' => '創建或編輯頁面時會發出廣播。主要取決於整個維基的設置。',
	'tweetanew-newaction' => '該新頁面的廣播',
	'tweetanew-newtooltip' => '發送該新頁面的信息至Twitter',
	'tweetanew-editaction' => '推此編輯',
	'tweetanew-edittooltip' => '發送此次編輯的資訊至Twitter',
	'tweetanew-minoredit' => '小',
	'tweetanew-authorcredit' => '由',
	'tweetanew-newdefault' => '新頁面：$1 - $2',
	'tweetanew-new1' => '看來由$1於$2創建',
	'tweetanew-new2' => '$1最近於$2完成',
	'tweetanew-new3' => '查閱$2－它在$1上有新一頁',
	'tweetanew-editdefault' => '已更新頁面：$1－$2',
	'tweetanew-edit1' => '看來由$1於$2更新',
	'tweetanew-edit2' => '$1最近於$2更改',
	'tweetanew-edit3' => '查閱$2－它在$1上有新內容',
);

<?php
/**
 * MediaWiki extension to update a Twitter account each time an article is created or edited - depending on yours settings.
 * Excludes files or content outside of article namespaces.
 * Optional use of bit.ly to shorten and track URLs.
 * Installation and configuration instructions can be found on
 * https://www.mediawiki.org/wiki/Extension:TweetANew
 *
 * @addtogroup Extensions
 * @author Gregory Varnum and Moriel Schottlender after merging extensions by Joachim De Schrijver, Andrew Fitzgerald, Wendell Gaudencio, and Rohit Keshwani
 * @license GPL-2.0-or-later
 *
 * Version 1.0 and above based on merging extensions TweetANew v0.2 by Joachim De Schrijver, Wiki2twitter by Wendell Gaudencio,
 *    SendToTwitter by Rohit Keshwani and SendToTwitter2 by Rohit Keshwani, Andrew Fitzgerald.
 *
 * Some code inspired by the Mail2Facebook extension by Thiemo Schuff
 *
 * Use Matt Harris' OAuth library to make the connection
 *    This lives at: https://github.com/themattharris/tmhOAuth
 *    The most recent edition (as of this version's publish date) is included with this extension.
 *
 * Thank you to Johnduhart, Reedy, SPQRobin, krinkle, Nikerabbit, and Dereckson for feedback, bug reporting, bug fixing
 *    and cleaning up code
 * Thank you to Raymond, Crochet.david, Gomoko, Toliño, Bjankuloski06, Inholland, SPQRobin, Shirayuki, Meno25, Xuacu, Wizardist,
 *    EugeneZelenko, Fulup, Умар, Calak, Vks, Kghbln, Erdemaslancan, Blahma, Armando-Martin, Avjoska, Armin1392, Mjbmr, Silvonen,
 *    McDutchie, ChrisPtDe, Michawiki, Beta16, David1010, Priviet, Robby, Siebrand, Manuae, Borichètm, Dragonòt, SandroHc,
 *    Ahmed-Najib-Biabani-Ibrahimkhel, Stelistcristi, Joetaras, Kalan, පසිඳු කාවින්ද, Rancher, WikiPhoenix, Shanmugamp7, Veeven,
 *    AnakngAraw, Emperyan, Bilalokms, Ата, Hzy980512, Xiaomingyan, Yfdyh000, Justincheng12345,
 *    and others mentioned in i18n folder for translation work
 *
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'TweetANew' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['TweetANew'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for TweetANew extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the TweetANew extension requires MediaWiki 1.34+' );
}

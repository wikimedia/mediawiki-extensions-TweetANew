<?php
/**
 * MediaWiki extension to update a Twitter account each time an article is created or edited - depending on yours settings.
 * Excludes files or content outside of article namespaces.
 * Optional use of bit.ly to shorten and track URLs.
 * Installation and configuration instructions can be found on
 * https://www.mediawiki.org/wiki/Extension:TweetANew
 *
 * @addtogroup Extensions
 * @author Gregory Varnum merging extensions by Joachim De Schrijver, Andrew Fitzgerald, Wendell Gaudencio, and Rohit Keshwani
 * @license GPL
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
 *    and others mentioned in TweetANew.i18n.php for translation work
 *
 */

/**
 * Exit if called outside of MediaWiki
 */
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

/**
 * SETTINGS
 * --------
 * The following variables may be reset in your LocalSettings.php file.
 *
 * $wgTweetANewTweet['New']
 * 			- Automatically tweet about new articles
 *			  Default is true
 * $wgTweetANewTweet['Edit']
 * 			- Automatically tweet about articles when edited
 *			  Default is true
 * $wgTweetANewTweet['LessMinutesOld']
 *			- Minutes since last edit to wait before tweeting about a new edit
 *			  Default is 5
 * $wgTweetANewTweet['SkipMinor']
 *			- Skip minor edits
 *			  Default is true
 * $wgTweetANewText['Minor']
 *			- Indicate in tweet if edit is marked as minor
 			  Only applies if $wgTweetANewTweet['SkipMinor'] = false
 *			  Default is false
 * $wgTweetANewText['MinorSpace']
 *			- Include a space after minor edit indicator
 			  Only applies if $wgTweetANewTweet['SkipMinor'] = false and $wgTweetANewText['Minor'] = true
 *			  Default is true
 * $wgTweetANewText['NewRandom']
 *			- Use a mix of random messages in body of tweets about new articles
 *			  Default is true
 * $wgTweetANewText['NewRandomMax']
 *			- Maximum number of random messages to use
 			  Set any additional (beyond 3) using [[MediaWiki:Tweetanew-new4]], [[MediaWiki:Tweetanew-new5]], etc.
 *			  Default is 3
 * $wgTweetANewText['NewAuthor']
 *			- Display the author of the new article
 *			  Default is false
 * $wgTweetANewText['NewSummary']
 *			- Display content entered into new article's summary box
 *			  Default is false
 * $wgTweetANewText['EditRandom']
 *			- Use a mix of random messages in body of tweets about article edits
 *			  Default is true
 * $wgTweetANewText['EditRandomMax']
 *			- Maximum number of random messages to use
 			  Set any additional (beyond 3) using [[MediaWiki:Tweetanew-edit4]], [[MediaWiki:Tweetanew-edit5]], etc.
 *			  Default is 3
 * $wgTweetANewText['EditAuthor']
 *			- Display the author of the edit
 *			  Default is false
 * $wgTweetANewText['EditSummary']
 *			- Display content entered into edit's summary box
 *			  Default is false
 * $wgTweetANewText['RealName']
 *			- Determine if user's real name will be displayed instead of their username
 *			  Default is false
 * $wgTweetANewEditpage['Enable']
 *			- Determine if checkbox to tweet from edit page if $wgTweetANewTweet['New'] = false or $wgTweetANewTweet['Edit'] = false
 *			  Default is false
 * $wgTweetANewEditpage['Checked']
 *			- Determine if checkbox to tweet from edit page is automatically checked
 * $wgTweetANewBlacklist = array('',);
 *			- Array of pages blacklisted
 *			  Example: $wgTweetANewBlacklist = array('BadPage1','BadPage2');
 * $wgTweetANewTwitter['ConsumerKey']
 *			- Consumer key provided at https://dev.twitter.com/apps - be sure to have write and read permissions
 * $wgTweetANewTwitter['ConsumerSecret']
 *			- Consumer secret provided at https://dev.twitter.com/apps - be sure to have write and read permissions
 * $wgTweetANewTwitter['AccessToken']
 *			- Access token provided by the OAuth tool at https://dev.twitter.com/apps - be sure to have write and read permissions
 * $wgTweetANewTwitter['AccessTokenSecret']
 *			- Access token secret provided by the OAuth tool at https://dev.twitter.com/apps
 *			  Be sure to have write and read permissions
 * $wgTweetANewBitly['Enable']
 * 			- Display URL as bitly link - allowing you to track usage via your bitly account
 *			  Default is false
 * $wgTweetANewBitly['Login']
 *			- If bitly link display is enabled, enter your bitly user account - signup at: http://bitly.com/a/sign_up
 * $wgTweetANewBitly['API']
 *			- If bitly link display is enabled, enter your bitly API key - find your API key at: http://bitly.com/a/your_api_key
 * $wgTweetANewGoogl['Enable']
 * 			- Display URL as goo.gl link - allowing you to track usage via your Google Account
 *			  Default is false
 * $wgTweetANewGoogl['API']
 *			- If goo.gl link display is enabled, enter your goo.gl API key
 *			  Enable the URL shortener API and find your API key at: http://code.google.com/apis/console/
 *
 */

$wgTweetANewTweet = array(
	'New' => true,
	'Edit' => true,
	'LessMinutesOld' => 5,
	'SkipMinor' => true,
);

$wgTweetANewText = array(
	'Minor' => false, // Only applies if $wgTweetANewTweet['SkipMinor'] = false
	'MinorSpace' => true, // Only applies if $wgTweetANewTweet['SkipMinor'] = false and $wgTweetANewTweet['Minor'] = true
	'NewRandom' => true,
	'NewRandomMax' => 3,
	'NewAuthor' => false,
	'NewSummary' => false,
	'EditRandom' => true,
	'EditRandomMax' => 3,
	'EditAuthor' => false,
	'EditSummary' => false,
	'RealName' => false,
);

$wgTweetANewEditpage = array(
	'Enable' => false, // Only applies if $wgTweetANewTweet['New'] = false or $wgTweetANewTweet['Edit'] = false
	'Checked' => false, // Only applies if $wgTweetANewEditpage['Enable'] = true
);

$wgTweetANewBlacklist = array('',);

$wgTweetANewTwitter = array(
	'ConsumerKey' => '',
	'ConsumerSecret' => '',
	'AccessToken' => '',
	'AccessTokenSecret' => '',
);

$wgTweetANewBitly = array(
	'Enable' => false,
	'Login' => '', // Signup at: http://bitly.com/a/sign_up
	'API' => '', // Find your API key at: http://bitly.com/a/your_api_key
);

$wgTweetANewGoogl = array(
	'Enable' => false,
	'API' => '', // Enable this API and get API key from : http://code.google.com/apis/console/
);

/**
 * Class and localisation
 *
 */

$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['TweetANew'] = $dir . 'TweetANew.body.php';
$wgAutoloadClasses['tmhOAuth'] = $dir . 'lib/tmhOAuth.php';
$wgAutoloadClasses['tmhUtilities'] = $dir . 'lib/tmhUtilities.php';
$wgAutoloadClasses['GoogleURL'] = $dir . 'lib/GoogleURL.php';
$wgMessagesDirs['TweetANew'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['TweetANew'] = $dir . 'TweetANew.i18n.php';

/**
 * Credits
 *
 */

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'TweetANew',
	'version'        => '1.1.0',
	'author'         => '[https://www.mediawiki.org/wiki/User:Varnent Gregory Varnum] after merging extensions by
						[https://www.mediawiki.org/wiki/User:Joa_ds Joachim De Schrijver], Andrew Fitzgerald, Wendell Gaudencio, and Rohit Keshwani',
	'descriptionmsg' => 'tweetanew-desc',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:TweetANew',
);

/**
 * Call the hooks
 *
 */

$wgHooks['ArticleInsertComplete'][] = 'TweetANew::TweetANewNewArticle';
$wgHooks['ArticleSaveComplete'][] = 'TweetANew::TweetANewEditMade';
$wgHooks['EditPageBeforeEditChecks'][] = 'efTweetANewEditCheckBox';

/**
 * Function for tweeting about new or edited articles when auto-tweet if disabled
 *
 * @param $editpage
 * @param $checkboxes
 * @param $tabindex
 * @return bool
 */
function efTweetANewEditCheckBox( &$editpage, &$checkboxes, &$tabindex) {
	global $wgTweetANewEditpage, $wgTweetANewTweet;

	# Check if article is new - if checkboxes are enabled and if auto-tweets of edits are disabled
 	if (  $editpage->mTitle->exists() && $wgTweetANewEditpage['Enable'] && !$wgTweetANewTweet['Edit'] ) {
		$attribs = array(
			'tabindex'  => ++$tabindex,
			'accesskey' => wfMsg( 'tweetanew-accesskey' ),
			'id'        => 'wpTweetANewEdit',
		);

		# Prepare checkbox
		$checkboxes['twitter'] =
					Xml::check( 'wpTweetANewEdit', $wgTweetANewEditpage['Checked'], $attribs ) .
					"&nbsp;<label for='wpTweetANewEdit' title='". wfMsg('tweetanew-edittooltip')."'>".wfMsg('tweetanew-editaction')."</label>";
	}
	# Check if article is new - if checkboxes are enabled and if auto-tweets of new articles are disabled
	elseif ( $wgTweetANewEditpage['Enable'] && !$wgTweetANewTweet['New'] ) {
		$attribs = array(
			'tabindex'  => ++$tabindex,
			'accesskey' => wfMsg( 'tweetanew-accesskey' ),
			'id'        => 'wpTweetANew',
		);

		# Prepare checkbox
		$checkboxes['twitter'] =
					Xml::check( 'wpTweetANew', $wgTweetANewEditpage['Checked'], $attribs ) .
					"&nbsp;<label for='wpTweetANew' title='". wfMsg('tweetanew-newtooltip')."'>".wfMsg('tweetanew-newaction')."</label>";
	}
	return true;
}

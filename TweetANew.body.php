<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}
/**
 * Class file for the TweetANew extension
 *
 * @addtogroup Extensions
 * @license GPL
 */
// TweetANew
class TweetANew {

	/**
	 * Function for tweeting new wiki pages
	 *
	 * @param $wikiPage WikiPage
	 * @param $user User
	 * @param $summary
	 *
	 * @return bool
	 */
	public static function TweetANewNewPageContent( $wikiPage, $user, $summary ) {
		global $wgTweetANewTweet, $wgTweetANewText, $wgRequest;

		# Check if $wgTweetANewTweet['New'] is enabled or the Tweet checkbox was selected on the edit page
		if ( $wgRequest->getCheck( 'wpTweetANew' ) || $wgTweetANewTweet['New'] ) {
			# Check if page is in content namespace or if the Tweet checkbox was selected on the edit page
			if ( !MWNamespace::isContent( $wikiPage->getTitle()->getNamespace() )
				&& !$wgRequest->getCheck( 'wpTweetANew' )
			) {
				return true;
			}

			# Generate final url
			$finalurl = self::makeFinalUrl(
				$wikiPage->getTitle()->getFullURL()
			);

			# Generate $author based on $wgTweetANewText['RealName']
			if ( $wgTweetANewText['RealName'] ) {
				$author = $user->getRealName();
			} else {
				$author = $user->getName();
			}

			# Generate a random tweet texts based if $wgTweetANewText['NewRandom'] is true
			if ( $wgTweetANewText['NewRandom'] ) {
				# Setup switcher using max number set by $wgTweetANewText['NewRandomMax']
				$switcher = rand( 1, $wgTweetANewText['NewRandomMax'] );
				# Parse random text
				$tweet_text = wfMessage(
					'tweetanew-new' . $switcher,
					[ $wikiPage->getTitle()->getText(), $finalurl ]
				)->text();
			} else {
				# Use default tweet message format
				$tweet_body = wfMessage(
					'tweetanew-newdefault',
					[ $wikiPage->getTitle()->getText(), $finalurl ]
				)->text();
				$tweet_text = $tweet_body;
			}

			# Add author info if $wgTweetANewText['NewAuthor'] is true
			if ( $wgTweetANewText['NewAuthor'] ) {
				$tweet_text .= ' ' . wfMessage( 'tweetanew-authorcredit' )->text() . ' ' . $author;
			}

			# Add summary if $wgTweetANewText['NewSummary'] is true and summary text is entered
			if ( $summary && $wgTweetANewText['NewSummary'] ) {
				$tweet_text .= ' - ' . $summary;
			}

			# Call to function for assembling and trimming tweet (if necessary) - then connecting and sending tweet to Twitter
			self::makeSendTweet(
				$wikiPage,
				$tweet_text,
				$finalurl
			);

		}

		return true;
	}

	/**
	 * Function for tweeting edited articles
	 *
	 * @param $wikiPage WikiPage
	 * @param $user User
	 * @param $content Content
	 * @param $summary string
	 * @param $isMinor bool
	 *
	 * @return bool
	 */
	public static function TweetANewEditMade(
		WikiPage $wikiPage,
		$user,
		$content,
		$summary,
		$isMinor
	) {
		global $wgTweetANewTweet, $wgTweetANewText, $wgRequest;

		# Check if $wgTweetANewTweet['Edit'] is enabled or the Tweet checkbox was selected on the edit page
		if ( $wgRequest->getCheck( 'wpTweetANewEdit' ) || $wgTweetANewTweet['Edit'] ) {
			# Unless the tweet checkbox is selected, only proceeds if page is outside content namespace
			#   and if a minor edit, checks $wgTweetANewTweet['SkipMinor']
			# Also prevents new articles from processing as TweetANewNewArticle function is used instead
			if ( ( !MWNamespace::isContent( $wikiPage->getTitle()->getNamespace() )
					|| ( $isMinor !== 0 && $wgTweetANewTweet['SkipMinor'] )
					&& !$wgRequest->getCheck( 'wpTweetANewEdit' ) )
				|| $wikiPage->getTitle()->estimateRevisionCount() == 1
			) {
				return true;
			}

			# Determine the time and date of last modification - exit if newer than $wgTweetANewTweet['LessMinutesOld']
			# ToDo - there must be a cleaner way of doing this
			$dbr = wfGetDB( DB_REPLICA );
			$res = $dbr->select(
				'revision',
				[ 'rev_timestamp' ],
				[ 'rev_page' => $wikiPage->getId() ],
				__METHOD__,
				[ 'ORDER BY' => 'rev_id DESC', 'LIMIT' => '2' ]
			);
			$edittime = [];
			foreach ( $res as $row ) {
				$edittime[] = $row->rev_timestamp;
			}
			$edittimenow = mktime(
				substr( $edittime[0], 8, 2 ),
				substr( $edittime[0], 10, 2 ),
				substr( $edittime[0], 12 ),
				substr( $edittime[0], 4, 2 ),
				substr( $edittime[0], 6, 2 ),
				substr( $edittime[0], 0, 4 )
			);
			$edittimelast = mktime(
				substr( $edittime[1], 8, 2 ),
				substr( $edittime[1], 10, 2 ),
				substr( $edittime[1], 12 ),
				substr( $edittime[1], 4, 2 ),
				substr( $edittime[1], 6, 2 ),
				substr( $edittime[1], 0, 4 )
			);
			$edittimediv = $edittimenow - $edittimelast;
			if ( $edittimediv < ( $wgTweetANewTweet['LessMinutesOld'] * 60 ) ) {
				return true;
			}

			# Generate final url
			$finalurl = self::makeFinalUrl(
				$wikiPage->getTitle()->getFullURL()
			);

			# Generate $author based on $wgTweetANewText['RealName']
			if ( $wgTweetANewText['RealName'] ) {
				$author = $user->getRealName();
			} else {
				$author = $user->getName();
			}

			$tweet_text = '';
			# Add prefix indication that edit is minor if enabled by $wgTweetANewText['Minor']
			if ( $isMinor !== 0 && $wgTweetANewText['Minor'] ) {
				$tweet_text = RequestContext::getMain()->msg( 'tweetanew-minoredit' )->text();
				# Add a space after the indicator if $wgTweetANewText['MinorSpace'] is true
				if ( $isMinor !== 0 && $wgTweetANewText['MinorSpace'] ) {
					$tweet_text .= ' ';
				}
			}

			# Generate a random tweet texts based if $wgTweetANewText['EditRandom'] is true
			if ( $wgTweetANewText['EditRandom'] ) {
				# Setup switcher using max number set by $wgTweetANewText['EditRandomMax']
				$switcher = rand( 1, $wgTweetANewText['EditRandomMax'] );
				# Parse random text
				$tweet_text .= RequestContext::getMain()->msg(
					'tweetanew-edit' . $switcher,
					[ $wikiPage->getTitle()->getText(), $finalurl ]
				)->text();
			} else {
				# Use default tweet message format
				$tweet_body = RequestContext::getMain()->msg(
					'tweetanew-editdefault',
					[ $wikiPage->getTitle()->getText(), $finalurl ]
				)->text();
				$tweet_text .= $tweet_body;
			}

			# Add author info if $wgTweetANewText['EditAuthor'] is true
			if ( $wgTweetANewText['EditAuthor'] ) {
				$tweet_text .= ' ' . RequestContext::getMain()->msg( 'tweetanew-authorcredit' )->text() . ' ' . $author;
			}

			# Add summary if $wgTweetANewText['EditSummary'] is true and summary text is entered
			if ( $summary && $wgTweetANewText['EditSummary'] ) {
				$tweet_text .= ' - ' . $summary;
			}

			# Call to function for preparing and sending tweet
			self::makeSendTweet(
				$wikiPage,
				$tweet_text,
				$finalurl
			);
		}

		return true;
	}

	/**
	 * Function shortening url via outside service or leaving for t.co service if none are enabled
	 *
	 * @param $longurl
	 *
	 * @return string
	 */
	public static function makeFinalUrl( $longurl ) {
		global $wgTweetANewBitly, $wgTweetANewGoogl;

		# Check setting to enable/disable use of bitly
		if ( $wgTweetANewBitly['Enable'] ) {
			# Generate url for bitly
			$shortened = "https://api-ssl.bitly.com/v3/shorten?longUrl="
				. urlencode( $longurl ) . "&login=" . $wgTweetANewBitly['Login']
				. "&apiKey=" . $wgTweetANewBitly['API'] . "&format=txt";

			# Get the url from bitly
			$response = Http::get( $shortened );
		} elseif ( $wgTweetANewGoogl['Enable'] ) {
			# Check setting to enable/disable use of goo.gl
			# Setup goo.gl
			$url = new GoogleURL( $wgTweetANewGoogl['API'] );

			# Generate url from goo.gl
			$response = $url->shorten( $longurl );
		} else {
			$response = $longurl;
		}

		return $response;
	}

	/**
	 * Function for connecting to Twitter, preparing and then sending tweet
	 *
	 * @param $wikiPage WikiPage
	 * @param $tweet_text
	 * @param $finalurl
	 *
	 * @return bool
	 */
	public static function makeSendTweet( $wikiPage, $tweet_text, $finalurl ) {
		global $wgTweetANewTwitter, $wgTweetANewBlacklist, $wgLang;

		if ( !in_array( $wikiPage->getTitle()->getText(), $wgTweetANewBlacklist ) ) {
			# Calculate length of tweet factoring in t.co
			if ( stripos( $finalurl, 'https:' ) !== false ) {
				$tweet_text_count = 140 - 23 + mb_strlen( $finalurl );
			} elseif ( stripos( $finalurl, 'http:' ) !== false ) {
				$tweet_text_count = 140 - 22 + mb_strlen( $finalurl );
			} else {
				$tweet_text_count = 140;
			}

			# Check if length of tweet is beyond 140 characters and shorten if necessary
			if ( mb_strlen( $tweet_text ) > $tweet_text_count ) {
				$tweet_text = $wgLang->mb_substr( $tweet_text, 0, $tweet_text_count - 3 ) . '...';
			}

			# Make connection to Twitter
			$tmhOAuth = new tmhOAuth(
				[
					'consumer_key' => $wgTweetANewTwitter['ConsumerKey'],
					'consumer_secret' => $wgTweetANewTwitter['ConsumerSecret'],
					'user_token' => $wgTweetANewTwitter['AccessToken'],
					'user_secret' => $wgTweetANewTwitter['AccessTokenSecret'],
				]
			);

			# Make tweet message
			$tmhOAuth->request(
				'POST',
				$tmhOAuth->url( '1.1/statuses/update' ),
				[ 'status' => $tweet_text ]
			);

			return true;
		}
	}
}

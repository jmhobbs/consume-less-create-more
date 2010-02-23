<?php
/*
                                                _
                                               | |
      ___ ___  _ __  ___ _   _ _ __ ___   ___  | | ___  ___ ___
     / __/ _ \| '_ \/ __| | | | '_ ` _ \ / _ \ | |/ _ \/ __/ __|
    | (_| (_) | | | \__ \ |_| | | | | | |  __/ | |  __/\__ \__ \_
     \___\___/|_| |_|___/\__,_|_| |_| |_|\___| |_|\___||___/___(_)
                         _
                        | |
      ___ _ __ ___  __ _| |_ ___   _ __ ___   ___  _ __ ___
     / __| '__/ _ \/ _` | __/ _ \ | '_ ` _ \ / _ \| '__/ _ \
    | (__| | |  __/ (_| | ||  __/ | | | | | | (_) | | |  __/_
     \___|_|  \___|\__,_|\__\___| |_| |_| |_|\___/|_|  \___(_)


      This site exists to inspire you to create. Take what you want of it.
      Create More.

      [ http://github.com/jmhobbs/consume-less-create-more ]

      Copyright (c) 2010 John Hobbs <john@velvetcache.org>

      Permission is hereby granted, free of charge, to any person obtaining a copy
      of this software and associated documentation files (the "Software"), to deal
      in the Software without restriction, including without limitation the rights
      to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
      copies of the Software, and to permit persons to whom the Software is
      furnished to do so, subject to the following conditions:

      The above copyright notice and this permission notice shall be included in
      all copies or substantial portions of the Software.

      THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
      IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
      FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
      AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
      LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
      OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
      THE SOFTWARE.
*/
	session_start();
	header( 'Content-type: text/javascript' );

/*
	A blank, for your edification.

	array(
		"content" => "",
		"name" => "",
		"link" => null,
		"source" => ""
	),
*/

	$charities = array(
		array(
			"charity" => true,
			"content" => "Kiva's mission is to connect people, through lending, for the sake of alleviating poverty.<br/><br/>Kiva empowers individuals to lend to an entrepreneur across the globe.",
			"name" => "Visit Kiva.org",
			"link" => "http://www.kiva.org/"
		),
		array(
			"charity" => true,
			"content" => "Samasource enables marginalized people, from refugees in Kenya to women in rural Pakistan, to receive life-changing work opportunities via the Internet.",
			"name" => "Visit samasource.org",
			"link" => "http://www.samasource.org/"
		),
		array(
			"charity" => true,
			"content" => "Improving public education by empowering every teacher to be a change-maker and enabling any citizen to be a philanthropist.",
			"name" => "Visit DonorsChoose.org",
			"link" => "http://www.donorschoose.org/"
		),
		array(
			"charity" => true,
			"content" => "charity: water is a non-profit bringing clean and safe drinking water to people in developing nations.",
			"name" => "Visit charity: water",
			"link" => "http://www.charitywater.org/"
		)
	);

	$quotes = array(
		array(
			"content" => "Our duty, as men and women, is to proceed as if limits to our ability did not exist. We are collaborators in creation.",
			"name" => "Teilhard de Chardin",
			"link" => null,
			"source" => "http://thinkexist.com/quotes/with/keyword/creation/"
		),
		array(
			"content" => "When we engage in what we are naturally suited to do, our work takes on the quality of play and it is play that stimulates creativity.",
			"name" => "Linda Naiman",
			"link" => null,
			"source" => "http://abundance-blog.marelisa-online.com/2009/01/27/75-creativity-quotes/"
		),
		array(
			"content" => "But this is just the start of something much bigger.",
			"name" => "Cory Doctorow",
			"link" => null,
			"source" => "http://thinkexist.com/quotes/cory_doctorow/"
		),
		array(
			"content" => "Creativity is a type of learning process where the teacher and pupil are located in the same individual.",
			"name" => "Arthur Koestler",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "If you want to make an apple pie from scratch, you must first create the universe.",
			"name" => "Carl Sagan",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "Creativity is the sudden cessation of stupidity.",
			"name" => "Edwin Land",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "It is better to have enough ideas for some of them to be wrong, than to be always right by having no ideas at all.",
			"name" => "Edward de Bono",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "It is better to have enough ideas for some of them to be wrong, than to be always right by having no ideas at all.",
			"name" => "Edward de Bono",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "Creativity comes from trust. Trust your instincts. And never hope more than you work.",
			"name" => "Rita Mae Brown",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "Happiness is not in the mere possession of money; it lies in the joy of achievement, in the thrill of creative effort.",
			"name" => "Franklin D. Roosevelt",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"content" => "Growth for the sake of growth is the ideology of the cancer cell.",
			"name" => "Edward Abbey",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"content" => "You have succeeded in life when all you really want is only what you really need.",
			"name" => "Vernon Howard",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"content" => "The hardest thing is to take less when you can get more.",
			"name" => "Kin Hubbard",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"content" => "Do not trouble yourself much to get new things, whether clothes or friends.... Sell your clothes and keep your thoughts.",
			"name" => "Henry David Thoreau",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"content" => "You can never get enough of what you don't need to make you happy.",
			"name" => "Eric Hoffer",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"content" => "The corruption of the American soul is consumerism.",
			"name" => "Ben Nicholson",
			"link" => null,
			"source" => "http://www.brainyquote.com/quotes/keywords/consumerism.html"
		),
		array(
			"content" => "Pop culture is not about depth. It's about marketing, supply and demand, consumerism.",
			"name" => "Trevor Dunn",
			"link" => null,
			"source" => "http://www.brainyquote.com/quotes/keywords/consumerism.html"
		),
		array(
			"content" => "Never stay up on the barren heights of cleverness, but come down into the green valleys of silliness.",
			"name" => "Ludwig Wittgenstein",
			"link" => null,
			"source" => "http://en.wikiquote.org/wiki/Ludwig_Wittgenstein"
		),
		// Courtesy of Jason Lefton - http://hellogylo.com/
		array(
			"content" => "I believe in technology, but I think we need to make it more human. I believe that the Internet is becoming a planetary meta-organism, but that it is up to us to guide its evolution, and to shape it into a space we actually want to inhabit - one that can understand and honor both the individual human and the human collective, just like real life does.",
			"name" => "Jonathan Harris",
			"link" => null,
			"source" => null,
			"showfor" => 15000
		),
		// Courtesy of Jason Lefton - http://hellogylo.com/
		array(
			"content" => "This is something that I've said before and I'll say it again: I've spent five years on this. You should spend an hour on it. You know, spend two hours on it. That would be the decent, respectful thing to do, as opposed to writing a snarky five-minute thing that's making fun of me, or saying what other people have said.",
			"name" => "Charlie Kaufman",
			"link" => null,
			"source" => null,
			"showfor" => 15000
		)
	);

	// If they provide a token, we should make sure they only see each quote once
	if( isset( $_REQUEST['token'] ) && ! empty( $_REQUEST['token'] ) ) {

		$seen = array();
		if( ! isset( $_SESSION['token'] ) || $_REQUEST['token'] != $_SESSION['token'] ) {
			$_SESSION['token'] = $_REQUEST['token'];
			$_SESSION['charity-counter'] = 0;
		}
		else
			$seen = unserialize( $_SESSION['seen'] );

		// Seen them all?
		if( count( $seen ) == count( $quotes ) )
			die( json_encode( array( 'completed' => true ) ) );

		// Tokened users get to see charity links every 4 quotes
		if( ! isset( $_SESSION['charity-counter'] ) )
			$_SESSION['charity-counter'] = 0;

		++$_SESSION['charity-counter'];

		if( 0 == $_SESSION['charity-counter'] % 4 ) {
			$offset = floor( $_SESSION['charity-counter'] / 4 );
			// Roll through all the charity options
			if( count( $charities ) <= $offset ) {
				$_SESSION['charity-counter'] = 0;
				$offset = 0;
			}
			die( json_encode( $charities[ $offset ] ) );
		}

		// Filter them...
		$choices = array();
		foreach( $quotes as $key => $quote )
			if( ! isset( $seen[$key] ) )
				$choices[] = $key;

		// Choose one
		$index = $choices[array_rand( $choices )];

		// Save it as seen
		$seen[$index] = true;
		$_SESSION['seen'] = serialize( $seen );

		die( json_encode( $quotes[$index] ) );
	}
	else {
		// No token? Take what you are given.
		die( json_encode( $quotes[array_rand( $quotes )] ) );
	}

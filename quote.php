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

	header( 'Content-type: text/javascript' );

	$quotes = array(
		// Create More
		array(
			"quote" => "Creativity is a type of learning process where the teacher and pupil are located in the same individual.",
			"sayer" => "Arthur Koestler",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"quote" => "If you want to make an apple pie from scratch, you must first create the universe.",
			"sayer" => "Carl Sagan",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"quote" => "Creativity is the sudden cessation of stupidity.",
			"sayer" => "Edwin Land",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"quote" => "It is better to have enough ideas for some of them to be wrong, than to be always right by having no ideas at all.",
			"sayer" => "Edward de Bono",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"quote" => "It is better to have enough ideas for some of them to be wrong, than to be always right by having no ideas at all.",
			"sayer" => "Edward de Bono",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		array(
			"quote" => "Creativity comes from trust. Trust your instincts. And never hope more than you work.",
			"sayer" => "Rita Mae Brown",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		// Mixed
				array(
			"quote" => "Happiness is not in the mere possession of money; it lies in the joy of achievement, in the thrill of creative effort.",
			"sayer" => "Franklin D. Roosevelt",
			"link" => null,
			"source" => "http://www.wisdomquotes.com/cat_creativity.html"
		),
		// Consume Less
		array(
			"quote" => "Growth for the sake of growth is the ideology of the cancer cell.",
			"sayer" => "Edward Abbey",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"quote" => "You have succeeded in life when all you really want is only what you really need.",
			"sayer" => "Vernon Howard",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"quote" => "The hardest thing is to take less when you can get more.",
			"sayer" => "Kin Hubbard",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"quote" => "Do not trouble yourself much to get new things, whether clothes or friends.... Sell your clothes and keep your thoughts.",
			"sayer" => "Henry David Thoreau",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"quote" => "You can never get enough of what you don't need to make you happy.",
			"sayer" => "Eric Hoffer",
			"link" => null,
			"source" => "http://www.quotegarden.com/consumerism.html"
		),
		array(
			"quote" => "The corruption of the American soul is consumerism.",
			"sayer" => "Ben Nicholson",
			"link" => null,
			"source" => "http://www.brainyquote.com/quotes/keywords/consumerism.html"
		),
		array(
			"quote" => "Pop culture is not about depth. It's about marketing, supply and demand, consumerism.",
			"sayer" => "Trevor Dunn",
			"link" => null,
			"source" => "http://www.brainyquote.com/quotes/keywords/consumerism.html"
		)
	);

	die( $quote = json_encode( $quotes[array_rand( $quotes )] ) );
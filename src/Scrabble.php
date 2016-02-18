<?php
	 class Scrabble
		{
		private $word;

				function __construct($word)
				{
					$this->word = $word;
				}

			 	function getWord()
				{
				return $this->word;
				}

				function wordCount()
				{
					$ones = array('A', 'E', 'I', 'O', 'L', 'N', 'R', 'S', 'T');
					$twos = array('D', 'G');

					$str_array = str_split($this->word);
					$value = 0;

					foreach($str_array as $key => $letter) {
						if(in_array($letter, $ones)) {
							 $value += 1;
						} elseif(in_array($letter, $twos)) {
							 $value += 2;
						}
					} return $value;


				// $wordLetters = str_split($this->word);
				// $score = 0;
				// foreach($wordLetters as $letter)
				// 	{
				// 		if ($letter == )
				// 	}
				}



		}
 ?>

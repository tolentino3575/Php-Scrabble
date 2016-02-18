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
					$threes = array('B', 'C', 'M', 'P');
					$fours = array('F', 'H', 'V', 'W', 'Y');

					$str_array = str_split($this->word);
					$value = 0;

					foreach($str_array as $key => $letter) {
						if(in_array($letter, $ones)) {
							 $value += 1;
						} elseif(in_array($letter, $twos)) {
							 $value += 2;
						} elseif(in_array($letter, $threes)){
							$value += 3;
						} elseif(in_array($letter, $fours)){
							$value += 4;
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

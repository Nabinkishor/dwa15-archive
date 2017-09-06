<?php

class Cipher {

    /**
	* Properties
	*/
	private $algorithm; # What cipher algorithm to use (e.g. vowels, shift)
    private $algorithms = ['vowels', 'shift']; # Array of available algorithms
    private $alphabet; # Array of letters a-z
    private $vowels; # Array of vowels


    /**
	* Magic method that's invoked whenever an object of this class is instantiated
	*/
	public function __construct($algorithm = 'vowels') {

        # Set alphabet and vowels class properties
        $this->alphabet = str_split('abcdefghijklmnopqrstuvwxyz');
        $this->vowels = str_split('aeiou');

        # Confirm the cipher method exists
        if(!in_array($algorithm, $this->algorithms)) {
            throw new Exception("Cipher algorithm `".$algorithm."` not found", 1);
        }

        # Set algorithm class property
        $this->algorithm = $algorithm;

	}


    /**
	*
	*/
    public function encode(String $input) {
        return $this->process($input, 'encode');
    }


    /**
	*
	*/
    public function decode(String $input) {
        return $this->process($input, 'decode');
    }


    /**
	*
	*/
    private function process(String $input, $encodeOrDecode) {

        $results = '';

        foreach(str_split($input) as $character) {

            $character = strtolower($character);

            # Only encode letters; skip over spaces, symbols, etc.
            if(ctype_alnum($character)) {
                $algorithm = $this->algorithm.$encodeOrDecode;
                $character = $this->$algorithm($character);
            }

            $results .= $character;

        }

        return $results;

    }


    /**
	* Each letter is replaced with its adjacent letter in the alphabet;
    * e.g. a becomes b, x becomes y, z becomes a, etc.
	*/
    private function shiftEncode(String $letter) {

        if(ctype_digit($letter))
            return $letter;

        $position = array_search($letter, $this->alphabet);

        $position += 1;

        if($position == 26) $position = 0;

        return $this->alphabet[$position];

    }


    /**
	*
	*/
    private function shiftDecode(String $letter) {

        if(ctype_digit($letter))
            return $letter;

        $position = array_search($letter, $this->alphabet);

        $position -= 1;

        if($position == -1) $position = 25;

        return $this->alphabet[$position];

    }


    /**
    *
    * vowels are replaced with their numerical equivalent where a=0, i=1, o=2, etc.
	*/
    private function vowelsEncode(String $letter) {

        if(in_array($letter, $this->vowels)) {
            return array_search($letter, $this->vowels);
        }
        else {
            return $letter;
        }

    }


    /**
	*
	*/
    private function vowelsDecode(String $letter) {

        if(isset($this->vowels[$letter])) {
            return $this->vowels[$letter];
        }
        else {
            return $letter;
        }
    }

} # eoc

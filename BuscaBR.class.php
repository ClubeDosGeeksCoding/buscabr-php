<?php

/**
 * BuscaBR - Biblioteca PHP para algoritmo de busca fonética BuscaBR.
 * @version 0.1.0
 * @package BuscaBR
 * @link https://github.com/ClubeDosGeeksCoding/buscabr-php GitHub project
 * @author Jayr Alencar (jayralencar) <jayralencarpereira@gmail.com>
 * @copyright 2016 - Clube dos Geeks (http://clubedosgeeks.com.br)
 * @license The MIT License (MIT) (https://github.com/ClubeDosGeeksCoding/buscabr-php/blob/master/LICENSE)
 **/



/**
 * BuscaBR - Biblioteca PHP para algoritmo de busca fonética BuscaBR.
 * @package BuscaBR
 * @author Jayr Alencar (jayralencar) <jayralencarpereira@gmail.com>
 */
class BuscaBR
{
	 /**
     * encode texto para buscaBR.
     * @param string $str
     * @return string
     * @author Jayr Alencar (jayralencar) <jayralencarpereira@gmail.com>
     */
	public static function encode($str){
		$str = self::removeAcents($str);
		$str = strtoupper($str);
		$codes = array(
			array('/(BR|BR)/', 'B'),
			array('/PH/', 'F'),
			array('/(GL|GR|MG|NG|RG)/', 'G'),
			array('/Y/', 'I'),
			array('/(GE|GI|RJ|MJ)/', 'J'),
			array('/N/', 'M'),
			array('/(AO|AUM|GM|MD|OM|ON)/', 'M'),
			array('/PR/', 'P'),
			array('/L/', 'R'),
			array('/(CE|CI|CH|CS|RS|TS|X|Z)/', 'S'),
			array('/(TR|TL)/', 'T'),
			array('/(CT|RT|ST|PT)/', 'T'),
			array('/\b[UW]/', 'V'),
			array('/RM/', 'SM'),
			array('/[MRS]+\b/', ''),
			array('/[AEIOUH]/', '')
		) ;

		for($i = 0 ; $i < sizeof($codes); $i++){
			$str = preg_replace($codes[$i][0], $codes[$i][1], $str);
		}

		$str = self::squeeze($str);

		return $str;
	}

	/**
     * Remove acentos de string.
     * @param string $string
     * @return string
     * @author Jayr Alencar (jayralencar) <jayralencarpereira@gmail.com>
     */

	private  function removeAcents($string){
	    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
	}

	/**
     * Remove caracteres duplicados seguidos.
     * @param string $str
     * @return string
     * @author Jayr Alencar (jayralencar) <jayralencarpereira@gmail.com>
     */
	private function squeeze($str){
		$cont = 0;
		$strArray = str_split($str);
		$newString='';
		for($i =  0 ; $i < sizeof($strArray); $i++){
			$final = isset($strArray[$i+1])?$strArray[$i+1]:'';
			if($strArray[$i] != $final){
				$newString .=$strArray[$i];
			}
		}
		return $newString;
	}

}
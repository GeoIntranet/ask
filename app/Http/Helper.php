<?php
/**
 * return le nom de l'id utilisateur
 * Format : Geoffrey VALERO [48]
 * @param $id
 * @return string
 */
function userName($id , $mode=null)
{
}

/**
 * efface les espace
 * @param $string
 * @return mixed
 */
function deleteSpace($string)
{
    return str_replace(' ','',$string);
}

/**
 * efface les espace debut et fin
 * @param $string
 * @return string
 */
function deleteSpaceStartAndEnd($string)
{
    return trim (  $string , " \t\n\r\0\x0B"  );
}

function commonKeyArrayMulti($array,$value = '')
{
    $output =collect([]);
    $count = 1;
    foreach ($array as $index => $item) {
        foreach ($item as $key => $id) {
            $value = isset($output[$id]) ? $output[$id] : 0;
            $output[$id] = $value + 1;
        }
    }

    return $output->filter(function($key , $value) use($array)
    {
        return $key == count($array);
    });
}


function nl2brplus($txt)
{
    $txt = trim($txt);
    $txt = stripslashes($txt);
    $txt = nl2br($txt);
    $txt = str_replace ("\r\n", '', $txt);
    $txt = str_replace ("\n",   '', $txt);
    $txt = str_replace ("\r",   '', $txt);
    $txt = str_replace ('"' ,  "'", $txt);
    $txt = str_replace ("<br />", "<br>", $txt);
    $txt = str_replace ("   <br>", "<br>", $txt);
    $txt = str_replace ("  <br>", "<br>", $txt);
    $txt = str_replace (" <br>", "<br>", $txt);
    $txt = str_replace ("<br><br><br><br>", "<br><br>", $txt);
    $txt = str_replace ("<br><br><br>", "<br><br>", $txt);
    //$txt = addslashes($txt);
    return $txt;
}
function monSubStr($chaine, $taille)
{
    $text = substr(html_entity_decode($chaine), 0, $taille);

    return htmlentities($text);
}
function deleteBrPlus($txt)
{
    $txt = trim($txt);
    $txt = stripslashes($txt);
    $txt = nl2br($txt);
    $txt = str_replace ("\r\n", '', $txt);
    $txt = str_replace ("\n",   '', $txt);
    $txt = str_replace ("\r",   '', $txt);
    $txt = str_replace ('"' ,  "'", $txt);
    $txt = str_replace ("<br />", " ", $txt);
    $txt = str_replace ("<br /><br />", " ", $txt);
    $txt = str_replace ("   <br>", " ", $txt);
    $txt = str_replace ("  <br>", " ", $txt);
    $txt = str_replace (" <br>", " ", $txt);
    $txt = str_replace ("<br><br><br><br>", " ", $txt);
    $txt = str_replace ("<br><br><br>", " ", $txt);
    //$txt = addslashes($txt);
    return $txt;
}

/**
 * supprime les espace consécutifcd
 * @param $txt
 * @return mixed
 */
function deleteSpaceToo($txt)
{
    $txt = preg_replace('/\s+/', ' ',$txt);

    return $txt;
}

/**
 * slugify input |  je suis un test ===> je-suis-un-test
 * @param $text
 * @return mixed
 */
function slug($text,$noQuote = false){

    $text = deleteSpaceToo($text);

    $text = $noQuote == true ? noQuote($text) :$text ;

    return $text = str_replace (' ', '-',$text);
}


function noQuote($text){

    return str_replace('\'',' ',$text);
}

function setEnvironmentValue($envKey, $envValue)
{
    $envFile = app()->environmentFilePath();
    $str = file_get_contents($envFile);

    $oldValue =  env($envKey);

    $test = "{$envKey}={$envValue}\n";
    $test_ = "{$envKey}={$oldValue}\n";

    $search  = strpos($str, "{$envKey}={$oldValue}\n");

    $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}", $str,$count);

    $fp = fopen($envFile, 'w');
    fwrite($fp, $str);
    fclose($fp);

    return $fp;

}

function br2nl($txt)
{
    $txt = str_replace("<br />", "<br>", $txt);
    $txt = str_replace("<br>", "\n", $txt);

    return $txt;
}



function delAccent($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);

    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

    return $str;
}

/**
 * retourne le niveau de l'url - 1 - 2 - 3
 * @param $url
 * @return int
 */
function GetLevel($url){
    return  $levelUrl = count(explode('/', substr($url,1)));
}

/**
 * fonction qui enleve les majuscule , les accent ,
 * et qui transforme les espace en ' - '
 * Ex : JE sUIs un Têst ===> je-suis-un-test
 * @return array|\Illuminate\Http\Request|string
 */
function slugify($string){

    $url = strtolower($string);

    $url = delAccent($url);

    return str_replace(' ','-', $url);
}


function sanitiseProductName($name){
    $name = strtolower($name);
    return $name;
}

/**
 * recherche toute les position d'un charactère dans une chaine
 * @param $haystack
 * @param $needle
 * @return array
 */
function strpos_all($haystack, $needle) {
    $offset = 0;
    $allpos = array();
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset   = $pos + 1;
        $allpos[] = $pos;
    }
    return $allpos;
}


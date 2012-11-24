<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class UtilDate
{
    static public function age($dateNaissance)
    {
        if($dateNaissance == "0000-00-00")
        {
            return "n/a";
        }
        else
        {
            $tDeb = explode("-", $dateNaissance);
            $tFin = explode("-", date("Y-m-d"));
            $diff = mktime(0, 0, 0, $tFin[1], $tFin[2], $tFin[0]) - mktime(0, 0, 0, $tDeb[1], $tDeb[2], $tDeb[0]);

            $result = ($diff / 31557600);
            return floor($result);
        }
    }
}
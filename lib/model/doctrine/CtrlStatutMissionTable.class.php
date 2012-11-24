<?php


class CtrlStatutMissionTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CtrlStatutMission');
    }
}
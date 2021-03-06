<?php
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 2/12/16
 * Time: 6:31 PM
 */

class UnitCollege {

    var $id;
    var $name;
    var $description;
    var $studentStatus; // 'EDEA' OR 'RDRA' OR 'N/A'
    var $totalNumberOfEDEAChoice;
    var $totalNumberOfRDRAChoice;
    var $numberOfEDEACompetitor;
    var $numberOfRDRACompetitor;

    function __construct($id, $name, $description, $studentStatus, $totalNumberOfEDEAChoice, $totalNumberOfRDRAChoice, $numberOfEDEACompetitor, $numberOfRDRACompetitor){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->studentStatus = $studentStatus;
        $this->totalNumberOfEDEAChoice = $totalNumberOfEDEAChoice;
        $this->totalNumberOfRDRAChoice = $totalNumberOfRDRAChoice;
        $this->numberOfEDEACompetitor = $numberOfEDEACompetitor;
        $this->numberOfRDRACompetitor = $numberOfRDRACompetitor;
    }

}
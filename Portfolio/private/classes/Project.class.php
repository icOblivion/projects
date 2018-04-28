<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/31/2018
 * Time: 4:51 PM
 */

class Project extends DatabaseObject
{
    static protected $table_name = 'projects';
    static protected $db_columns = ['id', 'project', 'date', 'programmer'];


    public $id;
    public $project;
    public $date;
    public $programmer;

    public function __construct($args = [])
    {
        $this->project = $args['project'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->programmer = $args['programmer'] ?? '';
    }
}
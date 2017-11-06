<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Task
 *
 * @author Lancelei
 */
class Task extends Entity {
    // id,task,priority,size,group,deadline,status,flag
    private $name;
    private $task;
    private $priority;
    private $size;
    private $group;
    private $deadline;
    private $status;
    private $flag;
    
    public function __construct() {
        parent::__construct();
    }
    
    //$task->name = "Value";
    public function setName($value) {
        if(strlen($value) <= 64) 
            $this->name = $value;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setTask($value) {
        $this->task = $value;
    }
    
    public function getTask() {
        return $this->task;
    }
    
    public function setPriority($value) {
        if($value < 4)
            $this->priority = $value;
        
    }
    
    public function getPriority() {
        return $this->priority;
    }
    
    public function setSize($value) {
        if($value < 4)
            $this->size = $value;
    }
    
    public function getSize() {
        return $this->size;
    }
    
    public function setGroup($value) {
        if($value < 5)
            $this->group = $value;
    }    
    
    public function getGroup() {
        return $this->group;
    }
    
    public function setDeadline($value) {
        $this->deadline = $value;
    }
    
    public function getDeadline() {
        return $this->deadline;
    }
    
    public function setStatus($value) {
        $this->status = $value;
    }
    public function getStatus() {
        return $this->status;
    }
    
    public function setFlag($value) {
        $this->flag = $value;
    }
    
    public function getFlag() {
        return $this->flag;
    }
    
}

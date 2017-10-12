<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Tasks model to pull task data from the CSV file.
 *
 * @author Michael
 */
class Tasks extends CSV_Model {

        public function __construct()
        {
                parent::__construct(APPPATH . '../data/tasks.csv', 'id');
        }

}

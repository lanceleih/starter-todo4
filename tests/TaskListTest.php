<?php
require_once 'PHPUnit/Autoload.php';
if (! class_exists('PHPUnit_Framework_TestCase'))
{
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/**
 * Description of TaskListTest
 *
 * @author Michael
 */
class TaskListTest extends PHPUnit_Framework_TestCase {
    private $CI;
    
    public function setUp() {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
    public function testUncompletedTasks() {
        $data = (new Tasks())->all();
        
        $counter = count($data);
        
        $anticounter = 0;
        
         foreach ($data as $task)
        {
            if ($task->status != 2)
                $anticounter++;
        }
        $this->assertGreaterThan($counter-$anticounter, $anticounter);

    }
}

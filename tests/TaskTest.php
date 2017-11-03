<?php
// class TaskTest extends PHPUnit_Framework_TestCase
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
  {
    private $CI;

    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }

    /*
    public function testGetPost()
    {
      $_SERVER['REQUEST_METHOD'] = 'GET';
      $_GET['foo'] = 'bar';
      $this->assertEquals('bar', $this->CI->input->get_post('foo'));
    }
     * */
     
    public function testTask() {
        $this->CI->load->model('task');
        // id,task,priority,size,group,deadline,status,flag
        $this->CI->task->name = 'Task 1';
        $this->CI->task->priority = 5;
        $this->CI->task->size = 3;
        $this->CI->task->group = 4;
        //var_dump($this->CI->task->name);
        $this->assertEquals('Task 1', $this->CI->task->name);
        $this->assertEmpty($this->CI->task->priority);
        $this->assertNotEmpty($this->CI->task->size);
        $this->assertEquals(4, $this->CI->task->group);
        
        
    }
  }

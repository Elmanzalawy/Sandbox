<?php

class Node
{
    public $data;
    public $next;
    public $previous;

    function __construct($data)
    {
        $this->data = $data;
        $this->previous = null;
        $this->next = null;
        
    }
}

class LinkedList
{
    private $head;
    private $tail;
    private $count;

    function __construct()
    {
        $this->head = null;
        $this->tail = null;
        $this->count = 0;
    }

    public function prepend($data)
    {
        $node = new Node($data);
        $node->next = $this->head;
        $this->head = $node;
        $this->count++;
    }

    public function append($data)
    {
        //if no nodes are present
        if($this->head == null){
            $this->prepend($data);
        }

        else{
            $current = $this->head;
            while($current->next != null){
                $current = $current->next;
            }

            $newNode = new Node($data);
            $newNode->previous = &$current;
            $current->next = $newNode;
            
            $this->tail = $newNode;
            $this->count++;
        }
    }

    public function deleteHead()
    {
        if($this->head != null){
            $this->head = $this->head->next;
            $this->count--;
        }
    }

    public function deleteTail()
    {
        if($this->tail != null){
            $this->tail = $this->tail->previous;
            $this->tail->next = null;
            $this->count--;
        }
    }

    public function readData()
    {
        $data = [];
        $current = $this->head;

        while($current != null){
            $data[] = $current->data;
            $current = $current->next;
        }

        return $data;
    }

    public function first()
    {
        return $this->head;
    }

    public function last()
    {
        return $this->tail;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function reverse()
    {
        if($this->head == null || $this->head->next == null){
            return;
        }

        $temp = $new = null;
        $current = $this->head;

        while($current != null){
            $temp = $current->next;
            $current->next = $new;
            $new = $current;
            $current = $temp;
        }

        $this->head = $new;
    }
}

$linkedList = new LinkedList;

for($i=0; $i<50; $i++){
    $linkedList->append($i);
}

// $linkedList->prepend(5);
// $linkedList->append(99);
// $linkedList->deleteHead();
// $linkedList->deleteTail();
// echo $linkedList->getCount();
// $linkedList->reverse();

foreach($linkedList->readData() as $node){
    echo $node.PHP_EOL;
}
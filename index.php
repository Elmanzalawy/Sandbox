<?php

class MyHashSet
{
    protected $data;

    function __construct()
    {
        $this->data = [];
    }

    private function hashFunction($key)
    {
        return $key % 5;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key)
    {
        $bucketId = $this->hashFunction($key);
        $this->data[$bucketId][$key] = $key;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key)
    {
        $bucketId = $this->hashFunction($key);
        unset($this->data[$bucketId][$key]);
    }

    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key)
    {
        $bucketId = $this->hashFunction($key);

        return isset($this->data[$bucketId][$key]);
    }
}

$myHashSet = new MyHashSet;
$myHashSet->add(1);      // set = [1]
$myHashSet->add(2);      // set = [1, 2]
$myHashSet->contains(1); // return True
$myHashSet->contains(3); // return False, (not found)
$myHashSet->add(2);      // set = [1, 2]
$myHashSet->contains(2); // return True
$myHashSet->remove(2);   // set = [1]
$myHashSet->contains(2); // return False, (already removed)
$myHashSet->contains(1); // return False, (already removed)


$myHashSet->contains(72);
$myHashSet->remove(91);
$myHashSet->add(48);
$myHashSet->add(41);
$myHashSet->contains(96);
$myHashSet->remove(87);
$myHashSet->contains(48);
$myHashSet->contains(49);
$myHashSet->add(84);
$myHashSet->add(82);
$myHashSet->add(24);
$myHashSet->add(7);
$myHashSet->remove(56);
$myHashSet->add(87);
$myHashSet->add(81);
$myHashSet->add(55);
$myHashSet->add(19);
$myHashSet->add(40);
$myHashSet->add(68);
$myHashSet->add(23);
$myHashSet->add(80);
$myHashSet->add(53);
$myHashSet->add(76);
$myHashSet->contains(93);
$myHashSet->add(95);
$myHashSet->contains(95);
$myHashSet->add(67);
$myHashSet->add(31);
$myHashSet->contains(80);
$myHashSet->add(62);
$myHashSet->add(73);
$myHashSet->remove(97);
$myHashSet->add(33);
$myHashSet->add(28);
$myHashSet->add(62);
$myHashSet->add(81);
$myHashSet->add(57);
$myHashSet->contains(40);
$myHashSet->add(11);
$myHashSet->add(89);
$myHashSet->add(28);
$myHashSet->remove(97);
$myHashSet->contains(86);
$myHashSet->add(20);
$myHashSet->contains(5);
$myHashSet->add(77);
$myHashSet->add(52);
$myHashSet->add(57);
$myHashSet->add(88);
$myHashSet->add(20);
$myHashSet->contains(48);
$myHashSet->remove(42);
$myHashSet->remove(86);
$myHashSet->add(49);
$myHashSet->remove(62);
$myHashSet->contains(53);
$myHashSet->add(43);
$myHashSet->remove(98);
$myHashSet->add(32);
$myHashSet->add(15);
$myHashSet->add(42);
$myHashSet->add(50);
$myHashSet->contains(19);
$myHashSet->contains(32);
$myHashSet->add(67);
$myHashSet->remove(84);
$myHashSet->remove(60);
$myHashSet->remove(8);
$myHashSet->remove(85);
$myHashSet->add(43);
$myHashSet->add(59);
$myHashSet->contains(65);
$myHashSet->add(40);
$myHashSet->add(81);
$myHashSet->remove(55);
$myHashSet->add(56);
$myHashSet->add(54);
$myHashSet->add(59);
$myHashSet->add(78);
$myHashSet->add(53);
$myHashSet->add(0);
$myHashSet->add(24);
$myHashSet->add(7);
$myHashSet->remove(53);
$myHashSet->add(33);
$myHashSet->remove(69);
$myHashSet->remove(86);
$myHashSet->add(7);
$myHashSet->remove(1);
$myHashSet->add(16);
$myHashSet->remove(58);
$myHashSet->add(61);
$myHashSet->add(34);
$myHashSet->add(53);
$myHashSet->remove(84);
$myHashSet->remove(21);
$myHashSet->remove(58);
$myHashSet->add(25);
$myHashSet->contains(45);
$myHashSet->add(3);
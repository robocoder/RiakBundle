<?php
use Kbrw\RiakBundle\Model\MapReduce\MapReducePhase;

$object = new MapReducePhase();
$object->setLanguage("javascript")
       ->setSource("function(v, keyData, arg) {return [arg];}")
       ->setArg("static data used in map function");
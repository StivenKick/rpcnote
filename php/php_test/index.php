<?php
# Includes the autoloader for libraries installed with composer
require 'vendor/autoload.php';
require 'hello/GPBMetadata/Person.php';
require 'hello/Example/Person.php';
require 'hello/Example/Department.php';




$info = new Example\Person();


//$dept = new MapField(GPBType::STRING, GPBType::STRING);

//将dept值装载到map里
$dept["Department"] = "研发部";
//$info->setDept($dept);
$info->setAge(30);
$info->setRealname("张三");
$data = $info->serializeToString();

var_dump($data);

$info_new = new Example\Person();

$info_new->mergeFromString($data);
//$info_new->getDept()["age"];

var_dump($info_new->getRealname());

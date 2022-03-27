<?php

namespace App\LinkList\Arr;

require_once "ArrList.php";

$arrayList = new ArrList();

$arrayList->dumpData();

//插入一个元素
$arrayList->insert(1,1);

$arrayList->dumpData();

//插入第二个元素
$arrayList->insert(2,2);

$arrayList->dumpData();

//插入第三个元素
$arrayList->insert(3,2);
$arrayList->dumpData();

//插入第三个元素
$arrayList->insert(4,2);
$arrayList->dumpData();

//删除元素
$arrayList->delete(3);
$arrayList->dumpData();

echo "当前长度". $arrayList->length();
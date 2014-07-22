<?php
require_once 'BusinessPerson.php';
require_once 'EliteBusinessPerson.php';
require_once 'HetareBusinessPerson.php';

//BusinessPerson
$bp = new BusinessPerson('祥寛', '山田');
$bp->work();

//EliteBusinessPerson
$ebp = new EliteBusinessPerson('祥寛', '山田');
$ebp->work();

//HetareBusinessPerson
$hbp = new HetareBusinessPerson('祥寛', '山田');
$hbp->work();

?>
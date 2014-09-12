<?php
/**
 * Description of example for TreeMenu class
 *
 * @author ali sharifi 
 * alisharifi01@gmail.com
 */
/*
 *  tree menu class make a nested unordered list (ul li) from an array that store hierarchical data
 * if you dont know what is hierarchical data , check this http://www.sitepoint.com/hierarchical-data-database-2/  
 */
include 'TreeMenu.class.php';
/*if you store your hierarchical data in a table of database , 
 *you should fetch the data in an array like $testArray and use treeMenu class !  
 */
$testArray=array( 
             array(
                        "id" => 1,
                        "name"=>"food" ,
                        "parent" => NULL),
               array(
                         "id" => 2,
                        "name"=>"fruit" ,
                        "parent" => NULL),
               array(
                        "id" => 3,
                         "name"=>"red" ,
                        "parent" => 2),
              array(
                        "id"=>4,
                        "name"=>"yellow" ,
                        "parent" => 2),
               array(
                         "id"=>5,
                        "name"=>"apple" ,
                        "parent" => 3),
              array(
                         "id"=>6,
                        "name"=>"cherry" ,
                        "parent" => 2),
               array(
                         "id"=>7,
                        "name"=>"bannana" ,
                        "parent" => 4),
               array(
                        "id"=>8,
                        "name"=>"beef" ,
                        "parent" => 1),
               array(
                         "id"=>9,
                        "name"=>"pork" ,
                        "parent" => 1),
               array(
                         "id"=>10,
                        "name"=>"beafsteak" ,
                        "parent" => 8),
                array(
                         "id"=>11,
                        "name"=>"pizza" ,
                        "parent" => 8),
                array(
                         "id"=>12,
                        "name"=>"peperoni pizza" ,
                        "parent" => 11),
                array(
                         "id"=>13,
                        "name"=>"vegetable pizza" ,
                        "parent" => 11),
           );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>example of TreeMenu class</title>
        <link href="themes/easyui.css" rel="stylesheet" type="text/css">
        <link href="themes/icon.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
</head>
<body>
	<?php
            /*TreeMenu class get a 2 parameters , the first on is an array that store hierarchical data
            * and second one is the css class on master ul (the second parameter is optional).
            * In this example , I use Easy UI plugin to style the menu , you can use your style or your javascript code. 
            * for more informatiomn about EASY UI plugin , check www.jeasyui.com 
            */
            new TreeMenu($testArray,"easyui-tree");
        ?>
</body>
</html>
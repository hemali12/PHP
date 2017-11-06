
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <?php
        include_once './index.php';
        $a = $_POST['clgname'];
        $b = $_POST['Address'];
        $c = $_POST['number'];
        $s = $_POST['cource'];
        $q = $_POST['subj1'];
        $r = $_POST['subj2'];
        $x = $_POST['F_id'];
        $y = $_POST['fname'];
        if ($_POST['b1'] == "collage_detail") {

            $obj = new collage($a, $b, $c);
            $obj->display();
        } else if ($_POST['b1'] == "collage & course Detail") {

            $object = new course($a, $b, $c, $s, $q, $r);
            $object->display();
        } else if ($_POST['b1'] == "All Detail") {
            $ob = new faculty($x, $y);
            $ob->display();
        } else {
            echo "error";
        }
        ?>


    </body>
</html>

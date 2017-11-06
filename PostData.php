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
         class collage  {

            function __construct($name, $address, $phone) {
                
                $this->name = $name;
                $this->address = $address;
                $this->phone = $phone;
            }

            function display() {

                echo "Name of Collage: ".$this->name."<br> address:". $this->address."<br>Phone : ".$this->phone."<br>";
                
            }

        }
        class course extends collage{

            function __construct($name, $address, $phone,$c_name, $subject1, $subject2) {
                parent::__construct($name,$address,$phone);

                $this->c_name = $c_name;
                $this->subject1 = $subject1;
                $this->subject2 = $subject2;
            }

            function display() {
                parent::display();
                echo "Course Name: $this->c_name <br> Subject Name: $this->subject1<br>Subject Name: $this->subject2";
            }

        }

      

        //$obj=new collage("utu","tarsadi","123");
        //$obj->display();
        class faculty extends course {

            function __construct($id, $fname) {

                $this->id = $id;
                $this->fname = $fname;
            }

            function display() {
                //parent::display();
                echo "Id of Faculty: $this->id <br> Name of Faculty :$this->fname";
            }

        }
        ?>
        <form method="post" action="SecondPage.php">
            <table>

                <tr><td>Name of collage </td><td><input type="text" name="clgname"></td></tr>
                <tr><td>Address of collage </td><td><input type="text" name="Address"></td></tr>
                <tr><td>Phone Number </td><td><input type="text" name="number"></td></tr>
                <tr><td>Course Name</td><td><input type="text" name="course"></td></tr>
                <tr><td>Name of subject1 </td><td><input type="text" name="subj1"></td></tr>
                <tr><td>Name of subject2 </td><td><input type="text" name="subj2"></td></tr>
                <tr><td>Id Of Faculty</td><td><input type="text" name="F_id"></td></tr>
                <tr><td>Name of Faculty </td><td><input type="text" name="fname"></td></tr>
                <tr><td><input type="submit" value="collage_detail" name="b1"></td>
                    <td><input type="submit" value="collage & course Detail" name="b1"></td>
                    <td><input type="submit" value="All Detail" name="b1"></td></tr>
                
            </table>
            
        </form>
    </body>
</html>


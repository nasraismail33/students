<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
<title>student</title>
    
</head>
<body dir="rtl">
   

<style>
       
   

 
body{
    background:rgb(46, 45, 45);
    font-family: 'Tajawal', sans-serif;
  
}

#mother{
    width:100%;
    font-size: 20px;
}
main{
    float: left;
    border: ipx solid gray;
    padding: 5px;
}
input{
    background: rgb(41, 40, 40);
    padding: 5px;
    text-align: center;
    font-family: 'Tajawal', sans-serif;
    font-size: 17px;
    border: 1px solid black;
    color: #fff;
    transition: 0.5s ease;
}
input:focus{
    transform: scale(1.1);
}

aside{
    border:1px solid black;
    width: 300px;
    background: rgb(22, 20, 20);
    color: #fff;
    text-align:center;
    font-size: 20px;
    padding: 10px;
    float: right;
}


#tbl{
    background-color:gray ;
    border:1px solid black;
    width: 890px;
    font-size: 20px;
    text-align: center;
}
#tbl:hover{
    color:blue;
    
}
#tbl th{
    background:rgb(103, 3, 108);
    color: #000;
    font-size: 20px;
    padding: 10px;
}
#tbl:hover{
            color: blue ;
            font-weight:bold ;
           
        }
#tbl th{
    background-color: rgb(103, 3, 108);
    color: #fff;
    font-size: 20px;
    padding: 10px;
}

aside button{
    width: 190px;
    padding:8px;
    margin-top: 7px;
    padding: 8px;
    font-family: 'tajawal',sans-serif;
    font-weight: bold;
    background: rgb(48, 2, 64);
    border-radius: 8px;
    transition: 0.5s ease;
}
aside button:hover{
    background: rgb(32, 2, 28);
    transform: scale(1.1);
}

/*  
        aside button{
            width: 190px;
            padding: 8px;
            margin-top: 7px;
            font-size: 17px;
            font-family: 'Tajawal', sans-serif;
            font-weight:bold;

        }
*/
</style>

<?php  
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'student1';
$con = mysqli_connect('localhost','root','root','student1');


$sql = "SELECT * FROM users ";
$res = mysqli_query($con,"SELECT * FROM student");

$id = ''; 
$name = '';
$address = '';

if(isset($_POST['id'])){
    $id = $_POST['id'];
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
}

if(isset($_POST['address'])){
    $address = $_POST['address'];
}

$sql = '';

if(isset($_POST['add'])){
    $sql = "INSERT INTO student VALUES ($id,'$name','$address')";
    mysqli_query($con,$sql);
    header("Location:rakwancopy.php");
}
if(isset($_POST['del'])){
    $sql = "DELETE FROM student WHERE name = '$name'";
    mysqli_query($con,$sql);
    header('Location: rakwancopy');
}

?>


<div id="mother">
    <form action="" method="POST">
        <!-- لوحة التعلم -->
        <aside>
            <div id="div">
                <img src="student.png" alt="لوجو الموقع" width="200">
                <h3>لوحة المدير</h3>
                <label for="">رقم الطالب</label><br>
                <input type="text" name="id" id="id"><br>
                <label for=""> اسم الطالب</label><br>
                <input type="text" name="name" id="name">
                <br>
                <label for="">عنوان الطالب</label><br>
                <input type="text" name="address" id="address"><br><br>
                <button name="add">اضافة طالب</button>
                <button name="del">حذف الطالب</button>
            </div>
        </aside>


       <!-- عرض بيانات الطلاب -->
        <main>
            <table id="tbl">
                <tr>
                    <th> الرقم التسلسلي</th>
                    <th> اسم الطالب </th>
                    <th> عنوان الطالب </th>
                </tr>

   
 <?php while($row =mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "</tr>";


} 
   ?>



            </table>
        </main>


    </form>

</div>

<!--    begin -->



<!-- 
?php 
   $host = 'localhost';
   $user='root'; 
   $pass='root'; 
   $db='student1';
   $con= mysqli_connect('localhost','root','root','student1');


   $res= mysqli_query($con,"select * from student");
   $id=''; 
   $name=''; 
   $address='';

if(isset($_POST ['id'])){
    $id= $_POST['id'];

}

if(isset($_POST ['name'])){
    $name= $_POST['name'];
}

if(isset($_POST ['address'])){
    $address= $_POST['address'];
}

$sqls = '';

if(isset($_POST ['add'])){
    $sqls = "INSERT INTO student VALUES($id,'$name','$address')";
    mysqli_query($con,$sqls);
    header("Location: home.php");

}

if(isset($_POST ['del'])){
    $sqls = "DELETE FROM student WHERE name ='$name'";
    mysqli_query($con,$sqls);
    header("Location: home.php");  
   
}

if(isset($_POST [''])){
    

}

   #
   ?> 
<div id="mother">
    <form action="" method="POST">
        // لوحة التعلم 
        <aside>
            <div id="div">
                <img src="student.png" alt="لوجو الموقع" width="200">
                <h3>لوحة المدير</h3>
                <label for="">رقم الطالب</label><br>
                <input type="text" name="id" id="id"><br>
                <label for=""> اسم الطالب</label><br>
                <input type="text" name="name" id="name">
                <br>
                <label for="">عنوان الطالب</label><br>
                <input type="text" name="address" id="address"><br><br>
                <button name="add">اضافة طالب</button>
                <button name="del">حذف الطالب</button>
            </div>
        </aside>


    // عرض بيانات الطلاب 
        <main>
            <table id="tbl">
                <tr>
                    <th> الرقم التسلسلي</th>
                    <th> اسم الطالب </th>
                    <th> عنوان الطالب </th>
                </tr>
?php while($row =mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "</tr>";


} 
   ?>
            </table>
        </main>


    </form>

</div>

 -->



</body>
</html>
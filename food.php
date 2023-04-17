
<?php
$server="locahost";
$username="root";
$password="";
$dbname="food";
$conn=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
  if(!empty($_POST['f_name']) && !empty($_POST['f_add']) && !empty($_POST['f_qun']) && !empty($_POST['f_pno']) && !empty($_POST['cv_pt'])){

       $name=$_POST['f_name'];
       $add=$_POST['f_add'];
       $quantity=$_POST['f_qun'];
       $phone=$_POST['f_pno'];
       $covid=$_POST['cv_pt'];
         
         $query="insert into form(f_name,f_add,f_qun,f_pno,cv_pt) values('$f_name,$f_add,$f_qun,$f_pno,$cv_pt')";

         $run= mysqli_query($conn,$query) or die (mysqli_error());
         
if($run)
{
  echo "Form Submitted succesfully";
}
else
{
  echo"Form not submitted";
}
}
else
{
  echo"All Fields Are Required";
}
}
?>
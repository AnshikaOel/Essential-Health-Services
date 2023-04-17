<?php
$server="locahost";
$username="root";
$password="";
$dbname="order";
$conn=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
  if(!empty($_POST['o_name']) && !empty($_POST['o_qut']) && !empty($_POST['o_add']) && !empty($_POST['o_pno']) && !empty($_POST['o_hdil'])){

       $o_name=$_POST['o_name'];
       $o_qut=$_POST['o_qut'];
       $o_add=$_POST['o_add'];
       $o_pno=$_POST['o_pno'];
       $o_hdil=$_POST['o_hdil'];
         
         $sql="insert into form(d_name,d_type,d_dob,d_add,d_pno,id_p,d_don) values('$d_name,$d_type,$d_dob,$d_add,$d_pno,$id_p,$d_don')";

         $run= mysqli_query($conn,$sql) or die (mysqli_error());
         
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
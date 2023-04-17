<?php
echo "hello";

if(isset($_POST['submit']))
{
  echo "hello";
  if(!empty($_POST['d_name']) && !empty($_POST['d_type']) && !empty($_POST['d_dob']) && !empty($_POST['d_add']) && !empty($_POST['d_pno']) && !empty($_POST['id_p']) &&!empty($_POST['d_don'])){

       $d_name=$_POST['d_name'];
       $d_type=$_POST['d_type'];
       $d_dob=$_POST['d_dob'];
       $d_add=$_POST['d_add'];
       $d_pno=$_POST['d_pno'];
       $id_p=$_POST['id_p'];
       $d_don=$_POST['d_don'];
         
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
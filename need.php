<?php
if(isset($_POST['submit']))
{
  echo "heeloo";
  if(!empty($_POST['n_name'])&& !empty($_POST['n_gender']) && !empty($_POST['n_type']) && !empty($_POST['n_add']) && !empty($_POST['n_phno']) && !empty($_POST['n_id'])){

       $n_name=$_POST['n_name'];
       $n_gender=$_POST['n_gender'];
       $n_type=$_POST['n_type'];
       $n_add=$_POST['n_add'];
       $n_phno=$_POST['n_phno'];
       $n_id=$_POST['n_id'];
         
         $query="insert into form(n_name,n_gender,n_type,n_add,n_phno,n_id) values('$n_name,$n_gender,$n_type,$n_add,$n_phno,$n_id')";

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
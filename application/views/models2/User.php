<?php 
Class User extends CI_Model
{
 function login($usuario, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('users');
   $this -> db -> where('username', $usuario);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }



}
?>

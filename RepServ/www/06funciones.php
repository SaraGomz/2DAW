<?php 
session_start();
$usuarios=[ ['usuario'=>'cris','password'=>'1111', 'nombre'=>'Cristina Pérez','estado'=>'A','rol'=>'U'],
 ['usuario'=>'juan','password'=>'2222', 'nombre'=>'Juan García','estado'=>'A','rol'=>'U'],
 ['usuario'=>'ana','password'=>'333', 'nombre'=>'Ana Fuertes','estado'=>'B','rol'=>'U'],
 ['usuario'=>'admin','password'=>'999', 'nombre'=>'Administrador','estado'=>'A','rol'=>'AD'],
];

function login($user,$password){

}

function logout(){

}
?>
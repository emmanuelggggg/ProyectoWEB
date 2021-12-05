<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/Controller.php");

class User extends Controller{
    function __constructs(){
        parent::__constructs();
    }
    function login(){
        $response=[];
        if (1==1){
            $email = $_POST["email"];
            $password = hash("sha256",$_POST["password"]);
            $user = $this->db->get("select id,nombre,p_apellido,correo from users where correo='elangelcota@gmail.com' and contraseña=(sha2('root',256)) limit 1;");
            if(count($user)>0){
                $this->code=200;
                $response=[
                    "message" => "Ha iniciado sesion con exito",
                ];
            }else{
                $this->code=401;
                $response=[
                    $data=>$user[0],
                    "message" => "Correo electronico y/o contraseña incorrectos",
                ];
            }
        }else{
            $this->code=400;
            $response=[
                "message" => "No se solicito correctamente el servicio, faltan campos:(email,password)",
            ];
        }
        return $response;
    }
}

?>
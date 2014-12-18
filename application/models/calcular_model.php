<?php

class Calcular_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    

    //valida si el numero ingresado es entero sin signo
    function validar_numero($num) {
        return preg_match('/^\d+$/', $num);
    }


    function convertir($numero){
        //verifica si el numero ingresado es entero sin signo
        $es_entero=$this->validar_numero($numero);
        if ($es_entero==TRUE){

            //se comprueba si numero es mayor a la longitud de enteros
            if ($numero>2147483647){
                $this->session->set_userdata('error', "El número debe ser menor que 2147483647");
                return NULL;
            }
            else{
                //si es 0
                if ($numero==0){
                    $data[1]=0;
                }
                else{
                    $multiplo=0;
                    $num=(int)$numero;

                    //encontrar multiplo:
                    while ($numero>=20){
                        $multiplo++;
                        $numero=(int)($numero/20);
                    }
                    if ($numero>0)
                        $multiplo++;
                    
                    //calcular numeros por nivel:
                    for ($i=$multiplo-1; $i >=1 ; $i--) { 
                        $nivel=(int)($num/(exp($i*log(20))));
                        $num=(int)($num-($nivel*(exp($i*log(20)))));
                        $data[$i+1]=$nivel;
                    }
                    if ($num>=0){
                        $data[1]=$num;
                    }
                }
            }
            return $data;
        }
        else{  //si el numero no es entero
            $this->session->set_userdata('error', "Ingresa un número válido");
            return NULL;
        }

    }

}
?>

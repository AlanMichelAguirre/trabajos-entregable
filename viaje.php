<?php
//Creamos la clase Viaje
class Viaje{
    /**
     * En esta clase va atener sus respectivos
     * atributos que son lo siguiente:
     * int codigo (privado)
     * String destino (privado)
     * int cantMax (privado)
     * String pasajero (privado)
     */
    private $codigo;
    private $destino;
    private $cantMax;
    private $pasajero=['nombre'=>
    ['Jose','francesca','tobias','denisse','mirko'],
    'apellido'=>
    ['gutierrez','gonzales','de los santos','pereira','aguirre'],
    'DNI'=>[4489321,7932123,40987451,39801783,14589923]];

    /*creamos el Método constructor _ _construct() que recibe 
    *como parámetros los valores iniciales para los
    *atributos de la clase Viaje
    */
    public function __construct($codigo,$destino,$cantMax){
        $this->codigo=$codigo;
        $this->destino=$destino;
        $this->cantMax=$cantMax;
    }
    /**
    * Los método de acceso de cada uno de los atributos de la clase.
    */

    /**
     * METODO SET codigo($cod) donde se encargara de almacenar el codigo
     */
     public function codigo($cod){
        $this->codigo=$cod;
     }

     /**
      * METODO SET destino($destino) donde se encargara de almacenar
      * el destino del viaje
      */
      public function destino($destino){
        $this->destino=$destino;
      }
      /**
       * METODO SET cantMax($max) donde se encargara de almacenar
       * la cantidad maxima de pasajeros
       */
      public function cantMax($max){
        $this->cantMax=$max;
      }

/**
 * este METODO SET buscarPasajero() va a buscar
 * un pasajero con el DNI ,si se encuentra nos
 * va a devolver los datos de dicho pasajero si no va a devolver un
 * mensaje diciendo que no esta registrado
 */
      public function buscarPasajero($dni){
        $i=array_search($dni,$this->pasajero['DNI']);
        if($i){
            echo "Ingrese nombre del pasajero: ";
            $this->pasajero['nombre'][$i]=trim(fgets(STDIN));
            echo "\nIngrese apellido del pasajero: ";
            $this->pasajero['apellido'][$i]=trim(fgets(STDIN));
            echo "\nIngrese DNI del pasajero: ";
            $this->pasajero['DNI'][$i]=trim(fgets(STDIN));
        }else{
            echo "DNI incorrecto\n";
        }
      }
      /*
     * METODO GET 
     */
    public function verDestino(){
        return $this->destino;
      }
      /**
     * METODO GET 
     */
    public function verCapacidadMax(){
        return $this->cantMax;
      }
      /**
     * METODO GET 
     */
    public function verCodigo(){
        return $this->codigo;
      }
    public function infoViaje(){
        print_r($this->pasajero);
        echo "Codigo: ".$this->codigo.
        "\n";
    }

    /**
     * metodo get Menu que su funcion va a ser mostrar el menu
     */
    public function menu(){
        return "-------------------MENU---------------------\n"
        . "Elije algunas de las siguientes opciones\n"
        . "1_Ver informacion del viaje\n"
        . "2_Modificar informacion del pasajero\n"
        . "3_Ver datos de pasajero\n"
        . "4_Agregar Pasajero\n"
        . "5_Salir\n"
        . "--------------------------------------------\n"
        . "--> ";
    }
    /**
     * el metodo segun ,la funcion que cumple es de accionar segun
     * la opcion seleccionado por el usuario
     */
    public function segun($opc){
        switch($opc){
            case 1:
                return $this->infoViaje();
            break;
            case 2:
                return $this->modificarInfo();
            break;
            case 3:
                return $this-> modificarPasajero();
            break;
            case 4:
                return $this-> agregarPasajero();
            break;
            case 5:
                return "Fin del programa";
            break;
            default:
                return "Opction incorrecta"."\n";
        }
    }
    function modificarInfo(){
        echo "Ingrese Nuevo destino\n";
        $nuevoDestino=trim(fgets(STDIN));
        $this->destino($nuevoDestino);
        echo "Ingrese Nuevo Codigo\n";
        $nuevoCodigo=trim(fgets(STDIN));
        $this->codigo($nuevoCodigo);
        echo "Ingrese Nueva capacidad max. de pasajeros\n";
        $nuevaCapMax=trim(fgets(STDIN));
        $this->cantMax($nuevaCapMax);
    }
    function modificarPasajero(){
        echo "Ingrese el dni del pasajero a modificar: ";
        $dni=trim(fgets(STDIN));
        echo "\n".$this->buscarPasajero($dni)."\n";
        
    }
    public function agregarPasajero(){
        echo "Nombre: ";
        $nombre=trim(fgets(STDIN));
        echo "Apellido: ";
        $apellido=trim(fgets(STDIN));
        echo "DNI: ";
        $dni=trim(fgets(STDIN));
        array_push($this->pasajero['nombre'],$nombre);
        array_push($this->pasajero['apellido'],$apellido);
        array_push($this->pasajero['DNI'],$dni);
    }
}
<?php
 class Producto{

    public $Id; 
    public $Nombre;
    public $Codigo; 
    public $Precio; 
    public $Marca;
    public $ListProveedores = array();

    public function MostrarInformacion()
    {
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Codigo: ' . $this->Codigo . '<br>';
        echo 'Precio: ' . $this->Precio . '<br>';
        echo 'Marca: ' . $this->Marca . '<br>';
        echo 'Provedores: <br>';
        foreach ($this->ListProveedores as $p) 
        {
            echo  '--->Id: '. $p->Id . ' <br>';
            echo  '--->Nombre: '. $p->Nombre . ' <br>';
            echo  '--->CUIL: '. $p->Cuil . ' <br>';
            echo  '--->Dirección: '. $p->Direccion . ' <br>';
            echo  '--->Teléfono: '. $p->Telefono . ' <br>';
            echo  ' <br>';
        }
    }

 }
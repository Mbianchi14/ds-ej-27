<?php

require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$p = new Producto();
$p->Id = 1;
$p->Nombre = 'Televisor 50"';
$p->Codigo = 'A12B213';
$p->Precio  = 50000;
$p->Marca = 'Samsung';

$pr1 = new  Proveedor();
$pr1->Id = 1;
$pr1->Nombre = 'Distribuidor1';
$pr1->Cuil = '22-89596546-6';
$pr1->Direccion = 'San Martin 100';
$pr1->Telefono = '3413413413';

$pr2 = new  Proveedor();
$pr2->Id = 2;
$pr2->Nombre = 'Distribuidor2';
$pr2->Cuil = '22-26058015-5';
$pr2->Direccion = 'Cordoba 100';
$pr2->Telefono = '3415554441';

$pr3 = new  Proveedor();
$pr3->Id = 3;
$pr3->Nombre = 'Distribuidor3';
$pr3->Cuil = '31-35596546-7';
$pr3->Direccion = 'Santa Fe 100';
$pr3->Telefono = '3413331112';

$p->ListProveedores[] = $pr1;
$p->ListProveedores[] = $pr2;
$p->ListProveedores[] = $pr3;

$p->MostrarInformacion();

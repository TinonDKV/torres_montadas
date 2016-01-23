<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_model('torres_montadas.php');
require_model('cliente.php');
/**
 * Description of torres_inicio
 *
 * @author xxxx
 */
class torres_inicio extends fs_controller {
 
    public $listado;
    public $editar;
    public $torres_montadas;
    public $cliente;
  
    
    public function __construct() {
        parent::__construct(__CLASS__, 'Gestionar Torres', 'Utilidades');
    }
     public function genera_serie() {
          
          $letras_iniciales = 'STCM';
          $dia = Date ('d');
          $mes = Date('m');
          $year = Date ('Y');
          $hora = Date ('H');
          $minuto = Date('i');
         $serie = $letras_iniciales . $dia . $mes . $year . $hora . $minuto;
          
          return $serie;
          
      }
      public function lista_clientes(){
          
          $this->cliente = new cliente();
          $lista_clientes =$this->cliente->all_full();
          
          return $lista_clientes;
          
      }
      
      protected function private_core() {
       
        $this->torres_montadas = new torres_montadas();
        $this->editar= FALSE;
        $this->listado= $this->torres_montadas->all();
        
        
        if (isset($_POST['modificar'])) /// guardar Editar agenda
        {
         $this->torres_montadas->id = $_POST['modificar'];
         $this->editar = $this->torres_montadas->get($_POST['modificar']); 
         if ($this->editar)
         {
           // $this->torres_montadas->numero_serie= $_POST['numero_serie'];
            $this->torres_montadas->placa_base = $_POST['placa_base'];
            $this->torres_montadas->placa_base_name = $_POST['placa_base_name'];
            $this->torres_montadas->caja= $_POST['caja'];
            $this->torres_montadas->fuente_alimentacion= $_POST['fuente_alimentacion'];
            $this->torres_montadas->fuente_name = $_POST['fuente_name'];
            $this->torres_montadas->procesador_1 = $_POST['procesador_1'];
            $this->torres_montadas->procesador_2 = $_POST['procesador_2'];
            $this->torres_montadas->procesador_name = $_POST['procesador_name'];
            $this->torres_montadas->grafica_1 = $_POST['grafica_1'];
            $this->torres_montadas->grafica_2 = $_POST['grafica_2'];
            $this->torres_montadas->grafica_name = $_POST['grafica_name'];
            $this->torres_montadas->disco_duro_1 = $_POST['disco_duro_1'];
            $this->torres_montadas->disco_duro_2 = $_POST['disco_duro_2'];
            $this->torres_montadas->disco12_name = $_POST['disco12_name'];
            $this->torres_montadas->disco_duro_3 = $_POST['disco_duro_3'];
            $this->torres_montadas->disco_duro_4 = $_POST['disco_duro_4'];
            $this->torres_montadas->disco34_name = $_POST['disco34_name'];
            $this->torres_montadas->memoria_1 = $_POST['memoria_1'];
            $this->torres_montadas->memoria_2 = $_POST['memoria_2'];
            $this->torres_montadas->memoria12_name =$_POST['memoria12_name'];
            $this->torres_montadas->memoria_3 = $_POST['memoria_3'];
            $this->torres_montadas->memoria_4 = $_POST['memoria_4'];
            $this->torres_montadas->memoria34_name = $_POST['memoria34_name'];
            $this->torres_montadas->optico_1 = $_POST['optico_1'];
            $this->torres_montadas->optico_2 = $_POST['optico_2'];
            $this->torres_montadas->optico_name = $_POST['optico_name'];
            $this->torres_montadas->sistema_operativo = $_POST['sistema_operativo'];
            $this->torres_montadas->sistema_operativo_name = $_POST['sistema_operativo_name'];
            $this->torres_montadas->lector_tarjetas = $_POST['lector_tarjetas'];
            $this->torres_montadas->lector_tarjetas_name = $_POST['lector_tarjetas_name'];
            $this->torres_montadas->anexos = $_POST['anexos'];
            $this->torres_montadas->cliente_id = $_POST['cliente_id'];
          
            if ($this->torres_montadas->save())
                {
                    $this->new_message('Datos modificados correctamante'); 
                    
                }
                else
                {
                    $this->new_error_msg('Error al Guardar');
                }  
         }
        }
        
        
        else if (isset($_POST['id']))///nueva tarea
            {
            //$this->tarea_agenda->fecha = $_POST['fecha'].' '.$_POST['hora'];
           // $this->tarea_agenda->tarea = $_POST['tarea'];
           // $this->tarea_agenda->usuario = $_POST['usuario'];
           ///$this->torres_montadas->id = NULL;
            $this->torres_montadas->numero_serie = $_POST['numero_serie'];
            $this->torres_montadas->placa_base = $_POST['placa_base'];
            $this->torres_montadas->placa_base_name = $_POST['placa_base_name'];
            $this->torres_montadas->caja= $_POST['caja'];
            $this->torres_montadas->fuente_alimentacion= $_POST['fuente_alimentacion'];
            $this->torres_montadas->fuente_name = $_POST['fuente_name'];
            $this->torres_montadas->procesador_1 = $_POST['procesador_1'];
            $this->torres_montadas->procesador_2 = $_POST['procesador_2'];
            $this->torres_montadas->procesador_name = $_POST['procesador_name'];
            $this->torres_montadas->grafica_1 = $_POST['grafica_1'];
            $this->torres_montadas->grafica_2 = $_POST['grafica_2'];
            $this->torres_montadas->grafica_name = $_POST['grafica_name'];
            $this->torres_montadas->disco_duro_1 = $_POST['disco_duro_1'];
            $this->torres_montadas->disco_duro_2 = $_POST['disco_duro_2'];
            $this->torres_montadas->disco12_name = $_POST['disco12_name'];
            $this->torres_montadas->disco_duro_3 = $_POST['disco_duro_3'];
            $this->torres_montadas->disco_duro_4 = $_POST['disco_duro_4'];
            $this->torres_montadas->disco34_name = $_POST['disco34_name'];
            $this->torres_montadas->memoria_1 = $_POST['memoria_1'];
            $this->torres_montadas->memoria_2 = $_POST['memoria_2'];
            $this->torres_montadas->memoria12_name =$_POST['memoria12_name'];
            $this->torres_montadas->memoria_3 = $_POST['memoria_3'];
            $this->torres_montadas->memoria_4 = $_POST['memoria_4'];
            $this->torres_montadas->memoria34_name = $_POST['memoria34_name'];
            $this->torres_montadas->optico_1 = $_POST['optico_1'];
            $this->torres_montadas->optico_2 = $_POST['optico_2'];
            $this->torres_montadas->optico_name = $_POST['optico_name'];
            $this->torres_montadas->sistema_operativo = $_POST['sistema_operativo'];
            $this->torres_montadas->sistema_operativo_name = $_POST['sistema_operativo_name'];
            $this->torres_montadas->lector_tarjetas = $_POST['lector_tarjetas'];
            $this->torres_montadas->lector_tarjetas_name = $_POST['lector_tarjetas_name'];
            $this->torres_montadas->anexos = $_POST['anexos'];
            $this->torres_montadas->cliente_id = $_POST['cliente_id'];
          
            
            if($this->torres_montadas->save())
            
                {
                    $this->new_message('Datos guardados correctamante');
                    
                }
                else
                {
                    $this->new_error_msg('Error al Guardar');
                }
            }
        else if (isset ($_GET['id'])) ///editar desde listado
            {
             $this->editar = $this->torres_montadas->get($_GET['id']);
            }
            else if (isset ($_GET['delete'])) ///eliminar tarea
            {
             $aux = $this->torres_montadas->get($_GET['delete']);
             if ($aux)
             {
             if ($aux->delete())
                {
                $this->new_message('Datos eliminados correctamante');
              
                }
                else
                {
                $this->new_error_msg('Error al eliminar');
                }
             }
            else
            {
            $this->new_error_msg('Tarea no encontrada');
            }    
              
              
            }
    }
  
}

    


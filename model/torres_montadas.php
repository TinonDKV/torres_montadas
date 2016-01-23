<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of torres_montadas
 *
 * @author xxxx
 */
class torres_montadas extends fs_model
{
 
   public $id;
   public $placa_base;
   public $placa_base_name;
   public $caja;
   public $fuente_alimentacion;
   public $fuente_name;
   public $procesador_1;
   public $procesador_2;
   public $procesador_name;
   public $grafica_1;
   public $grafica_2;
   public $grafica_name;
   public $disco_duro_1;
   public $disco_duro_2;
   public $disco12_name;
   public $disco_duro_3;
   public $disco_duro_4;
   public $disco34_name;
   public $memoria_1;
   public $memoria_2;
   public $memoria12_name;
   public $memoria_3;
   public $memoria_4;
   public $memoria34_name;
   public $optico_1;
   public $optico_2;
   public $optico_name;
   public $sistema_operativo;
   public $sistema_operativo_name;
   public $lector_tarjetas;
   public $lector_tarjetas_name;
   public $anexos;
   public $cliente_id;
   
   
   public $exists;
 
   
public function __construct($t = FALSE)
   {
        parent::__construct('torres_montadas', '/plugins/torres_montadas/');
        
        if ($t)
        {
            $this->id = $t['id'];
            $this->numero_serie = $t['numero_serie'];
            $this->placa_base = $t['placa_base'];
            $this->placa_base_name = $t['placa_base_name'];
            $this->caja = $t['caja'];
            $this->fuente_alimentacion =$t['fuente_alimentacion'];
            $this->fuente_name = $t['fuente_name'];
            $this->procesador_1 = $t['procesador_1'];
            $this->procesador_2 = $t['procesador_2'];
            $this->procesador_name = $t['procesador_name'];
            $this->grafica_1 = $t['grafica_1'];
            $this->grafica_2 = $t['grafica_2'];
            $this->grafica_name = $t['grafica_name'];
            $this->disco_duro_1 = $t['disco_duro_1'];
            $this->disco_duro_2 = $t['disco_duro_2'];
            $this->disco12_name = $t['disco12_name'];
            $this->disco_duro_3 = $t['disco_duro_3'];
            $this->disco_duro_4 = $t['disco_duro_4'];
            $this->disco34_name = $t['disco34_name'];
            $this->memoria_1 = $t['memoria_1'];
            $this->memoria_2 = $t['memoria_2'];
            $this->memoria12_name =$t['memoria12_name'];
            $this->memoria_3 = $t['memoria_3'];
            $this->memoria_4 = $t['memoria_4'];
            $this->memoria34_name = $t['memoria34_name'];
            $this->optico_1 = $t['optico_1'];
            $this->optico_2 = $t['optico_2'];
            $this->optico_name = $t['optico_name'];
            $this->sistema_operativo = $t['sistema_operativo'];
            $this->sistema_operativo_name = $t['sistema_operativo_name'];
            $this->lector_tarjetas = $t['lector_tarjetas'];
            $this->lector_tarjetas_name = $t['lector_tarjetas_name'];
            $this->anexos = $t['anexos'];
            $this->cliente_id = $t['cliente_id'];
            
        }
        else
        {
            
            $this->id = NULL;
            $this->numero_serie = NULL;
            $this->placa_base = NULL;
            $this->placa_base_name = NULL;
            $this->caja = NULL;
            $this->fuente_alimentacion = NULL;
            $this->fuente_name = NULL;
            $this->procesador_1 = NULL;
            $this->procesador_2 = NULL;
            $this->placa_base_name = NULL;
            $this->grafica_1 = NULL;
            $this->grafica_2 = NULL;
            $this->grafica_name = NULL;
            $this->disco_duro_1 = NULL;
            $this->disco_duro_2 = NULL;
            $this->disco12_name = NULL;
            $this->disco_duro_3 = NULL;
            $this->disco_duro_4 = NULL;
            $this->disco34_name = NULL;
            $this->memoria_1 = NULL;
            $this->memoria_2 = NULL;
            $this->memoria12_name = NULL;
            $this->memoria_3 = NULL;
            $this->memoria_4 = NULL;
            $this->memoria34_name = NULL;
            $this->optico_1 = NULL;
            $this->optico_2 = NULL;
            $this->optico_name = NULL;
            $this->sistema_operativo = NULL;
            $this->sistema_operativo_name = NULL;
            $this->lector_tarjetas = NULL;
            $this->lector_tarjetas_name = NULL;
            $this->anexos = NULL;
            $this->cliente_id = NULL;
        }
    }
    
    protected function install() {
        return '';
    }
     public function get($id) {
         
         $data = $this->db->select("SELECT * FROM torres_montadas WHERE id= ".$this->var2str($id).";");
         
         if ($data)

         {
             return new torres_montadas($data[0]);
         }
         else
         {
             return FALSE;
         }    
             
     }
    
    public function exists()
   {
      if (!$this->exists)
      {
         if ($this->db->select("SELECT * FROM " . $this->table_name . " WHERE id = " . $this->var2str($this->id) . ";"))
         {
            $this->exists = TRUE;
         }
      }

      return $this->exists;
   }
     
     public function save() {
     
         if ($this->exists()){
             
           ///  $this->fecha =Date ('Y-m-d H:i', strtotime($this->fecha));
             
         $sql ="UPDATE torres_montadas SET placa_base = ".$this->var2str($this->placa_base).
               ", placa_base_name = ".$this->var2str($this->placa_base_name).
               ", caja = ".$this->var2str($this->caja).
               ", fuente_alimentacion = ".$this->var2str($this->fuente_alimentacion).
               ", fuente_name = ".$this->var2str($this->fuente_name).
               ", procesador_1 = ".$this->var2str($this->procesador_1).
               ", procesador_2 = ".$this->var2str($this->procesador_2).
               ", procesador_name = ".$this->var2str($this->procesador_name).
               ", grafica_1 = ".$this->var2str($this->grafica_1).
               ", grafica_2 = ".$this->var2str($this->grafica_2).
               ", grafica_name = ".$this->var2str($this->grafica_name).
               ", disco_duro_1 = ".$this->var2str($this->disco_duro_1).
               ", disco_duro_2 = ".$this->var2str($this->disco_duro_2).
               ", disco12_name = ".$this->var2str($this->disco12_name).
               ", disco_duro_3 = ".$this->var2str($this->disco_duro_3).
               ", disco_duro_4 = ".$this->var2str($this->disco_duro_4).
               ", disco34_name = ".$this->var2str($this->disco34_name).
               ", memoria_1 = ".$this->var2str($this->memoria_1).
               ", memoria_2 = ".$this->var2str($this->memoria_2).
               ", memoria12_name = ".$this->var2str($this->memoria12_name).
               ", memoria_3 = ".$this->var2str($this->memoria_3).
               ", memoria_4 = ".$this->var2str($this->memoria_4).
               ", memoria34_name = ".$this->var2str($this->disco34_name).
               ", optico_1 = ".$this->var2str($this->optico_1).
               ", optico_2 = ".$this->var2str($this->optico_2).
               ", optico_name = ".$this->var2str($this->optico_name).
               ", sistema_operativo = ".$this->var2str($this->sistema_operativo).
               ", sistema_operativo_name = ".$this->var2str($this->sistema_operativo_name).
               ", lector_tarjetas = ".$this->var2str($this->lector_tarjetas).
               ", lector_tarjetas_name = ".$this->var2str($this->lector_tarjetas_name).
               ", anexos = ".$this->var2str($this->anexos).
               ", cliente_id = ".$this->var2str($this->cliente_id).
               " WHERE id = ".$this->var2str($this->id).";";
         
       return $this->db->exec($sql);
       
         }
         else
         {
             
    $sql ="INSERT INTO torres_montadas (numero_serie,placa_base,placa_base_name,caja,fuente_alimentacion,fuente_name
        ,procesador_1,procesador_2,procesador_name,grafica_1,grafica_2,grafica_name,disco_duro_1,disco_duro_2,disco12_name,
        disco_duro_3,disco_duro_4,disco34_name,memoria_1,memoria_2,memoria12_name,memoria_3,memoria_4,memoria34_name,optico_1,
        optico_2,optico_name,sistema_operativo,sistema_operativo_name,lector_tarjetas,lector_tarjetas_name,anexos,cliente_id) VALUES
                     (".$this->var2str($this->numero_serie).
                     ",".$this->var2str($this->placa_base).
                     ",".$this->var2str($this->placa_base_name).
                     ",".$this->var2str($this->caja).
                     ",".$this->var2str($this->fuente_alimentacion).
                     ",".$this->var2str($this->fuente_name).
                     ",".$this->var2str($this->procesador_1).
                     ",".$this->var2str($this->procesador_2).
                     ",".$this->var2str($this->procesador_name).
                     ",".$this->var2str($this->grafica_1).
                     ",".$this->var2str($this->grafica_2).
                     ",".$this->var2str($this->grafica_name).
                     ",".$this->var2str($this->disco_duro_1).
                     ",".$this->var2str($this->disco_duro_2).
                     ",".$this->var2str($this->disco12_name).
                     ",".$this->var2str($this->disco_duro_3).
                     ",".$this->var2str($this->disco_duro_4).
                     ",".$this->var2str($this->disco34_name).
                     ",".$this->var2str($this->memoria_1).
                     ",".$this->var2str($this->memoria_2).
                     ",".$this->var2str($this->memoria12_name).
                     ",".$this->var2str($this->memoria_3).
                     ",".$this->var2str($this->memoria_4).
                     ",".$this->var2str($this->memoria34_name).
                     ",".$this->var2str($this->optico_1).
                     ",".$this->var2str($this->optico_2).
                     ",".$this->var2str($this->optico_name).
                     ",".$this->var2str($this->sistema_operativo).
                     ",".$this->var2str($this->sistema_operativo_name).
                     ",".$this->var2str($this->lector_tarjetas).
                     ",".$this->var2str($this->lector_tarjetas_name).
                     ",".$this->var2str($this->anexos).
                     ",".$this->var2str($this->cliente_id).");";
    
    if ($this->db->exec($sql))
        
    {
       $this->id = $this->db->lastval();
         return TRUE;       
    }
 else
    {
        return FALSE;
    }    
    
         }
      }
     
     public function delete() {
         return $this->db->exec("DELETE FROM torres_montadas WHERE id = "
                 .$this->var2str($this->id).";");
     }
     
     public function all() {
         
         $lista = array();
         
         $data= $this->db->select("SELECT * FROM torres_montadas ORDER BY id ASC ;");
         
         if ($data)
         { 
             foreach ($data as $d)
                 
                 $lista[] = new torres_montadas ($d); 
         
         return $lista;
         }
     }
     
   /* 
      public function separa_fecha()
    {
        $data = explode(' ', $this->fecha);
        return $data=Date('d-m-Y', strtotime($data[0]));       
    }
    
     public function separa_hora()
    {
        $data = explode(' ',$this->fecha);
        return $data[1];       
    } */
     
     
}


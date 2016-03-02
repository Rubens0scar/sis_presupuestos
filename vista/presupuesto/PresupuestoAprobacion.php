<?php
/**
*@package pXP
*@file gen-SistemaDist.php
*@author  (fprudencio)
*@date 20-09-2011 10:22:05
*@description Archivo con la interfaz de usuario que permite 
*dar el visto a solicitudes de compra
*
*/
header("content-type: text/javascript; charset=UTF-8");
?>
<script>
Phx.vista.PresupuestoAprobacion = {
    bedit:false,
    bnew:false,
    bsave:false,
    bdel:false,
	require:'../../../sis_presupuestos/vista/presupuesto/Presupuesto.php',
	requireclase:'Phx.vista.Presupuesto',
	title:'Presupuesto',
	nombreVista: 'PresupuestoAprobacion',
	
	
	constructor: function(config) {
	   Phx.vista.PresupuestoAprobacion.superclass.constructor.call(this,config);
       this.init();
       this.load({params:{start:0, limit:this.tam_pag, tipo_interfaz: this.nombreVista }}) 
        
    },
   
   tabeast:[
	       {
    		  url:'../../../sis_presupuestos/vista/presup_partida/PresupPartidaAprobacion.php',
    		  title:'Partidas', 
    		  width:'60%',
    		  cls:'PresupPartidaAprobacion'
		  }]
    
   
    
};
</script>

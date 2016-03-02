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
Phx.vista.PresupuestoVb = {
    bedit:false,
    bnew:false,
    bsave:false,
    bdel:false,
	require:'../../../sis_presupuestos/vista/presupuesto/Presupuesto.php',
	requireclase:'Phx.vista.Presupuesto',
	title:'Presupuesto',
	nombreVista: 'PresupuestoVb',
	
	
	constructor: function(config) {
	   Phx.vista.PresupuestoVb.superclass.constructor.call(this,config);
       this.init();
       this.load({params:{start:0, limit:this.tam_pag, tipo_interfaz: this.nombreVista }});
        
    },
    
   
   
   tabeast:[
	       {
    		  url:'../../../sis_presupuestos/vista/presup_partida/PresupPartidaVb.php',
    		  title:'Partidas', 
    		  width:'60%',
    		  cls:'PresupPartidaVb'
		  }]
    
   
    
};
</script>

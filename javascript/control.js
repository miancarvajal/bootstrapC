		/*$(document).ready(function(){
			$('#servicioComputadores').on('change',function(){
				if (this.checked) {
					$("#compMantenimiento").show();
					$("#compInstalacionHardware").show();
					$("#compInstalacionSoftware").show();
				} else {
				$("#compMantenimiento").hide();
				$("#compInstalacionHardware").hide();
				$("#compInstalacionSoftware").hide();
				}  
			})
		});*/


            function blqnum(e) 
	        {
			 evt = e ? e : event;
			 tecla = (window.Event) ? evt.which : evt.keyCode;
			 if ((tecla < 97 || tecla >122)&& (tecla < 65 || tecla >90) && (tecla != 8 && tecla != 0 && tecla != 46 && tecla != 241 && tecla != 32  && tecla != 209  && tecla != 193 && tecla != 225 && tecla != 201 && tecla != 233 && tecla != 205 && tecla != 237 && tecla != 211 && tecla != 243 && tecla != 208 && tecla != 250))
			 {
			  return false;
			 }
			 return true;
			}
	/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2017  
 */ 		
			function blqlet(e) 
	        {
			 evt = e ? e : event;
			 tecla = (window.Event) ? evt.which : evt.keyCode;
			 if ((tecla < 48 || tecla > 57) && (tecla != 8 && tecla != 0 && tecla != 46))
			 {
			  return false;
			 }
			 return true;
			}
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2017  
 */ 


function editar_grupo(sel) 
{
      if (sel.value=="Individual")
      {
       divT = document.getElementById("grupo");
       divT.style.display = "none";
       divC = document.getElementById("num_grupo");
       divC.style.display = "none";
       document.getElementById("num_grupo").removeAttribute("required");
       document.getElementById("grupo").removeAttribute("required");
       document.getElementById("usr_asistentes").removeAttribute("required");
       document.getElementById("usr_no_visit").removeAttribute("required");
       
      }
      else
      {

           divT = document.getElementById("grupo");
           divT.style.display = "";
           divC = document.getElementById("num_grupo");
           divC.style.display = "";
           document.getElementById("num_grupo").setAttribute("required", "");
           document.getElementById("grupo").setAttribute("required", "");
           document.getElementById("usr_asistentes").setAttribute("required", "");
           document.getElementById("usr_no_visit").setAttribute("required", "");
           document.formulario.usr_no_visit.value=2;
      }
}

function editar_visita(on) {
	
    
    if (on.value=="Particular"){
           divA = document.getElementById("entidades");
           divA.style.display = "none";
		   document.getElementById("usr_nom_ent").removeAttribute("required");
		   document.getElementById("usr_cargo").removeAttribute("required");
      }
      else{
           divB = document.getElementById("entidades");
           divB.style.display = "";
           document.getElementById("usr_nom_ent").setAttribute("required", "");
		   document.getElementById("usr_cargo").setAttribute("required", "");
    }       
 }


$(function() {
   $('#txtDate').datepicker({ 
       beforeShowDay: $.datepicker.noWeekends 
   });
});

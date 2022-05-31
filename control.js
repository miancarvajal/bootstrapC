function editar_tipo_usuario(on) {
	
    
    if (on.value=="Particular"){
           divA = document.getElementById("entidades");
           divA.style.display = "none";
		  /* document.getElementById("usrNomEnt").removeAttribute("required");
		   document.getElementById("usrCargo").removeAttribute("required");*/
      }
      else{
           divB = document.getElementById("entidades");
           divB.style.display = "";
           /*document.getElementById("usrNomEnt").setAttribute("required", "");
		   document.getElementById("usrCargo").setAttribute("required", "");*/
    }       
 }
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2017  
 */ 		


function mostrarCasillas(activado){
	if (activado.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
	}




	
function mostrarUsuarioCorporativo(corp){
	if (corp.value=="Particular") {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
	}

function showComp() {
        element = document.getElementById("comp");
        check = document.getElementById("chk_comp");
        mostrarCasillas(check);
    }
    
function showAsesoria() {
        element = document.getElementById("asesor");
        check = document.getElementById("chk_asesoria");
        mostrarCasillas(check);
    }

function showRedesSociales() {
        element = document.getElementById("redSocial");
        check = document.getElementById("chk_redes_sociales");
        mostrarCasillas(check);
    }
    
function showRedes() {
        element = document.getElementById("red");
        check = document.getElementById("chk_redes");
        mostrarCasillas(check);
    }
    
function showPagWeb() {
        element = document.getElementById("pagWeb");
        check = document.getElementById("chk_pag_web");
        mostrarCasillas(check);
    }
    
function showCyberSeg() {
        element = document.getElementById("cyberSeg");
        check = document.getElementById("chk_cyber_seg");
        mostrarCasillas(check);
    }

function showCel() {
        element = document.getElementById("cel");
        check = document.getElementById("chk_cel");
        mostrarCasillas(check);
    }

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

	$(function() {
		$('#txtDate').datepicker({ 
		beforeShowDay: $.datepicker.noWeekends 
		});
	});
	
	
	function commentBox(){
	var name=document.getElementById('name').value;
	var comment=document.getElementById('comment').value;
 
	if(name =="" || comment ==""){
		alert("Porfavor introduce la informacion requerida!");
	}else{
		var parent=document.createElement('div');
		var el_name=document.createElement('h5');
		var el_message=document.createElement('p');
		var el_line=document.createElement('hr');
		var txt_name=document.createTextNode(name);
		var txt_message=document.createTextNode(comment);
		el_name.appendChild(txt_name);
		el_message.appendChild(txt_message);
		el_line.style.border='1px solid #000';
		parent.appendChild(el_name);
		parent.appendChild(el_line);
		parent.appendChild(el_message);
		parent.setAttribute('class', 'pane');
		document.getElementById('result').appendChild(parent);
 
		document.getElementById('name').value="";
		document.getElementById('comment').value="";
	}
 
}

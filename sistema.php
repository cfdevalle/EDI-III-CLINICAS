<HTML>
<HEAD>
    <?php include("includes/metas.php")?>
    <script>
        function ready(){
            <?php 	$usr=$_GET['usr']; ?>
        }
    </script>
</HEAD>
<BODY onLoad="ready()">
	
        <script>
            function validar(){
                            var usuario=document.getElementById("txt_usuario").value,
                            password=document.getElementById("txt_password").value,
                            div_mensaje_usuario=document.getElementById("div_mensaje_usuario"),
                            div_mensaje_password=document.getElementById("div_mensaje_password"),
                            div_mensaje_notificacion=document.getElementById("div_mensaje_notificacion"),
                            image_mensaje_error="<img src=\"static/img/error.gif\"/>",
                            image_mensaje_atencion="<img src=\"static/img/atencion.gif\"/>",
                            mensaje_error="<p style=\"color:red\">Debe ingresar un usuario y un password </p>",
                            mensaje_info="<p style=\"color:orange\">Los campos deben tener mas de 6 dijitos</p>",
                            flag=false;

                        div_mensaje_usuario.innerHTML="";
                        div_mensaje_password.innerHTML="";
                        mensaje_error.innerHTML="";
                        mensaje_info.innerHTML="";
                        if(usuario.trim()=="" || usuario.length<6){
                                flag=true;
                                if(usuario.trim()==""){
                                        div_mensaje_usuario.innerHTML=image_mensaje_error;
                                        div_mensaje_notificacion.innerHTML=mensaje_error;
                                } else{
                                        div_mensaje_usuario.innerHTML=image_mensaje_atencion;
                                        div_mensaje_notificacion.innerHTML=mensaje_info; 
                                }
                        }
                        if(password.trim()=="" || password.length<6){
                                flag=true;
                                if(password.trim()==""){
                                        div_mensaje_password.innerHTML=image_mensaje_error;
                                        div_mensaje_notificacion.innerHTML=mensaje_error;
                                } else{
                                        div_mensaje_password.innerHTML=image_mensaje_atencion;
                                        div_mensaje_notificacion.innerHTML=mensaje_info; 
                                }
                        }
                        if(flag){
                                return false;
                        } else{
                                document.getElementById("frm_login").action="login.php";
                                document.getElementById("frm_login").submit();
                        }	
        }
        </script>
        <br/>
	<fieldset>
	<legend>Plataforma</legend>
                <form name="frm_login" id="frm_login" action="" method="post">
                    <table width="50%" border="0" align="center">
                                <tr>
                                        <td>Usuario</td>
                                        <td><input type="text" name="txt_usuario" id="txt_usuario" autocomplete="off"></td>
                                        <td><div id="div_mensaje_usuario"/></td>
                                </tr>
                                <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="txt_password" id="txt_password" autocomplete="off"></td>
                                        <td><div id="div_mensaje_password"/></td>
                                </tr>
                                <tr>
                                        <td colspan="3" align="center">
                                                <input type="button" name="btn_aceptar" value="Aceptar" onClick="validar()">
                                                <input type="reset" name="btn_cancelar" value="Cancelar">
                                        </td>
                                        
                                </tr>
                                <tr><div id="div_mensaje_notificacion">
                                                                        <?php 
                                                                                if ($usr==='errorForUser'){
                                                                                    ?><p style="color:red">Usuario/password incorrectos o inexistentes </p>
                                                                         <?php } ?>
                                                                        
                                    </div>     
                                </tr>
                             
                    </table>
            </form>
        </fieldset>
	
    
    
</BODY>
</HTML>

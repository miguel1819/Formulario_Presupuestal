<?php 
  @session_start();
  if(isset($_GET["page"])){
  	$page=$_GET["page"];
  }else{
  	$page=0;
  }
    
  $jsonData = '{"All_data":[
    {"ID": "1","SECRETARIA": "SEP","SUBSECRETARIA": "basica","PROYECTO": "basico sep 1","PRESUPUESTO_ORI": "100000","PRESUPUESTO_MOD": "200000","PRESUPUESTO_COM": "400000","PRESUPUESTO_DEV": "403000"},
    {"ID": "2","SECRETARIA": "SEP","SUBSECRETARIA": "basica","PROYECTO": "basico sep 2","PRESUPUESTO_ORI": "300000","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "420000","PRESUPUESTO_DEV": "400500"},
    {"ID": "3","SECRETARIA": "SEP","SUBSECRETARIA": "media","PROYECTO": "media sep 1","PRESUPUESTO_ORI": "30000","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "420000","PRESUPUESTO_DEV": "400060"},
    {"ID": "4","SECRETARIA": "SEP","SUBSECRETARIA": "media","PROYECTO": "media sep 2","PRESUPUESTO_ORI": "300020","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "42300","PRESUPUESTO_DEV": "400040"},
    {"ID": "5","SECRETARIA": "SRE","SUBSECRETARIA": "politica","PROYECTO": "politica 1","PRESUPUESTO_ORI": "30020","PRESUPUESTO_MOD": "204020","PRESUPUESTO_COM": "42300","PRESUPUESTO_DEV": "403000"},
    {"ID": "6","SECRETARIA": "SRE","SUBSECRETARIA": "politica","PROYECTO": "politica 2","PRESUPUESTO_ORI": "31020","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42320","PRESUPUESTO_DEV": "403020"},
    {"ID": "7","SECRETARIA": "SRE","SUBSECRETARIA": "direccion","PROYECTO": "direccion 1","PRESUPUESTO_ORI": "31030","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42320","PRESUPUESTO_DEV": "404000"},
    {"ID": "8","SECRETARIA": "SRE","SUBSECRETARIA": "direccion","PROYECTO": "direccion 2","PRESUPUESTO_ORI": "31130","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42310","PRESUPUESTO_DEV": "405000"},
    {"ID": "9","SECRETARIA": "SEDENA","SUBSECRETARIA": "defenza","PROYECTO": "defenza 1","PRESUPUESTO_ORI": "21130","PRESUPUESTO_MOD": "222020","PRESUPUESTO_COM": "42510","PRESUPUESTO_DEV": "403600"},
    {"ID": "10","SECRETARIA": "SEDENA","SUBSECRETARIA": "defenza","PROYECTO": "defenza 2","PRESUPUESTO_ORI": "32130","PRESUPUESTO_MOD": "234020","PRESUPUESTO_COM": "44310","PRESUPUESTO_DEV": "407000"},
    {"ID": "11","SECRETARIA": "SEDENA","SUBSECRETARIA": "Guardia","PROYECTO": "Guardia 1","PRESUPUESTO_ORI": "31130","PRESUPUESTO_MOD": "244020","PRESUPUESTO_COM": "43310","PRESUPUESTO_DEV": "408000"},
    {"ID": "12","SECRETARIA": "SEDENA","SUBSECRETARIA": "Guardia","PROYECTO": "Guardia 2","PRESUPUESTO_ORI": "41130","PRESUPUESTO_MOD": "254020","PRESUPUESTO_COM": "43310","PRESUPUESTO_DEV": "409000"}
    ]}';
//*********************************************************************select de la tabla ************/
    switch($page){
    case 1:
      
     $json = '[
      {"ID": "1","SECRETARIA": "SEP","SUBSECRETARIA": "basica","PROYECTO": "basico sep 1","PRESUPUESTO_ORI": "100000","PRESUPUESTO_MOD": "200000","PRESUPUESTO_COM": "400000","PRESUPUESTO_DEV": "403000"},
      {"ID": "2","SECRETARIA": "SEP","SUBSECRETARIA": "basica","PROYECTO": "basico sep 2","PRESUPUESTO_ORI": "300000","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "420000","PRESUPUESTO_DEV": "4005000"},
      {"ID": "3","SECRETARIA": "SEP","SUBSECRETARIA": "media","PROYECTO": "media sep 1","PRESUPUESTO_ORI": "30000","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "420000","PRESUPUESTO_DEV": "400060"},
      {"ID": "4","SECRETARIA": "SEP","SUBSECRETARIA": "media","PROYECTO": "media sep 2","PRESUPUESTO_ORI": "300020","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "42300","PRESUPUESTO_DEV": "400040"},
      {"ID": "5","SECRETARIA": "SRE","SUBSECRETARIA": "politica","PROYECTO": "politica 1","PRESUPUESTO_ORI": "30020","PRESUPUESTO_MOD": "204020","PRESUPUESTO_COM": "42300","PRESUPUESTO_DEV": "403000"},
      {"ID": "6","SECRETARIA": "SRE","SUBSECRETARIA": "politica","PROYECTO": "politica 2","PRESUPUESTO_ORI": "31020","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42320","PRESUPUESTO_DEV": "403020"},
      {"ID": "7","SECRETARIA": "SRE","SUBSECRETARIA": "direccion","PROYECTO": "direccion 1","PRESUPUESTO_ORI": "31030","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42320","PRESUPUESTO_DEV": "404000"},
      {"ID": "8","SECRETARIA": "SRE","SUBSECRETARIA": "direccion","PROYECTO": "direccion 2","PRESUPUESTO_ORI": "31130","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42310","PRESUPUESTO_DEV": "405000"},
      {"ID": "9","SECRETARIA": "SEDENA","SUBSECRETARIA": "defenza","PROYECTO": "defenza 1","PRESUPUESTO_ORI": "21130","PRESUPUESTO_MOD": "222020","PRESUPUESTO_COM": "42510","PRESUPUESTO_DEV": "403600"},
      {"ID": "10","SECRETARIA": "SEDENA","SUBSECRETARIA": "defenza","PROYECTO": "defenza 2","PRESUPUESTO_ORI": "32130","PRESUPUESTO_MOD": "234020","PRESUPUESTO_COM": "44310","PRESUPUESTO_DEV": "407000"},
      {"ID": "11","SECRETARIA": "SEDENA","SUBSECRETARIA": "Guardia","PROYECTO": "Guardia 1","PRESUPUESTO_ORI": "31130","PRESUPUESTO_MOD": "244020","PRESUPUESTO_COM": "43310","PRESUPUESTO_DEV": "408000"},
      {"ID": "12","SECRETARIA": "SEDENA","SUBSECRETARIA": "Guardia","PROYECTO": "Guardia 2","PRESUPUESTO_ORI": "41130","PRESUPUESTO_MOD": "254020","PRESUPUESTO_COM": "43310","PRESUPUESTO_DEV": "409000"}
      ]';
     $data = json_decode($json, true);

    if ( !$data ) {
      die("Error");
    }else{
      $arreglo = array();
      foreach ($data as $row): 
        if($row['SECRETARIA']=="SEP2" OR  $row['SECRETARIA']=="SEDENA2"){
      $arreglo["data"][] = $row;
        }  
    endforeach;
      if($arreglo ==[]){
        $arreglo= null;
        echo json_encode($arreglo);
      }else{
        echo json_encode($arreglo);
      }
    }
    break;
    case 2:
        $data = json_decode($jsonData, true);
        $VtotalPresu_Ori= $data['All_data'][0]['PRESUPUESTO_ORI']; //Maple
        echo '{"VtotalPresu_Ori":"'.$VtotalPresu_Ori.'"}';
      break;
    case 3:
      $data = json_decode($jsonData, true);
      $VtotalPresu_Mod= $data['All_data'][0]['PRESUPUESTO_MOD']; //Maple
      echo '{"VtotalPresu_Mod":"'.$VtotalPresu_Mod.'"}';
    break;
    case 4:
      $data = json_decode($jsonData, true);
      $VtotalPresu_Com= $data['All_data'][0]['PRESUPUESTO_COM']; //Maple
      echo '{"VtotalPresu_Com":"'.$VtotalPresu_Com.'"}';
    break;
    case 5:
      $data = json_decode($jsonData, true);
      $Vpresupuesto_ori= $data['All_data'][0]['PRESUPUESTO_ORI'];
      $Vpresupuesto_mod= $data['All_data'][0]['PRESUPUESTO_MOD'];
      $Vpresupuesto_com= $data['All_data'][0]['PRESUPUESTO_COM'];
      $Vpresupuesto_dev= $data['All_data'][0]['PRESUPUESTO_DEV'];
      $Vpresupuesto_pag= $data['All_data'][1]['PRESUPUESTO_ORI'];
      $Vpresupuesto_ejer= $data['All_data'][1]['PRESUPUESTO_MOD'];
      $Vpresupuesto_Noejer= $data['All_data'][1]['PRESUPUESTO_COM'];
      $Vpresupuesto_NOest= $data['All_data'][1]['PRESUPUESTO_DEV'];
      $Vpresupuesto_NOfed= $data['All_data'][2]['PRESUPUESTO_ORI'];

      echo '{"Vpresupuesto_ori":"'.$Vpresupuesto_ori.'","Vpresupuesto_mod":"'.$Vpresupuesto_mod.'","Vpresupuesto_com":"'.$Vpresupuesto_com.'",
        "Vpresupuesto_dev":"'.$Vpresupuesto_dev.'","Vpresupuesto_pag":"'.$Vpresupuesto_pag.'","Vpresupuesto_ejer":"'.$Vpresupuesto_ejer.'",
        "Vpresupuesto_Noejer":"'.$Vpresupuesto_Noejer.'","Vpresupuesto_NOest":"'.$Vpresupuesto_NOest.'","Vpresupuesto_NOfed":"'.$Vpresupuesto_NOfed.'"}';
   break;
   case 6:
      echo "<option value= '0' >SECRETARIA</option>";
          echo "<option value='SEDENA'> SEDENA </option>",
              "<option value='SEP'> SEP </option>";
    break;
  case 7:
    echo "<option value ='0' >SUBSECRETARIA</option>";
        echo "<option value='basica'> basica </option>",
            "<option value='media'> media </option>";
  break;
  case 8:
    echo "<option value ='0' >PROYECTO</option>";
        echo "<option value='media sep 1'> media sep 1 </option>",
            "<option value='media sep 2'> media sep 2 </option>";
  break;
  case 9:
    echo "<option value ='0' >NO PROYECTOS</option>";
  break;
  case 10:
    echo "<option value ='0' >SUBSECRETARIA</option>";
        echo "<option value='defenza'> defenza </option>",
            "<option value='guardia'> guardia </option>";
  break;
  case 11:
    echo "<option value ='0' >PROYECTO</option>";
        echo "<option value='defenza 1'> defenza 1 </option>",
            "<option value='defenza 2'> defenza 2 </option>";
  break;
  case 12:
    echo "<option value= '0' >NO PROYECTOS</option>";
  break;
  case 13: //combobox filter status
    
    /*$query = "SELECT * FROM tbl_laptop WHERE status_lap = '$status'";
    $resultado = $con_core->prepare($query);
    $resultado->execute();
*/
$json = '[
  {"ID": "1","SECRETARIA": "SEP","SUBSECRETARIA": "basica","PROYECTO": "basico sep 1","PRESUPUESTO_ORI": "100000","PRESUPUESTO_MOD": "200000","PRESUPUESTO_COM": "400000","PRESUPUESTO_DEV": "403000"},
  {"ID": "2","SECRETARIA": "SEP","SUBSECRETARIA": "basica","PROYECTO": "basico sep 2","PRESUPUESTO_ORI": "300000","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "420000","PRESUPUESTO_DEV": "4005000"},
  {"ID": "3","SECRETARIA": "SEP","SUBSECRETARIA": "media","PROYECTO": "media sep 1","PRESUPUESTO_ORI": "30000","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "420000","PRESUPUESTO_DEV": "400060"},
  {"ID": "4","SECRETARIA": "SEP","SUBSECRETARIA": "media","PROYECTO": "media sep 2","PRESUPUESTO_ORI": "300020","PRESUPUESTO_MOD": "204000","PRESUPUESTO_COM": "42300","PRESUPUESTO_DEV": "400040"},
  {"ID": "5","SECRETARIA": "SRE","SUBSECRETARIA": "politica","PROYECTO": "politica 1","PRESUPUESTO_ORI": "30020","PRESUPUESTO_MOD": "204020","PRESUPUESTO_COM": "42300","PRESUPUESTO_DEV": "403000"},
  {"ID": "6","SECRETARIA": "SRE","SUBSECRETARIA": "politica","PROYECTO": "politica 2","PRESUPUESTO_ORI": "31020","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42320","PRESUPUESTO_DEV": "403020"},
  {"ID": "7","SECRETARIA": "SRE","SUBSECRETARIA": "direccion","PROYECTO": "direccion 1","PRESUPUESTO_ORI": "31030","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42320","PRESUPUESTO_DEV": "404000"},
  {"ID": "8","SECRETARIA": "SRE","SUBSECRETARIA": "direccion","PROYECTO": "direccion 2","PRESUPUESTO_ORI": "31130","PRESUPUESTO_MOD": "224020","PRESUPUESTO_COM": "42310","PRESUPUESTO_DEV": "405000"},
  {"ID": "9","SECRETARIA": "SEDENA","SUBSECRETARIA": "defenza","PROYECTO": "defenza 1","PRESUPUESTO_ORI": "21130","PRESUPUESTO_MOD": "222020","PRESUPUESTO_COM": "42510","PRESUPUESTO_DEV": "403600"},
  {"ID": "10","SECRETARIA": "SEDENA","SUBSECRETARIA": "defenza","PROYECTO": "defenza 2","PRESUPUESTO_ORI": "32130","PRESUPUESTO_MOD": "234020","PRESUPUESTO_COM": "44310","PRESUPUESTO_DEV": "407000"},
  {"ID": "11","SECRETARIA": "SEDENA","SUBSECRETARIA": "Guardia","PROYECTO": "Guardia 1","PRESUPUESTO_ORI": "31130","PRESUPUESTO_MOD": "244020","PRESUPUESTO_COM": "43310","PRESUPUESTO_DEV": "408000"},
  {"ID": "12","SECRETARIA": "SEDENA","SUBSECRETARIA": "Guardia","PROYECTO": "Guardia 2","PRESUPUESTO_ORI": "41130","PRESUPUESTO_MOD": "254020","PRESUPUESTO_COM": "43310","PRESUPUESTO_DEV": "409000"}
  ]';
 $data = json_decode($json, true);


 $cbxSecretaria = $_POST['CbxSecretaria']; //recibe el parametro por medio del ajax
 $cbxSSecretaria = $_POST['CbxSSecretaria'];
 $cbxProyecto = $_POST['CbxProyecto'];

if ( !$data ) {
  die("Error");
}else{
  $arreglo = array();
  foreach ($data as $row): 
    if($row['SECRETARIA']==$cbxSecretaria AND  $row['SUBSECRETARIA']==$cbxSSecretaria AND  $row['PROYECTO']==$cbxProyecto){
  $arreglo["data"][] = $row;
    }  
endforeach;
  if($arreglo ==[]){
    $arreglo= null;
    echo json_encode($arreglo);
  }else{
    echo json_encode($arreglo);
  }
}

/*if (!$resultado) {
        die('Error');
    } else {
      $arreglo = array();
      foreach ($resultado as $row): 
      $arreglo["data"][] = $row;
      endforeach;
        if ($arreglo == []) {
            $arreglo = null;
            echo json_encode($arreglo);
        } else {
            echo json_encode($arreglo);
        }
    }*/
    break;    
}
    
  ?>

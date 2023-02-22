function resfresh(){
  var table = $("#data_table").DataTable({ //funcion para llenar la tabla de datos
    destroy: true,
    searching: false,
    dom: 'Bfrtip', 
          "language": {
          "sZeroRecords": "No data available in table"
        },
        "ajax":{
          "method":"POST",
          "url": "../Control/php/js.php?page=1"
        },
        "columns":[
          {"data":"SECRETARIA"},
          {"data":"SUBSECRETARIA"},
          {"data":"PROYECTO"},
          {"data":"PRESUPUESTO_ORI"},
          {"data":"PRESUPUESTO_MOD"},
          {"data":"PRESUPUESTO_COM"},
          {"data":"PRESUPUESTO_DEV"},
      ]
    });
  }
function Muestra_Presu_Ori (){//funcion que establce el valor en cards presupuesto original
  $.ajax({
          url : '../Control/php/js.php?page=2',
          method:"POST",
  success:function(data){
    Resultado=data.trim();
    data= JSON.parse(Resultado);
      $("#presupuesto").text(data.VtotalPresu_Ori);
    }
  });
}
function Muestra_Presu_Ejer (){//funcion que establce el valor en cards presupuesto ejercio
  $.ajax({
          url : '../Control/php/js.php?page=3',
          method:"POST",
  success:function(data){
    Resultado=data.trim();
    data= JSON.parse(Resultado);
      $("#ejercido").text(data.VtotalPresu_Mod);
    }
  });
}
function Muestra_Presu_No_Ejer (){//funcion que establce el valor en cards presupuesto No ejercido
  $.ajax({
          url : '../Control/php/js.php?page=4',
          method:"POST",
  success:function(data){
    Resultado=data.trim();
    data= JSON.parse(Resultado);
      $("#No_ejercido").text(data.VtotalPresu_Com);
    }
  });
}
function loading_Cbx(){//funcion que carga los combobox con valore para CBX SECRETARIA
  $.ajax({
    url: "../Control/php/js.php?page=6",
    success: function (response) {
      $("#cbxSecretaria").html(response);
    },
  });
  }

function FiltrocbxSecretaria(){//carga los datos en CBX SECRETARIA
  Vstatus = $("#cbxSecretaria").val().trim();
  if(Vstatus=="SEDENA"){
    $.ajax({
      url: "../Control/php/js.php?page=10",
      success: function (response) {
        $("#cbxSSecretaria").html(response);
      },
    });
  }else if(Vstatus=="SEP"){
  $.ajax({
    url: "../Control/php/js.php?page=7",
    success: function (response) {
      $("#cbxSSecretaria").html(response);
    },
  });
  }
}
function FiltrocbxSUBSecretaria(){//carga los datos en CBX SUBSECRETARIA
  Vstatus = $("#cbxSSecretaria").val().trim();
  if(Vstatus=="basica"){
    $.ajax({
      url: "../Control/php/js.php?page=9",
      success: function (response) {
        $("#cbxProyecto").html(response);
      },
    });
  }else if(Vstatus=="media"){
  $.ajax({
    url: "../Control/php/js.php?page=8",
    success: function (response) {
      $("#cbxProyecto").html(response);
    },
  });
  }else if(Vstatus=="defenza"){
    $.ajax({
      url: "../Control/php/js.php?page=11",
      success: function (response) {
        $("#cbxProyecto").html(response);
      },
    });
  }else if(Vstatus=="guardia"){
  $.ajax({
    url: "../Control/php/js.php?page=12",
    success: function (response) {
      $("#cbxProyecto").html(response);
    },
  });
  }
}
function limpiartabla(){//limpia combobox y datos en tabla
  
      $("#cbxSecretaria").val("0");
      $("#cbxSSecretaria").val("0");;
      $("#cbxProyecto").val("0");
      resfresh();
    
  }

function filtro_table(){//filtra la tabla con parametros de combobox
  
  CbxSecretaria = $("#cbxSecretaria").val().trim();
  CbxSSecretaria = $("#cbxSSecretaria").val().trim();
  CbxProyecto = $("#cbxProyecto").val().trim();
  if(CbxSecretaria!='0' && CbxSSecretaria != '0' && CbxProyecto !='0'){
  var parametros = { "CbxSecretaria": CbxSecretaria,"CbxSSecretaria": CbxSSecretaria,"CbxProyecto": CbxProyecto };
  
  var table = $("#data_table").DataTable({
    destroy: true,
    searching: false,
    dom: "Bfrtip",
    language: {
        sZeroRecords: "No data available in table",
    },
    ajax: {
        method: "POST",
        url: "../Control/php/js.php?page=13",
        data: parametros,
    },
    columns: [
      {"data":"SECRETARIA"},
      {"data":"SUBSECRETARIA"},
      {"data":"PROYECTO"},
      {"data":"PRESUPUESTO_ORI"},
      {"data":"PRESUPUESTO_MOD"},
      {"data":"PRESUPUESTO_COM"},
      {"data":"PRESUPUESTO_DEV"},
  ],
});
  }
  else{
    swal("Error", "Selecciona los filtros", "warning");
  }
}      
  


















/*var  json={
    "empleados":[
        {"nombre":"Miguel Antonio Perez","edad":33},
        {"nombre":"fernando martinez","edad":23}
    ]
};*/







//$("#tbodyProducto").text(json.empleados[1].nombre);   


/*const cars= [
    {"modelo": "ford mustagn",
    "produccion": 2010},
    {
      "modelo": "xce mustagn",
      "produccion": 2210
    }
    
    ]
;

const jsondata=json.parse(cars);
 console.log(typeof jsondata);
*/


 //const arreglo = [];
 //const arregloDeStrings = ["Hola","Adios","Bien"];
/*var obj = new Object();
json.empleados.forEach(x => {
    const name = x.nombre;
    obj[name] = name 
    
    alert(obj[name]);
    //arreglo["data"][] = name;
});


console.log(json.empleados);
*/



















//$("#amount_drafts").text(json.empleados[1].edad);


//$variable=json.empleados[1].nombre;

//alert(obj);

//var miArray = [obj];
//json.empleados.forEach( function(valor, indice, array) {
//    console.log("En el índice " + indice + " hay este valor: " + valor);
//});

/*
$arreglo = array();
foreach ($variable ): 
    $arreglo["data"][] = $variable;
endforeach;
    if($arreglo ==[]){
        $arreglo= null;
        echo json_encode($arreglo);
    }else{
        echo json_encode($arreglo);
    }
*/


//$("#res").text(json.objeto);








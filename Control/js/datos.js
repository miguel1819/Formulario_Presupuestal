$(document).ready(function() {
    $.ajax({
        url : '../Control/php/js.php?page=5',
        method:"POST",
        success:function(data){
        Resultado=data.trim();
        data= JSON.parse(Resultado);

        // Obtener una referencia al elemento canvas del DOM
        const $grafica = document.querySelector("#miGrafico");
        // Las etiquetas son las que van en el eje X.
        const etiquetas = ["Ppto Original", "Ppto Modificado", "Ppto Comprometido", "Ppto devengado", "Ppto Pagado", "Ppto Ejercido", "Ppto No Ejercido", "Ppto No Ejercido Est", "Ppto No ejercido fed"]
        // Podemos tener varios conjuntos de datos
        const Laptops = {
            label: "Avance Presupuestal",
            data: [data.Vpresupuesto_ori, data.Vpresupuesto_mod, data.Vpresupuesto_com, data.Vpresupuesto_dev,data.Vpresupuesto_pag,data.Vpresupuesto_ejer,data.Vpresupuesto_Noejer,data.Vpresupuesto_NOest,data.Vpresupuesto_NOfed], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(2, 10, 111, 0.8)', // Color de fondo
            borderColor: 'rgba(255, 159, 64, 1)', // Color del borde
            borderWidth: 1,// Ancho del borde
        };
        new Chart($grafica, {
            type: 'bar',// Tipo de gráfica
            data: {
                labels: etiquetas,
                datasets: [
                    Laptops,
                    ]
                },
                options: {
                    scales: {
                        yAxes: [
                            {
                            ticks: {
                                beginAtZero: true,
                                stepValue: 10000,
                                stepSize: 100000,
                                steps: 100000,
                                display: true,
                                labelString: 'Date'
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: "Totales Pesos",
                                    fontColor: "green"
                                    }
                            },
                                ],
                                xAxes: [
                                    {
                                        scaleLabel: {
                                            display: true,
                                            //labelString: "Categorias",
                                            fontColor: "green"
                                            }
                                },
                                ]
                            },
                            title: {
                                display: true,
                                text: 'Total Secretaria'
                                },
                        },
                    });
                },
                error: function(data) {
                    console.log(data);
                }
            });
});

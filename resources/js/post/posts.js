
let chart;

let root = new app();

$(document).ready(function () {
    loadChartCategoriasConMayorValoracion()
    loadPostMasVistos()
});

let loadChartCategoriasConMayorValoracion = () => {

    am4core.ready(function () {

        // Themes begin
        am4core.useTheme(am4themes_spiritedaway);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        chart = am4core.create("chartdivcategorias", am4charts.PieChart);

        // Data
        const urlp = `${root.baseUrl()}src/Controller/post/PostController.php`;

        $.ajax({
            type: "POST",
            url: urlp,
            data: {
                funcion: "getValoracionPost"
            },
            beforeSend: function (data) {
                //console.warn("Data-> ",data);
            },
            success: function (data) {
                //console.log("data -> ", data);
                let arr = JSON.parse(data)
                //mostarData(arr)
                chart.data = arr
            },
            error: function (xhr, status) {
                console.error(`Status Error ->${status} Error ->${xhr}`)
            }
        });


        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "valoracion_valoracion";
        pieSeries.dataFields.category = "nombre_categoriaPost";
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeWidth = 2;
        pieSeries.slices.template.strokeOpacity = 1;

        // This creates initial animation
        pieSeries.hiddenState.properties.opacity = 1;
        pieSeries.hiddenState.properties.endAngle = -90;
        pieSeries.hiddenState.properties.startAngle = -90;

    }); // end am4core.ready()

}

let loadPostMasVistos = () => {

    am4core.ready(function () {
        let charpost
        // Themes begin
        am4core.useTheme(am4themes_spiritedaway);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        charpost = am4core.create("chartdivposts", am4charts.XYChart3D);

        // Data
        const urlp = `${root.baseUrl()}src/Controller/post/PostController.php`;

        $.ajax({
            type: "POST",
            url: urlp,
            data: {
                funcion: "getPostMasVistos"
            },
            beforeSend: function (data) {
                //console.warn("Data-> ",data);
            },
            success: function (data) {
                //console.log("data -> ", data);
                //mostarData(arr)
                //charpost.data = arr
                charpost.data = JSON.parse(data)
            },
            error: function (xhr, status) {
                console.error(`Status Error ->${status} Error ->${xhr}`)
            }
        });

        // Create axes
        var categoryAxis = charpost.yAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "anio";
        categoryAxis.numberFormatter.numberFormat = "#";
        categoryAxis.renderer.inversed = true;

        var  valueAxis = charpost.xAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = charpost.series.push(new am4charts.ColumnSeries3D());
        series.dataFields.valueX = "vistas_valoracion";
        series.dataFields.categoryY = "anio";
        series.name = "titulo_post";
        series.columns.template.propertyFields.fill = "color";
        series.columns.template.tooltipText = "{nombre_categoriaPost} / {valueX}";
        series.columns.template.column3D.stroke = am4core.color("#fff");
        series.columns.template.column3D.strokeOpacity = 0.2;

    }); // end am4core.ready()

}
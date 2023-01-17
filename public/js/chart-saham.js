// https://www.anychart.com/blog/2022/02/24/stock-chart-js/
anychart.onDocumentReady(function () {
    // anychart.data.loadGoogleSpreadsheet(
    //   "2PACX-1vRAJB7DVGufdoydUfWG3nHT0hAqjzL58yjMLtNVWKLkv09mLHXrSZ8bnh_NBy-LU4eYsv7aSwL1Kpox",
    anychart.data.loadCsvFile(
        "https://raw.githubusercontent.com/herkahahaha/testingCsv/main/ASLC.JK.csv",
        function (data) {
            // create data table on loaded data
            var dataTable = anychart.data.table();
            dataTable.addData(data);

            // create stock chart
            var chart = anychart.stock();

            // map loaded data for the ohlc series
            var mapping = dataTable.mapAs({
                open: 1,
                high: 2,
                low: 3,
                close: 4,
            });

            // create first plot on the chart
            var plot = chart.plot(0);

            // create ohlc series
            plot.ohlc().data(mapping).name("Autopedia Sukses Lestari Tbk");

            // set grid settings
            plot.yGrid(true).xGrid(true).yMinorGrid(true).xMinorGrid(true);

            // create and setup line series
            var lineSeries = plot.line(dataTable).name("ASLC.JK");

            // set rising/falling and normal stroke settings
            lineSeries.risingStroke("#2FA85A", 3, null, "round", "round");
            lineSeries.fallingStroke("#EE4237", 3, null, "round", "round");

            // create scroller series
            chart.scroller().line(dataTable);

            // set chart selected date/time range
            chart.selectRange("2021-01-01", "2023-12-31");

            // create range picker
            var rangePicker = anychart.ui.rangePicker();

            // init range picker
            rangePicker.render(chart);

            // create range selector
            var rangeSelector = anychart.ui.rangeSelector();

            // init range selector
            rangeSelector.render(chart);

            // sets the title of the chart
            chart.title("Autopedia Sukses Lestari Tbk Stock Chart");

            // set container id for the chart
            chart.container("myChart");

            // initiate chart drawing
            chart.draw();
        }
    );
});

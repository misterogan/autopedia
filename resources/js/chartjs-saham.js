let ctx = document.getElementById("newChart");
let currPrice = document.getElementById("current-price");
let currTime = document.getElementById("current-date");

function formatDate(date) {
    return moment(date, "MM/DD/YYYY").format("D MMM YYYY");
}

let highPrice = [];
let lowPrice = [];
let openPrice = [];
let closePrice = [];
let volumePrice = [];
let indexTime = [];

const sampleData = window
    .fetch( APP_URL + "/get-data-saham" )
    .then((val) => val.json())
    .then((res) => {
        const newDataFilter = Object.assign({}, res.chart.result[0]);
        const { indicators, meta, timestamp } = newDataFilter;
        const indexChart = Object.assign(...indicators.quote);
        // extract the price
        const { low, high, open, close } = indexChart;
        lowPrice.push(...low) &&
            highPrice.push(...high) &&
            openPrice.push(...open) &&
            closePrice.push(...close);

        // modify last closed stock price
        const percentages = Object.assign(indicators.adjclose[0]);
        const marginData = percentages.adjclose.reverse();
        const marginPrice = marginData[0] - marginData[1];
        const percentPrice = ((marginPrice / marginData[1]) * 100).toFixed(2);

        // confert price
        // const stockPrice = new Intl.NumberFormat("id-ID", {
        //     style: "currency",
        //     currency: "IDR",
        //     minimumFractionDigits: 2,
        // }).format(meta.regularMarketPrice);
        // currPrice.innerHTML = `${stockPrice}`;

        const stockPrice = meta.regularMarketPrice;
        currPrice.innerHTML = `${stockPrice}.00`;

        // date today
        const currDate = new Date();
        currTime.innerHTML = `<span>${formatDate(currDate)}</span>`;

        for (let i = 0; i < timestamp.length; i++) {
            const convertTime = new Date(timestamp[i] * 1000);
            indexTime.push(moment(convertTime).format("D MMM YY"));
        }
        const displayChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: indexTime.reduce((acc, curr) => {
                    const x = acc.find((item) => item === curr);
                    if (!x) {
                        return acc.concat([curr]);
                    } else {
                        return acc;
                    }
                }, []),
                datasets: [
                    {
                        data: closePrice,
                        label: "",
                        borderColor: "rgba(255, 26, 104, 1)",
                        backgroundColor: "rgba(255, 26, 104, 0.2)",
                        fill: {
                            target: {
                                value: 0,
                            },
                            // above: (context) => {
                            //     console.log(context);
                            //     const chart = context.chart;
                            //     const { ctx, chartArea, data, scales } = chart;
                            //     if (!chartArea) {
                            //         return null;
                            //     }
                            //     return bottomGardient(ctx, chartArea, data, scales);
                            // },
                            above: "rgba(255, 26, 104, 0.2)",
                        },
                        // hidden: true,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false,
                    },
                },
                plugins: {
                    title: {
                        display: true,
                        text: percentPrice < 0 ? `${marginPrice}.00 ( ${percentPrice}% )` : `${marginPrice}.00 ( ${percentPrice}% )`,
                        color: percentPrice < 0 ? "#F24754" : "#00873c",
                        font: {
                            size: 14,
                        },
                    },
                    subtitle: {
                        display: false,
                        text: "2 Minggu Terakhir",
                        // color: "#F24754",
                    },
                    legend: {
                        display: false,
                    }

                    // tooltip: {
                    //     callbacks: {
                    //         title: () => {
                    //             return "test";
                    //         },
                    //         labelColor: function (context) {
                    //             return {
                    //                 borderColor: "rgb(0, 0, 255)",
                    //                 backgroundColor: "rgb(255, 0, 0)",
                    //                 borderWidth: 2,
                    //                 borderRadius: 2,
                    //             };
                    //         },
                    //         labelTextColor: function (context) {
                    //             return "#f4f4f4";
                    //         },
                    //     },
                    // },
                },
            },
        });
        return displayChart;
    })
    .catch((err) => console.warn(err));

// const displayChart = new Chart(ctx, {
//     type: "line",
//     data: {
//         labels: [
//             "Sunday",
//             "Monday",
//             "Tuesday",
//             "Wednesday",
//             "Thursday",
//             "Friday",
//             "Saturday",
//         ],
//         datasets: [
//             {
//                 data: [
//                     192, 191, 190, 192, 193, 193, 193, 194, 192, 192, 192, 192,
//                     192, 193, 193, 192, 193, 193, 193, 193, 192, 192, 191, 192,
//                     191, 191, 191, 191, 191, 191, 190, 190, 190, 189, 189, 190,
//                     190, 189, 190, 190, 189, 189, 189, 189, 190, 189, 190, 190,
//                     189, 190, 190, 190, 191, 191, 191, 191, 192, 192, 192, 191,
//                     192, 193, 193, 192, 192, 191, 192, 192, 192, 190,
//                 ],
//                 label: "",
//                 borderColor: "rgba(255, 26, 104, 1)",
//                 backgroundColor: "rgba(255, 26, 104, 0.2)",
//                 fill: {
//                     target: {
//                         value: 86,
//                     },
//                     // above: (context) => {
//                     //     console.log(context);
//                     //     const chart = context.chart;
//                     //     const { ctx, chartArea, data, scales } = chart;
//                     //     if (!chartArea) {
//                     //         return null;
//                     //     }
//                     //     return bottomGardient(ctx, chartArea, data, scales);
//                     // },
//                     above: "rgba(255, 26, 104, 0.2)",
//                 },
//                 // hidden: true,
//             },
//         ],
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: false,
//             },
//         },
//         plugins: {
//             title: {
//                 display: true,
//                 text: "-96.00, (-33.33%)",
//                 color: "#F24754",
//             },
//             subtitle: {
//                 display: true,
//                 text: "2 Minggu Terakhir",
//                 // color: "#F24754",
//             },
//         },
//     },
// });

// function bottomGardient(ctx, chartArea, data, scales) {
//     const { left, right, top, bottom, width, height } = chartArea;
//     const { x, y } = scales;
//     const gardients = ctx.createLinearGardient(
//         //createLinearGardient error!
//         0,
//         y.getPixelForValue(data.datasets[0], data[0]),
//         0,
//         bottom
//     );
//     gardients.addColorStop(0, "rgba(255, 26, 104, 0.83)");
// }

// const inputs = {
//     min: 20,
//     max: 80,
//     count: 8,
//     decimals: 2,
//     continuity: 1,
// };

// const generateLabels = () => {
//     return Utils.months({ count: inputs.count });
// };

// const generateData = () => Utils.numbers(inputs);

// Utils.srand(42);

// const newData = {
//     labels: generateLabels(),
//     datasets: [
//         {
//             label: "D8",
//             data: generateData(),
//             borderColor: Utils.CHART_COLORS.orange,
//             backgroundColor: Utils.transparentize(Utils.CHART_COLORS.orange),
//             fill: "end",
//             hidden: true,
//         },
//     ],
// };

// const config = {
//     type: "line",
//     data: newData,
//     options: {
//         scales: {
//             y: {
//                 stacked: true,
//             },
//         },
//         plugins: {
//             filler: {
//                 propagate: false,
//             },
//             "samples-filler-analyser": {
//                 target: "newChart",
//             },
//         },
//         interaction: {
//             intersect: false,
//         },
//     },
// };

// const displayChart = new Chart(newChart, config);

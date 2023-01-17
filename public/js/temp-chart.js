const currentModel = document.getElementById("ap-stock-indicator");

function formatDate(date) {
    return moment(date, "MM/DD/YYYY").format("D MMM YYYY");
}

function updateHTML(elmId, value, styles) {
    var elem = document.getElementById(elmId);
    if (typeof elem !== "undefined" && elem !== null) {
        elem.innerHTML = value;
        elem.style.color = styles;
    }
}

const fetchData = window.fetch(APP_URL + "/get-data-saham");

async function getData() {
    try {
        const displayData = await fetchData;
        const req = await displayData.json();
        const result = await req.chart;
        const newDataFilter = Object.assign({}, result.result[0]);
        const { indicators, meta } = newDataFilter;
        const stockPrice = meta.regularMarketPrice;
        const percentages = Object.assign(indicators.adjclose[0]);
        const marginData = percentages.adjclose.reverse();
        const marginPrice = marginData[0] - marginData[1];
        const percentPrice = ((marginPrice / marginData[1]) * 100).toFixed(2);
        // console.log(meta);
        updateHTML("ap-stock-price", `Rp. ${stockPrice}.00`);
        updateHTML(
            "ap-stock-percent",
            percentPrice > 0 ? `+${percentPrice}%` : `-${percentPrice}%`,
            percentPrice > 0 ? "#00873c" : "#F24754"
        );
        updateHTML(
            "ap-stock-marginprice",
            percentPrice > 0 ? `+${marginPrice}.00` : `-${marginPrice}`,
            percentPrice > 0 ? "#00873c" : "#F24754"
        );
    } catch (err) {
        console.warning(err);
    }
}

function handleShow() {
    currentModel.addEventListener("click", () => {
        currentModel.classList.toggle("actived");
    });
}

const currDate = new Date();

getData();

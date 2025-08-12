document.addEventListener("DOMContentLoaded", function () {
    // Data awal
    const incomeValue = 1800;
    const expenseValue = 1700; // contoh

    // Default warna Income
    let incomeColor = "#31C48D";
    // Variabel untuk keterangan
    let warningText = "";

    // Cek kondisi
    if (expenseValue >= incomeValue) {
        incomeColor = "#14532d"; // hijau tua
        warningText = "Rugi, Expense melebihi Income!";
    } else if (expenseValue >= 0.8 * incomeValue) {
        incomeColor = "#31C48D"; // tetap hijau normal
        warningText = "Hati-Hati: Expense mendekati Income";
    } else {
        // expense jauh lebih kecil dari income
        incomeColor = "#31C48D";
        warningText = "";
    }

    const options = {
        series: [
            {
                name: "Income",
                data: [incomeValue],
                color: incomeColor,
            },
            {
                name: "Expense",
                data: [expenseValue],
                color: "#F05252",
            },
        ],
        chart: {
            sparkline: {
                enabled: false,
            },
            type: "bar",
            width: "100%",
            height: 400,
            toolbar: {
                show: false,
            },
        },
        fill: {
            opacity: 1,
        },
        plotOptions: {
            bar: {
                horizontal: true,
                columnWidth: "100%",
                borderRadiusApplication: "end",
                borderRadius: 6,
                dataLabels: {
                    position: "top",
                },
            },
        },
        legend: {
            show: true,
            position: "bottom",
        },
        dataLabels: {
            enabled: false,
        },
        tooltip: {
            shared: true,
            intersect: false,
            formatter: function (value) {
                return "$" + value;
            },
        },
        xaxis: {
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
                formatter: function (value) {
                    return "$" + value;
                },
            },
            categories: ["Jul"],
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
        yaxis: {
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
            },
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -20,
            },
        },
        fill: {
            opacity: 1,
        },
    };

    if (
        document.getElementById("bar-chart-kedua") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("bar-chart-kedua"),
            options
        );
        chart.render();

        // Jika ada warning, tampilkan di bawah chart
        if (warningText !== "") {
            let warningEl = document.getElementById("warning-text");
            if (!warningEl) {
                warningEl = document.createElement("div");
                warningEl.id = "warning-text";
                warningEl.style.color = "#dc2626"; // merah
                warningEl.style.marginTop = "8px";
                warningEl.style.fontWeight = "600";
                document
                    .getElementById("bar-chart-kedua")
                    .parentNode.appendChild(warningEl);
            }
            warningEl.textContent = warningText;
        }
    }
});

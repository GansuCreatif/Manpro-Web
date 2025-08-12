import Chart from "chart.js/auto";

document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("sCurveChart");
    if (!ctx) return;

    new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "Week 1",
                "Week 2",
                "Week 3",
                "Week 4",
                "Week 5",
                "Week 6",
                "Week 7",
                "Week 8",
                "Week 9",
                "Week 10",
            ],
            datasets: [
                {
                    label: "Progress (%)",
                    data: [2, 5, 10, 20, 35, 55, 75, 90, 98, 100],
                    fill: true,
                    backgroundColor: "rgba(59, 130, 246, 0.2)",
                    borderColor: "rgba(59, 130, 246, 1)",
                    borderWidth: 3,
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    pointBackgroundColor: "rgba(59, 130, 246, 1)",
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 110,
                    ticks: {
                        stepSize: 10,
                        callback: (value) => value + "%",
                    },
                    title: {
                        display: true,
                        text: "Progress (%)",
                    },
                },
                x: {
                    title: {
                        display: true,
                        text: "Time (Weeks)",
                    },
                },
            },
            plugins: {
                legend: {
                    labels: {
                        color: "#1e40af",
                    },
                },
                tooltip: {
                    callbacks: {
                        label: (ctx) => ctx.parsed.y + "%",
                    },
                },
            },
        },
    });
});

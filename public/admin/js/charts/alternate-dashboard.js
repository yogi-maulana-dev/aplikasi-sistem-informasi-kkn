(function() {
    "use strict";
    if (document.querySelectorAll('#myChart').length) {
        const colors= ["#4bc7d2", "#3a57e8"]
        const options = {
            series: [55, 75],
            chart: {
                height: 230,
                type: 'radialBar',
            },
            colors: colors,
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 10,
                        size: "50%",
                    },
                    track: {
                        margin: 10,
                        strokeWidth: '50%',
                    },
                    dataLabels: {
                        show: false,
                    }
                }
            },
            labels: ['Apples', 'Oranges'],
        };
        const chart = new ApexCharts(
          document.querySelector("#myChart"),
          options
        );
        chart.render();
    }
    if (document.querySelectorAll('#d-activity').length) {
        const options = {
            series: [{
                name: 'Successful deals',
                data: [30, 50, 35, 60, 40, 60, 60, 30, 50, 35,]
            }, {
                name: 'Failed deals',
                data: [40, 50, 55, 50, 30, 80, 30, 40, 50, 55]
            }],
            chart: {
                type: 'bar',
                height: 230,
                stacked: true,
                toolbar: {
                    show: false
                }
            },
            colors: ["#3a57e8", "#4bc7d2"],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '28%',
                    endingShape: 'rounded',
                    borderRadius: 5,
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S', 'M', 'T', 'W'],
                labels: {
                    minHeight: 20,
                    maxHeight: 20,
                    style: {
                        colors: "#8A92A6",
                    },
                }
            },
            yaxis: {
                title: {
                    text: ''
                },
                labels: {
                    minWidth: 19,
                    maxWidth: 19,
                    style: {
                        colors: "#8A92A6",
                    },
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        };
        const chart = new ApexCharts(
            document.querySelector("#d-activity"),
            options
        );
        chart.render();
    }
    if (document.querySelectorAll('#d-main').length) {
        const options = {
            series: [{
                name: 'total',
                data: [94, 80, 94, 80, 94, 80, 94]
            }, {
                name: 'pipline',
                data: [72, 60, 84, 60, 74, 60, 78]
            }],
            chart: {
                fontFamily: '"Inter", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                height: 245,
                type: 'area',
                toolbar: {
                    show: false
                },
                sparkline: {
                    enabled: false,
                },
            },
            colors: ["#3a57e8", "#4bc7d2"],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            yaxis: {
                show: true,
                labels: {
                    show: true,
                    minWidth: 19,
                    maxWidth: 19,
                    style: {
                        colors: "#8A92A6",
                    },
                    offsetX: -5,
                },
            },
            legend: {
                show: false,
            },
            xaxis: {
                labels: {
                    minHeight: 22,
                    maxHeight: 22,
                    show: true,
                    style: {
                        colors: "#8A92A6",
                    },
                },
                lines: {
                    show: false //or just here to disable only x axis grids
                },
                categories: ["Jan", "Feb", "Mar", "Apr", "Jun", "Jul", "Aug"]
            },
            grid: {
                show: false,
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: "vertical",
                    shadeIntensity: 0,
                    gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
                    inverseColors: true,
                    opacityFrom: .4,
                    opacityTo: .1,
                    stops: [0, 50, 80],
                    colors: ["#3a57e8", "#4bc7d2"]
                }
            },
            tooltip: {
                enabled: true,
            },
        };
        const chart = new ApexCharts(
            document.querySelector("#d-main"),
            options
        );
        chart.render();
    }

})()

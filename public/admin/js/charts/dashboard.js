(function () {
    "use strict";

/***************************************
    New Dashboard Charts Start
**************************************/

    if (document.querySelectorAll('#grossVolume').length) {
        const colors = ["#3a57e8", "#4bc7d2"];
        const options = {
          series: [
            {
              name: "Successful deals",
              data: [30, 50, 35, 60, 40, 60, 60],
            },
            {
              name: "Failed deals",
              data: [40, 50, 55, 50, 30, 80, 30],
            },
          ],
          chart: {
            type: "bar",
            height: 150,
            stacked: true,
            toolbar: {
              show: false,
            },
          },
          colors: colors,
          plotOptions: {
            bar: {
              horizontal: false,
              columnWidth: "28%",
              endingShape: "rounded",
              borderRadius: 3,
            },
          },
          legend: {
            show: false,
          },
          dataLabels: {
            enabled: false,
          },
          stroke: {
            show: true,
            width: 3,
            colors: ["transparent"],
          },
          grid: {
            show: true,
            strokeDashArray: 7,
          },
          xaxis: {
            categories: ["S", "M", "T", "W", "T", "F", "S"],
            labels: {
              minHeight: 20,
              maxHeight: 20,
              style: {
                colors: "#8A92A6",
              },
            },
          },
          yaxis: {
            title: {
              text: "",
            },
            labels: {
              minWidth: 20,
              maxWidth: 20,
              style: {
                colors: "#8A92A6",
              },
            },
          },
          fill: {
            opacity: 1,
          },
          tooltip: {
            y: {
              formatter: function (val) {
                return "$ " + val + " thousands";
              },
            },
          },
          responsive: [
            {
              breakpoint: 1025,
              options: {
                chart: {
                  height: 130,
                },
              },
            },
          ],
        };

        const chart = new ApexCharts(
          document.querySelector("#grossVolume"),
          options
        );
        chart.render();
    }

    // dashboard-line-chart
    if (document.querySelectorAll('#dashboard-line-chart').length) {
      const options = {
        series: [{
        name: 'Sales',
        data: [10, 82, 75, 68, 47, 60, 49, 91, 108]
        }],
        colors: ["#3a57e8"],
          chart: {
          height: '305',
          type: 'line',
          toolbar: {
            show: false
          },
        },
        forecastDataPoints: {
          count: 3,
        },
        stroke: {
          width: 3,
        },
        grid: {
          show:true,
          strokeDashArray: 7,
        },
        markers: {
          size: 6,
          colors:  '#FFFFFF',
          strokeColors: ["#3a57e8"],
          strokeWidth: 2,
          strokeOpacity: 0.9,
          strokeDashArray: 0,
          fillOpacity: 0,
          shape: "circle",
          radius: 2,
          offsetX: 0,
          offsetY: 0,
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
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
          axisBorder: {
            show: false,
          },
          axisTicks: {
            show: false,
          },
          tooltip: {
            enabled: false,
          },
        labels: {
            minHeight: 22,
            maxHeight: 22,
            show: true,
            style: {
                colors: "#8A92A6",
            },
        },
      }
      };

      const chart = new ApexCharts(document.querySelector("#dashboard-line-chart"), options);
      chart.render();

      //color customizer
      document.addEventListener('theme_color', (e) => {
        let prefix = getComputedStyle(document.body).getPropertyValue('--prefix') || 'bs-';
        if (prefix) {
          prefix = prefix.trim()
        }
        const color1 = getComputedStyle(document.body).getPropertyValue(`--${prefix}primary`);
        const color2 = getComputedStyle(document.body).getPropertyValue(`--${prefix}info`);
        const colors = [color1.trim(), color2.trim()];

        const newOpt = {
          colors: colors,
          markers: {
            strokeColors: colors,
          },
          fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: "vertical",
                gradientToColors: colors,
                opacityFrom: 1,
                opacityTo: 1,
                colors: colors,
            }
          },
      }
        chart.updateOptions(newOpt)
      })

      document.addEventListener('body_font_family',(e) =>{
            let prefix = getComputedStyle(document.body).getPropertyValue('--prefix') || 'bs-';
            if (prefix) {
                prefix = prefix.trim()
            }
            const font_1 = getComputedStyle(document.body).getPropertyValue(`--${prefix}body-font-family`);
            const fonts = [font_1.trim()];
            const newOpt = {
                chart: {
                    fontFamily: fonts,
                }
        }
        chart.updateOptions(newOpt)
      })
    }

})();

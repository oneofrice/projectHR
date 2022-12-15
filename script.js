let ctx = document.getElementById('myChart');
ctx.height = 200;
let myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['The probability that tou will not change job',
            'The probability that you will change job'],
        datasets: [{
            data: [97.4, 2.6],
            backgroundColor: [ '#8DBFFF', '#2E5C9A'],
            borderWidth: 0.1 ,
            borderColor: '#ddd'
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Recommended Daily Diet',
            position: 'top',
            fontSize: 16,
            fontColor: '#111',
            padding: 20
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 20,
                fontColor: '#111',
                padding: 15
            }
        },
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
                color: '#111',
                textAlign: 'center',
                font: {
                    lineHeight: 1.6
                },
                formatter: function(value, ctx) {
                    return ctx.chart.data.labels[ctx.dataIndex] + '\n' + value + '%';
                }
            }
        }
    }
});

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

$(document).ready(function () {
    $('#submit_btn').click(function (e) {
        e.preventDefault();
        let city = $('#city').val();
        let enrollment = $('#enrollment').val();
        let major = $('#major').val();
        let experience = $('#experience').val();
        let company_t = $('#company_t').val();
        let company_s = $('#company_s').val();
        let last_job = $('#last_job').val();
        let gender = $('#gender').val();
        let rel_experience = $('#rel_experience').val();
        let edu_level = $('#edu_level').val();
        let url = 'https://e25f-94-233-88-155.eu.ngrok.io?city=' + city +'&enrollment=' + enrollment + '&major=' + major + '&experience=' + experience + '&company_t=' + company_t + '&company_s=' + company_s +
            '&last_job=' + last_job + '&gender=' + gender + '&rel_experience=' + rel_experience + '&edu_level=' + edu_level;
        $.ajax({
            url: url,
            type:"GET",
            headers: {
                'Access-Control-Allow-Origin': 'https://e25f-94-233-88-155.eu.ngrok.io',
            },
            dataType: 'jsonp',
            contentType:'application/json',
            CORS: true ,
            crossDomain: true,
            /* Параметры передаваемые в запросе. */
            success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */
                console.log(data);/* В переменной data содержится ответ от index.php. */
            },
            error: function (data) {
                alert("error");
            }
        });
    })
});
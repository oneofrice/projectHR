$(document).ready(function() {
	let ctx = document.getElementById('myChart');
	if (ctx) {
		const queryString = window.location.href;
		const url = new URL(queryString);
		let result = url.searchParams.get('result');
		result *= 100;
		let other = 100 - result;
		ctx.height = 200;

		let canvas_c = document.getElementById('change');
		canvas_c.innerHTML = Math.round(result) + "%";
		let canvas_nc = document.getElementById('not_change');
		canvas_nc.innerHTML = Math.round(other) + "%";

		let myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				datasets: [{
					data: [result, other],
					backgroundColor: [ '#8DBFFF', '#2E5C9A'],
					borderWidth: 0.1 ,
					borderColor: '#ddd'
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Result diagram',
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
						fontColor: '#2E5C9A',
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
	}
})

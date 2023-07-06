var options = {
	series: [
		{
			name: "Sales",
			data: [50, 45, 60, 70, 50, 45, 60, 70],
		},
		{
			name: "Purchase",
			data: [-21, -54, -45, -35, -21, -54, -45, -35],
		},
	],
	colors: ["#28C76F", "#EA5455"],
	chart: {
		type: "bar",
		height: 300,
		stacked: true,
		zoom: {
			enabled: true,
		},
	},
	responsive: [
		{
			breakpoint: 280,
			options: {
				legend: {
					position: "bottom",
					offsetY: 0,
				},
			},
		},
	],
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "20%",
            borderRadius: 5,
            borderRadiusWhenStacked: "All"
		},
	},
	xaxis: {
		categories: [
			" Jan ",
			"feb",
			"march",
			"april",
			"may",
			"june",
			"july",
			"auguest",
		],
	},
	legend: {
        show: false,
		position: "top",
		offsetX: 40,
	},
	fill: {
		opacity: 1,
	},
};

var chart = new ApexCharts(document.querySelector("#sales_charts"), options);
chart.render();

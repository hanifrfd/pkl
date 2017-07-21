$(document).ready(function(){ 
	$.ajax({
		url: "http://localhost/Miesetan_API/API/get_makanan",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var score = [];
			var scoreDriver=[];
			for(var i in data){
				label.push(data[i].nama);
				score.push(data[i].stock);
		

			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }


			var chartdata = {
				labels: label,
				datasets : [
					{
						backgroundColor: ["#00a65a",'#DD4B39',"#F39C12","#3498db","#95a5a6","#9b59b6","#f1c40f","#e74c3c","#34495e"],
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: '#E3F2E1',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#makanan");

			var barGraph = new Chart(ctx, {
				type: 'doughnut',
				data: chartdata,
				options: {
					 legend: {
					    display: true
					  },
					  pieceLabel: {
					    mode: 'value',
					    precision: 2

					  }
				}
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});
	$.ajax({
		url: "http://localhost/Miesetan_API/API/get_minuman",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var score = [];
			var scoreDriver=[];
			for(var i in data){
				label.push(data[i].nama);
				score.push(data[i].stock);
		

			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }


			var chartdata = {
				labels: label,
				datasets : [
					{
						backgroundColor: ["#00a65a",'#DD4B39',"#F39C12","#3498db","#95a5a6","#9b59b6","#f1c40f","#e74c3c","#34495e"],
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: '#E3F2E1',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#minuman");

			var barGraph = new Chart(ctx, {
				type: 'doughnut',
				data: chartdata,
				options: {
					 legend: {
					    display: true
					  },
					  pieceLabel: {
					    mode: 'value',
					    precision: 2

					  }
				}
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});
	
$.ajax({
		url: "http://localhost/Miesetan_API/API/get_penjualanhari",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var Menu = [];					
			for(var i in data){
				console.log(data[i].success);
				label.push(data[i].hari);
				
				Menu.push(data[i].total);
						
			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }

			var chartdata = {
				labels: label,
				datasets : [
					{
						label: 'Total Penjualan',
						fill: false,
						lineTension: .5,
						backgroundColor: "#4289f4",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Menu
					}
					// {
					// 	label: produk,
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#f56979",
					// 	borderColor: "#f56979",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: Menu
					// }
					// ,
					// {
					// 	label: "Cancel",
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#f56979",
					// 	borderColor: "#f56979",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: scoreCancel
					// },
					// {
					// 	label: "Succes",
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#00a65a",
					// 	borderColor: "#00a65a",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: scoreSuccess
					// }

				],

			};

			

			

			var ctx = $("#penjualan");
			var opt = {
			    events: false,
			    tooltips: {
			        enabled: false
			    },
			    hover: {
			        animationDuration: 0
			    },
			    animation: {
			        duration: 5,
			        onComplete: function () {
			            var chartInstance = this.chart,
			                ctx = chartInstance.ctx;
			            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
			            ctx.textAlign = 'center';
			            ctx.textBaseline = 'bottom';

			            this.data.datasets.forEach(function (dataset, i) {
			                var meta = chartInstance.controller.getDatasetMeta(i);
			                meta.data.forEach(function (bar, index) {
			                    var data = dataset.data[index];                            
			                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
			                });
			            });
			        }
			    }
			};
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
				
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});
$.ajax({
		url: "http://localhost/Miesetan_API/API/get_pendapatanprodukhari",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var Menu = [];					
			for(var i in data){
				console.log(data[i].success);
				label.push(data[i].hari);
				
				Menu.push(data[i].total);
						
			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }

			var chartdata = {
				labels: label,
				datasets : [
					{
						label: 'Total Produk Terjual',
						fill: false,
						lineTension: .5,
						backgroundColor: "#db2b2b",
						borderColor: "#b52020",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Menu
					}
					// {
					// 	label: produk,
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#f56979",
					// 	borderColor: "#f56979",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: Menu
					// }
					// ,
					// {
					// 	label: "Cancel",
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#f56979",
					// 	borderColor: "#f56979",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: scoreCancel
					// },
					// {
					// 	label: "Succes",
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#00a65a",
					// 	borderColor: "#00a65a",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: scoreSuccess
					// }

				],

			};

			

			

			var ctx = $("#produkterjual");
			var opt = {
			    events: false,
			    tooltips: {
			        enabled: false
			    },
			    hover: {
			        animationDuration: 0
			    },
			    animation: {
			        duration: 5,
			        onComplete: function () {
			            var chartInstance = this.chart,
			                ctx = chartInstance.ctx;
			            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
			            ctx.textAlign = 'center';
			            ctx.textBaseline = 'bottom';

			            this.data.datasets.forEach(function (dataset, i) {
			                var meta = chartInstance.controller.getDatasetMeta(i);
			                meta.data.forEach(function (bar, index) {
			                    var data = dataset.data[index];                            
			                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
			                });
			            });
			        }
			    }
			};
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
				
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});
	$.ajax({
		url: "http://localhost/Miesetan_API/API/get_transaksihari",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var Menu = [];					
			for(var i in data){
				console.log(data[i].success);
				label.push(data[i].hari);
				
				Menu.push(data[i].total);
						
			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }

			var chartdata = {
				labels: label,
				datasets : [
					{
						label: 'Total Transaksi',
						fill: false,
						lineTension: .5,
						backgroundColor: "#20b533",
						borderColor: "#147a21",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Menu
					}
					// {
					// 	label: produk,
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#f56979",
					// 	borderColor: "#f56979",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: Menu
					// }
					// ,
					// {
					// 	label: "Cancel",
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#f56979",
					// 	borderColor: "#f56979",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: scoreCancel
					// },
					// {
					// 	label: "Succes",
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#00a65a",
					// 	borderColor: "#00a65a",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: scoreSuccess
					// }

				],

			};

			

			

			var ctx = $("#mycanvas3");
			var opt = {
			    events: false,
			    tooltips: {
			        enabled: false
			    },
			    hover: {
			        animationDuration: 0
			    },
			    animation: {
			        duration: 5,
			        onComplete: function () {
			            var chartInstance = this.chart,
			                ctx = chartInstance.ctx;
			            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
			            ctx.textAlign = 'center';
			            ctx.textBaseline = 'bottom';

			            this.data.datasets.forEach(function (dataset, i) {
			                var meta = chartInstance.controller.getDatasetMeta(i);
			                meta.data.forEach(function (bar, index) {
			                    var data = dataset.data[index];                            
			                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
			                });
			            });
			        }
			    }
			};
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
				
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});
	$.ajax({
		url: "http://localhost/Miesetan_API/API/get_penjualanprodukhari",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var Menu = [];					
			var produk = [];
			for(var i in data){
				console.log(data[i].success);
				label.push(data[i].hari);
				produk.push(data[i].produk);
				Menu.push(data[i].total);						
			}
			
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }

			var chartdata = {
				labels: produk,
				datasets : [
					{
						label: 'Jumlah Produk Terjual || Day : '+label[0],
						fill: false,
						lineTension: .5,
						backgroundColor: "#6ed3e5",
						borderColor: "#6ed3e5",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Menu
					}
					
					// {
					// 	label: produk[2],
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#6ed3e5",
					// 	borderColor: "#6ed3e5",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: Menu[2]
					// },
					// {
					// 	label: produk[3],
					// 	fill: false,
					// 	lineTension: 0.1,
					// 	backgroundColor: "#00a65a",
					// 	borderColor: "#00a65a",
					// 	pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
					// 	pointHoverBorderColor: "rgba(59, 89, 152, 1)",
					// 	data: Menu[3]
					// }

				],

			};

			

			

			var ctx = $("#produk");
			var opt = {
			    events: false,
			    tooltips: {
			        enabled: false
			    },
			    hover: {
			        animationDuration: 0
			    },
			    animation: {
			        duration: 5,
			        onComplete: function () {
			            var chartInstance = this.chart,
			                ctx = chartInstance.ctx;
			            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
			            ctx.textAlign = 'center';
			            ctx.textBaseline = 'bottom';

			            this.data.datasets.forEach(function (dataset, i) {
			                var meta = chartInstance.controller.getDatasetMeta(i);
			                meta.data.forEach(function (bar, index) {
			                    var data = dataset.data[index];                            
			                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
			                });
			            });
			        }
			    }
			};
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
				
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});	

	
});


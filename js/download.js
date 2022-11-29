Chart.defaults.font.size = 25;
//setup
const data = {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Number of Downloads',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }]
};
//config
const config = {
    type: 'bar',
    data: data,
    
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        size: 25
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

//render init
const barchartD = new Chart(
    document.getElementById('barchartD'),
    config 
);
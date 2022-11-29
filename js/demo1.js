//setup
const data = {
    labels: ['Female', 'Male', ],
    datasets: [{
        label: 'My First Dataset',
        data: [142, 136],
        backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
        ],
    }]
};

//config
const config = {
    type: 'pie',
    data: data,
    devicePixelRatio: false
};

//render init
const pie = new Chart(
    document.getElementById('pie'),
    config
);
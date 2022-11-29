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
        borderColor: [
            'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
    }]
};
//plugin
const plugin = {
    id: 'custom_canvas_background_color',
    beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle = 'lightGreen';
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
    }
};
//config
const config = {
    type: 'pie',
    data: data,
};

//render init
const pie = new Chart(
    document.getElementById('pie'),
    config
);
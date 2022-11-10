// const labels = ['Tháng 1', 'Tháng 2', 'Tháng 12'];
const data3 = {
    labels: [
        'Áo nam',
        'Áo nữ',
        'Áo co giãn'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [50, 70, 60],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
    }]
};

const config3 = {
    type: 'doughnut',
    data: data3,
};
const canvas3 = document.getElementById('chart__first');
const chart3 = new Chart(canvas3, config3);
let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['Tarefas completas', 'Tarefas em andamento', 'Tarefas pendentes'];
let colorHex = ['#011c3a', '#0D4E85', 'rgb(2, 1, 26)'];

let myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
            data: [3, 4, 3],
            backgroundColor: colorHex
        }],
        labels: labels
    },
    options: {
        responsive: true,
        legend: {
            position: 'bottom'
        },
        plugins: {
            datalabels: {
                color: '#c2c2c2',
                anchor: 'end',
                align: 'start',
                offset: -10,
                borderWidth: 1,
                borderColor: '#000',
                borderRadius: 25,
                backgroundColor: (context) => {
                    return context.dataset.backgroundColor;
                },
                font: {
                    weight: 'bold',
                    size: '16'
                },
                formatter: (value) => {
                    return value + ' %';
                }
            }
        }
    }
})
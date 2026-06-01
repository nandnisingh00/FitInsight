const detoxCtx = document.getElementById('detoxChart').getContext('2d');
new Chart(detoxCtx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Water Intake (L)',
            data: [2.5, 3.0, 2.8, 3.2, 3.5, 3.3, 3.6],
            borderColor: '#00ffb3',
            backgroundColor: 'rgba(0, 255, 179, 0.10)',
            borderWidth: 3,
            fill: true,
            tension: 0.45,
            pointRadius: 5,
            pointHoverRadius: 7,
            pointBackgroundColor: '#00ffb3',
            pointBorderColor: '#ffffff',
            pointBorderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: '#e2e2ee',
                    font: {
                        family: 'Poppins',
                        size: 13
                    }
                }
            },
            tooltip: {
                backgroundColor: 'rgba(15, 32, 39, 0.95)',
                titleColor: '#ffffff',
                bodyColor: '#d1fae5',
                borderColor: 'rgba(255,255,255,0.08)',
                borderWidth: 1,
                padding: 12,
                cornerRadius: 10
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#cfd9df',
                    font: {
                        family: 'Poppins',
                        size: 12
                    }
                },
                grid: {
                    color: 'rgba(255,255,255,0.06)',
                    drawBorder: false
                }
            },
            y: {
                beginAtZero: true,
                ticks: {
                    color: '#cfd9df',
                    font: {
                        family: 'Poppins',
                        size: 12
                    }
                },
                grid: {
                    color: 'rgba(255,255,255,0.06)',
                    drawBorder: false
                }
            }
        }
    }
});

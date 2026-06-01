const ctx = document.getElementById('dietChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
        datasets: [{
            label: 'Calories Managed',
            data: [1800, 1700, 1600, 1500, 1450],
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
        layout: {
            padding: {
                left: 8,
                right: 8,
                top: 8,
                bottom: 8
            }
        },
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

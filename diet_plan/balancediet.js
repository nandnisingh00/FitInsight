const balancedDietCtx = document.getElementById('balancedDietChart').getContext('2d');
new Chart(balancedDietCtx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Calories Consumed',
            data: [1980, 2020, 1950, 2000, 1975, 2050, 1990],
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
                beginAtZero: false,
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

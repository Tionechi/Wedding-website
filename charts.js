
//Number of visits chart
let myChart = null;
try {
    fetch(`visits-request.php`)
        .then(response => response.json())
        .then(visitsData => {
            updateVisual(visitsData);
        })
        .catch(error => {
            console.log('Error:', error);
        });
} catch (error) {
    console.log('Error:', error);
}

function updateVisual(jsonData) {
    const labels = jsonData.map(entry => entry.name);
    const values = jsonData.map(entry => entry.occurences);
    console.log(labels);
    console.log(values);
    const palette = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 0, 0, 0.2)',
        'rgba(0, 255, 0, 0.2)',
        'rgba(0, 0, 255, 0.2)',
        'rgba(128, 128, 128, 0.2)'
    ];

    // Get the canvas element
    const myCanvas = document.getElementById('myChart');

    // Clear the previous chart instance
    clearChart();

    // Create a new chart instance
    const ctx = myCanvas.getContext('2d');
    myChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [{
                label: 'visits',
                data: values,
                backgroundColor: palette,
                borderColor: 'rgba(0, 0, 0, 1)',
                borderWidth: 1
            }]
        },
        options: {
            legend: { display: true },
            title: {
                display: true,
                text: "Visits by Venue"
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var label = data.labels[tooltipItem.index];
                        var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                        return label + ': ' + value;
                    }
                }
            }
        }
    });
}

// Function to clear the chart
function clearChart() {
    if (myChart !== undefined && myChart !== null) {
        myChart.destroy();
        myChart = null; // Reset the myChart variable after destroying
    }
}

//Average ratings chart

let avgChart = null;
try {
    fetch(`avg-request.php`)
        .then(response => response.json())
        .then(avgData => {
            updateAvgVisual(avgData);
        })
        .catch(error => {
            console.log('Error:', error);
        });
} catch (error) {
    console.log('Error:', error);
}

function updateAvgVisual(jsonData) {
    const labels = jsonData.map(entry => entry.name);
    const values = jsonData.map(entry => entry.Average_rating);
    console.log(labels);
    console.log(values);
    const palette = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 0, 0, 0.2)',
        'rgba(0, 255, 0, 0.2)',
        'rgba(0, 0, 255, 0.2)',
        'rgba(128, 128, 128, 0.2)'
    ];

    // Get the canvas element
    const avgCanvas = document.getElementById('avg');

    // Clear the previous chart instance
    clearAvgChart();

    // Create a new chart instance
    const ctx = avgCanvas.getContext('2d');
    avgChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: 'Average Rating',
                data: values,
                backgroundColor: palette,
                borderColor: 'rgba(0, 0, 0, 1)',
                borderWidth: 1
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: "Average Ratings by Venue"
            }
        }
    });
}

// Function to clear the chart
function clearAvgChart() {
    if (avgChart !== undefined && avgChart !== null) {
        avgChart.destroy();
        avgChart = null; // Reset the avgChart variable after destroying
    }
}


//Code to detect what the user is currently viewing to handle the chart animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.chart-container');
hiddenElements.forEach((el) => observer.observe(el));
<script>
    // Sample data
    var data = {
        labels: ['A', 'B', 'C', 'D', 'E'],
        datasets: [{
            label: 'Sample Data',
            data: [10, 11, 7, 13, 1],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Get the canvas element
    var ctx = document.getElementById('myChart').getContext('2d');

    // Create a chart
    var myChart = new Chart(ctx, {
        type: 'line', // Change to 'line', 'pie', or other types as needed
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
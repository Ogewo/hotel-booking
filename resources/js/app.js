import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const dropdownLink = document.getElementById('dropdownLink');
    const dropdownList = document.getElementById('dropdownList');

    dropdownLink.addEventListener('click', function () {
        dropdownList.classList.toggle('hidden');
        dropdownLink.parentElement.classList.toggle('open');
        const caretIcon = dropdownLink.querySelector('.fa-caret-right');
        caretIcon.classList.toggle('open');
    });
});


// Sample data
const salesData = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
            label: 'Product A',
            borderColor: 'rgba(75, 192, 192, 1)',
            data: [10, 15, 8, 12, 18, 10, 16, 14, 20, 12, 18, 15],
            fill: false,
            tension: 0.4, // Set tension for wavy lines 
        },
        {
            label: 'Product B',
            borderColor: 'rgba(255, 99, 132, 1)',
            data: [12, 10, 14, 8, 15, 12, 20, 18, 22, 16, 20, 25], 
            fill: false,
            tension: 0.4,
        },
    ],
};

// Chart configuration
const chartConfig = {
    type: 'line',
    data: salesData,
    options: { 
        responsive: true, 
        scales: {  
            x: {   
                type: 'category',  
                labels: salesData.labels,  
            }, 
            y: {
                beginAtZero: true,
            }, 
        },
        plugins: {
            legend: {
                position: 'top',
            },
        },
    },
};

// Get the canvas element and render the chart
const ctx = document.getElementById('salesChart').getContext('2d'); 
new Chart(ctx, chartConfig);
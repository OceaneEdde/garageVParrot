document.addEventListener('DOMContentLoaded', function () {
    const acceptButtons = document.querySelectorAll('.accept-btn');
    const rejectButtons = document.querySelectorAll('.reject-btn');

    acceptButtons.forEach(button => {
        button.addEventListener('click', function () {
           
            const reviewItem = button.closest('.review-item');
            reviewItem.style.backgroundColor = '#C8E6C9'; 
        });
    });

    rejectButtons.forEach(button => {
        button.addEventListener('click', function () {
           
            const reviewItem = button.closest('.review-item');
            reviewItem.style.backgroundColor = '#FFCDD2';
        });
    });
});

$.ajax({
    url: "/api/getWeather",
    data: {
      zipcode: 97201
    },
    success: function( result ) {
      $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
    }
  });
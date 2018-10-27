
$(function (){

    $.ajax({
        type: 'GET', 
        url: 'https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyDc36j1_T9huo4dS_OkGcQkoE3_i6N8Mvk',
        success: function(data){
            console.log('success', data);
        }
    });
});
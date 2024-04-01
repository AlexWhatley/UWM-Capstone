    
function getLocation(){
    
    var zip = "";
    function success(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
    }
    function error(){
        status.textContent="sad"
    }
    navigator.geolocation.getCurrentPosition(success,error);
    const geoApi = 'https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en'
    fetch(geoApi)
    .then(res=>res.json())
    .then(data=>{
        var zip = data.postcode;
        document.getElementById('zipelement').innerHTML='Recreational Events in '+zip;
        document.getElementById('zipelement2').innerHTML='Volunteering Oppurtunities in '+zip;
        document.cookie = "zipcookie=" + zip;
        
    }
)}

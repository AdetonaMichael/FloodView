const key =	'ZPDh3GuG7BLri0AtWgRFa1TQCmKbGuJk';

// get weather information
const getWeather = async (locationId)=>{

    const base = 'http://dataservice.accuweather.com/currentconditions/v1/'
    const query = `${locationId}?apikey=${key}`;

    const response = await fetch(base+query);
    const data = await response.json();
    return data[0];
}

// get city inforomation
const getCity = async (city)=>{
    const base = 'http://dataservice.accuweather.com/locations/v1/cities/search';
    const query= `?apikey=${key}&q=${city}`;

    const response = await fetch(base + query);
    const data = await response.json();
    // return data['Key'];
    the_value = data[0].Key;
    return data[0].Key;

};

 getCity('Osun')
   .then(data => {
       return getWeather(the_value);
   }).then(data =>{
       console.log(data);
   })
   .catch(err => console.log(err));

// const weather = getWeather(4607);

const updateCity = async (city)=>{
 const cityDetails = await getCity(city);
 console.log(cityDetails);
 const weather = await getWeather(cityDetails.Key);

 return {
    cityDetails:cityDetails,
    weather:weather,
 }
}


// function for form
function city_form_action(){
    let city_form = document.querySelector('.cityForm');
    city_form.addEventListener('submit', e=>{
         e.preventDefault();
         const city = document.getElementById('city_input').value.trim();
         city_form.reset();
         updateCity(city).then(data=>console.log(data))
         .catch(err=>console.log(err));
    });
}

city_form_action();


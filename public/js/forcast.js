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
    return data[0];
};

 getCity('Osun')
   .then(data => {
       return getWeather(data.Key);
   }).then(data =>{
       console.log(data);
   })
   .catch(err => console.log(err));

const weather = getWeather(4607);



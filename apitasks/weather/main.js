let btn = document.querySelector('.btn');
let input = document.querySelector('#name');


let detiles = document.querySelector('.detiles');



btn.addEventListener('click',(e)=>{
  e.preventDefault();
  getData(input.value).then((data)=>{
    detiles.innerHTML = `City Name = ${data['location']['name']}<br>
    Temperature: ${data['current']['temp_c']}c | ${data['current']['temp_f']}f<br>
    Humidity: ${data['current']['humidity']}<br>
    Minimum Temp : ${data['forecast']['forecastday'][0]['day']['mintemp_c']} <br>
    Maximum Temp :  ${data['forecast']['forecastday'][0]['day']['maxtemp_c']}<br>
    Wind Speed : ${data['current']['wind_kph']}<br>`;
  }
  );
})


async function getData(name){
  $data = await fetch(`http://api.weatherapi.com/v1/forecast.json?key=6fcef5a22aab41b8b8b233605231008&q=${name}&days=1&aqi=no&alerts=no
  `);
  return $data.json();
}
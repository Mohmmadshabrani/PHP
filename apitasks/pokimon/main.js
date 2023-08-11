let btn = document.querySelector('.btn');
let input = document.querySelector('#name');


let img = document.querySelector('.img');
let detiles = document.querySelector('.detiles');



btn.addEventListener('click',(e)=>{
  e.preventDefault();
  getData(input.value).then((data)=>{
    img.src = `${data['sprites']['front_default']}`;
    detiles.innerHTML = `UserName = ${data['name']}<br>
    Base experience: ${data['base_experience']} Abilities:<br>
    ${data['abilities'].map(e=> e['ability']['name']).join(',')}`;
  }
  );
})


async function getData(name){
  $data = await fetch(`https://pokeapi.co/api/v2/pokemon/${name}`);
  return $data.json();
}
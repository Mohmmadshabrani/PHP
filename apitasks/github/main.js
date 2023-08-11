let btn = document.querySelector('.btn');
let input = document.querySelector('#name');


let img = document.querySelector('.img');
let detiles = document.querySelector('.detiles');



btn.addEventListener('click',(e)=>{
  e.preventDefault();
  getData(input.value).then((data)=>{
    img.src = `${data['avatar_url']}`;
    detiles.innerHTML = `UserName = ${data['login']}<br> Number of followers: ${data['followers']}`;
  }
  );
})


async function getData(name){
  $data = await fetch(`https://api.github.com/users/${name}`);
  return $data.json();
}
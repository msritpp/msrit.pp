//switch theme//

function click(){
  let color = prompt('Enter a color to change background color:')
  document.body.style.background = color
}
document.addEventListener('DOMContentLoaded',function(){
  document.querySelector('button').onclick = click
})

//switch//

function togglehide(){

  var dora = document.getElementById('dora');
  var roar = document.getElementById('roar');

  if(document.querySelector('#hide').innerHTML === '1st Sem'){
    document.querySelector('#hide').innerHTML = '2nd Sem';
  }
  else{
    document.querySelector('#hide').innerHTML = '1st Sem';
  }
  //switch from 1st to 2nd//
  if(roar.style.display === 'none'){
    roar.style.display = 'block';
    dora.style.display = 'none';
  }
  else{
    roar.style.display = 'none';
    dora.style.display = 'block';
  }
}

document.addEventListener('DOMContentLoaded',function(){
  document.querySelector('#hide').onclick = togglehide
})

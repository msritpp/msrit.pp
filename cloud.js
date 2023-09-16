function click(){
    let color = prompt('Enter a color to change background color:')
    document.body.style.background = color
}
document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('button').onclick = click
})

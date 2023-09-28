const homeHover = document.getElementById('homeHover');

var inputChanger = document.getElementById('inputChanger');


inputChanger.addEventListener('click', function(){
    inputChanger.style.backgroundColor = '#D9D9D9';
});




homeHover.addEventListener('mouseOver', ()=>{
    this.style.backgroundColor = '#ffffffaa';
})

homeHover.addEventListener('mouseOut', ()=>{
    this.style.backgroundColor = '#ffffff00';
})
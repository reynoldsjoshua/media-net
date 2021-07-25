function moveRight(event){
     var wrapper = document.getElementById('wrapper').getBoundingClientRect();
     var val = (parseInt(document.getElementById('wrapper').style.left, 10) || 0) + 1338;
     if(wrapper.x >= window.innerWidth - 1200 || wrapper.x == 300){
          return;
     }else{
          document.getElementById('wrapper').style.left = val + 'px';
     };
};
function moveLeft(event){
     var wrapper = document.getElementById('wrapper').getBoundingClientRect();
     var val = (parseInt(document.getElementById('wrapper').style.left, 10) || 0) - 1338;
     console.log(window.innerWidth)
     if((wrapper.x + wrapper.width - 1200) <= 500){
          return;
     }else{
          document.getElementById('wrapper').style.left = val + 'px';
     };
};
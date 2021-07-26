function moveRight(event){
     var wrapper = document.querySelectorAll('.wrapper');

     for(var i = 0; i < wrapper.length; i++){
          var wrapper_rect = wrapper[i].getBoundingClientRect();
          var val = (parseInt(wrapper[i].style.left, 10) || 0) + 1338;

          if(wrapper_rect.x >= window.innerWidth - 1200 || wrapper_rect.x == 300){
               return;
          }else{
               wrapper[i].style.left = val + 'px';
          };
     };
};
function moveLeft(event){
     var wrapper = document.querySelectorAll('.wrapper');

     for(var i = 0; i < wrapper.length; i++){
          var wrapper_rect = wrapper[i].getBoundingClientRect();
          var val = (parseInt(wrapper[i].style.left, 10) || 0) - 1338;

          if((wrapper_rect.x + wrapper_rect.width - 1200) <= 500){
               return;
          }else{
               wrapper[i].style.left = val + 'px';
          };
     };
};
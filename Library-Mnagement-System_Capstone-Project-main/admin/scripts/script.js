'use strict'
// profile drop down list
     function show(){
           
        let element = document.querySelector('.list_drp');
        let rect = element.getBoundingClientRect();

        if(rect.top == 0 && 
           rect.bottom == 0 && 
           rect.left == 0 && 
           rect.right == 0 && 
           rect.width == 0 && 
           rect.height == 0 && 
           rect.x == 0 && 
           rect.y == 0) {
             document.querySelector('.list_drp').style.display="block";
         } else {
          document.querySelector('.list_drp').style.display="none";
           }
   }

  //  book dropdown list
   function drp_down(){

     let element = document.querySelector('.drp-down');
     let rect = element.getBoundingClientRect();

        if(rect.top == 0 && 
           rect.bottom == 0 && 
           rect.left == 0 && 
           rect.right == 0 && 
           rect.width == 0 && 
           rect.height == 0 && 
           rect.x == 0 && 
           rect.y == 0) {
             document.querySelector('.drp-down').style.display="block";
         } else {
           document.querySelector('.drp-down').style.display="none";
           }

   }

   
// user dropdown list
function drp_down_(){

  let element = document.querySelector('.drp-down_');
  let rect = element.getBoundingClientRect();

     if(rect.top == 0 && 
        rect.bottom == 0 && 
        rect.left == 0 && 
        rect.right == 0 && 
        rect.width == 0 && 
        rect.height == 0 && 
        rect.x == 0 && 
       rect.y == 0) {
          document.querySelector('.drp-down_').style.display="block";
     } else {
       
        document.querySelector('.drp-down_').style.display="none";
        }

}



  //  aside dropdown list
   function menu_collapse(){
     let element = document.querySelector('.aside');
     let rect = element.getBoundingClientRect();
     
     if(rect.top != 0 && 
           rect.bottom != 0 && 
           rect.left != 0 && 
           rect.right != 0 && 
           rect.width != 0 && 
           rect.height != 0 && 
           rect.x != 0 && 
           rect.y != 0){
       document.querySelector('.aside').style.display="none"
     }else{
       document.querySelector('.aside').style.display="block"
     }
   }


  //  Gallery
   let index = 0;
   const images =['images/p1.jpg','images/p2.jpg','images/p3.jpg']
   window.onload = setInterval(function(){
      document.querySelector('.animation').style.backgroundImage = `url(${images[index]})`

      index++;
      if(index>2){
        index=0;
      }
   },3000);

   window.onclick = function(e) {
if (!e.target.matches('.profile_btn')) {
var myDropdown = document.querySelector(".profile");
 if (myDropdown.style.display==="block") {
   myDropdown.style.display="none";
 }
}
   }



//set dropdown list to none when clicking outside of the element

// window.onclick = function(e) {
// if (!e.target.matches('.profile_btn')) {
// var myDropdown = document.querySelector(".profile");
//  if (myDropdown.style.display==="block") {
//    myDropdown.style.display="none";
//  }
// }
// }

// window.onclick = function(e) {
// if (!e.target.matches('.book_link')) {
// var myDropdown = document.querySelector(".list_user");
//  if (myDropdown.style.display==="block") {
//    myDropdown.style.display="none";
//  }
// }
// }
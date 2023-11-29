const nav = document.querySelector('.nav');
const toggle = document.querySelector('.mobile-toggle');

toggle.addEventListener('click',()=>{
   const visibility = nav.getAttribute('data-visible');
   if(visibility === 'false'){
       nav.setAttribute('data-visible',true);
       toggle.setAttribute('aria-expanded',true);
   }
   else{
    nav.setAttribute('data-visible',false);
    toggle.setAttribute('aria-expanded',false);
   }
})

// $(window).scroll(function(){
//     parallax();
// })

// function parallax(){
//     var scroll = $(window).scrollTop();
//     console.log(scroll);
// }

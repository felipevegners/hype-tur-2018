// var $j = jQuery.noConflict();

// $j(function(){

//     $('.nav-link').on('click', function() {
//         $('.nav-link').removeClass('active');
//         $(this).addClass('active');
//       });

    
// });

function myFunction(e) {
    var elems = document.querySelector(".active");
    if(elems !==null){
     elems.classList.remove("active");
    }
   e.target.className = "nav-link active";
  }


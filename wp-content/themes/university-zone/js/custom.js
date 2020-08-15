jQuery(document).ready(function($) {
    $('#search-btn').click(function(){
        $('.site-header .form-section .example').slideToggle();
    })

    //accessibility menu for edge
    $("#site-navigation ul li a").focus(function(){
       $(this).parents("li").addClass("focus");
   }).blur(function(){
       $(this).parents("li").removeClass("focus");
   });

   $(".secondary-navigation ul li a").focus(function(){
       $(this).parents("li").addClass("focus");
   }).blur(function(){
       $(this).parents("li").removeClass("focus");
   });
});

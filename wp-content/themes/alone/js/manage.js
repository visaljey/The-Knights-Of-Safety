jQuery(document).ready(function($) {
   
    $( window ).load(function() {
        
        var ajaxData = {
            'action': 'my_action',
            'whatever': 1
          }
          jQuery.post(myAjax.ajaxurl, ajaxData, function(response){
              $("#slider-6-slide-13-layer-19").html(response);                           
              $("#slider-6-slide-15-layer-23").html(response);
            
          });
    });
    $("#mysocial_link").click(function(){        
        
        var ajaxData = {
          'action': 'my_action',
          'whatever': 0
        }
        jQuery.post(myAjax.ajaxurl, ajaxData, function(response){
            $("#slider-6-slide-13-layer-19").html(response);                           
            $("#slider-6-slide-15-layer-23").html(response);
          
        });
    });
});

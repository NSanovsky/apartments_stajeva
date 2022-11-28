
   
      document.addEventListener('DOMContentLoaded', function (){
        var dropdown = document.querySelectorAll('.dropdown-trigger');
        var dropdown_instances = M.Dropdown.init(dropdown, {
          coverTrigger: false,
          constrainWidth: false,
          belowOrigin: true,
        });

        var sidenav = document.querySelectorAll('.sidenav');
        var sidenav_instances = M.Sidenav.init(sidenav, {
          menuWidth: 300,
        });

        $(window).scroll(function () {
          if ($(this).scrollTop() > 200) {
            $('#scroll').fadeIn(2000);
          } else {
            $('#scroll').fadeOut(1000);
          }
        });

        $('#scroll').click(function () {
          $("html, body").animate({ scrollTop: 0 }, 700);
          return false;
        });
      
      
      });
  
            
        
      
      

 
    

   
     
 
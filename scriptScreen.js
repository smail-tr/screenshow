var app=new Vue(
    {
        el:'#wrapper',
        data:{
            show:"active",
            hide:false
        },
       
      
     })
     
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
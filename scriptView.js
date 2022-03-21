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
  function getFullscreenElement(){
    return document.fullscreenElement
    ||document.webkitFullscreenElement
    ||document.mozFullscreenElement
    ||document.msFullscreenElement;
  }
function toggeleFullscreen(){
  if(getFullscreenElement()){
    document.exitFullscreen();
  }else{
    document.documentElement.requestFullscreen().catch(console.log);
  }
}
          document.addEventListener("click",()=>{
           toggeleFullscreen();
          });


         
var menu =  document.getElementById("cmenu");
var header =  document.getElementById("what-we-do");
var smenu =  document.getElementById("stickmenu");

var x = header.offsetTop; 

  function menujs() {

    if(x==null){
      menu.classList.add("menu-sticky");  
  
    }else if(scrollY > x){
      menu.classList.add("menu-sticky");  
      document.getElementById("OSLogo").style.visibility = "visible";
  
    }
    else  {
      menu.classList.remove("menu-sticky");
      document.getElementById("OSLogo").style.visibility = "hidden";
    }
  
  }


  
var open=0;
function menuopen() {
  if(open==0){
    smenu.classList.add("stickmenu-open");  
    open=1;
  }
  else  {
    open=0;
    smenu.classList.remove("stickmenu-open");
  }

}
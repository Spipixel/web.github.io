// Windwos 11 Start menu

let  taskbar = document.getElementsByClassName("start-menu1")[0]
let  startmenu = document.getElementsByClassName("startmenu")[0]

taskbar.addEventListener("click", ()=>{
    if(startmenu.style.bottom == "50px"){
        startmenu.style.bottom = "-650px"
    }
    else{
        startmenu.style.bottom = "50px"
    }

})


// Windows Explorer
let  pc = document.getElementsByClassName("pc")[0]
let  app_taskbar = document.getElementsByClassName("explorer_taskbar")[0]
let  app = document.getElementsByClassName("app")[0]



pc.addEventListener("click", ()=>{
    if(app.style.bottom == "40px"){
        app.style.bottom = "-650px"
    }
    else{
        app.style.bottom = "40px"
    }

})


// Note
let  note = document.getElementsByClassName("note")[0]
let  text_editor = document.getElementsByClassName("text_editor")[0]


note.addEventListener("click", ()=>{
    if(text_editor.style.bottom == "40px"){
      text_editor.style.bottom = "-650px"
    }
    else{
      text_editor.style.bottom = "40px"
    }

})



// WIndws 11 moveable icons
/*var dog = document.getElementById("dogPic");
var cat = document.getElementById("catPic");
var moving = false;

dog.addEventListener("mousedown", initialClick, false);
cat.addEventListener("mousedown", initialClick, false);


function move(e){

  var newX = e.clientX - 10;
  var newY = e.clientY - 10;

  image.style.left = newX + "px";
  image.style.top = newY + "px";

  
}

function initialClick(e) {

  if(moving){
    document.removeEventListener("mousemove", move);
    moving = !moving;
    return;
  }
  
  moving = !moving;
  image = this;

  document.addEventListener("mousemove", move, false);

}*/

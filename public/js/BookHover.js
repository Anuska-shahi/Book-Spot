var textOverImage=document.querySelectorAll(".books div");
function hover(){
    this.classList.toggle("show");
}
for(var i =0;i<textOverImage.lenght;i++){
    textOverImage.onmousover=hover();}
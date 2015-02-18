function verifica(){
//id do textarea
var t = document.getElementById(‘text’);
if(t.scrollHeight > t.offsetHeight){
t.style.height = t.scrollHeight+”px”;
}
}
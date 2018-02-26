console.log("test");

var modal = document.getElementsByClassName('h_cart_modal');
var cart_div = document.getElementsByClassName('h_cart');
console.log(modal);

var span = document.getElementsByClassName('close');
console.log(span);

cart_div.onclick = function(){
  modal.style.display = "block";
  console.log("mouseover detected");
}

span.onclick = function(){
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

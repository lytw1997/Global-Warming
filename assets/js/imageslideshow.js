//<!-- scripts to run images left or right -->
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("images");
  var y = document.getElementsByClassName("imagetext");
  var dots = document.getElementsByClassName("dots");
  if (n > x.length ) {slideIndex = 1}
  if (n > y.length ) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length && i< y.length; i++) {
    x[i].style.display = "none";
	y[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  y[slideIndex-1].style.display = "block";
}

// <!-- scripts for automatic images -->
var myIndex = 0;
image();

function image() {
  var i;
  var x = document.getElementsByClassName("images");
  var y = document.getElementsByClassName("imagetext");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < y.length; i++) {
    y[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  if (myIndex > y.length) {myIndex = 1}    
  y[myIndex-1].style.display = "block";
  setTimeout(image, 10000); // Change image every 10 seconds
}

//set currentDiv 
function currentDiv(n) {
  showDivs(slideIndex = n);
}




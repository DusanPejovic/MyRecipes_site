//index script

function removeCar() {
    var carousel = document.getElementById("carousel");
    carousel.parentNode.removeChild(carousel);
};
function obavestenje() {
    alert("You have to log in!");
};

window.addEventListener("load",function(){
    const preloader = document.querySelector(".preloader");
    preloader.className += "hidden";
});

function register() {
    if (document.getElementById("loginForm").style.display = "block") {
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("registerForm").style.display = "block";
        document.getElementById("mainDiv1").style.filter = "brightness(40%)";
        document.getElementById("mainDiv").style.filter = "blur(5px)";
    } else {
        document.getElementById("registerForm").style.display = "block";
    }
}
function login() {
    if (document.getElementById("registerForm").style.display = "block") {
        document.getElementById("registerForm").style.display = "none";
        document.getElementById("loginForm").style.display = "block";
        document.getElementById("mainDiv1").style.filter = "brightness(40%)";
        document.getElementById("mainDiv").style.filter = "blur(5px)";
    } else
        document.getElementById("loginForm").style.display = "block";
}
function closeRegister() {
    document.getElementById("registerForm").style.display = "none";
    document.getElementById("mainDiv1").style.filter = "brightness(100%)";
    document.getElementById("mainDiv").style.filter = "blur(0px)";
}
function closeLogin() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("mainDiv1").style.filter = "brightness(100%)";
    document.getElementById("mainDiv").style.filter = "blur(0px)";
}




//loggedinpage script
function like(x) {
    var emptyList = document.getElementById("recipeList");
    if (x.classList.contains("fa-thumbs-up")) {
    
      var listItem = x.parentNode.parentNode;
      var cln = listItem.cloneNode(true);
      var oAddedIcon = cln.querySelector(".fa-thumbs-up");
      oAddedIcon.classList.remove("fa-thumbs-up");
      oAddedIcon.classList.add("fa-thumbs-down");
      emptyList.appendChild(cln);
    } else if (x.classList.contains("fa-thumbs-down")) {
  
      x.classList.remove("fa-thumbs-down");
      x.classList.add("fa-thumbs-up");
      emptyList.removeChild(x.parentNode.parentNode);
  
    }
  
  }
function toggle(e) {
    var ele = document.getElementById("myrecipes");
    if(ele.style.display == "block") {
            ele.style.display = "none";
    }
    else {
        ele.style.display = "block";
    }
} 

// credentials srcipt
var pass_form = document.getElementById("CHPform");
var email_form = document.getElementById("CHEform");
var username_form = document.getElementById("CHUform");
function openPass() {

    pass_form.style.display = "block";
    email_form.style.display = "none";
    username_form.style.display = "none";
}
function openEmail() {

    pass_form.style.display = "none";
    email_form.style.display = "block";
    username_form.style.display = "none";
}
function openUsername() {

    pass_form.style.display = "none";
    email_form.style.display = "none";
    username_form.style.display = "block";
}

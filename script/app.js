document.addEventListener('DOMContentLoaded', function () {

    AOS.init({
        once: false,
        easing: 'ease-in-out'
    });

let links = document.links;
for (let i = 0, linksLength = links.length ; i < linksLength ; i++) {
  if (links[i].hostname !== window.location.hostname) {
    links[i].target = '_blank';
    links[i].rel = 'noreferrer noopener';
  }
}


function sliding (elem) {

    let slidingNewsletter = document.querySelector(elem);

    if(slidingNewsletter) {

        window.addEventListener('scroll', () => {

            const {scrollTop, clientHeight} = document.documentElement;

            // console.log(scrollTop, clientHeight);
        
            const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;
            
            if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
                slidingNewsletter.classList.add('circlebis')
            }
        })
    }
}

sliding('.present');
sliding('.present2');
sliding('.present3');
sliding('.present4');
sliding('.present5');
sliding('.present6');
sliding('.present7');
sliding('.present8');


let me = document.querySelector("#me");
let dev = document.querySelector("#dev");
let photo = document.querySelector("#photo");
let buttonMe = document.querySelector("#buttonMe");
let buttonDev = document.querySelector("#buttonDev");
let buttonPhoto = document.querySelector("#buttonPhoto");

buttonMe.addEventListener("click", function () {

    me.classList.add("active");
    dev.classList.remove("active");
    photo.classList.remove("active");

    buttonMe.classList.add("activeButton")
    buttonDev.classList.remove("activeButton")
    buttonPhoto.classList.remove("activeButton")
});

buttonDev.addEventListener("click", function () {

    dev.classList.add("active");
    photo.classList.remove("active");
    me.classList.remove("active");

    buttonDev.classList.add("activeButton")
    buttonMe.classList.remove("activeButton")
    buttonPhoto.classList.remove("activeButton")
    
});

buttonPhoto.addEventListener("click", function () {

    photo.classList.add("active");
    dev.classList.remove("active");
    me.classList.remove("active");

    buttonPhoto.classList.add("activeButton")
    buttonMe.classList.remove("activeButton")
    buttonDev.classList.remove("activeButton")
    
});


let btnContact = document.querySelector("#contactBtn");
let form = document.querySelector("#form");
let blocContact = document.querySelector("#blocContact")
let cross = document.querySelector("#cross");

btnContact.addEventListener("click", function () {
    
    blocContact.style.opacity = '0';
    form.style.opacity = '0';
    form.style.display = "flex";
    setTimeout (function() {
        blocContact.style.display = "none";
        form.style.opacity = '1';
    }, 500);
    
});

cross.addEventListener("click", function () {

    form.style.opacity = '0';
    blocContact.style.opacity = '0';
    setTimeout (function() {
        blocContact.style.display = "flex";
    }, 400);
    
    setTimeout (function() {
        form.style.display = "none";
        blocContact.style.opacity = '1';
    }, 500); 
    
        
    
});


let frontButton = document.querySelector("#front");
let backButton = document.querySelector("#back");
let frontBloc = document.querySelector("#frontend");
let backBloc = document.querySelector("#backend");


frontButton.addEventListener("click", function () {

    backBloc.style.opacity = '0';
    frontBloc.style.opacity = '0';
    setTimeout (function() {
        frontBloc.style.display = "block";
    }, 400);
    
    setTimeout (function() {
        backBloc.style.display = "none";
        frontBloc.style.opacity = '1';
    }, 500); 

    frontButton.classList.add("activeButton");
    backButton.classList.remove("activeButton");
    
});

backButton.addEventListener("click", function () {

    frontBloc.style.opacity = '0';
    backBloc.style.opacity = '0';
    setTimeout (function() {
        backBloc.style.display = "block";
    }, 400);
    
    setTimeout (function() {
        frontBloc.style.display = "none";
        backBloc.style.opacity = '1';
    }, 500); 

    backButton.classList.add("activeButton");
    frontButton.classList.remove("activeButton");
    
});
});
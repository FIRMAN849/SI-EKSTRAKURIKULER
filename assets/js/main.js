// MENU SHOW HIDDEN
const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('nav-toggle'),
    closeMenu = document.getElementById('nav-close');
const navLink = document.querySelectorAll('.nav-link');

toggleMenu.addEventListener('click', () => {
    navMenu.classList.toggle('show');
});

closeMenu.addEventListener('click', () => {
    navMenu.classList.remove('show');
});

// REMOVE MENU ON MOBILE

function linkAction() {
    // const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show');
}

navLink.forEach(n => n.addEventListener('click', linkAction));

// scroll section active link
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', scrollActive);

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id');

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.add('active');
        } else {
            document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.remove('active');
        }
    })
}

    //slider
var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter>3){
        counter = 1;
    }
}, 5000);


//filter galery
const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".image");

window.onload = ()=>{
    //once window loaded
    filterItem.onclick = (selectedItem)=>{
        //when user clicked on filtereItem
        if(selectedItem.target.classList.contains("item")){
            //if user click elemen has item class
            filterItem.querySelector(".active").classList.remove("active"); //remove class active on the first tabs
            selectedItem.target.classList.add("active");// add active class on user selected clik tabs
            let filterName = selectedItem.target.getAttribute("data-name");//getting data-name value of user selected item dan storing filtername variable
            filterImg.forEach((image)=>{
                let filterImages = image.getAttribute("data-name");//getting image data-name value
                //if user selected item data-name value is equal to image data-name value
                // or user selected item data-name value is equal to "all"
                if((filterImages == filterName) || filterName == "all"){
                    image.classList.remove("hide");
                    image.classList.add("show");
                }else{
                    image.classList.add("hide");
                    image.classList.remove("show");
                }
            });
        }
    }
    for(let index = 0; index < filterImg.length; index++){
        filterImg[index].setAttribute("onclick","preview(this)"); //adding onclick in all avaible images
    }
}

//selecting all required elements
const previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
categoryName = previewBox.querySelector(".title-details p"),
closeIcon = previewBox.querySelector("i"),
shadow = document.querySelector(".shadow");

//fullscreen preview box
function preview(element){
    let selectedPrevImg = element.querySelector("img").src; //getting user click image
    let selectedImgCategory = element.getAttribute("data-name");
    categoryName.textContent = selectedImgCategory;
    previewImg.src = selectedPrevImg; //passing the user clicked image source in the page
    previewBox.classList.add("show");//show the preview box
    shadow.classList.add("show");//show the light grey background
    closeIcon.onclick = ()=>{ //if user click on the clowe preview box
        previewBox.classList.remove("show"); //hide the preview box
        shadow.classList.remove("show");//show the light grey background
    }
}

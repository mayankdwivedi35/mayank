let menuBtn = document.querySelector(".navbar .menu > .btn");

menuBtn.addEventListener("click", () => {
    console.log(menuBtn);
    if (!document.querySelector(".menu .menu-list").id)
        document.querySelector(".menu .menu-list").id = "show";
    else document.querySelector(".menu .menu-list").id = "";
});

let expandPost = document.querySelector(".post-header");

expandPost.addEventListener("click", ()=>{
    console.log("clicked");
    document.querySelector(".post-content").classList.toggle("expand");
});
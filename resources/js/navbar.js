document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 0){
            navbar.classList.add("navbar_scrolled");
        }
        else{
            navbar.classList.remove("navbar_scrolled");
        }
    });
});

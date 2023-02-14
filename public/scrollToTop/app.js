function scrollToTop() {
    var x = document.getElementById("top");
    x.scrollIntoView({
        block: "start",
        behavior: "smooth",
        inline: "start",
    });
}

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    console.log(scroll);
});

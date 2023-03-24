function openMenu() {
    document.getElementById("menu").style.display = "block";
}
function closeMenu() {
    document.getElementById("menu").style.display = "none";
}

function openModal() {
    document.getElementById("modal").style.display = "block";
}
function closeModal() {
    document.getElementById("modal").style.display = "none";
}

function check() {
    const url = window.location.href;

    const lastSegment = url.split("/").pop();

    if (lastSegment == "dashboard") {
        document.getElementById("home").classList.add("active");
    } else if (lastSegment == "manageProfile") {
        document.getElementById("profile").classList.add("active");
    } else if (lastSegment == "matchesEmployer") {
        document.getElementById("matches").classList.add("active");
    } else if (lastSegment == "jobOffer") {
        document.getElementById("jobOffer").classList.add("active");
    } else if (lastSegment == "support") {
        document.getElementById("support").classList.add("active");
    }
}

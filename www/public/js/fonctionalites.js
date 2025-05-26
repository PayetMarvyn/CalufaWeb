document.addEventListener("DOMContentLoaded", function () {
    const cartes = document.querySelectorAll(".carrousel-carte");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let current = 0;

    function afficherCarte(index, direction = "right") {
        cartes.forEach((carte) => {
            carte.classList.remove("active", "slide-right", "slide-left");
        });

        const carteActuelle = cartes[index];
        carteActuelle.classList.add("active");

        if (direction === "right") {
            carteActuelle.classList.add("slide-right");
        } else {
            carteActuelle.classList.add("slide-left");
        }
    }

    afficherCarte(current); // Affiche la première carte

    prevBtn.addEventListener("click", () => {
        current = (current - 1 + cartes.length) % cartes.length;
        afficherCarte(current, "left");
    });

    nextBtn.addEventListener("click", () => {
        current = (current + 1) % cartes.length;
        afficherCarte(current, "right");
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    const main = document.querySelector("main");

    // Effet de scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 10) {
            header.classList.add("shrink");
        } else {
            header.classList.remove("shrink");
        }
    });
});
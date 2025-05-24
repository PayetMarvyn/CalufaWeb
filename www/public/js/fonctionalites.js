document.addEventListener("DOMContentLoaded", function () {
    const cartes = document.querySelectorAll(".carrousel-carte");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let current = 0;

    function afficherCarte(index) {
        cartes.forEach((carte, i) => {
            carte.classList.remove("active");
        });

        // Redéclenche l'animation à chaque affichage
        const carteActuelle = cartes[index];
        carteActuelle.classList.add("active");
    }

    afficherCarte(current);

    prevBtn.addEventListener("click", () => {
        current = (current - 1 + cartes.length) % cartes.length;
        afficherCarte(current);
    });

    nextBtn.addEventListener("click", () => {
        current = (current + 1) % cartes.length;
        afficherCarte(current);
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
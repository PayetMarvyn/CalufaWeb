/* Equipe */
document.getElementById('search').addEventListener('input', function () {
    const search = this.value.toLowerCase();
    const cartes = document.querySelectorAll('.carte');

    cartes.forEach(carte => {
        const nom = carte.textContent.toLowerCase();
        carte.style.display = nom.includes(search) ? "" : "none";
    });
});

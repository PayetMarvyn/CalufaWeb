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


function ajouterAuPanier(biere) {
  const panier = JSON.parse(localStorage.getItem('panier')) || [];

  const index = panier.findIndex(item => item.id === biere.id);
  if (index !== -1) {
    panier[index].quantite += 1;
  } else {
    panier.push({ ...biere, quantite: 1 });
  }

  localStorage.setItem('panier', JSON.stringify(panier));
  mettreAJourCompteurPanier();
}

function mettreAJourCompteurPanier() {
  const panier = JSON.parse(localStorage.getItem('panier')) || [];
  const totalArticles = panier.reduce((total, item) => total + item.quantite, 0);

  const compteur = document.getElementById('panier-compteur');
  if (compteur) {
    compteur.textContent = totalArticles;
    compteur.style.display = totalArticles > 0 ? 'inline-block' : 'none';
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const boutons = document.querySelectorAll('.btn-ajout-panier');

  boutons.forEach(btn => {
    btn.addEventListener('click', () => {
      const biere = {
        id: parseInt(btn.dataset.id),
        nom: btn.dataset.nom,
        prix: parseFloat(btn.dataset.prix)
      };
      ajouterAuPanier(biere);
      alert(`${biere.nom} a été ajoutée au panier.`);
    });
  });

  mettreAJourCompteurPanier();
});

document.addEventListener('DOMContentLoaded', () => {
  const panier = JSON.parse(localStorage.getItem('panier')) || [];
  const contenu = document.getElementById('contenu-panier');
  const totalEl = document.getElementById('total-panier');

  function afficherPanier() {
    contenu.innerHTML = '';
    let total = 0;

    panier.forEach((item, index) => {
      const sousTotal = item.prix * item.quantite;
      total += sousTotal;

      const carte = document.createElement('div');
      carte.classList.add('panier-carte');
      carte.innerHTML = `
        <img src="/public/images/${item.image}" alt="${item.nom}">
        <div class="panier-info">
          <h3>${item.nom}</h3>
          <p>${item.prix.toFixed(2)} €</p>
        </div>
        <div class="panier-quantite">
          <button onclick="changerQuantite(${index}, -1)">-</button>
          <input type="text" value="${item.quantite}" readonly>
          <button onclick="changerQuantite(${index}, 1)">+</button>
        </div>
        <p>${sousTotal.toFixed(2)} €</p>
        <button onclick="supprimerArticle(${index})">🗑️</button>
      `;
      contenu.appendChild(carte);
    });

    totalEl.textContent = total.toFixed(2) + ' €';
  }

  window.changerQuantite = function(index, delta) {
    panier[index].quantite += delta;
    if (panier[index].quantite <= 0) panier.splice(index, 1);
    localStorage.setItem('panier', JSON.stringify(panier));
    afficherPanier();
  }

  window.supprimerArticle = function(index) {
    panier.splice(index, 1);
    localStorage.setItem('panier', JSON.stringify(panier));
    afficherPanier();
  }

  afficherPanier();
});

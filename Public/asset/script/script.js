/* Accordéon index*/

//Sélectionne l'élément container
const cardsContainer = document.querySelector(".container");

// Lorsque la card est cliquée
cardsContainer.addEventListener("click", (e) => {
  //Récupération de la card
  const target = e.target.closest(".card");
  //Retire la classe active de tous les éléments
  cardsContainer.querySelectorAll(".card").forEach((card) => {
    card.classList.remove("active");
  });
  // ajoute la classe active sur la card cliquée
  target.classList.add("active");
});
const aside = document.querySelector("aside");
const btn_affiche = document.getElementById("btn");
console.log(aside);
console.log(btn_affiche);
window.addEventListener("load", () => {
  btn_affiche.addEventListener("click", (e) => {
    if (aside.style.display === "none") {
      aside.style.margin = "10px 0px 0px 0px";
      aside.style.order = "2";
      aside.style.display = "flex";
      aside.style.flexWrap = "wrap";
      aside.style.width = "100%";

      btn_affiche.innerText =
        "Cacher les images générés aléatoirement depuis la bdd";
      console.log(btn_affiche.textContent);
    } else {
      aside.style.display = "none";
      btn_affiche.innerText =
        "Afficher les images générés aléatoirement depuis la bdd";
      console.log(btn_affiche.textContent);
    }
  });
});

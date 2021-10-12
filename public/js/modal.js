const modalLeerling = document.querySelector(".modal-leerling");
const modalLeerlingBtn = document.querySelector(".btn-leerling");
const modalLeerlingClose = document.querySelector(".close-leerling");

const openModal = (modalName) => {
  modalName.style.display = "block";
};

const closeModal = (modalName) => {
  modalName.style.display = "none";
};

modalLeerlingBtn.addEventListener("click", () => {
  openModal(modalLeerling);
});

modalLeerlingClose.addEventListener("click", () => {
  closeModal(modalLeerling);
});

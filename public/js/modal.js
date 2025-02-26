document.addEventListener("DOMContentLoaded", function () {
  // Modal de Registro
  const registerModal = document.getElementById("registerModal");
  const openRegisterBtn = document.getElementById("openRegisterModal");
  const closeRegisterBtns = registerModal?.querySelectorAll(".modal-close");

  // Modal de Inicio de Sesión
  const loginModal = document.getElementById("loginModal");
  const openLoginBtn = document.getElementById("openLoginModal");
  const closeLoginBtns = loginModal?.querySelectorAll(".modal-close");

  // Función para abrir el modal de registro
  function openRegisterModal() {
      registerModal.classList.remove("hidden");
      registerModal.classList.add("flex");
  }

  // Función para cerrar el modal de registro
  function closeRegisterModal() {
      registerModal.classList.add("hidden");
      registerModal.classList.remove("flex");
  }

  // Función para abrir el modal de inicio de sesión
  function openLoginModal() {
      loginModal.classList.remove("hidden");
      loginModal.classList.add("flex");
  }

  // Función para cerrar el modal de inicio de sesión
  function closeLoginModal() {
      loginModal.classList.add("hidden");
      loginModal.classList.remove("flex");
  }

  // Abrir el modal de login al hacer clic en el botón correspondiente
  openLoginBtn?.addEventListener("click", function() {
      closeRegisterModal();  // Cierra el modal de registro si está abierto
      openLoginModal();      // Abre el modal de login
  });

  // Abrir el modal de registro al hacer clic en el botón correspondiente
  openRegisterBtn?.addEventListener("click", function () {
      closeLoginModal(); // Cierra el modal de login si está abierto
      openRegisterModal(); // Abre el modal de registro
  });

  // Cerrar los modales al hacer clic en los botones de cierre
  closeRegisterBtns?.forEach(btn => btn.addEventListener("click", closeRegisterModal));
  closeLoginBtns?.forEach(btn => btn.addEventListener("click", closeLoginModal));

  // Cerrar los modales al hacer clic fuera de ellos (en el fondo oscuro)
  window.addEventListener("click", function (event) {
      if (event.target === registerModal) {
          closeRegisterModal();
      }
      if (event.target === loginModal) {
          closeLoginModal();
      }
  });
});

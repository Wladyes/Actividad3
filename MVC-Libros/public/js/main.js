document.addEventListener('DOMContentLoaded', function() {
    // Función para abrir modales
    const openModalButtons = document.querySelectorAll('[data-modal-target]');
    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
        });
    });

    // Función para cerrar modales
    const closeModalButtons = document.querySelectorAll('[data-close-button]');
    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            closeModal(modal);
        });
    });

    function openModal(modal) {
        if (modal) {
            modal.style.display = 'block';
        }
    }

    function closeModal(modal) {
        if (modal) {
            modal.style.display = 'none';
        }
    }
});

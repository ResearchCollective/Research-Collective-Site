import "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";



// model settings
const serviceModal = document.getElementById('serviceModal')
if (serviceModal) {
    serviceModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const el = event.relatedTarget

        // Update the modal's content.
        const modalHeader = el.querySelector('.service-header').innerText
        const modalContent = el.querySelector('.service-content').innerHTML

        serviceModal.querySelector('.modal-title').textContent = modalHeader
        serviceModal.querySelector('.modal-body').innerHTML = modalContent
        serviceModal.handleUpdate()
    })
}
const precios = document.querySelectorAll('.precio');

precios.forEach(element => {
    const precioOriginal = parseFloat(element.dataset.precio);
    const precioDescuento = (precioOriginal * 0.9).toFixed(2);

    element.innerHTML = `
    <span class="text-muted text-decoration-line-through me-2">${precioOriginal.toFixed(2).replace('.', ',')}€</span>
    <span class="text-success fw-bold fs-5">${precioDescuento.replace('.', ',')}€</span>
`;
    
});

// Comentario

{/* <span class="text-muted text-decoration-line-through me-2">
    39,99€
</span>
<span class="text-success fw-bold fs-5">
    35,99€
</span> */}
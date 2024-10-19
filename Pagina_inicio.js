const elementProductos = document.querySelector("#aside_lista_productos");
const contListElementProductos = document.querySelector("#dropdown-example");

const abrirModuloProducto = (contenedor) => {
  contenedor.classList.toggle("hidden");
};

elementProductos.addEventListener("click", () =>
  abrirModuloProducto(contListElementProductos)
);

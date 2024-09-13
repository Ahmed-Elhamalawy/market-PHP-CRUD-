const productTypeSelect = document.getElementById("productType");
const dvdDiv = document.getElementById("dvd-div");
const bookDiv = document.getElementById("book-div");
const furnitureDiv = document.getElementById("furniture-div");

productTypeSelect.addEventListener("change", () => {
  if (productTypeSelect.value === "DVD") {
    dvdDiv.style.display = "block";
  } else {
    dvdDiv.style.display = "none";
  }
  if (productTypeSelect.value === "Book") {
    bookDiv.style.display = "block";
  } else {
    bookDiv.style.display = "none";
  }
  if (productTypeSelect.value === "Furniture") {
    furnitureDiv.style.display = "block";
  } else {
    furnitureDiv.style.display = "none";
  }
  if (productTypeSelect.value === "please select an option") {
    dvdDiv.style.display = "none";
    bookDiv.style.display = "none";
    furnitureDiv.style.display = "none";
  }
});

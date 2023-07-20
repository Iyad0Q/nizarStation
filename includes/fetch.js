fetch("./includes/api.php")
.then(res => res.json())
.then(data => {
    const container = document.querySelector(".productsContainer");
    let productDiv = "";

    for (let i in data) {
        productDiv += `<h3>${data[i].ptitle}</h3>`;
        productDiv += `<p>id = ${i}</p>`;
        productDiv += `<p>${data[i].pdetails}</p>`; 
        productDiv += `<img src="${data[i].pimg}" alt="صورة المنتج">`; 
    }
    container.innerHTML = productDiv;

});
const get = fetch("includes/api.php")
            .then(res => res.json())
            .then(data => show_api_data(data));


  function show_api_data(data) {
    const container = document.querySelector(".productsContainer");

    let x = "";

    for (i in data[0]) {
        x += `<p>${i}</p>`;
        // container.innerHTML = `${x}`;

    }


    


  }


function loadContent() {
    fetch("Content.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById("addedContent").innerHTML = data;
        })
        .catch(error => console.error("Error fetching data:", error));
}

setInterval(loadContent, 1000);

loadContent();
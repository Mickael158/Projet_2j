window.addEventListener("load", function() {
    let form = document.getElementById("form");
    var spinner = document.getElementById("spinner");

    function sendData() {
        var xhr;
        try {
            xhr = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (e) {
            try {
                xhr = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (e2) {
                try {
                    xhr = new XMLHttpRequest();
                } catch (e3) {
                    xhr = false;
                }
            }
        }

        var formData = new FormData(form);


        xhr.onreadystatechange = function() {
            if (xhr.readyState == 1 || xhr.readyState == 2 || xhr.readyState == 3) {
                displaySpinner(true);
            }
            if (xhr.readyState == 4) {
                displaySpinner(false);
                if (xhr.status == 200) {
                    var resultat = JSON.parse(xhr.responseText);
                    console.log(resultat);
                    if (resultat == true) {
                        window.location.assign('http://localhost/takalo/index.php/HomeCL/index');
                    } else {
                        alert(resultat);
                    }
                } else {
                    document.dyn = "Error code " + xhr.status;
                }
            }
        };

        xhr.addEventListener("error", function(event) {
            alert('Oups! one Error has occured');
        });

        //requete
        xhr.open("POST", "http://localhost/takalo/index.php/Traitement/checkLogin");
        xhr.send(formData);
    }

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        sendData();
        displaySpinner(true);
    });

});

function displaySpinner(type) {
    if (type == true) {
        spinner.style.display = "block";
    } else {
        spinner.style.display = "none";
    }
}
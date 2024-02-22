<?php

    include 'cabecalho.php';

?>

    <input type="text" id="text">

    <br>

    <button onclick="get_response_gemini()">Enviar</button>

    <br>

    <div ID="response"></div>


<script>

function get_response_gemini() {
    var text = document.getElementById('text').value; 
    var response = document.getElementById('response');

    fetch("response.php", {
        method: "POST",
        body: JSON.stringify({
            text: text,
        }),
    }).then(res => res.text())
    .then(res => {
        response.innerHTML = res;
    });
}



</script>


<?php

    include 'rodape.php';

?>
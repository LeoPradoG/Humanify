<?php

    include 'cabecalho.php';

?>

<button id="btnMonth">Mês</button>
<button id="btnWeek">Semana</button>
<button id="btnDay">Dia</button>

<div style="width: 100%; display: flex; justify-content: center;align-items: center;">

    <div style="width: 70%; margin: 10px 10px 10px 10px; height: 100vh;">

        <div id='calendar'></div>
        
    </div>
    

</div>

<script>


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        locale: 'pt-br',
        buttonText: {
            today: 'Hoje' 
        },
        editable: true, // Permite arrastar e soltar eventos
        events: [
            {
                title: 'Teste TI',
                start: '2024-01-01'
            },
            {
                title: 'Teste TI',
                start: '2024-01-02'
            },
            {
                title: 'Teste TI',
                start: '2024-01-03'
            },
            {
                title: 'Teste TI',
                start: '2024-01-04'
            },
            {
                title: 'Teste TI',
                start: '2024-01-05'
            }
        ]
    });

    calendar.render();

    // Adiciona um evento de clique para o botão Mês
    document.getElementById('btnMonth').addEventListener('click', function() {
        calendar.changeView('dayGridMonth');
    });

    // Adiciona um evento de clique para o botão Semana
    document.getElementById('btnWeek').addEventListener('click', function() {
        calendar.changeView('timeGridWeek');
    });

    // Adiciona um evento de clique para o botão Dia
    document.getElementById('btnDay').addEventListener('click', function() {
        calendar.changeView('timeGridDay');
    });
});




</script>

<?php

    include 'rodape.php';

?>
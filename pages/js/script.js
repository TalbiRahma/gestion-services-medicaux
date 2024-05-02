document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid'],
        defaultView: 'dayGridMonth',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        // Autres options du calendrier
    });
    calendar.render();
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            defaultView: 'dayGridMonth',
            events: [
                // Ajoute les événements des rendez-vous ici
            ]
        });
        calendar.render();
    });
    var patientsLink = document.getElementById("patients-link");

        // Ajoute un gestionnaire d'événements pour le clic
        patientsLink.addEventListener("click", function(event) {
            // Empêche le comportement par défaut du lien (ouverture de la page)
            event.preventDefault();

            // Redirige vers la page patients.html
            window.location.href = "patients.html";
        });
});


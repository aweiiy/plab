$(document).ready(function() {
    $('#games').DataTable({
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]], // galimybė naudotojui pasirinkti po kiek įrašų rodyti
        pageLength: 25,         // pagal nutylėjimą po kiek įrašų rodyti viename puslapyje
        order: [[0, 'asc']],    // pagal nutylėjimą rūšiuoti pirmą stulpelį didėjimo tvarka
        columns: [              // šitas parametras nurodomas, nes norim, kad Actions stulpelis neturėtų rūšiavimo ir paieškos galimybių
            {data: 'id'},
            {data: 'title'},
            {data: 'genre'},
            {data: 'rating'},
            {data: 'actions', orderable: false, searchable: false},
        ],
    });
});

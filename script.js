$(document).ready(function () {
    $("input[name='search']").on('change', function (e) {
        if ($(this).val().trim().length == 3) {
            fetch('countries.php?search=' + $(this).val())
                .then(response => response.json())
                .then(data => {
                    $('#search-results').empty();

                    for (let i in data) {
                        const row = data[i];
                        const result = $("<div>").text(row.name);
                        $('#search-results').append(result);
                    }
                })
                .catch(error => {
                    console.log('Error:', error);
                });
        }
    });
});

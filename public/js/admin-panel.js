$(document).ready(function () {


  const searchInput = document.getElementById('searchInput');

  const table = document.getElementById('myTable');

  searchInput.addEventListener('input', () => {

    const query = searchInput.value.toLowerCase();

    for (let i = 1; i < table.rows.length; i++) {

      const row = table.rows[i];

      let found = false;

      for (let j = 0; j < row.cells.length; j++) {

        const cell = row.cells[j];

        if (cell.innerHTML.toLowerCase().includes(query)) {

          found = true;

          break;

        }

      }

      if (found) {

        row.style.display = '';

      } else {

        row.style.display = 'none';

      }

    }

  });

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});

  $(".editor").on('change', function (e) {
    e.preventDefault();
    let user_id = $(this).data('user');
    let value = $(this).val();
    
    $.ajax({
      type: "POST",
      url: "/admin/change-role",
      data: {value: value, user_id: user_id},
      error: function (err) {
        console.log(err);
      }
    });
  })
});
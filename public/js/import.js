$(document).ready(function(){

    $.ajax({
      url: 'import/users',
      dataType: 'json',
      data:{url: "https://randomuser.me/api/?results", number: 100},
      type: 'POST',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(res) {
        alert(res.message);
      },
      error: function(res) {
        alert(res.message);
      }
    });

});
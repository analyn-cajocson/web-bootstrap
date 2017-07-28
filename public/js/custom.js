$('#submit').click(function (e) {
  e.preventDefault();
  var login = $('#login').val();
  $.ajax({
      method: "POST",
      headers: {
        'Authorization': '70284897fa58cdf890aa70e0ccf892db768abaf39c752a5a40',
        'X-CSRF-Token' : $('meta[name=_token]').attr('content')
      },
      url: 'http://localhost:3000/api/v1/customers/check',
      data: {login: login},
      success: function(data) {
          console.log("Ana Ganda")
      }
  });
});


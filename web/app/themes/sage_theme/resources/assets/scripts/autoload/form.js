
( function( $ ) {
  $('.submit_privacy').click(function() {
    let form = '.question-form__container';
    let name = $(form+' input[name="name"]').val();
    let phone = $(form+' input[name="phone"]').val();
    let email = $(form+' input[name="email"]').val();
    let birthday = $(form+' input[name="birthday"]').val();
    let additionally = $(form+' textarea[name="additionally"]').val();
    if (name == '') {
      notification('Введите имя');
      return false;
    }
    if (phone == '') {
      notification('Введите номер телефона');
      return false;
    }
    if (email == '') {
      notification('Введите email');
      return false;
    }
    if (birthday == '') {
      notification('Введите дату рождения');
      return false;
    }
    if (additionally == '') {
      notification('Введите дополнительную информацию');
      return false;
    }

    $.ajax({
      type:'POST',
      url: $('.admin-ajax').text(),
      dataType : 'json',
      data: {
        action: 'sendf',
        name: name,
        phone: phone,
        email: email,
        birthday: birthday,
        additionally: additionally,
      },
      success: function(result) {

        if (result['status'] == 'ok') {
          notification('Письмо успешно отправлено!\nСкоро мы с Вами свяжемся!');
        } else {
          notification('Произошла ошибка отправки, попробуйте позже.');
        }

      },
    });
    return false;
  });
  function notification(text) {
    $('body').append('<div class="notification"><div class="notification-content">'+text+'</div></div>');
    $('.notification').on('click', function(){
      $('.notification').fadeOut(1000);
      setTimeout(function(){
        $('.notification').remove();
      }, 1000);
    });
  }
}( jQuery ) );

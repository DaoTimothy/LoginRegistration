$(document)
.on("submit", "form.js-register", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var data = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    };

    if (data.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (data.password.length < 11) {
        _error
            .text("Please enter a password that is at least 11 characters long.")
            .show();
        return false;
    }

    //Starting ajax process
    _error.hide();

    $.ajax({
        type: "POST",
        url: '/LoginRegistration/ajax/register.php',
        data: data,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if (data.error !== undefined) {
            _error.text(data.error).show();
        }
    })
    .fail(function ajaxFailed(e) {

    })
    .always(function ajaxAlwaysDoThis(data){
        console.log('Always');
    })

    return false;
})

.on("submit", "form.js-login", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var data = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    };

    if (data.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (data.password.length < 11) {
        _error
            .text("Please enter a password that is at least 11 characters long.")
            .show();
        return false;
    }

    //Starting ajax process
    _error.hide();

    $.ajax({
        type: "POST",
        url: '/LoginRegistration/ajax/login.php',
        data: data,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if (data.error !== undefined) {
            _error.text(data.error).show();
        }
    })
    .fail(function ajaxFailed(e) {

    })
    .always(function ajaxAlwaysDoThis(data){
        console.log('Always');
    })

    return false;
})
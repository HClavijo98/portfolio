jQuery.fn.createDialog = function (width, height) {
    // var dialogo = $('<div style="width:' + width + 'px; height:' + height + 'px;" class="dialeg">Favorite animal:'+
    // '<select name="animal" id="animal" style="width:70%;">'+
    // '<option value="lion">lion</option><option value="cat">cat</option><option value="monkey">monkey</option><option value="bull">bull</option><option value="crocodile">crocodile</option>'+
    // '</select>'+
    // '<button class="boton" style="width:40%;">Cancel</button><button class="boton" style="width:40%;">Confirm</button>'+
    // '</div>');

    var dialogo = $('<div class="dialeg"><label for="username">Nombre</label><br>'+
    '<input type="text" id="username" name="username">'+
    '<label for="username">Cognoms</label>'+
    '<input type="text" id="lastname" name="lastname">'+
    '<label for="address">Adreça</label>'+
    '<input type="text" id="address" name="address">'+
    '<button class="boton" style="width:20%;">Cancel</button><button class="boton" style="width:20%;">Confirm</button></div>');
    $(this).append(dialogo);
};

jQuery.fn.showDialog = function () {
    $(this).show();
    $(document).on('scroll', function () {
        // Prevenir el comportamiento por defecto del evento scroll
        $(document).scrollTop(0);
    });
};

jQuery.fn.hideDialog = function () {
    let name = $('#username').val() + ' ' + $('#lastname').val();
    $(this).fadeOut();
    $(document).off('scroll');
    return name;
};
var wysicheckin = {
    "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis": true, //Italics, bold, etc. Default true
    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html": false, //Button which allows you to edit the generated HTML. Default false
    "link": true, //Button to insert a link. Default true
    "image": false, //Button to insert an image. Default true,
    "color": true //Button to change color of font
};
function setLiveStamp() {
    $(".time").each(function() {
        var e = $(this).data("time");
        $(this).livestamp("isLivestamp") || $(this).livestamp(e)
    })
}
// create an fn function for a loader...
$.fn.Loader = function(txt) {
    txt = typeof txt === 'undefined' ? '' : txt;
    var img = $('<img />', {
        src : "http://cdn.tunes.com/" + 'img/loading.gif'
    }),
        span = $('<span />', {
        id : 'loader-span'
    });
    if (this.find('span#loader-span').length === 0) {
        var content = $(span).html(txt).append(img);

        // Content should be appended only into a div or a span
        if ($(this).is('div') || $(this).is('span')) {
            // Add content
            $(this).html(content);
        }

        // In case the parent is not visible, show it!
        if (!this.is(':visible')) {
            this.show();
        }
    }
    return this;
};


// Create fn for adding an alert to the content!
$.fn.CheckinAlert = function() {
    var type = arguments[0] || 'info',
        div = $('<div>', {
        'class' : 'alert alert-dismissable alert-' + type,
        'html' : arguments[1] || 'Information'
    }).append($('<button>', {
        'class' : 'close',
        'data-dismiss' : 'alert',
        'aria-hidden' : true,
        'html' : '&times;'
    }));
    // Remove a loader, if any!
    $(this).RemoveLoader();
    // Add what we have to the parent, bt first, we need to remove an alert; if
    // originally present!
    $('.alert .close').trigger('click');
    return arguments[2] || false ? $(this).prepend(div) : $(this).append(div);
};

//remove loader
$.fn.RemoveLoader = function() {
    this.find('span#loader-span').fadeOut('fast', function() {
        this.remove();
    });
    return this;
};

// Load stuff via ajax
$.fn.ajaxMagic = function() {
    $(this).each(function() {
        var data = {},
            url = null;
        $.extend(data, $(this).data() || {});
        // Get the url from the object
        url = data.content;

        // remove url from object
        delete data.content;

        // Get the data
        $(this).load(url, data, function() {
            // Incase there is any time object
            //setLiveStamp();
        });
    });
};

// Close the modal after 0.5 sec; or as specified!
function closeModal() {
    setTimeout(function() {
        $('.modal:visible').modal('hide');
    }, arguments[0] || 500);
}

// Use a dedicated class - imager
$.fn.Imager = function () {
    $(document).on('change', this.selector, function () {

        var files = this.files; //FileList object

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            //Only pics
            //if(!file.type.match('image'));
            // continue;
            var reader = new FileReader();
            var imager = $(this).parents('form').find('.imager').Loader('Working, please wait!');
            reader.onload = function (e) {
                imager.find('span#loader-span').hide();
                var picFile = e.target;
                imager.append("<div class = 'pl mg5r'><img class='thumbnail' src='" + picFile.result + "'/></div>");
            };
            reader.readAsDataURL(file);
        }
        ;

    });
    return $(this).parents('form') || this;
};
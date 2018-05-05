$(function () {
    function changeAttr(_this, count, att) {
        if (_this.attr(att)) {
            var name = _this.attr(att).replace(/\d+/, count);
            _this.attr(att, name);
        }
    }
    $('#description_ru').focus(function () {
      if($(this).val()) {return}

      var VRegExp = new RegExp(/\n+/g);
      p =  tinymce.editors.content_ru.getContent()
      p = $(p).text().replace(VRegExp, ' ').slice(0,249);
      $(this).val(p)
    })
  $('#description_uk').focus(function () {
    // if($(this).val()) {return}
    p =  tinymce.editors.content_uk.getContent()
    console.log($(p).text() );

    $(this).val($(p).text().slice(0,249))
  })


    $('.add-photo').on('click', function () {
        var photo = $('.photo-wrap').first().clone();
        var count = $('.photo-wrap').length;
        photo.find('input,img').each(function () {
            var _this = $(this);
            changeAttr(_this, count, 'name');
            changeAttr(_this, count, 'id');
            _this.removeAttr('src');
            _this.removeAttr('checked');
            _this.val(null);
        });
        photo.find('a').each(function () {
            var _this = $(this);
            changeAttr(_this, count, 'id');
            changeAttr(_this, count, 'data-input');
            changeAttr(_this, count, 'data-preview');
            _this.html(_this.html().replace(/\d+/, count));

        });
        photo.find('.photo-remove').on('click', removePhoto);
        photo.find('.index-text').val(count);
        photo.insertBefore($(this));
        $('#lfmphoto' + count).filemanager('image')
    });

    function removePhoto() {
        if (confirm('Удалить фото?'))
            $(this).parents('.photo-wrap').remove();
    }

    $('.photo-remove').on('click', removePhoto);


});
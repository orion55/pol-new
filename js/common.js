jQuery(document).ready(function ($) {
  $('#tabs').tabs()
  $('#in_tabs').tabs({active: 0})

  function rezcalc () {
    $('output.rezcalc').html('')
    $('input[type=text]:not(.wpcf7-total),input[type=email],input:checked,select :selected', $('form.wpcf7-form')).each(function () {
      if ($(this)[0].tagName == 'OPTION') {
        first_el = $(':first', $(this).parent()).text()
        val = $(this).text()
        if (first_el != val) {
          $('output.rezcalc').append('<div>' + first_el + ': ' + val + '</div>')
        }
      } else {
        // console.log($(this).attr('type'));
        if ($(this).val()) {
          if ($(this).attr('type') == 'checkbox' || $(this).attr('type') == 'radio') {
            name = ''
            if ($(this).attr('type') == 'radio') {
              name = $(this).closest('p').prev('h3').text() + ': '
            }
            val = $(this).next('span').text()
          } else {
            name = $(this).attr('placeholder')
            if ($(this).attr('name') == 'phone') name = 'Телефон'
            name += ': '
            val = $(this).val()
          }
          $('output.rezcalc').append('<div>' + name + val + '</div>')
        }
      }
    })
  }

  $('.open_menu_btn').click(function () {
    $('.menu_block').addClass('open')
    $('body').css('height', window.innerHeight = 'px').css('overflow', 'hidden')
  })
  if ($(window).width() < 460) {
    $('.wpcf7').parent().addClass('cw100')
  }
  el = $('.wpcf7-form')
  if (!$('output').is('.rezcalc')) {
    el.parent().parent().parent().next('div').prepend('<output class="rezcalc"></output>')
  }
  rezcalc()
  $('form.wpcf7-form').on('change', 'input[type=text],input[type=email],select,input[type=checkbox],input[type=radio]', function () {
    rezcalc()
  })
  $('.close').click(function () {
    $('.menu_block').removeClass('open')
    $('body').css('height', 'auto').css('overflow', 'auto')
  })

  $(document).mouseup(function (e) {
    var div = $('.menu_block')
    if (!div.is(e.target) && div.has(e.target).length === 0) {
      $('.menu_block').removeClass('open')
      $('body').css('height', 'auto').css('overflow', 'auto')
    }
  })
  var footage_from = $('.footage_from').text()
  $('#slider-range-min').slider({
    range: 'min', value: footage_from, min: 1, max: 350, slide: function (event, ui) {
      $('#amount').val(ui.value)
      footage = ui.value

      if (footage < 50) {
        cost = $('.cost_to_50').text()
      }
      else {
        if (footage > 50 && footage < 100) {
          cost = $('.cost_from_50_to_100').text()
        }
        else {
          if (footage > 100) {
            cost = $('.cost_from_100').text()
          }
        }
      }
      // console.log(cost);
      $('.value').text(parseInt(cost) * parseInt(ui.value))
      $('#val').val(parseInt(cost) * parseInt(ui.value))
      rezcalc()
    }
  })
  $('#amount').val($('#slider-range-min').slider('value'))

})
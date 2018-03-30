/**
 * Created by Админ on 16.11.2017.
 */
function init() {
  var mouse = document.querySelector('.mouse'),
    shlapnik = document.querySelector('.bg-shlapnik'),
    d = document.createElement('div')

    kolumb = document.querySelector('.kolumb'),
    hat = document.querySelectorAll('.hat'),
    resizeEl = document.querySelectorAll('.resizeEl'),
    names = document.querySelector('.names'),
    games = document.querySelector('.games'),
    burger = document.querySelector('.burger'),
    game = document.querySelectorAll('.burger'),
    w_w = window.innerWidth,
    w_h = window.innerHeight,
    WKoef = w_w / 1920,
    detect,
    HKoef = w_h / 945;

  if (detect) {
    var ua = detect.parse(navigator.userAgent);
    if(ua.os.family == 'iOS') {
      $('body').addClass('ios-active');
    }
  }
  var uniKoef = window.innerWidth / window.innerHeight >= 1.979 ? HKoef : WKoef

  for (var i = 0; i < resizeEl.length; i++) {
    resizeEl[i].setAttribute('data-w', resizeEl[i].clientWidth);
    resizeEl[i].setAttribute('data-h', resizeEl[i].clientHeight);
  }


  window.onresize = function () {
    w_w = window.innerWidth,
      w_h = window.innerHeight,
      WKoef = w_w / 1920,
      HKoef = w_h / 945,
      uniKoef = innerWidth / window.innerHeight >= 1.979 ? HKoef : WKoef;
    resizeElents();
  }




  function resizeElents() {
    cans = true

    /* h smaller */
    for (var i = 0; i < resizeEl.length; i++) {
      elW = resizeEl[i].getAttribute('data-w');
      elH = resizeEl[i].getAttribute('data-h');
      bgResW = resizeEl[i].getAttribute('data-bg-w');
      bgResH = resizeEl[i].getAttribute('data-bg-h');
      bg_pos_x = resizeEl[i].getAttribute('data-bg-x');
      bg_pos_y = resizeEl[i].getAttribute('data-bg-y');
      transOrig = resizeEl[i].getAttribute('data-t-o');

      // uniKoef = .3
      if(!resizeEl[i].classList.contains('spin-image')){
        resizeEl[i].style.width = elW * uniKoef + 'px';
        resizeEl[i].style.height = elH * uniKoef + 'px';
      }

      if (bgResW && bgResH) {
        resizeEl[i].style.backgroundSize = bgResW * uniKoef + 'px ' + bgResH * uniKoef + 'px';
      }
      if (bg_pos_x && bg_pos_y) {
        resizeEl[i].style.backgroundPosition = bg_pos_x * uniKoef + 'px ' + bg_pos_y * uniKoef + 'px';
      }
      if (transOrig) {
        // resizeEl[i].style.transformOrigin = '50% ' // + transOrig * uniKoef + 'px';

        if(cans && resizeEl[i].classList.contains('spin')) {
          cans =  false
          transOrig = 280
          r1 = 30
          r2 = 60
          r3 = 90
          str = '<style>' +
            '.spin:nth-child(1){\n' +
            '    opacity: 0;\n' +
            '    transform: rotateX('+r3+'deg) translateZ('+ transOrig * uniKoef + 'px);\n' +
            '}\n' +
            '.spin:nth-child(2){\n' +
            '    transform: rotateX('+r2+'deg) translateZ('+ transOrig * uniKoef + 'px);\n' +
            '}\n' +
            '.spin:nth-child(3){\n' +
            '    transform: rotateX('+r1+'deg) translateZ('+ transOrig * uniKoef + 'px);' +
            '}\n' +
            '.spin:nth-child(4){\n' +
            '    transform: rotateX(0) translateZ('+ transOrig * uniKoef + 'px);\n' +
            '}\n' +
            '.spin:nth-child(5) {\n' +
            '    transform: translate(0px,0px) rotateX(-'+r1+'deg) translateZ('+ transOrig * uniKoef + 'px);\n' +
            '}\n' +
            '.spin:nth-child(6){\n' +
            '    transform: translate(0px,0px) rotateX(-'+r2+'deg) translateZ('+ transOrig * uniKoef + 'px);\n' +
            '}\n' +
            '.spin:nth-child(7){\n' +
            '    transform: translate(0px,0px) rotateX(-'+r3+'deg) translateZ('+ transOrig * uniKoef + 'px);\n' +
            '}'+
            '</style>'
          d.innerHTML = str
          document.body.append(d)
        }
      }

    }
  }
  resizeElents();
  /* Rotator Game */
  var spiners = document.querySelectorAll('.rotator-row-wrap');
  var spiner = [];
  var actSpin = 0;
  init = [], spins = [], stops = [];
  var rand;
  canSpin = true;
  var headOn = false;
  cikl = 0;

  wrongAnswer = [[1, 3, 1, 1],[1, 3, 2, 1],[1, 3, 3, 1],[1, 3, 4, 1],[1, 3, 5, 1],[1, 3, 6, 1],[1, 3, 7, 1],[1, 3, 1, 6],[1, 3, 2, 6],[1, 3, 3, 6],[1, 3, 4, 6],[1, 3, 5, 6],[1, 3, 6, 6],[1, 3, 7, 6],[1, 4, 1, 6],[1, 4, 2, 6],[1, 4, 3, 6],[1, 4, 4, 6],[1, 4, 5, 6],[1, 4, 6, 6],[1, 4, 7, 6],[1, 4, 1, 1],[1, 4, 2, 1],[1, 4, 3, 1],[1, 4, 4, 1],[1, 4, 5, 1],[1, 4, 6, 1],[1, 4, 7, 1],[1, 5, 1, 2],[1, 5, 2, 2],[1, 5, 3, 2],[1, 5, 4, 2],[1, 5, 5, 2],[1, 5, 6, 2],[1, 5, 7, 2],[1, 5, 1, 6],[1, 5, 2, 6],[1, 5, 3, 6],[1, 5, 4, 6],[1, 5, 5, 6],[1, 5, 6, 6],[1, 5, 7, 6],[1, 5, 1, 1],[1, 5, 2, 1],[1, 5, 3, 1],[1, 5, 4, 1],[1, 5, 5, 1],[1, 5, 6, 1],[1, 5, 7, 1],[1, 6, 1, 2],[1, 6, 2, 2],[1, 6, 3, 2],[1, 6, 4, 2],[1, 6, 5, 2],[1, 6, 6, 2],[1, 6, 7, 2],[1, 6, 1, 3],[1, 6, 2, 3],[1, 6, 3, 3],[1, 6, 4, 3],[1, 6, 5, 3],[1, 6, 6, 3],[1, 6, 7, 3],[1, 6, 1, 4],[1, 6, 2, 4],[1, 6, 3, 4],[1, 6, 4, 4],[1, 6, 5, 4],[1, 6, 6, 4],[1, 6, 7, 4],[1, 6, 1, 6],[1, 6, 2, 6],[1, 6, 3, 6],[1, 6, 4, 6],[1, 6, 5, 6],[1, 6, 6, 6],[1, 6, 7, 6],[1, 6, 1, 1],[1, 6, 2, 1],[1, 6, 3, 1],[1, 6, 4, 1],[1, 6, 5, 1],[1, 6, 6, 1], [1, 6, 7, 1]];

  rightAnswer = [[1, 2, 1, 1],[1, 2, 1, 2],[1, 2, 1, 3],[1, 2, 1, 4],[1, 2, 1, 5],[1, 2, 1, 6],[1, 2, 1, 7],[1, 2, 2, 1],[1, 2, 2, 2],[1, 2, 2, 3],[1, 2, 2, 4],[1, 2, 2, 5],[1, 2, 2, 6],[1, 2, 2, 7],[1, 2, 3, 1],[1, 2, 3, 2],[1, 2, 3, 3],[1, 2, 3, 4],[1, 2, 3, 5],[1, 2, 3, 6],[1, 2, 3, 7],[1, 2, 4, 1],[1, 2, 4, 2],[1, 2, 4, 3],[1, 2, 4, 4],[1, 2, 4, 5],[1, 2, 4, 6],[1, 2, 4, 7],[1, 2, 5, 1],[1, 2, 5, 2],[1, 2, 5, 3],[1, 2, 5, 4],[1, 2, 5, 5],[1, 2, 5, 6],[1, 2, 5, 7],[1, 2, 6, 1],[1, 2, 6, 2],[1, 2, 6, 3],[1, 2, 6, 4],[1, 2, 6, 5],[1, 2, 6, 6],[1, 2, 6, 7],[1, 2, 7, 1],[1, 2, 7, 2],[1, 2, 7, 3],[1, 2, 7, 4],[1, 2, 7, 5],[1, 2, 7, 6],[1, 2, 7, 7],[1, 3, 1, 2],[1, 3, 2, 2],[1, 3, 3, 2],[1, 3, 4, 2],[1, 3, 5, 2],[1, 3, 6, 2],[1, 3, 7, 2],[1, 3, 1, 3],[1, 3, 2, 3],[1, 3, 3, 3],[1, 3, 4, 3],[1, 3, 5, 3],[1, 3, 6, 3],[1, 3, 7, 3],[1, 3, 1, 4],[1, 3, 2, 4],[1, 3, 3, 4],[1, 3, 4, 4],[1, 3, 5, 4],[1, 3, 6, 4],[1, 3, 7, 4],[1, 3, 1, 5],[1, 3, 2, 5],[1, 3, 3, 5],[1, 3, 4, 5],[1, 3, 5, 5],[1, 3, 6, 5],[1, 3, 7, 5],[1, 4, 1, 2],[1, 4, 2, 2],[1, 4, 3, 2],[1, 4, 4, 2],[1, 4, 5, 2],[1, 4, 6, 2],[1, 4, 7, 2],[1, 4, 1, 3],[1, 4, 2, 3],[1, 4, 3, 3],[1, 4, 4, 3],[1, 4, 5, 3],[1, 4, 6, 3],[1, 4, 7, 3],[1, 4, 1, 4],[1, 4, 2, 4],[1, 4, 3, 4],[1, 4, 4, 4],[1, 4, 5, 4],[1, 4, 6, 4],[1, 4, 7, 4],[1, 4, 1, 5],[1, 4, 2, 5],[1, 4, 3, 5],[1, 4, 4, 5],[1, 4, 5, 5],[1, 4, 6, 5],[1, 4, 7, 5],[1, 5, 1, 4],[1, 5, 2, 5],[1, 5, 3, 5],[1, 5, 4, 5],[1, 5, 5, 5],[1, 5, 6, 5],[1, 5, 7, 5],[1, 5, 1, 4],[1, 5, 2, 4],[1, 5, 3, 4],[1, 5, 4, 4],[1, 5, 5, 4],[1, 5, 6, 4],[1, 5, 7, 4],[1, 1, 1, 1],[1, 1, 1, 2],[1, 1, 1, 3],[1, 1, 1, 4],[1, 1, 1, 5],[1, 1, 1, 6],[1, 1, 1, 7],[1, 1, 2, 1],[1, 1, 2, 2],[1, 1, 2, 3],[1, 1, 2, 4],[1, 1, 2, 5],[1, 1, 2, 6],[1, 1, 2, 7],[1, 1, 3, 1],[1, 1, 3, 2],[1, 1, 3, 3],[1, 1, 3, 4],[1, 1, 3, 5],[1, 1, 3, 6],[1, 1, 3, 7],[1, 1, 4, 1],[1, 1, 4, 2],[1, 1, 4, 3],[1, 1, 4, 4],[1, 1, 4, 5],[1, 1, 4, 6],[1, 1, 4, 7],[1, 1, 5, 1],[1, 1, 5, 2],[1, 1, 5, 3],[1, 1, 5, 4],[1, 1, 5, 5],[1, 1, 5, 6],[1, 1, 5, 7],[1, 1, 6, 1],[1, 1, 6, 2],[1, 1, 6, 3],[1, 1, 6, 4],[1, 1, 6, 5],[1, 1, 6, 6],[1, 1, 6, 7],[1, 1, 7, 1],[1, 1, 7, 2],[1, 1, 7, 3],[1, 1, 7, 4],[1, 1, 7, 5],[1, 1, 7, 6],[1, 1, 7, 7]]



  function animStart() {
    cikl = cikl == 4 ? 0 : cikl;
    $('.rotator-row-wrap .spin').removeClass('true false')
    spiner[cikl].spinStart(spiner[cikl], rand[cikl], 15)
    cikl++
  }

  function Spiner(el, uniq) {
    this.this = this
    this.el = el
    this.uniq = uniq
    lastOne = this.el.querySelectorAll('.spin');
    this.children = this.el.children
  }

  Spiner.prototype.spinStart = function (n, m, z) {
    _thisLast = this.children[this.children.length - 1];
    _thisActive = this.children[2];

    time = 130 + (z - 10) * 10
    if (z <= 10) {
      n.spinSpin(n, m, z);
      window.cancelAnimationFrame(init[this.uniq]);
      return true;
    }
    z--
    for (var i = 0; i < this.children.length; i++) {
      this.children[i].style.transition = 'all ' + (time ) + 'ms linear';
    }
    setTimeout(function () {
      init[this.uniq] = window.requestAnimationFrame(function () {
        n.spinStart(n, m, z)
      });
    }, time - 60 )
    // this.el.prepend(_thisLast);
    this.el.insertBefore(_thisLast,this.children[0]);
  }

  Spiner.prototype.spinSpin = function (n, m, z) {
    _thisLast = this.children[this.children.length - 1];
    _thisActive = this.children[4];

    if (z <= 6 && _thisActive.classList.contains('spin' + m) && this.uniq == actSpin) {
      n.spinStop(n, m, 0);
      actSpin++
      window.cancelAnimationFrame(spins[this.uniq]);
      return true;
    }
    z--
    setTimeout(function () {
      spins[this.uniq] = window.requestAnimationFrame(function () {
        n.spinSpin(n, m, z)
      });
    }, time  - 70 )
    this.el.insertBefore(_thisLast,this.children[0]);
  }



  Spiner.prototype.spinStop = function (n, m, z) {

    _thisLast = this.children[this.children.length - 1];
    _thisActive = this.children[3];
    _thisbefore = this.children[2];

    if (_thisbefore.classList.contains('spin' + m)) {
      time1 = 'all ' + 1000 + 'ms cubic-bezier(0, 1.24, 1, 1)';
      for (var i = 0; i < this.children.length; i++) {
        this.children[i].style.transition = time1;
      }
    }
    if (_thisActive.classList.contains('spin' + m)) {
      if (this.uniq == 3) {
        canSpin = true;
        $('.pusk-btn').removeClass('active').next();
        if (headOn) {
          $('.rotator-row-wrap').each(function () {
            bg_pos_y = $(this).find('.spin:nth-child(4)  .spin-image').attr('data-bg-y')
            $(this).find('.spin:nth-child(4)  .spin-image').css({'background-position': -231 * uniKoef + 'px ' + bg_pos_y * uniKoef + 'px'})
          })
        } else {
          $('.rotator-row-wrap').each(function () {
            bg_pos_y = $(this).find('.spin:nth-child(4)  .spin-image').attr('data-bg-y')
            $(this).find('.spin:nth-child(4)  .spin-image').css({'background-position': -456 * uniKoef + 'px ' + bg_pos_y * uniKoef + 'px'})
          })
        }

      }
      window.cancelAnimationFrame(stops[this.uniq]);
      return true;
    }
    z++

    setTimeout(function () {
      stops[this.uniq] = window.requestAnimationFrame(function () {
        n.spinStop(n, m, z)
      });
    }, time - 5)
    this.el.insertBefore(_thisLast,this.children[0]);
  }


  for (i = 0; i < spiners.length; i++) {
    spiner[i] = new Spiner(spiners[i], i);
  }

  $('.pusk-btn').click(function () {
    if (!canSpin) {
      return
    }
    $(this).addClass('active').next();
    canSpin = false;
    actSpin = 0;
    rands  = Math.floor((Math.random() * 7) + 1)
    rand =  headOn ? rightAnswer[Math.floor(Math.random() * rightAnswer.length)] : wrongAnswer[Math.floor(Math.random() * wrongAnswer.length)];
    rand[0] = headOn ?  rands == 2 ? 1 : rands :  rands;
    $('.rotator-row-wrap').each(function () {
      bg_pos_y = $(this).find('.spin:nth-child(4)  .spin-image').attr('data-bg-y')
      $(this).find('.spin:nth-child(4)  .spin-image').css({'background-position': -0 * uniKoef + 'px ' + bg_pos_y * uniKoef + 'px'})
    })
    for (i = 0; i < spiner.length; i++) {
      setTimeout(function () {
        animStart()
      }, 500 * i)
    }
  })







  /*-----------------  MEN HEAD  -----------------*/
  $(document).ready(function () {
    $('.turn').click(function () {
      $('.men-on-off, .lightning-s, .turn, .men-turn-on-off-content').toggleClass('active').next();
      if ($('.men-turn-on-off-content').hasClass('active')) {
        $('.turn-on-off').html('Выкл');
        headOn = true;
      }
      else {
        $('.turn-on-off').html('Вкл');
        headOn = false;
      }
    });
  });
  /*----------------- end MEN HEAD  -----------------*/
  /*----------------- onhover logo dragstore  -----------------*/
  $('.js-hover').hover(function() {
    var _this = this,
      images = _this.getAttribute('data').split(','),
      counter = 0;

    this.setAttribute('data-src', this.src);
    _this.timer = setInterval(function(){
      if(counter > images.length) {
        counter = 0;
      }
      if (images[counter] != undefined) {
        _this.src = images[counter];
      } else {
        _this.src = _this.getAttribute('data-src');
      }

      counter++;
    }, 100);

  }, function() {
    this.src = this.getAttribute('data-src');
    clearInterval(this.timer);
  });
  /*----------------- end onhover logo dragstore  -----------------*/


  /*----------------- NEXT page REVOLVER  -----------------*/
  $('.str-next').click(function (event) {
    event.preventDefault();
    $(this).parents('.game-icons').toggleClass('shoot');
    linkLocation = this.href;

    setTimeout(function () {
      window.location = linkLocation;
    }, 1700)
  });
  $('.str-prev').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('active');
    linkLocation = this.href;

    setTimeout(function () {
      window.location = linkLocation;
    }, 1000)
  });
  /*----------------- end NEXT page REVOLVER  -----------------*/
}

document.addEventListener("DOMContentLoaded", init);

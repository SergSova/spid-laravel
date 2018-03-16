(function () {
  if(localStorage.getItem('man') != undefined){
    man = localStorage.getItem('man');
    man = man == '1' ? '0' : '1';
    localStorage.setItem('man', man);
  }else {
    man = Math.floor(Math.random() * 1);
    localStorage.setItem('man', man);
  }

  imgs = [], img = [];
  var glob = 0;
  var count = 0;
  var str = man == 1 ? 'assets/img/girl/1280/' : 'assets/img/man/1280/'
  var forw = true;
  var anim = false;
  var waitTime  = false;
  var backAnim = false;
  var paus = false;

  /* canvas */
  var c = document.getElementById('canvas');
  var ctx = c.getContext('2d');
  var dpr = window.devicePixelRatio;
  var cw = window.innerWidth;
  var ch = window.innerHeight;
  c.width = window.innerWidth;
  c.height = window.innerHeight;


  function beforeLoadingImages() {
    for (var i = 1; i <= 16; i++) {
      img[i - 1] = str + i + '.jpg'
    }
  }

  beforeLoadingImages();
  function initScene(counts, callback) {
    for (var i = 0; i <= counts.length - 1; i++) {
      imgs[i] = new Image();
      imgs[i].src = counts[i];
      if (i == counts.length - 1) {
        callback(true);
      }
    }
  };
    initScene(img, function () {
    ctx.drawImage(imgs[glob], 0, 0, c.width, c.height);

    function drawFirst(nn, callback) {
      k = new Image();
      k.src = img[glob];
      k.onload = function () {
        callback(k);
      }
    }

    drawFirst(glob, function (k) {
      ctx.drawImage(k, 0, 0, c.width, c.height);
    });
  })

  if (window.addEventListener) {
    if ('onwheel' in document) {
      window.addEventListener("wheel", onWheel);
    } else if ('onmousewheel' in document) {
      window.addEventListener("mousewheel", onWheel);
    } else {
      window.addEventListener("MozMousePixelScroll", onWheel);
    }
  } else {
    window.attachEvent("onmousewheel", onWheel);
  }

  c.addEventListener("touchstart", function(e) {
    e.preventDefault();
    var touchobj = e.changedTouches[0]
    c.addEventListener('touchend', function(e){
      e.preventDefault()
      if(!waitTime) {
        forw = true;
        beforeDraw();
      }
    })
  })

  function onWheel(e) {
    e = e || window.event;
    delta  = e.pageY;
    if(delta > 0 && !paus) {
      waitTime = true;
      beforeDraw();
    }
  }

  function beforeDraw() {
    paus = true
    if (anim || count >= imgs.length - 1) {return true;}
    if(forw){
      count = backAnim ? imgs.length - 1 : Math.floor((imgs.length - 1) / 2);
      backAnim = true;
      drawImg();
      setTimeout(function () {
        if (count < imgs.length - 1) {
          count = 0;
          forw = false;
          if (!anim) {
            setTimeout(function () {
              document.querySelector('.scroll-box-text.hidden').classList.add('active');
              paus =  false
            }, 500);
            drawImg();
          }
        }
      }, 1200)
    }
  }

  function drawImg() {
    forw ? glob++ : glob = glob == 0 ? 0 : glob - 1 ;
    anim = true;
    if(count == imgs.length - 1) {
      document.querySelector('.scroll-box').classList.add('hidden');
    }
    if (count == glob && forw || !forw && count == glob) {
      anim = false;
      forw = true;
      window.cancelAnimationFrame(drawImg);
      if(count == imgs.length - 1) {
        document.querySelector('.no-aids').classList.add('open');
      }
      return true;
    }
    setTimeout(function () {
      window.requestAnimationFrame(drawImg);
    }, 80)
    ctx.drawImage(imgs[glob], 0, 0, c.width, c.height);
  }

  window.onresize = function () {
    c.width = window.innerWidth;
    c.height = window.innerHeight;
    ctx.drawImage(imgs[glob], 0, 0, c.width, c.height);
  }
})();
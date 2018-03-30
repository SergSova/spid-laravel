// function BufferLoader(context, urlList, callback) {
// 	this.context = context;
// 	this.urlList = urlList;
// 	this.onload = callback;
// 	this.bufferList = new Array();
// 	this.loadCount = 0;
// }

// BufferLoader.prototype.loadBuffer = function(url, index) {
// 	// Load buffer asynchronously
// 	var request = new XMLHttpRequest();
// 	request.open("GET", url, true);
// 	request.responseType = "arraybuffer";

// 	var loader = this;

// 	request.onload = function() {
// 		// Asynchronously decode the audio file data in request.response
// 		loader.context.decodeAudioData(
// 		request.response,
// 		function(buffer) {
// 			if (!buffer) {
// 			alert('error decoding file data: ' + url);
// 			return;
// 			}
// 			loader.bufferList[index] = buffer;
// 			if (++loader.loadCount == loader.urlList.length)
// 			loader.onload(loader.bufferList);
// 		},
// 		function(error) {
// 			console.error('decodeAudioData error', error);
// 		}
// 		);
// 	}

// 	request.onerror = function() {
// 		alert('BufferLoader: XHR error');
// 	}

// 	request.send();
// }

// BufferLoader.prototype.load = function() {
// 	for (var i = 0; i < this.urlList.length; ++i)
// 	this.loadBuffer(this.urlList[i], i);
// }

// var context;
// var bufferLoader;
// var gainNode;
// var source1;
// var BUFFERS;
// var currentVolume;
// var testStart;

// function init() {
//   // Fix up prefixing
//   window.AudioContext = window.AudioContext || window.webkitAudioContext;
//   context = new AudioContext();

//   bufferLoader = new BufferLoader(
//     context,
//     [
//       'assets/video/noise-audio.mp3',
//     ],
//     finishedLoading
//     );

//   bufferLoader.load();
// }

// function finishedLoading(bufferList) {
// 	BUFFERS = bufferList;
//   // Create two sources and play them both together.
//   source1 = context.createBufferSource();
//   source1.buffer = bufferList[0];

//   source1.connect(context.destination);
//   source1.start(0);
//   gainNode = context.createGain();
// // Connect the source to the gain node.
//   source1.connect(gainNode);
// // Connect the gain node to the destination.
//   gainNode.connect(context.destination);
//   source1.loop = true;
// }

// function play() {
// 	if (!context.createGain)
// 	  context.createGain = context.createGainNode;
// 	gainNode = context.createGain();
// 	source1 = context.createBufferSource();
// 	source1.buffer = BUFFERS[0];
  
// 	// Connect source to a gain node
// 	source1.connect(gainNode);
// 	// Connect gain node to destination
// 	gainNode.connect(context.destination);
// 	// Start playback in a loop
// 	source1.loop = true;
// 	if (!source1.start) source1.start = source1.noteOn;
// 	source1.start(0);
// 	source1 = source1;

// 	gainNode.gain.value = currentVolume;
// };

// var video;
// var container = document.getElementById('container');
// var firstPlay = true;

// if(!Utils.isAndroid) {
//     var options = {
//         id: 'video',
//         //audio: './medias/sound.mp3',
//         bufferAudio: false,
//         autoplay: true,
//         xhr: false,
//         loop: true
//     };

//     video = new CanvasVideo({
//         src: './assets/video/1.mp4',
//         mime: 'video/mp4'
//     }, options);
//     container.appendChild(video.element);

//     // document.addEventListener('touchend', function(e){
//     //     document.getElementById('playButton').style.display = 'none';
//     // });

// } else {
//     Utils.displayInfoBar();
//     video = document.createElement('video');
//     var s = document.createElement('source');
//     s.src = './assets/video/1.mp4';
//     s.mime = 'video/mp4';
//     video.appendChild(s);
//     video.loop = true;
//     video.id = 'video';
//     container.appendChild(video);

//     //document.getElementById('playButton').style.display = 'block';

//     document.addEventListener('touchend', function(e){

//         //document.getElementById('playButton').style.display = 'none';
//         video.play();
//     });
// }

// if (!Utils.isMobile) {
//     // center on desktop
//     document.getElementById('container').className = 'center';
// } else {
//     // fullscreen on mobile
//     window.addEventListener('resize', resize);
//     resize();
// }

// function playVideo(e) {
//     document.removeEventListener('touchend', playVideo);
//     //document.getElementById('playButton').style.display = 'block';
//     video.play();
// }

// video.addEventListener('timeupdate', onTimeUpdate);
// video.addEventListener('canplaythrough', onCanPlayThrough);
// //video.addEventListener('playing', onPlaying);
// // video.addEventListener('play', onPlaying);
// // video.addEventListener('waiting', onWaiting);

// function onTimeUpdate(e) {
// 	video.play()
//     document.getElementById('interface').innerHTML = Utils.timeCode(video.currentTime);
// }

// function onCanPlayThrough(e) {
//     if(video.needTouchDevice) {
//         //document.getElementById('playButton').style.display = 'block';
//         document.addEventListener('touchend', playVideo);
//     }
//     showLoader(false);
// }

// function onPlaying(e) {
//     //document.getElementById('playButton').style.display = 'none';
//     showLoader(false);
// }

// function onWaiting(e) {
//     showLoader(true);
// }

// function resize(e) {
//     var size = Utils.cover(579, 326);
//     video.width = size.width;
//     video.height = size.height;
// }

// function showLoader(boo) {
//     if(boo) document.getElementById('loader').style.display = 'block';
//     else document.getElementById('loader').style.display = 'none';
// }

$(window).on('load', function() {
    $('.preloader').delay(1000).fadeOut(300, function() {
        var scroll_up = 0;

        $(window).on('scrollUp', function(e) {
    
            scroll_up += 1;
    
            if (scroll_up > 1) {
                location.assign('/map');
            }
    
        });
    });

    $('.preloader svg').delay(1000).fadeOut(300);
});

window.addEventListener('load', function() {
	//init();
	var toggles, current_toggle, previous_toggle;
	var video = document.querySelector('.test-default-tv_iframe'),
		testAudio = document.querySelector('.test-noize-audio'),
		videoIsPlay = false,
		currentVolume = 0.5,
		prevVolume = currentVolume,
		currentIdGlobal = 0;
	video.volume = 0;
	testStart = false;
	testAudio.volume = 0;

	var videos = [
		'noise.mp4',
		'1.mp4',
		'2.mp4',
		'3.mp4',
		'4.mp4',
		'5.mp4',
		'6.mp4',
		'7.mp4',
		'8.mp4',
		'9.mp4',
		'10.mp4',
		'11.mp4',
		'12.mp4',
	];

	var ANSWER = [];

	function Test() {
		this.currentId;
		this.qestionWrap;
		this.qestionNextBtn;
		this.qestionForm;
		this.init();
		this.answers;
		this.refresh;
		this.iframe = document.querySelector('.test-default-tv_iframe');
	}

	Test.prototype.init = function() {
		var th = this;
		this.qestionWrap = document.querySelector('.questions-wrap');
		this.qestionForm = document.querySelector('.questions');
		this.qestionNextBtn = document.querySelector('.js-questions-next');
		this.refresh = document.querySelector('.js-questions-refresh');
		this.qestionForm.addEventListener('submit', th.setAnswer.bind(th));
		this.refresh.addEventListener('click', th.refreshAll.bind(th));
		this.view();
	};

	Test.prototype.view = function() {
		var th = this;

		th.answers = localStorage.getItem('aids-test');

		if (this.answers) {
			var _a = JSON.parse(this.answers);
			this.currentId = _a[_a.length - 1].qID + 1;
			currentIdGlobal = this.currentId;
			ANSWER = _a;

			if(this.currentId >= QUESTIONS.length) {
				this.totals();
			} else {
				this.viewQuestion();
			}
		} else {
			this.currentId = 0;
			this.viewQuestion();
			ANSWER = [];
		}
	};

	Test.prototype.refreshAll = function(e) {
		localStorage.removeItem('aids-test');
		this.view();
	};

	Test.prototype.setAnswer = function(e) {
		e.preventDefault();

		var question = this.qestionForm.querySelector('.question');

		if (question) {
			var inputs = question.querySelectorAll('input'),
				checkedInp = [],
				currentQuestion = this.getCurrentQuestion();

			for (var i = 0; i < inputs.length; i++) {
				if (inputs[i].checked) {
					checkedInp.push(inputs[i].value);
				}
			}

			if (checkedInp.length) {
				ANSWER.push({qID: currentQuestion.id, answer: checkedInp});
				var answers = JSON.stringify(ANSWER);
				localStorage.setItem('aids-test', answers);			
				this.nextQuestion();
			}
		}
	};

	Test.prototype.nextQuestion = function() {
		if (this.currentId < QUESTIONS.length - 1) {
			this.currentId += 1;
			this.viewQuestion();
		} else {
			this.totals();
		}
	};

	Test.prototype.totals = function() {
		var flagZero = this.calculate('0'),
			flagM = this.calculate('M'),
			flagC = this.calculate('C'),
			flagB = this.calculate('B'),
			total;

		if ((flagZero > 0) && (flagM == 0) && (flagC == 0) && (flagB == 0)) {
			total = 'нет риска, тестироваться не нужно';
			video.src = 'assets/video/no-risk.mp4';
		}

		if ((flagZero > 0) && (flagM > 0) && (flagC == 0) && (flagB == 0)) {
			total = 'минимальный риск';
			video.src = 'assets/video/minimal-risk.mp4';
		}

		if ((flagC > 0) && (flagB == 0)) {
			total = 'средняя степень риска ';
			video.src = 'assets/video/middle-risk.mp4';
		}

		if (flagB > 0) {
			total = 'высокий риск';
			video.src = 'assets/video/high-risk.mp4';
		}

		this.qestionWrap.innerHTML = '<p>' + total + '</p>';
		this.sendMail();
	};

	Test.prototype.sendMail = function() {
		var mail = '';

		for (var z = 0; z < ANSWER.length; z++) {
			var id = ANSWER[z]['qID'],
				answer = ANSWER[z]['answer'];

			QUESTIONS.forEach(function(q) {
				if (q.id == id) {
					mail += q.label + ': ' + answer + '\n';
				}
			})
		}

		$.ajax({
			type: "POST",
			url: './assets/js/mail.php',
			data: {
				body: mail
			},
			success: function(d) {

			}
		});
	}

	Test.prototype.calculate = function(val) {
		var z = 0;

		for (var i = 0; i < ANSWER.length; i++) {
			for (var x = 0; x < ANSWER[i].answer.length; x++) {

				if (ANSWER[i].answer[x] === val) {
					z++;
				}
			}
		}

		return z;
	};

	Test.prototype.getCurrentQuestion = function() {
		var q,
			th = this;

		QUESTIONS.forEach(function(i) {
			if (i.id == th.currentId) {
				q = i;
			}
		});

		return q;
	};

	Test.prototype.viewQuestion = function() {
		var th = this,
			question = document.createElement('div'),
			questionTitle = document.createElement('h5'),
			answerList = document.createElement('div'),
			currentQuestion = th.getCurrentQuestion();

		if (currentQuestion) {
			question.className = 'question';
			answerList.className = 'answer-list';
			questionTitle.className = 'question-title';
			questionTitle.innerHTML = currentQuestion.label;
			question.appendChild(questionTitle);

			if (currentQuestion.multi) {
				for (var z = 0; z < currentQuestion.vars.length; z++) {
					var label = document.createElement('label'),
						className = '',
						radio;

					if (currentQuestion.vars[z].uncheckAll) {
						className = 'js-uncheckAll';
					}

					radio = '<input type="checkbox" name="' + currentQuestion.label + '" value="' + currentQuestion.vars[z].v + '" class="' + className + '" /><span></span>';
					label.innerHTML = radio;
					label.innerHTML += currentQuestion.vars[z].k;

					if (currentQuestion.vars[z].hint) {
						label.innerHTML += '<div class="question-hint"><p>' + currentQuestion.vars[z].hint + '</p></div>';
					}
		
					answerList.appendChild(label);
				}
			} else {
				for (var z = 0; z < currentQuestion.vars.length; z++) {
					var label = document.createElement('label'),
						radio = '<input type="radio" name="' + currentQuestion.label + '" value="' + currentQuestion.vars[z].v + '" /><span></span>';

					label.innerHTML = radio;
					label.innerHTML += currentQuestion.vars[z].k;

					if (currentQuestion.vars[z].hint) {
						label.innerHTML += '<div class="question-hint"><p>' + currentQuestion.vars[z].hint + '</p></div>';
					}
		
					answerList.appendChild(label);
				}
			}

			question.appendChild(answerList);

			th.qestionWrap.classList.remove('fade-in');
			th.qestionWrap.classList.add('fade-out');

			$('.test__preview-box-btn').on('click', initVideo);
		
			setTimeout(function() {
				th.qestionWrap.innerHTML = '';
				th.qestionWrap.appendChild(question);
				th.qestionWrap.classList.remove('fade-out');
				th.qestionWrap.classList.add('fade-in');

				toggles = document.querySelectorAll('.test-content_tv_toggler-item');
				current_toggle = toggles[th.currentId];
				current_toggle.classList.add('current-toggle');

				if (previous_toggle != undefined) {
					previous_toggle.classList.remove('current-toggle');
				}

				for (var n = 0; n < th.currentId; n++) {
					toggles[n].classList.add('previous-toggle');
				}

				previous_toggle = current_toggle;
				$('body, html').trigger('click');
			}, 500);

			video.onloadeddata = function() {
				if (testStart) {
					//gainNode.gain.value = 0;
					testAudio.volume = 0;
				}
			};

			ss();

			function initVideo() {
				ss();
				$('.test__preview-box-btn').off('click', initVideo);
			}

			function ss() {
				document.querySelector('.test-noize-audio').muted = false;
				document.querySelector('.test-noize-audio').volume = currentVolume;
				video.volume = currentVolume;

				// if (gainNode) {
				// 	gainNode.gain.value = currentVolume;
				// }

				var promiseAudio = document.querySelector('.test-noize-audio').play();
				if (promiseAudio !== undefined) {
					promiseAudio.catch(error => {
						// Auto-play was prevented
						// Show a UI element to let the user manually start playback
					}).then(() => {
						// Auto-play started
						console.log('d')
					});
				}

				if (testStart) {
					video.src = 'assets/video/' + videos[th.currentId];
				
				} else {
					video.src = 'assets/video/' + videos[0];
				}

				var promise = video.play();
				if (promise !== undefined) {
					promise.catch(error => {
						// Auto-play was prevented
						// Show a UI element to let the user manually start playback
					}).then(() => {
						// Auto-play started
						
					});
				}
			}
		}
	};

	Test.prototype.setId = function(id) {
		this.currentId = id;
	};
	
	$('body').on('click', '.js-uncheckAll', function(e) {
		var th = $(this),
			parent = th.closest('.answer-list');
		$(parent).find('input[type="checkbox"]').not(th).prop('checked', false);
	});

	$('body').on('click', 'input[type="checkbox"]', function(e) {
		var th = $(this),
			parent;

		if (!th.hasClass('js-uncheckAll')) {
			parent = th.closest('.answer-list');
			var c = $(parent).find('.js-uncheckAll');

			if (c) {
				c.prop('checked', false);
			}
		}
	});

	$('.test__preview-box .test__preview-box-btn').on('click', function() {
		videoIsPlay = false;

		setTimeout(function() {
			$('.test__preview-box .test__preview-box-btn').closest('.test-section').removeClass('test-video-fix');
			videos.splice(0, 1);
			video.src = 'assets/video/' + videos[currentIdGlobal];
			testStart = true;
			//if (gainNode) gainNode.gain.value = 0;
			testAudio.volume = 0;
			videoIsPlay = true;
		}, 500);

		$('.test__preview-box').animate({
			opacity: 0
		}, 500, function() {
			$(this).css('display', 'none');
			$('.test__test-btn').removeClass('none');
		});
	});

	$('.js-questions-refresh').on('click', function() {
		$('.test-content_tv_toggler-item').each(function() {
			$(this).removeClass('current-toggle previous-toggle');
		});
	});

	// var scroll_array = [current_position], current_position;

	// // $(window).on('scrollDown', function(e) {

	// // 		scroll_array.push(current_position);

	// // 		if (scroll_array.length > 1) {
	// // 				location.assign('/blog');
	// // 		}

	// // });

	// // $(window).on('scrollUp', function() {

	// // 		scroll_array.pop(current_position);

	// // 		if (scroll_array.length == 0) {
	// // 				location.assign('/consultants');
	// // 		}

	// // });

	new Test();

	var $document = $(document);
    var selector = '[data-rangeslider]';
    var $element = $(selector);

    // Basic rangeslider initialization
    $element.rangeslider({

        // Deactivate the feature detection
        polyfill: false,

        // Callback function
        onInit: function() {
            //valueOutput(this.$element[0]);
        },

        // Callback function
        onSlide: function(position, val) {
			video.volume = val;
			currentVolume = val;

			if (!videoIsPlay) {
				//testAudio.volume = val;
				//gainNode.gain.value = val;
				//console.log( gainNode )
				//if (gainNode) gainNode.gain.value = val;
				testAudio.volume = val;
			}

			if (val < 0.5) {
				$('.sound').addClass('half');
			} else {
				$('.sound').removeClass('half');
			}

			if (val < 0.25) {
				$('.sound').addClass('fourth');
			} else {
				$('.sound').removeClass('fourth');
			}

			if (val == 0) {
				// console.log( val )
				$('.sound').addClass('sound-mute');
			} else {
				$('.sound').removeClass('sound-mute');
			}   
        }
    });

    $element.val(0.5).change();

    $('.sound').click(function() {
	  if (!$(this).hasClass('sound-mute')) {
		testAudio.volume = 0;
		//gainNode.gain.value = 0;
	  	video.volume = 0;
	  	prevVolume = currentVolume;
	  	currentVolume = 0;
		$element.val(0).change();
		$(this).addClass('sound-mute');
	  } else {
	  	$(this).removeClass('sound-mute');
	  	currentVolume = prevVolume;

	  	if (!videoIsPlay) {
			  //testAudio.frequency.value = currentVolume;
			  //gainNode.gain.value = currentVolume;
			  testAudio.volume = currentVolume;
	  	}
	  	
	  	video.volume = currentVolume;
		  $element.val(currentVolume).change();
	  }
	});

	$('.preloader').delay(1000).fadeOut(300, function() {
        var scroll_up = 0;

        $(window).on('scrollUp', function(e) {
    
            scroll_up += 1;
    
            if (scroll_up > 1) {
                location.assign('/map');
            }
    
        });
    });

	$('.preloader svg').delay(1000).fadeOut(300);
	
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

	if (prev_page.length) {
		$('.navigate-box__left').on('click', function() {
			location.assign('/' + prev_page);
		});
	}

	if (!prev_page.length) {
		$('.navigate-box__left').css('display', 'none');
	}

	if (next_page.length) {
		$('.navigate-box__right').on('click', function() {
			location.assign('/' + next_page);
		});
	}

	if (!next_page.length) {
		$('.navigate-box__right').css('display', 'none');
	}
});
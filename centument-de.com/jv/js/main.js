$(function () {
    revealOnScroll();
    $('.validate').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            FirstName: {
                required: true,
                username: true
            },
            LastName: {
                required: true,
                username: true
            },
            password: {
                required: true,
                maxlength: 12
            },
            fullname:{
                required: true,
                username: true
            },
            affid:{
                required: true
            },
            success:function(){window.onbeforeunload = null;}
        }
    });
    $("#pop-form").on("submit",function(event){
        if($("#pop-form").valid()) window.onbeforeunload = null;
        else event.preventDefault();
    })
    
//           **** PopUp Hide/Show *****
    $(window).mousemove(function (event) {
        if (event.pageY - $(window).scrollTop() <= "15") {
            $(".form-main-header").show();
            $("#pop-cont").fadeIn();
        }
    });
    $("#registerFree").click(function () {
        $(".form-main-header").hide();
        $("#pop-cont").fadeIn();
    });
    $("#popup-close").click(function () {
        $("#pop-cont").fadeOut();
    });

//Scroll to Div by ID
$('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 2000, 'swing', function () {
        window.location.hash = target;
    });

    $('.top').on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 2000, "easeInOutExpo");
    });
});
$(".fa.fa-chevron-down").on("click", function () {
    $(this).toggleClass("down");
});

$(window).scroll(function () {
    scrollMe();
});
$(window).scrollstart(function () {
    scrollMe();
});

$(".getStarted , .go-up").on("click", function () {
    $("body").animate({
        "scrollTop": $("#form-header , form").offset().top - 40
    });
}); //CLICK TO REGISTER
var people = {
    "feed": [
        {
            "name": "Julian Robinson @JulianRobinson",
            "line": "@CentumentLTD said it’d be easy but I wasn’t expecting this. $25K ahead my first week. No idea what’s happening but keep it going!",
            "img": "people/portraits/m/14.jpg",
            "likes": 22,
            "shares": 8
            }, {
            "name": "Mathew Ingraham @mathewing",
            "line": "Tuscany here we come! Booked the air and villa for June. Thank you @CentumentLTD. The $$$ is amazing! Got my eye on Macho Picchu next.",
            "img": "people/portraits/m/20.jpg",
            "likes": 17,
            "shares": 11
            },
        {
            "name": "Tom Reynolds @thomasrAZ",
            "line": "@CentumentLTD let me know if I can put a word for you. I’ve made $78,500 this month and it’s only the 20th. As great as you promised.",
            "img": "people/portraits/m/25.jpg",
            "likes": 12,
            "shares": 6
            },
        {
            "name": "Melissa Chow @MelChoCA",
            "line": "Last day on the job is Tues. “Retire” at 32 is awesome! @CentumentLTD is making more $ in a day than I did in a month! Why have a job?",
            "img": "people/portraits/f/20.jpg",
            "likes": 13,
            "shares": 8
            }, {
            "name": "Jackson Miles @JacksonMiles ",
            "line": "Luv to wake like this! Up $1,287 over morning coffee! Going to be some champagne tonight! Luv me some @CentumentLTD! Keep it up!",
            "img": "people/portraits/m/17.jpg",
            "likes": 25,
            "shares": 16
            }, {
            "name": "Glenn Hunt @GlennHuntMA",
            "line": "@CentumentLTD is really coming through! $3,743 profits today after $21,388 last week! Masarati GranTurismo is on the way! Pinching myself!",
            "img": "people/portraits/m/23.jpg",
            "likes": 15,
            "shares": 7
            }, {
            "name": "Lorraine Sanders",
            "line": "Hi to everyone from Detroit! I like to trade on binaryes and I find this system very useful.",
            "img": "people/portraits/f/14.jpg",
            "likes": 14,
            "shares": 5
            }
        ]
};


var count = 1;
setInterval(function () {
var h = 1;
for (var i = count; i < count + 3; i++) {
    if (typeof people.feed[count + 5] == "undefined") count = -3;
    $(".twitter-person").addClass("rotate");
    for (var j = 3; j < 6; j++) {
        var obj = ".twitter-person:nth-child(" + (j - 2) + ") ";
        $(obj + ".person-img").attr("src", "images/" + people.feed[count + j].img).delay(Math.floor(Math.random() * (600 - 200 + 1)) + 200).fadeOut(100).fadeIn(100);
        $(obj + ".person-title").text(people.feed[count + j].name);
        $(obj + ".person-text").text(people.feed[count + j].line).delay(Math.floor(Math.random() * (600 - 200 + 1)) + 200).fadeOut(100).fadeIn(100);
        $(obj + ".shares").text(people.feed[count + j].shares);
        $(obj + ".likes").text(people.feed[count + j].likes);
        h++;
    }
}
count += 3;
setTimeout(function () {
    $(".twitter-person").removeClass("rotate");
}, 2000);
}, 8000);
});




//                 , {
//            "name": "richard wallace",
//            "line": "Hey guys. Good luck to everyone!!! I met Jason myself as well on the last seminar. Decent guy and profitable ssystem!  Fresh breath in the world of scams!",
//            "img": "people/portraits/m/19.jpg"
//            }
//                 , {
//            "name": "lisa bishop",
//            "line": "Wow, a lot of good results!!!! Nice! I am in as well for a 7 day doubling challenge!",
//            "img": "people/portraits/f/21.jpg"
//            }









var $window = $(window),
    win_height_padded = $window.height() * 1.1;

$window.on('scroll', revealOnScroll);

function revealOnScroll() {

    var scrolled = $window.scrollTop();

    $(".revealFromRight:not(.animated) , .revealFromLeft:not(.animated) , .scaleOnScroll:not(.animated) , .revealOnScroll:not(.animated)").each(function () {

        var $this = $(this),
            offsetTop = $this.offset().top;

        if (scrolled + win_height_padded > offsetTop) {
            $this.addClass('animated');
        }
    });
}


function scrollMe() {
    if ($(document).scrollTop() >= 50) {
        $('.navbar-fixed-top').addClass('scrolled');
    } else {
        $('.navbar-fixed-top').removeClass('scrolled');
    }
}


var peopleTes = {
    faces: [
        {
            fitstDay: "$380",
            firstWeek: "$721",
            firstMonth: "$2,241",
            firstTMonth: "$9,562",
            img: "images/big/1.png",
            text: " “Gerald quietly slipped me a copy of his program, and I have to say, I’ve made more profit for my clients using it over the last two months than I would have made in a good year. And the ‘dirty little secret’ is, my 6 year old could have done it for me!” "

        },
        {
            fitstDay: "$525",
            firstWeek: "$834",
            firstMonth: "$1,342",
            firstTMonth: "$8,400",
            img: "images/big/2.png",
            text: " “Is the Centument LTD Trading software a ‘game-changer’? No, this is a frigging LIFE CHANGER! Anyone, and I do mean ANYONE, will make a fortune with this program. How hard is it to use? Listen, it’s easier to make money with this than it is to check your email.” "
        },
        {
            fitstDay: "$295",
            firstWeek: "$377",
            firstMonth: "$1,288",
            firstTMonth: "$10,432",
            img: "images/big/3.png",
            text: " “My clients think I’m amazing and my company is scared to death they’ll lose me. No way am I going to tell anyone my new “trading skills” are really just Centument LTD’s software. This new program is making fortunes for all of us!”"
        },
        {
            fitstDay: "$380,50",
            firstWeek: "$2,852",
            firstMonth: "$7,452",
            firstTMonth: "$19,332",
            img: "images/big/4.png",
            text: "“One word for this program – UNBELIEVABLE! Wharton, Harvard, MIT? Forget about those expensive schools! Why spend the money and the time when Gerald’s software is smarter than all of them!?! Three more words – GET THIS NOW!”"
        },
        {
            fitstDay: "$520",
            firstWeek: "$1,257",
            firstMonth: "$3,476",
            firstTMonth: "$15,376",
            img: "images/big/5.png",
            text: "“Other traders around the office have been wondering and whispering, ‘What the hell is he doing?’ Yeah, you get attention when you’re making millions of dollars for your clients overnight. The real secret is that all I did was click the mouse a couple of times and the Centument LTD Assets Trading software did the rest.” "
        },
        {
            fitstDay: "$436",
            firstWeek: "$1,572",
            firstMonth: "$2,765",
            firstTMonth: "$21,632",
            img: "images/big/6.png",
            text: "“I’ve been around The Street for a long time and I have to say, there’s NEVER been anything like the Centument LTD Assets Trading program. Without a doubt, Gerald’s program is really going to shake things up around here. Heck, even my mother-in-law could make a fortune with the software, and she doesn’t speak English!”"
        },
    ]
}


$(".faces").hover(function () {
    index = $(this).closest(".faces").index(".faces");
    $(".big-face-speach").text(peopleTes.faces[index].text);
    $(".First-Day").text(peopleTes.faces[index].fitstDay);
    $(".First-Week").text(peopleTes.faces[index].firstWeek);
    $(".First-Month").text(peopleTes.faces[index].firstMonth);
    $(".3-Months").text(peopleTes.faces[index].firstTMonth);
    $(".big-face").attr("src", peopleTes.faces[index].img);
    $("body > div.container-fluid.face-dis > div > div").fadeOut(100).fadeIn(200);
}, function () {
    return false;
});






autoPlayYouTubeModal();


//FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-theVideo"),
            videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
        $('.modal').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
}

//Random Total profits and daily profits

var number1 = 42071.28;
var number2 = 21271519.92;
if (typeof $.cookie("number1") != "undefined") number1 = parseInt($.cookie("number1"), 10) + Math.random();
if (typeof $.cookie("number2") != "undefined") number2 = parseInt($.cookie("number2"), 10) + Math.random();
var randomnumber = 0;
var minimum = 0;
var maximum = 800;
var i = 0;
$("#today").text(formatNumber(number1, "$"));
$("#total").text(formatNumber(number2, "$"));
setInterval(function () {
    $.each($(".timer"), function () {
        randomnumber = Math.random() * (maximum - minimum + 1) + minimum;
        if (i % 2 == 0) {
            number1 += randomnumber;
            $(this).text(formatNumber(number1, "$"));
            $.cookie("number1", number1);
        } else {
            number2 += randomnumber;
            $(this).text(formatNumber(number2, "$"));
            $.cookie("number2", number2);
        }
        i++;
    });

}, 3000);

function formatNumber(n, currency) {
    return currency + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}




$(".fa.fa-chevron-down").on("click", function () {
    var aBody = $(this).closest(".QA").find(".A-body");
    $(aBody).slideToggle({
        duration: 300,
        easing: "easeInOutSine"
    });
});
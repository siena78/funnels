function go_to_members(){
		window.top.location = "http://de-centument.com/deaa/signup/";
	}
$(function () {
    revealOnScroll();
   	
//           **** PopUp Hide/Show *****
   

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
            "line": "@CentumentLTD hat gesagt, dass es einfach ist, das habe ich aber nicht erwartet. $ 25K schon in meiner ersten Woche vorne. Keine Ahnung, was passiert, aber macht so weiter!",
            "img": "people/portraits/m/14.jpg",
            "likes": 22,
            "shares": 8
            }, {
            "name": "Mathew Ingraham @mathewing",
            "line": "Toskana, wir kommen! Flug und Villa für Juni ist gebucht. Danke, @CentumentLTD. Die $$$ sind großartig! Als nächstes steht Machu Picchu auf dem Programm.",
            "img": "people/portraits/m/20.jpg",
            "likes": 17,
            "shares": 11
            },
        {
            "name": "Tom Reynolds @thomasrAZ",
            "line": "@CentumentLTD, lasst mich wissen, wenn ich ein gutes Wort für Euch einlegen kann. Ich habe diesen Monat $ 78.500 verdient und es ist erst der 20. So großartig, wie von Euch versprochen.",
            "img": "people/portraits/m/25.jpg",
            "likes": 12,
            "shares": 6
            },
        {
            "name": "Melissa Chow @MelChoCA",
            "line": "Mein letzter Arbeitstag ist der Dienstag. Mit 32 in den „Ruhestand” zu gehen ist großartig! @CentumentLTD verdient mehr $ am Tag für mich als ich in einem Monat bekommen habe! Warum also arbeiten gehen?",
            "img": "people/portraits/f/20.jpg",
            "likes": 13,
            "shares": 8
            }, {
            "name": "Jackson Miles @JacksonMiles ",
            "line": "Liebe es, so aufzuwachen! $ 1.287 mehr beim Morgenkaffee! Wird heute Abend wohl Champagner werden! Liebe Euch, @CentumentLTD! Macht weiter so!",
            "img": "people/portraits/m/17.jpg",
            "likes": 25,
            "shares": 16
            }, {
            "name": "Glenn Hunt @GlennHuntMA",
            "line": "@CentumentLTD macht es wirklich wahr! $ 3.743 an Gewinnen heute nach $ 21.388 letzte Woche! Maserati GranTurismo ist schon unterwegs! Muss mich selbst zwicken!",
            "img": "people/portraits/m/23.jpg",
            "likes": 15,
            "shares": 7
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
            text: " “Gerald hat mir eine Kopie seines Programmes zukommen lassen und ich muss wirklich sagen, dass ich damit in den letzten zwei Monaten mehr Profit für meine Kunden herausgeholt habe, als ich sonst im ganzen Jahr mache. Und was man wirklich keinem weitererzählen darf, ist die Tatsache, dass sogar mein sechjähriger Sohn dazu in der Lage wäre.” "

        },
        {
            fitstDay: "$525",
            firstWeek: "$834",
            firstMonth: "$1,342",
            firstTMonth: "$8,400",
            img: "images/big/2.png",
            text: " “Verändert die Trading-Software von Centument LTD das Spiel? Nein, es VERÄNDERT DAS GANZE LEBEN! Jeder, und ich meine wirklich JEDER, wird mit diesem Programm ein Vermögen verdienen. Wie schwierig ist es, es zu verwenden? Hören Sie, es ist einfacher, damit Geld zu verdienen als Ihre E-Mails zu lesen.” "
        },
        {
            fitstDay: "$295",
            firstWeek: "$377",
            firstMonth: "$1,288",
            firstTMonth: "$10,432",
            img: "images/big/3.png",
            text: " “Meine Kunden halten mich für großartig und meine Firma befürchtet, dass sie mich verlieren könnte. Auf gar keinen Fall werde ich irgendjemand von meinen Handelsqualifikationen, die ich nur der Software von Centument LTD zu verdanken habe, erzählen. Dieses neue Programm kann uns allen ein Vermögen bescheren.”"
        },
        {
            fitstDay: "$380,50",
            firstWeek: "$2,852",
            firstMonth: "$7,452",
            firstTMonth: "$19,332",
            img: "images/big/4.png",
            text: "“Dieses Programm kann man mit einem einzigen Wort beschreiben: UNGLAUBLICH! Wharton, Harvard, MIT? Vergessen Sie all die teuren Schulen! Warum schleudern Sie Geld und Zeit zum Fenster heraus, wenn Gerald’s Software intelligenter als alles andere ist!?! Nur noch ein Satz zum Schluss: BESORGEN SIE SICH DAS PROGRAMM SOFORT!”"
        },
        {
            fitstDay: "$520",
            firstWeek: "$1,257",
            firstMonth: "$3,476",
            firstTMonth: "$15,376",
            img: "images/big/5.png",
            text: "“Andere Händler im Büro haben sich schon gewundert und angefangen zu tuscheln: „Was zum Teufel macht der da?” Ja, man erhält schon eine ganze Menge Aufmerksamkeit, wenn man über Nacht Millionen von Dollar für seine Kunden macht. Das wahre Geheimnis ist, dass ich nur ein paar Mausklicks machen musste und die Centument LTD Assets Trading Software hat den Rest erledigt.” "
        },
        {
            fitstDay: "$436",
            firstWeek: "$1,572",
            firstMonth: "$2,765",
            firstTMonth: "$21,632",
            img: "images/big/6.png",
            text: "“Ich bin ja schon wirklich lange im Geschäft und ich muss ehrlich sagen, dass es noch nie ein Handelsprogramm wie das Centument LTD Assets Trading Programm gegeben hat. Dieses Programm wird hier noch einiges auf den Kopf stellen. Man darf es ja gar nicht laut sagen, aber selbst meine Schwiegermutter, die kein Wort Englisch spricht, könnte mit der Software ein Vermögen machen.”"
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
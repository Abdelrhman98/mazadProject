// start of border-bottom input
$('div.border').append("<div class='bor'></div>");
$('div.menu-header').append("<div class='ponn'></div>");
if($('div.add-icon').children('input').data('show') === true){
    $('div.add-icon').append('<i class="fa fa-eye show"></i>');}
$('i.show').on('click', function(){
    if($(this).hasClass('fa-eye')){
        $(this).removeClass('fa-eye').addClass('fa-eye-slash').siblings('input').attr('type','text');
    }else{
        $(this).removeClass('fa-eye-slash').addClass('fa-eye').siblings('input').attr('type','password');
    }});
$("input").on('focus', function(){
   "use strict";
    $(this).parent().children('div.bor').animate({width:'100%',left:'0px'});
}).on('blur',function(){
    $(this).parent().children('div.bor').animate({width:'0%',left:'50%'});});
var chatcher;
$('input').on('focus',function(){
    "use strict";
    chatcher = $(this).attr('placeholder');
    $(this).attr('placeholder','');
}).on('blur',function(){
    $(this).attr('placeholder',chatcher);});
// aside auto hide
var asideHeight = window.innerHeight - parseInt($('.nav-bar').css("height"));
$('.left-side').css({height:asideHeight});
$(window).on("resize", function(){
    "use strict";
    asideHeight = window.innerHeight - parseInt($('.nav-bar').css("height"));
    $('.left-side').css({height:asideHeight});});
$('div.img').on("click", function(){
    "use strict";
    if($("div.menu").css('display') === 'none')
        $("div.menu").fadeIn();
    else
        $("div.menu").fadeOut();});
$('div.menu li').on("click", function(){
    "use strict";
    $(this).addClass('active').siblings().removeClass('active');
    var color = $(this).data('color');
    $('div.menu-header div.ponn').css({"background-color": color});});
$('div.controls').append("<div class='after'></div>");
$('div.controls span').on("click", function(){
    "use strict";
    $(this).addClass("active").siblings().removeClass('active');
    if($(this).hasClass('first')){$("div.controls div.after").css({"right":"50%","width":"50%"});$("div.slide div.inner").animate({"left": "0%"});}
    else{$("div.controls div.after").css({"right":"6%","width":"35%"});$("div.slide div.inner").animate({"left": "-100%"});}    
});
$("div.following div.cir.f1").append("<div class='before'><span>Following</span></div><div class='after'>Following</div>");
$("div.following div.cir.f2").append("<div class='before'><span>Followers</span></div><div class='after'>Followers</div>");
//var_dump($("div.following div.cir").children("div.after").css("top");
$("div.following div.cir").on("mouseenter", function(){
    "use strict";
    if($(this).data('open') === false){
        $(this).children("div.after").animate({"top":"-50%"});
        $(this).children("div.before").animate({"bottom":"-50%"});
        $(this).siblings("span.outter").animate({"opacity":"1"},1000);
        $(this).data('open', true);
    }
    else{
        $(this).children("div.after").animate({"top":"0%"});
        $(this).children("div.before").animate({"bottom":"0px"});
        $(this).siblings("span.outter").animate({"opacity":"0"},1000);
        $(this).data('open', false);
    }
});

var numOfStars = $("div.stars").data("rate")+1;
for(var i = 0; i< numOfStars ; i++){
    $("div.stars").children("i." + i).removeClass("far").addClass("fas");
}
$("aside.left-side ul li").on("click", function(){
    "use strict";
    $("section.content").children().css(({"display":"none", "opacity":"0"}));
    $("section."+$(this).data("dir")).css({"display":"block"}).animate({"opacity":"1"});
    $(this).addClass("active").siblings().removeClass("active");
});

$("i.ll").on("click", function(){
    "use strict";
    if($("div.info div.drop-down").css("opacity") == 0){
        $("div.info div.drop-down").css({"opacity":"1"});
        $(this).addClass("rotate-180");
    }
    else{
        $("div.info div.drop-down").css({"opacity":"0"});
        $(this).removeClass("rotate-180");
    }
    
});
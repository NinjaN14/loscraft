
function drag(){document.getElementById("nav-drag").offsetWidth}$("#close-navbar").click(function(){var e=document.getElementById("nav-drag");e.style.width="0",e.style.visibility="hidden",document.getElementById("box-2").style.width="100%",trage.style.visibility="visible"}),$("#trage").click(function(){var e=document.getElementById("nav-drag"),t=document.getElementById("trage");e.style.visibility="visible",e.style.display="inline-block",e.style.width="320px",t.style.visibility="hidden"}),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>100?$(".mergisus").fadeIn():$(".mergisus").fadeOut()}),$(".mergisus").click(function(){return $("html, body").animate({scrollTop:0},600),!1})});
window.addEventListener("load", function(){const loader = document.querySelector(".loadingcontainer");loader.className += " hidden";});

    $("#copiazaIP").click(function() {
      swal({
        title: "Você copiou o IP!",
        text: "Venha já se divertir",
        icon: "success",
        button: "Fechar",
		timer: 1500,
      });
      document.getElementById("ipServer").select(), document.execCommand("copy")
    });

window.onscroll = function() {
	//myFunction();
};

$(window).resize(function() {
  recodedResponsiveHeader();
  checkPhone();
  //responsiveDesign();
  //responsiveUpdates();
});

window.onload = function() {
  recodedResponsiveHeader();
  checkPhone();
  //responsiveDesign();
  //responsiveUpdates();
};

var navbar = document.getElementById("navbar");
//var sticky = navbar.offsetTop;
var w = window.innerWidth;

function myFunction() {
  try {
    if (window.pageYOffset >= sticky && w >= 960) {
      navbar.classList.add("sticky")
      navbar.style.background = "rgba(255,255,255,0.05)";
      navbar.style.margin = "0";
      navbar.style.padding = "20px";
  	  navbar.style.borderBottom = "3px solid rgba(0,0,0,.2)";
    } else {
      navbar.classList.remove("sticky");
      navbar.style.background = "none";
      navbar.style.margin = "20px 0px";
      navbar.style.padding = "0px";
  	  navbar.style.borderBottom = "none";
    }
  } catch (e) {
    console.log(e.message);
  }
}

function checkWidth() {
  console.log(window.innerWidth);
}

function checkPhone() {
  try {
  	var openNavigatie = document.getElementById("open-nav");
  	var butonDeschidere = document.getElementById("button-open");
  	var hideElemente = document.getElementById("testare-hide");
  	var mobileNav = document.getElementById("mobile-nav");
  	var width = window.innerWidth;
  	var navbar = document.getElementById("navbar");

  	if (width <= 960) {
  		openNavigatie.style.display = "block";
  		butonDeschidere.style.display = "block !important";
  		hideElemente.style.display = "none";
  		navbar.classList.remove("sticky");
  		navbar.style.background = "none";
  		navbar.style.margin = "20px 0px";
  		navbar.style.padding = "0px";
  	} else {
  		openNavigatie.style.display = "none";
  		butonDeschidere.style.display = "none !important";
  		hideElemente.style.display = "inline-block";
  		mobileNav.style.left = "-300px";
  		$("#shadow-open").removeClass("shadow-open");
  	}
  } catch(e) {

  }
}

checkPhone();

$('#open-nav').on('click', function() {
  $("#shadow-open").addClass("shadow-open");
  document.getElementById("mobile-nav").style.left = "0px";
});

$('#close-nav').on('click', function() {
  $("#shadow-open").removeClass("shadow-open");
  document.getElementById("mobile-nav").style.left = "-300px";
});

  $(document).keyup(function(e) {
	if (e.keyCode === 27) {
		$("#shadow-open").removeClass("shadow-open");
		document.getElementById("mobile-nav").style.left = "-300px";
	}
});

$(function() {
	$('html').click(function (t) {
		if (t.target.id == 'shadow-open') {
			$("#shadow-open").removeClass("shadow-open");
			document.getElementById("mobile-nav").style.left = "-300px";
		} else {
			return;
		}
	});
});


function recodedResponsiveHeader() {

  var width = window.innerWidth;

  const cutie1 = document.getElementById('cutie-1'); // DISCORD
  const cutie2 = document.getElementById('cutie-2'); // POZA
  const cutie3 = document.getElementById('cutie-3'); // SERVER
  const coloana = document.getElementById('coloana-3'); // Coloana
  const socialBar = document.getElementById('catalin-navi-social'); // SOCIAL BAR

  try {
    if (width <= 968) {
      cutie2.setAttribute("style", "order: 1; margin: auto;");
      cutie1.setAttribute("style", "order: 2; margin: auto;");
      cutie3.setAttribute("style", "order: 3; margin: auto;");
      coloana.setAttribute("style", "flex-direction: column;");
      socialBar.setAttribute("style", "margin-top: -13px;");
    } else {
      cutie2.setAttribute("style", "");
      cutie1.setAttribute("style", "");
      cutie3.setAttribute("style", "");
      coloana.setAttribute("style", "");
      socialBar.setAttribute("style", "");
    }
  } catch (e) {
    console.log(e.message);
  }

}

recodedResponsiveHeader();

window.onload = function () {
    var timp = window.performance.timing.domContentLoadedEventEnd-window.performance.timing.navigationStart;
    console.log('Page load time is '+ timp + " ms");
}

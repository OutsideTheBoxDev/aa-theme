$("body").on("click", "#contact", function (event) {
  $(".is-error").removeClass("is-error");
});

//sample form submission code with ajax call and nonce
$(".contactform").submit(function (event) {
  event.preventDefault();
  var $form = $(this);
  var id = $form.attr("id");

  var sub = "#" + id;

  var fnamec = $(sub + " .fname");
  var lnamec = $(sub + " .lname");
  var phonec = $(sub + " .phone");
  var emailc = $(sub + " .email");
  var companyc = $(sub + " .company");
  var messagec = $(sub + " .message");
  var check = $(sub + " .agree");

  var fname = $(fnamec).val().trim();
  var lname = $(lnamec).val().trim();
  var phone = $(phonec).val().trim();
  var email = $(emailc).val().trim();
  var company = $(companyc).val().trim();
  var message = $(messagec).val().trim();

  var error = 0;

  //privacy
  if ($("#agree").is(":checked")) {
    $(check).parent().removeClass("is-error");
  } else {
    $(check).parent().addClass("is-error");
    error = 1;
  }

  if (fname == "") {
    $(fnamec).parent().addClass("is-error");
    error = 1;
  } else {
    var filter = /^[0-9-+]+$/;
    if (filter.test(fname)) {
      $(fnamec).parent().addClass("is-error");
      error = 1;
    } else {
      $(fnamec).parent().removeClass("is-error");
    }
  }

  if (lname == "") {
    $(lnamec).parent().addClass("is-error");
    error = 1;
  } else {
    var filter = /^[0-9-+]+$/;
    if (filter.test(lname)) {
      $(fnamec).parent().addClass("is-error");
      error = 1;
    } else {
      $(lnamec).parent().removeClass("is-error");
    }
  }

  if (email == "") {
    $(emailc).parent().addClass("is-error");
    error = 1;
  } else {
    var filter =
      /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,63}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
      $(emailc).parent().removeClass("is-error");
    } else {
      $(emailc).parent().addClass("is-error");
      error = 1;
    }
  }

  if (phone == "") {
    $(phonec).parent().addClass("is-error");
    error = 1;
  } else {
    if (phone.length < 10) {
      $(phonec).parent().addClass("is-error");
      error = 1;
    } else {
      var filter = /^[0-9-+]+$/;
      if (filter.test(phone)) {
        $(phonec).parent().removeClass("is-error");
      } else {
        $(phonec).parent().addClass("is-error");
        error = 1;
      }
    }
  }

  if (company == "") {
    $(companyc).parent().addClass("is-error");
    error = 1;
  } else {
    $(companyc).parent().removeClass("is-error");
  }

  if (message == "") {
    $(messagec).parent().addClass("is-error");
    error = 1;
  } else {
    $(messagec).parent().removeClass("is-error");
  }

  if (error != 1) {
    $(".form__error").removeClass("is-error");
    var ajax_url = plugin_ajax_object.ajax_url;
    var data = {
      action: "form_submission",
      fname: fname,
      lname: lname,
      email: email,
      phone: phone,
      company: company,
      message: message,
      nonce: plugin_ajax_object.nonce,
    };
    $.ajax({
      url: ajax_url, // AJAX handler
      data: data,
      type: "POST",
      beforeSend: function (xhr) {
        $(".form_button").addClass("is-loading");
      },
      success: function (response) {
        if (response.error == 0) {
          $(".section--schedule .schedule").addClass("is-hide");
          $(".thankyou").removeClass("is-hide");
          $(sub[0].reset());
        } else {
          $(".form__error").addClass("is-error");
          $(".form__error").html("");
          $(".form__error").html(response.message);
        }
      },
      error: function (jqXHR, status, err) {
        $(".form__error").addClass("is-error");
        $(".form__error").html("");
        $(".form__error").html("Form submission failed");
      },
      complete: function (jqXHR, status) {
        $(".form_button").removeClass("is-loading");
      },
    });
  } else {
    $(".form__error").addClass("is-error");
    $(".form__error").html("");
    $(".form__error").html("Please fill the fields properly");
  }
});

let currentPage = 0;
$(document).on("click", ".q-btn--loadmore", function (e) {
  currentPage++;

  const loadCategory = e.target.dataset.category || "";

  var ajax_url = plugin_ajax_object.ajax_url;
  data = {
    action: "load_more_blogposts",
    paged: currentPage,
    category: loadCategory,
    nonce: plugin_ajax_object.nonce,
  };

  $.ajax({
    url: ajax_url, // AJAX handler
    data: data,
    type: "POST",
    success: function (res) {
      $(".bloglist__blog-wrap").append(res);
      loadMoreDisplay(currentPage, loadCategory);
    },
  });
});

function loadMoreDisplay(currentPage, category) {
  var ajax_url = plugin_ajax_object.ajax_url;
  data = {
    action: "load_more_display",
    pagecount: currentPage,
    category: category,
    nonce: plugin_ajax_object.nonce,
  };

  $.ajax({
    url: ajax_url, // AJAX handler
    data: data,
    type: "POST",
    success: function (res) {
      if (res == "hide") {
        $(".bloglist__loadmore").hide();
      }
    },
  });
}

// Site-wide Announcement Banner Functionality
(function () {
  const BANNER_STORAGE_KEY = "quipli_announcement_banner_dismissed";
  const banner = document.getElementById("quipli-announcement-banner");
  const closeButton = banner?.querySelector(".quipli-banner-close");

  if (!banner) return;

  // Check if banner was previously dismissed
  const wasDismissed = localStorage.getItem(BANNER_STORAGE_KEY);

  if (!wasDismissed) {
    // Show the banner
    banner.style.display = "block";

    // Add banner-visible class to body
    document.body.classList.add("banner-visible");

    // Add a small delay for smooth appearance
    setTimeout(function () {
      banner.classList.remove("hidden");
    }, 100);
  }

  // Handle close button click
  if (closeButton) {
    closeButton.addEventListener("click", function () {
      // Add hidden class for animation
      banner.classList.add("hidden");

      // Store dismissal in localStorage
      localStorage.setItem(BANNER_STORAGE_KEY, "true");

      // Remove banner-visible class from body
      document.body.classList.remove("banner-visible");

      // Remove from DOM after animation completes
      setTimeout(function () {
        banner.style.display = "none";
      }, 300);
    });
  }
})();

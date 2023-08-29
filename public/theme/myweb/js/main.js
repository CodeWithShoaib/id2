// document.onkeydown = function(e) {
//   if(event.keyCode == 123) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//      return false;
//   }
// }

// $(document).on({
//     "contextmenu": function(e) {
//         console.log("ctx menu button:", e.which);

//         // Stop the context menu
//         e.preventDefault();
//     },
//     "mousedown": function(e) {
//         console.log("normal mouse down:", e.which);
//     },
//     "mouseup": function(e) {
//         console.log("normal mouse up:", e.which);
//     }
// });

// document.addEventListener("DOMContentLoaded", function() {
// const phoneNumberInput = document.getElementById("doctor_phone_number");
//     phoneNumberInput.addEventListener("input", function() {
//         let inputNumber = phoneNumberInput.value.replace(/\D/g, ''); // Remove non-numeric characters

//         if (inputNumber.length > 11) {
//             inputNumber = inputNumber.slice(0, 11); // Limit to 11 digits

//         }

//         if (inputNumber.length > 10) {
//             const areaCode = inputNumber.slice(0, 3);
//             const firstPart = inputNumber.slice(3, 6);
//             const secondPart = inputNumber.slice(6, 10);
//             phoneNumberInput.value = `(${areaCode}) ${firstPart}-${secondPart}`;
//         } else {
//             phoneNumberInput.value = inputNumber;
//         }
//     });
// });


$('.testimonials').slick({
  dots: true,
  arrows : true,
  infinite: true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
});







 function formatNumber(id) {
       var inputElement = document.getElementById("patient_phone_number" + id);
        var inputValue = inputElement.value;
        var lengthOfNumber=inputValue.length;
        // Ensure the input value has exactly 10 digits
        if (lengthOfNumber <= 10) {
            // var newString = originalString.slice(0, indexToInsert) + valueToAppend + originalString.slice(indexToInsert);
            var newString = `${inputValue.slice(0, 0)}(${inputValue.slice(0, 3)})${inputValue.slice(3)}`;
            var newString1= newString.slice(0, 5) + ' ' + newString.slice(5);
            var newString2= newString.slice(0, 8) + '-' + newString.slice(8);
            inputElement.value=newString2;


        } else {
          // Reset the input value if it doesn't have 10 digits
          alert("greater than 10");
     
          inputElement.value = "";
        }
      }








$(document).ready(function () {
  $("#search").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    console.log(value);
    $("#myTable li").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});

// const urlString = "https://betarwreality.com";
// const url = new URL(urlString);
// const firstPart = url.protocol + "//" + url.hostname;
// console.log(firstPart);

document.addEventListener("DOMContentLoaded", function () {
  const phoneNumberInput = document.querySelector(".doctor_phone_number"); // Select by class name
  if (phoneNumberInput) {
    // Check if the element was found
    phoneNumberInput.addEventListener("input", function () {
      let inputNumber = phoneNumberInput.value.replace(/\D/g, ""); // Remove non-numeric characters
      if (inputNumber.length > 10) {
        inputNumber = inputNumber.slice(0, 10); // Limit to 10 digits
      }

      if (inputNumber.length > 9) {
        const areaCode = inputNumber.slice(0, 3);

        const firstPart = inputNumber.slice(3, 6);
        const secondPart = inputNumber.slice(6, 10);
        phoneNumberInput.value = `(${areaCode}) ${firstPart}-${secondPart}`;
      } else {
        phoneNumberInput.value = inputNumber;
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const phoneNumberInputs = document.querySelector(".patient_phone_number"); // Select by class name

  if (phoneNumberInputs) {
    // Check if the element was found
    phoneNumberInputs.addEventListener("input", function () {
      let inputNumber = phoneNumberInputs.value.replace(/\D/g, ""); // Remove non-numeric characters

      if (inputNumber.length > 10) {
          
        inputNumber = inputNumber.slice(0, 11); // Limit to 11 digits
        console.log("ok");
      }

      if (inputNumber.length > 10) {
        const areaCode = inputNumber.slice(0, 3);
        const firstPart = inputNumber.slice(3, 6);
        const secondPart = inputNumber.slice(6, 10);
        phoneNumberInputs.value = `(${areaCode}) ${firstPart}-${secondPart}`;
      } else {
        phoneNumberInputs.value = inputNumber;
      }
    });
  }
});

// When country selection changes
$("#country").on("change", function () {
  var countryId = $(this).val();
  $("#state").empty();
  $("#city").empty();

  if (countryId) {
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });

    $.ajax({
      url: "get-states/" + countryId,
      type: "post",
      data: { country_id: countryId },
      success: function (data) {
        $("#state").append('<option value="">Select State</option>');
        $.each(data, function (index, state) {
          $("#state").append(
            '<option value="' + state.id + '">' + state.name + "</option>"
          );
        });
      },
      error: function (xhr, status, error) {
        // Handle errors
        // console.log('ok3');
        console.log(error);
      },
    });
  }
});

// When state selection changes
$("#state").on("change", function () {
  var stateId = $(this).val();
  $("#city").empty();

  if (stateId) {
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });

    $.ajax({
      url: "get-cities/" + stateId,
      type: "post",
      data: { state_id: stateId },
      success: function (data) {
        $("#city").append("");
        $.each(data, function (index, city) {
          $("#city").append(
            '<option value="' + city.id + '">' + city.name + "</option>"
          );
        });
      },
      error: function (xhr, status, error) {
        // Handle errors

        console.log(error);
      },
    });
  }
});

$(document).ready(function () {
  $(".patient").change(function () {
    $(".business_name_id").removeAttr("required");
  });

  $(".dental").change(function () {
    $(".business_name_id").attr("required", "true");
  });
});


$(document).ready(function () {
  $(".package_data").click(function () {
    var title = $(this).closest(".card-body").find("#title").text();

    var price = $(this).closest(".card-body").find("#price").text();
    var no_of_slots = $(this).closest(".card-body").find(".no_of_slots").val();
    var registration_time = $(this)
      .closest(".card-body")
      .find("#registration_time")
      .text()
      .trim();

    document.cookie = `title=${title}`;
    document.cookie = `price=${price}`;
    document.cookie = `no_of_slots=${no_of_slots}`;
    document.cookie = `registration_time=${registration_time}`;
    $("#stripe_btn").click(function (e) {
      var csrfToken = $('meta[name="csrf-token"]').attr("content");

      $.ajax({
        url: "/slot",
        method: "POST",
        data: {
          title: title,
          price: price,
          no_of_slots: no_of_slotls,
          registration_time: registration_time,
        },
        headers: {
          "X-CSRF-TOKEN": csrfToken,
        },
        success: function (response) {
          console.log("register data successfully!");
          console.log(response);
        },
        error: function (xhr, status, error) {
          console.error("Error Occured");
        },
      });
    });
  });
});

$.ajax({
  url: "manufacture_session",
  type: "GET",
  dataType: "json",
})
  .done(function (data) {
    // Success: data contains the response from the server
    manufactures = data; // Assign the data to the global manufactures variable
    localStorage.setItem("manufactures", JSON.stringify(manufactures));
  })
  .fail(function (jqXHR, textStatus, errorThrown) {
    // Error: Handle the error here
    console.log("Error: " + textStatus, errorThrown);
  });
var storedData = localStorage.getItem("manufactures");
var manufacturing_data = JSON.parse(storedData);
console.log(manufacturing_data);
function get_brand_data(tooth_id) {
  var manufac_data = document.querySelector("#Manufactures" + tooth_id).value;
  if (manufac_data == 0) {
    var hiddenBrand = document.querySelector("#hiddenBrand" + tooth_id);
    hiddenBrand.name = "brand[]";
    var hiddenPlatform = document.querySelector("#hiddenPlatform" + tooth_id);
    var hidden_manufacture = document.querySelector(
      "#hiddenManufactures" + tooth_id
    );
    var Brand = document.querySelector("#Brand_" + tooth_id);
    var manufacture = document.querySelector("#Manufactures" + tooth_id);
    var platform = document.querySelector("#platform_" + tooth_id);
    hidden_manufacture.style.display = "block";
    hiddenBrand.style.display = "block";
    hiddenPlatform.style.display = "block";
    Brand.style.display = "none";
    platform.style.display = "none";
    manufacture.name = "";
    platform.name = "";
    hiddenPlatform.name = "platform[]";
    hidden_manufacture.name = "manufactures[]";
  } else {
    var hiddenBrand = document.querySelector("#hiddenBrand" + tooth_id);
    var manufacture = document.querySelector("#Manufactures" + tooth_id);
    var hiddenPlatform = document.querySelector("#hiddenPlatform" + tooth_id);

    var platform = document.querySelector("#platform_" + tooth_id);
    var Brand = document.querySelector("#Brand_" + tooth_id);
    var hidden_manufacture = document.querySelector(
      "#hiddenManufactures" + tooth_id
    );
    hidden_manufacture.style.display = "none";
    hiddenBrand.style.display = "none";
    hiddenPlatform.style.display = "none";
    platform.style.display = "block";
    hiddenPlatform.name = "";
    Brand.style.display = "block";
    platform.name = "platform[]";
    hiddenBrand.name = "";
    hidden_manufacture.name = "";
    manufacture.name = "manufactures[]";
    hidden_manufacture.nmae = "";
  }
  localStorage.removeItem("brand");
  var Manufactures_id = document.querySelector(
    "#Manufactures" + tooth_id
  ).value;
  $.ajax({
    url: "/brand_session/" + parseInt(Manufactures_id),
    type: "GET",
    dataType: "json",
  })
    .done(function (data) {
      var brand = data;
      console.log(data);
      localStorage.setItem("brand", JSON.stringify(brand));
      calling_data("Brand_" + tooth_id);
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      // Error: Handle the error here
      console.log("Error: " + textStatus, errorThrown);
    });
}
function calling_data(tooth_id) {
  var storedBrandData = localStorage.getItem("brand");
  var brand_data = JSON.parse(storedBrandData);
  // Update the <select> element with the new brand_data
  var brandSelect = document.querySelector(`#${tooth_id}`);
  console.log(brandSelect);
  if (brandSelect) {
    brandSelect.innerHTML = brand_data
      .map(
        (brand) =>
          `<option value="${brand.brand_id}">${brand.brand_name}</option>`
      )
      .join("");
  } else {
    console.error(`Element with ID 'Brand_${tooth_id}' not found.`);
  }
}
function get_diameter_data(id) {
  localStorage.removeItem("diameter");
  var Id = document.getElementById("Brand_" + id).value;
  $.ajax({
    url: "/diameter_session/" + parseInt(Id),
    type: "GET",
    dataType: "json",
    success: function (data) {
      // Success: Handle the data returned from the server
      localStorage.setItem("diameter", JSON.stringify(data));
      console.log("Data stored in local storage.");
      calling_diameter_data(id);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      // Error: Handle the error here
      console.log("Error: " + textStatus, errorThrown);
    },
  });
}

function calling_diameter_data(id) {
  console.log(id);
  var storedBrandData = localStorage.getItem("diameter");
  var diameter_data = JSON.parse(storedBrandData);
  // Update the <select> element with the new brand_data
  var Platform = document.getElementById("platform_" + id);
  Platform.innerHTML = diameter_data
    .map(
      (brand) =>
        `<option value="${brand.delimeter_id}">${brand.delimiter_name}</option>`
    )
    .join("");
}

$(document).ready(function () {
  $(".search-icon").click(function () {
    $(".search-bar").slideToggle("slow");
  });
});
// sliders start //
// $(".slider-services").slick({
//   // centerMode: true,
//   // centerPadding: '100px',
//   slidesToShow: 3,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//   ],
// });

$(".testimonial-slider").slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 800,
  arrows: true,
  dots: true,
});
// sliders end //

// counter start //
// $({ counter: 0 }).animate(
//   { counter: 40 },
//   {
//     duration: 3000,
//     easing: "linear",
//     step: function () {
//       $(".count-down p").text(Math.ceil(this.counter));
//     },
//     complete: function () {},
//   }
// );
// counter end //

// accordion start //
const accordionItemHeaders = document.querySelectorAll(
  ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
  accordionItemHeader.addEventListener("click", (event) => {
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.classList.add("show");
    } else {
      accordionItemBody.classList.remove("show");
    }
  });
});

// accordion end //

// form validation start//

let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);

// let fname = id("fname"),
//   lname = id("lname"),
//   Manufactures = id("Manufactures"),
//   Brand = id("Brand"),
//   Platform = id("Platform"),
//   form = id("form"),
//   errorMsg = classes("error"),
//   successIcon = classes("success-icon"),
//   failureIcon = classes("failure-icon");

// form.addEventListener("submit", (e) => {
//   e.preventDefault();

//   engine(fname, 0, "First Name cannot be blank");
//   engine(lname, 1, "Last Name cannot be blank");
//   engine(zipCode, 2, "Zip Code cannot be blank");
//   engine(Manufactures, 3, "Manufactures cannot be blank");
//   engine(Brand, 4, "Brand cannot be blank");
//   engine(Platform, 5, "Platform cannot be blank");
// });

// let engine = (id, serial, message) => {
//   if (id.value.trim() === "") {
//     errorMsg[serial].innerHTML = message;
//     id.style.border = "2px solid red";

//     // icons
//     failureIcon[serial].style.opacity = "1";
//     successIcon[serial].style.opacity = "0";
//   } else {
//     errorMsg[serial].innerHTML = "";
//     id.style.border = "2px solid green";

//     // icons
//     failureIcon[serial].style.opacity = "0";
//     successIcon[serial].style.opacity = "1";
//   }
// };

// form validation end//

function decrementTeethId(buttonElement, teethId) {
  buttonElement.parentNode.parentNode.remove();
  teethId--;
}

var teethId = 1;
const teethBtns = document.querySelectorAll(".teeth");
teethBtns.forEach((element) => {
  element.addEventListener("click", () => {
    const subForm = document.querySelector(".subForm .row");
    const str = element.id;
    const match = str.match(/\d+/);
    const result = match ? match[0] : null;
    subForm.insertAdjacentHTML(
      "beforeend",
      `<div class="form-child col-6">
        <div class="col-12 text-center">
          <button type="button" class="removeBtn"  onclick="decrementTeethId(this, ${teethId})">X</button>
        </div>
        <div class="col-12">
          <label for="text">Dental Implant Site/Tooth#:</label>
          <input type="text" name="dental_implant[]" value="${element.id}">
        </div>
        <div class="col-12">
          <label for="Manufactures">* Manufacturer: (choose one)</label>
          <div class="select-parent" id='manu'>
            <select name="manufactures[]" id="Manufactures${teethId}" onchange="get_brand_data('${teethId}')" class="form-select Manufactures">
              <option value="">Select Manufacturer</option>
              ${manufacturing_data
        .map(
          (manufacturer) =>
            `<option value="${manufacturer.manufacturer_id}">${manufacturer.manufacturer_name}</option>`
        )
        .join("")}
            </select>
            <input type='text' name="manufactures[]" class='form-control Manufactures' style='display:none;' id="hiddenManufactures${teethId}" placeholder='Enter Another Manufacture'>
          </div>
        </div>
        <div class="col-12">
          <label for="Brand">* Brand: (choose one)</label>
          <div class="select-parent bra">
            <select name="brand[]" id="Brand_${teethId}" onchange="get_diameter_data('${teethId}')"  class="form-select Brand">
              <option value="">Select Brand</option>
            </select>
            <input type='text' name="brand[]" class='form-control Manufactures' style='display:none;' id="hiddenBrand${teethId}" placeholder='Enter Another Brand'>
          </div>
        </div>
        <div class="col-12">
          <label for="Platform">* Platform size/Diameter (choose one):</label>
          <div class="select-parent plat">
            <select name="platform[]" id="platform_${teethId}"  class="form-select Platform">
              <option value="">Select Platform</option>
            </select>
             <input type='text' name="platform[]" class='form-control Manufactures' style='display:none;' id="hiddenPlatform${teethId}" placeholder='Enter Another Platform'>
          </div>
        </div>
        <div class="col-12">
          <label for="text">Reference/Part #:</label>
          <input type="text" name="reference_Part[]" placeholder="Enter here">
        </div>
        <div class="col-12">
          <label for="text">Lot #</label>
          <input type="text" name="lot[]" placeholder="Enter here">
        </div>
        <div class="col-12">
          <label for="date">Date of implant surgery</label>
          <input type="date" name="implant_surgery[]" placeholder="Enter here">
        </div>
        <div class="col-12">
         <label for="text">Implant Placing Doctor name</label>
         <input type="text" placeholder="Enter here" name="doctor_name[]">
         </div>
         <div class="col-12 ">
             <label for="text">Implant Placing Doctor Phone  #</label>
            <input type="text" placeholder="Enter here" name="doctor_phone_number[]" id='patient_phone_number${teethId}' onchange="formatNumber(${teethId})"  class='patient_phone_number'>
        </div>
        <div class="col-12">
            <label for="text">Name of Restoring Dentist:</label>
            <input type="text" placeholder="Enter here" name='restoring_dentist_name[]'>
        </div>
        <div class="col-12">
          <label for="text">Practice Name of Restoring Dentist</label>
          <input type="text" placeholder="Enter here" name='practice_name_of_restoring_dentist[]'> 
        </div>
         <div class="col-12">
            <label for="date">Date of Implant Restoration/Abutment & Crown Placement:</label>
            <input type="date" placeholder="Enter here" name='Implant_Restoration_date[]'>
        </div>
        <div class="col-12">
            <label for="text">Type of Abutment</label>
            <input type="text" placeholder="Enter here" name='abutment_type[]'>
        </div>
    
            <div class="col-12 col-lg-12">
            <label for="text">Attach X-rays:Max 2</label>
              <input type="file" class="image-input-main" name="images${teethId}[]"  multiple accept="image/*">
              <input type="hidden" value='${result}'  name='tooth_ids[]'>
              <div class="image-container-main" id='image-container-main${result}'></div>
            </div>
    </div>
       
        
      </div>`
    );
    
    

    
    const imageInputs = document.querySelectorAll(".image-input-main");
      imageInputs.forEach((input, index) =>   {
        input.addEventListener("change", (event) => {
          const selectedImages = event.target.files;
          var imageContainers = document.querySelector(`#image-container-main${result}`);
          // Clear previous content
          imageContainers.innerHTML = "";
          for (let i = 0; i < selectedImages.length; i++) {
            const reader = new FileReader();
            reader.onload = (e) => {
              const imageMiniContainer = document.createElement("div");
              imageMiniContainer.className = `span_image${result}`;

              const imageElement = document.createElement("img");
              imageElement.src = e.target.result;
              imageElement.className = `uploaded-image${result}`;
              imageMiniContainer.appendChild(imageElement);

              const deleteButton = document.createElement("span");
              deleteButton.className = "delete-button";
              deleteButton.textContent = "X";
              deleteButton.addEventListener("click", () => {
                imageMiniContainer.remove();
              });
              imageMiniContainer.appendChild(deleteButton);

              imageContainers.appendChild(imageMiniContainer);
            };
            reader.readAsDataURL(selectedImages[i]);
          }
        });
      });
    
    teethId++;
  });
});

function removeFields(e) {
  // const subForm = document.querySelector('.subForm .row .form-child')
  console.log(e.target.class);
}

// payment js

$(function () {
  var $form = $(".require-validation");
  $("form.require-validation").bind("submit", function (e) {
    var $form = $(".require-validation"),
      inputSelector = [
        "input[type=email]",
        "input[type=password]",
        "input[type=text]",
        "input[type=file]",
        "textarea",
      ].join(", "),
      $inputs = $form.find(".required").find(inputSelector),
      $errorMessage = $form.find("div.error"),
      valid = true;
    $errorMessage.addClass("hide");
    $(".has-error").removeClass("has-error");
    $inputs.each(function (i, el) {
      var $input = $(el);
      if ($input.val() === "") {
        $input.parent().addClass("has-error");
        $errorMessage.removeClass("hide");
        e.preventDefault();
      }
    });
    if (!$form.data("cc-on-file")) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data("stripe-publishable-key"));
      Stripe.createToken(
        {
          number: $(".card-number").val(),
          cvc: $(".card-cvc").val(),
          exp_month: $(".card-expiry-month").val(),
          exp_year: $(".card-expiry-year").val(),
        },
        stripeResponseHandler
      );
    }
  });
  function stripeResponseHandler(status, response) {
    if (response.error) {
      $(".error")
        .removeClass("hide")
        .find(".alert")
        .text(response.error.message);
    } else {
      /* token contains id, last4, and card type */
      var token = response["id"];

      $form.find("input[type=text]").empty();
      $form.append(
        "<input type='hidden' name='stripeToken' value='" + token + "'/>"
      );
      $form.get(0).submit();
    }
  }
});

$(document).ready(function () {
  // When the country dropdown changes
  $("#country").change(function () {
    var countryId = $(this).val();
    // Clear state and city dropdowns
    $("#state").empty();
    $("#city").empty();
    // AJAX request to fetch states based on selected country
    $.ajax({
      url: "/get-states",
      type: "POST",
      data: {
        country_id: countryId,
      },
      success: function (response) {
        // Populate state dropdown with fetched data
        $.each(response.states, function (id, name) {
          $("#state").append($("<option>").text(name).attr("value", id));
        });
      },
    });
  });

  // When the state dropdown changes
  //   $('#state').change(function() {
  //       var stateId = $(this).val();

  //       // Clear city dropdown
  //       $('#city').empty();

  //       // AJAX request to fetch cities based on selected state
  //       $.ajax({
  //           url: '/get-cities',
  //           type: 'POST',
  //           data: {
  //               state_id: stateId
  //           },
  //           success: function(response) {
  //               // Populate city dropdown with fetched data
  //               $.each(response.cities, function(id, name) {
  //                   $('#city').append($('<option>').text(name).attr('value', id));
  //               });
  //           }
  //       });
  //   });
});

$(document).ready(function () {
  $(".Manufactures").on("change", function () {
    var manufacurer_id = $(this).val();
    // AJAX request to get states
    $.ajax({
      url: "/brand/" + manufacurer_id,
      type: "GET",
      dataType: "json",
      success: function (data) {
        $(".Brand").empty();
        $(".Platform").empty();
        $.each(data, function (key, value) {
          $(".Brand").append(
            '<option value="' + value.id + '">' + value.name + "</option>"
          );
        });
      },
    });
  });

  $(".Brand").on("change", function () {
    var state_id = $(this).val();
    // AJAX request to get cities
    $.ajax({
      url: "/platform/" + state_id,
      type: "GET",
      dataType: "json",
      success: function (data) {
        $(".Platform").empty();
        $.each(data, function (key, value) {
          $("#city").append(
            '<option value="' + value.id + '">' + value.name + "</option>"
          );
        });
      },
    });
  });
});

function loginMessage() {
  alert("Please log in as a dental professional to purchase any plans");
}

function printPage() {
  $(".hidingWhilePrint").hide();
  window.print();
  $(".hidingWhilePrint").show();
}

function removeCloseImage() {
  const imageBox = $(event.target).closest(".image_box");
  const imgSrc = imageBox.find("img").attr("src");
  const inputField = images.querySelector(`input[value="${imgSrc}"]`);

  // Remove the image and corresponding input field
  imageBox.remove();
  if (inputField) {
    inputField.remove();
  }
}

$(document).on("click", ".remove_button", removeCloseImage);

function copyLinkToClipboard() {
  var anchorTag = document.getElementById("myAnchorTag");

  // Create a temporary element for copying
  var tempElement = document.createElement("div");
  tempElement.textContent = anchorTag.value;
  document.body.appendChild(tempElement);

  // Select the text inside the temporary element
  var range = document.createRange();
  range.selectNode(tempElement);
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(range);

  // Copy the selected content to clipboard
  document.execCommand("copy");

  // Clean up
  window.getSelection().removeAllRanges();
  document.body.removeChild(tempElement);

  // Alert the user
  alert("You copied the link of this report and now it is ready to share!");
}

$(document).ready(function () {
  $("#country").change(function () {
    var countryId = $(this).val();
    if (countryId) {
      $.ajax({
        url: "/get-states/" + countryId,
        type: "post",
        success: function (data) {
          $("#state").empty();
          $("#city").empty();
          $("#state").append('<option value="">Select State</option>');
          $.each(data, function (key, value) {
            $("#state").append(
              '<option value="' + value.id + '">' + value.name + "</option>"
            );
          });
        },
      });
    } else {
      $("#state").empty();
      $("#city").empty();
      $("#state").append('<option value="">Select State</option>');
    }
  });

  $("#state").change(function () {
    var stateId = $(this).val();
    if (stateId) {
      $.ajax({
        url: "/get-cities/" + stateId,
        type: "post",
        success: function (data) {
          $("#city").empty();
          $("#city").append('<option value="">Select City</option>');
          $.each(data, function (key, value) {
            $("#city").append(
              '<option value="' + value.id + '">' + value.name + "</option>"
            );
          });
        },
      });
    } else {
      $("#city").empty();
      $("#city").append('<option value="">Select City</option>');
    }
  });
});






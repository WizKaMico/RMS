// Countries
var pre_country_arr = new Array("KIDDIE RUN (400m)", "SHORT RUN (1k)", "INTERMEDIATE RUN (3k)", "OPEN RUN (5k)");

// States
var pre_s_a = new Array();
pre_s_a[0] = "";
pre_s_a[1] = "Boys (6 years old &amp; below)|Girls (6 years old &amp; below)";
pre_s_a[2] = "Boys (7-9 years old)|Girls (7-9 years old)|Pre-Teen Boys (10-12 years old)|Pre-Teen Girls (10-12 years old)";
pre_s_a[3] = "Teen Boys (13-19 years old)|Teen Girls (13-19 years old)|Young Mens (20-35 years old)|Young Womens (20-35 years old)|Mens (36-49 years old)|Womens (36-49 years old)|Masters Mens (50-59 years old)|Masters Womens (50 &amp; above)|Senior Mens (60 &amp; above)|Senior Womens (60 &amp; above)";
pre_s_a[4] = "Mens|Womens";



function populateStates(pre_countryElementId, pre_stateElementId) {

    var selectedCountryIndex = document.getElementById(pre_countryElementId).selectedIndex;

    var stateElement = document.getElementById(pre_stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select Type', '');
    stateElement.selectedIndex = 0;

    var state_arr = pre_s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountry(pre_countryElementId, pre_stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(pre_countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Category', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < pre_country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(pre_country_arr[i], pre_country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (pre_stateElementId) {
        countryElement.onchange = function () {
            populateStates(pre_countryElementId, pre_stateElementId);
        };
    }
}



populateCountry("pre_country", "pre_state");
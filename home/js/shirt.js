var Kids = ["8","10","12","15","2XS"];
var Adults = ["XS","S","M","L","XL","2XL","3XL"];

$("#inputState").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Kids":
        optionsList = Kids;
        break;
    case "Adults":
        optionsList = Adults;
        break;

}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputDistrict").html(htmlString);

});

const defaultResult = 0;

let currentResult = 0;

let errorMessage = "An error \\" + "ocured !";


function add() {
  let interest = ((parseInt(sum.value)* parseInt(rateofinterest.value)/100)*parseInt(time.value));
  currentResult = interest  + parseInt(sum.value)
if (isNaN(interest) || isNaN(currentResult)){
  outputResult("incorect input", "incorect input")
} else 
  outputResult(currentResult, interest);
}



calcBtn.addEventListener('click', add);













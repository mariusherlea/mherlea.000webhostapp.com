const sum = document.getElementById('sum');
const rateofinterest = document.getElementById('rateofinterest');
const time = document.getElementById('time');
const calcBtn = document.getElementById('btn-calc');


const currentResultOutput = document.getElementById('current-result');
const currentCalculationOutput = document.getElementById('current-calculation');

function outputResult(result, text) {
  currentResultOutput.textContent = result;
  currentCalculationOutput.textContent = text;
}

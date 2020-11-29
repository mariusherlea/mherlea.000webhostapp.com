const app = document.getElementById('root')

const container = document.createElement('div')
container.setAttribute('class', 'container')

app.appendChild(container)

var request = new XMLHttpRequest()
request.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=Cugir,ro&units=metric&APPID=728d0c264572c8885e9253484a6de83b', true)
request.onload = function () {
  // Begin accessing JSON data here
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
//    console.log(data)
    
   
    
document.getElementById("temp").innerHTML = data.main.temp +`<span>&#176;</span>`+'C' 
      document.getElementById("humidity").innerHTML = data.main.humidity +'%'
      document.getElementById("name").innerHTML = data.name 
//console.log(data.main.humidity)
//    console.log(h1)


    
  } else {
    const errorMessage = document.createElement('marquee')
    errorMessage.textContent = `Gah, it's not working!`
    app.appendChild(errorMessage)
  }




}

request.send()
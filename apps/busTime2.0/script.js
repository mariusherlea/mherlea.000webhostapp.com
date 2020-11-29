let data = [
    {
        'cugir': '11:00',
        'vinerea': '11:30',
        'sibot': '12:00',
        'balomir': '12:30',
        'tartaria': '13:00',
        'vint': '13:30',
        'alba': '14:00'
    },

    {
        'cugir': '12:00',
        'vinerea': '13:00',
        'sibot': '14:00',
        'balomir': '15:00',
        'tartaria': '16:00',
        'vint': '17:00',
        'alba': '17:30'
    },

    {
        'alba': '18:00',
        'vint': '19:00',
        'tartaria': '20:00',
        'balomir': '20:00',
        'sibot': '22:00',
        'vinerea': '23:00',
        'cugir': '00:00'
    },

    {
        'alba': '18:00',
        'vint': '18:00',
        'tartaria': '19:00',
        'balomir': '20:00',
        'sibot': '21:00',
        'vinerea': '22:00',
        'cugir': '23:00'
    }

];


let car = data.find(car => car.alba === '18:00' && car.balomir === '20:00')
console.log(car)



    




    
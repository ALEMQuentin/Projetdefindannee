/**
 * Created by Sanglaw on 28/06/2017.
 */
let dates = document.querySelectorAll('.date p');
let date;
for(let i = 0 ; i < dates.length ; i++){
    date = dates[i].textContent.split(' ')[0].split('-');

    switch(date[1]){
        case "01":
            date[1] = "janvier";
            break;
        case "06":
            date[1] = "juin";
            break;
    }
    let render = [date[2],date[1],date[0]].join(' ');
    console.log(render);
    dates[i].textContent = render;
}

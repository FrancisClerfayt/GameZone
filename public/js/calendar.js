let date = new Date();

let today = document.getElementById('today');

today.innerHTML += date.getDate() + "/";
today.innerHTML += date.getMonth()+1 + "/";
today.innerHTML += date.getFullYear();

function daysInMonth (month, year) {
  return new Date(year, month, 0).getDate();
}

function createMonth () {

  var actualDate = new Date(2020, 5);

  var firstofmonth = new Date(actualDate.getFullYear(), actualDate.getMonth(), 1);

  console.log(firstofmonth.getDay());
  let condition = firstofmonth.getDay() == 0 ? 6 : (firstofmonth.getDay() - 1)
  console.log(condition);

  let container = document.querySelector('.grid-container');

  for(i=1; i <= condition; i++) {
    let day = document.createElement('div');
    day.classList.add('grid-item');
    
    container.appendChild(day);
  }

  for (i=1 ; i <= daysInMonth(actualDate.getMonth(), actualDate.getFullYear()) ; i++) {
    let day = document.createElement('div');
    day.classList.add('grid-item');

    var dayDate = new Date(actualDate.getFullYear(), actualDate.getMonth(), i);

    if (dayDate.getDay() == 5 || dayDate.getDay() == 6) {
      day.style.backgroundColor = "#1C1F3D";
      day.style.color = "#FFFFFF";
    }

    if (dayDate.getDay() >= 1 && dayDate.getDay() <= 4) {
      day.style.backgroundColor = "#F6CD40";
    }

    if (dayDate.getDay() == 2 && dayDate.getDate() <= 7) {
      day.style.backgroundColor = "#C9116A";
    }

    if (dayDate.getDay() == 0 && dayDate.getDate() >= (daysInMonth(actualDate.getMonth(), actualDate.getFullYear()) -6 )) {
      day.style.backgroundColor = "#1b85ae";
    }

    day.innerHTML = i;
    let container = document.querySelector('.grid-container');
    container.appendChild(day);
  }

}

createMonth();

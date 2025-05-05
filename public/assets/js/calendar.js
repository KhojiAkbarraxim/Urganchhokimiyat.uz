const daysTag = document.querySelector('.days');
const currentDate = document.querySelector('.current-date');
const prevIcon = document.getElementById('prev');
const nextIcon = document.getElementById('next');

let date = new Date();
let currYear = date.getFullYear();
let currMonth = date.getMonth();

const months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay();
    let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
    let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
    let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

    let liTag = '';

    // Add inactive days from previous month
    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    // Add active days for current month
    for (let i = 1; i <= lastDateofMonth; i++) {
        let isToday =
            i === new Date().getDate() &&
                currMonth === new Date().getMonth() &&
                currYear === new Date().getFullYear()
                ? 'active'
                : '';
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    // Add inactive days for next month
    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }

    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    // Fetch and process events from JSON file
    fetch('https://new.amudarya.uz/api/calendar')
        .then(response => response.json())
        .then(data => {
            const calendar = data.Calendar;

            for (const key in calendar) {
                const value = calendar[key];
                if (value) {
                    const eventDate = new Date(key);
                    if (
                        eventDate.getMonth() === currMonth &&
                        eventDate.getFullYear() === currYear
                    ) {
                        const dayElement = daysTag.querySelectorAll('li');
                        dayElement.forEach(el => {
                            if (el.innerText == eventDate.getDate()) {
                                el.classList.add('bold');
                            }
                        })
                    }
                }
            }
        })
        .catch(error => console.error('Error fetching events:', error));
};

renderCalendar();

prevIcon.addEventListener('click', () => {
    currMonth--;
    if (currMonth < 0) {
        currMonth = 11;
        currYear--;
    }
    check(3000)
    renderCalendar();
});

nextIcon.addEventListener('click', () => {
    currMonth++;
    if (currMonth > 11) {
        currMonth = 0;
        currYear++;
    }
    check(3000)
    renderCalendar();
});



function check(miliSecond) {
    setTimeout(() => {
        const days = document.querySelector('.days'),
            dayBold = days.querySelectorAll('li')

        let currMonth = new Date().getMonth()
        currYear = new Date().getFullYear()

        dayBold.forEach(el => {
            if (el.classList.contains('bold')) {
                el.addEventListener('click', () => {
                    if (+el.innerText < 10 && currMonth + 1 < 10) {
                        window.location.href = `https://new.amudarya.uz/news/${currYear}-0${currMonth + 1}-0${el.innerText}`
                    } else {
                        window.location.href = `https://new.amudarya.uz/news/${currYear}-${currMonth + 1}-${el.innerText}`
                    }
                })
            }
        })
    }, miliSecond);
}

check(5000)
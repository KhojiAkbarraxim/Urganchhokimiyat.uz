<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Новости</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    
    <x-link>
        <!-- css ссылки -->
    </x-link>

</head>

<body>

<x-main>


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                <li><a href="{{route('home')}}">Главная</a></li>
                     <li><a href="#">Новости</a></li>
                 </ol>
                 <h2>Новости</h2>

             </div>
         </section><!-- Конец Хлебных крошек -->

         <!-- ======= Секция блога ======= -->
         <section id="blog" class="blog">
             <div class="container" data-aos="fade-up">

                 <div class="row">

                     <div class="col-lg-8 entries col-cm-12">

                     <div id="load-more"> Еще </div>

                     </div><!-- Конец списка записей блога -->
                    
                     <div class="col-lg-4 col-cm-12">
                        
                         <div class="sidebar">
                            
                             <h3 class="sidebar-title">Выход</h3>
                             <div class="sidebar-item search-form">
                                 <form action="">
                                     <input type="text">
                                     <button type="submit"><i class="bi bi-search"></i></button>
                                 </form>
                             </div><!-- Конец формы поиска в боковой панели -->
                            


                               <div class="calendar">
                                 <div class="calendar-header">
                                   <button id="prevBtn">&lt;</button>
                                   <h2 id="monthYear"></h2>
                                   <button id="nextBtn">&gt;</button>
                                 </div>
                                 <div class="calendar-body">
                                   <table class="calendar-table">
                                     <thead>
                                       <tr>
                                         <th>Вс</th>
                                         <th>Пн</th>
                                         <th>Вт</th>
                                         <th>Ср</th>
                                         <th>Чт</th>
                                         <th>Пт</th>
                                         <th>Сб</th>
                                       </tr>
                                     </thead>
                                     <tbody id="calendarBody"></tbody>
                                   </table>
                                 </div>
                               </div>
                                 <a href="https://lex.uz/docs/-6600413">
                                   <img id="img-2030" src="/assets/img/2030.jpg">
                                 </a>

                                     <h3 class="h3">Категория</h3>
                                     <button id="btn-1" class="btn btn-light">Политика</button>
                                     <button id="btn-2" class="btn btn-light">Социальное</button>
                                     <button id="btn-3" class="btn btn-light">Экономика</button>
                                     <button id="btn-4" class="btn btn-light">Экология</button>
                                     <button id="btn-5" class="btn btn-light">Бизнес</button>
                                     <button id="btn-6" class="btn btn-light">Статистика</button>
                                     <button id="btn-7" class="btn btn-light">Здравоохранение</button>
                               </div>
                            <!-- </div> -->

                        </div><!-- Конец боковой панели блога -->


                        </div>

                    </div>
                </div>
        </section><!-- Конец секции блога -->

    </main><!-- Конец #main -->
 
</x-main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <x-js-link>
        <!-- js ссылки -->
    </x-js-link>

    <script>
    function posts() {
    $.ajax({
        url: 'http://127.0.0.1:8000/api/sixnew',
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("Записи : ", data.posts)
        },
        error: function () {
            alert("Произошла ошибка");
        }
    })
  }

  document.addEventListener("DOMContentLoaded", posts);

$.ajax({
    url: 'http://127.0.0.1:8000/api/sixnew',
    type: "GET",
    dataType: "json",
    success: function (data) {

        for (let i = 0; i < data.posts.length; i++) {

            let myContainer = document.createElement('div'),
                myCard = document.createElement('div');
                myCardImage = document.createElement('img'),
                myCardContent = document.createElement('div'),
                myCardTitle = document.createElement('h3'),
                myCardText = document.createElement('p'),
                myBtn = document.querySelector('#load-more');
            
            myContainer.setAttribute("id", `newId-${1+i}`)

            myContainer.classList.add('my-container');
            myCard.classList.add('my-card');
            myCardImage.classList.add('my-card-image');

            myCardImage.src = data.posts[i].photo_path;
            myCardTitle.innerText = data.posts[i].title;
            myCardText.innerText = data.posts[i].content;
            
            myContainer.appendChild(myCard);
            myCard.appendChild(myCardImage);
            myCard.appendChild(myCardContent);
            myCardContent.appendChild(myCardTitle);
            myCardContent.appendChild(myCardText);
            
            document.querySelector(".entries").insertBefore(myContainer, myBtn);
        }

    },
    error: function () {
        alert("Данные не были найдены");
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    const monthYearDisplay = document.getElementById('monthYear');
    const calendarBody = document.getElementById('calendarBody');

    function generateCalendar(month, year) {
        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const startingDay = firstDayOfMonth.getDay();

        monthYearDisplay.textContent = `${getMonthName(month)} ${year}`;

        let date = 1;
        let calendarHTML = '';

        for (let i = 0; i < 6; i++) {
            calendarHTML += '<tr>';
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < startingDay) {
                    calendarHTML += '<td></td>';
                } else if (date > daysInMonth) {
                    break;
                } else {
                    calendarHTML += `<td${(date === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) ? ' class="current-month"' : ''}>${date}</td>`;
                    date++;
                }
            }
            calendarHTML += '</tr>';
            if (date > daysInMonth) {
                break;
            }
        }
        calendarBody.innerHTML = calendarHTML;
    }

    function getMonthName(monthIndex) {
        const months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь '];
         return months[monthIndex];
     }
    generateCalendar(currentMonth, currentYear);

    document.getElementById('prevBtn').addEventListener('click', function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });

    document.getElementById('nextBtn').addEventListener('click', function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });
});

        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 3;

      loadMoreBtn.onclick = () => {
         let boxes = [...document.querySelectorAll('.my-container')];
         for (var i = currentItem; i < currentItem + 3; i++) {
            boxes[i].style.display = 'inline-block';
         }
         currentItem += 3;

         if (currentItem >= boxes.length) {
            loadMoreBtn.style.display = 'none';
         }
      }


    </script>

</body>

</html>

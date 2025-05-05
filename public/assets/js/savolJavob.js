const savolJavobUrl = "https://new.amudarya.uz/api/questions"
fetch(savolJavobUrl)
    .then(data => data.json())
    .then((data) => {

        let accordion = document.querySelector(".accordion");
        for (let i = 0; i < data[0].data.length; i++) {
            accordion.innerHTML += `
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed d-block" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse${i}" aria-expanded="false"
                        aria-controls="collapse${i}">
                        <p class="text-dark" style="font-weight: 600; text-align: justify">${data[0].data[i].question_uz}</p>
                        <h6 class="fs-6 text-success">Javob</h6>
                    </button>
                </h2>
                <div id="collapse${i}" class="accordion-collapse collapse bg-light"
                    aria-labelledby="heading${i}" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="color: #626160; text-align: justify">${data[0].data[i].answer_uz}</div>
                </div>
            </div>
            `
        }
    })
    .catch(() => {
        document.querySelector('.not__found-questionanswer').style.display = "block"
    })




























// async function postData(url = "", data = {}) {
//     // Default options are marked with *
//     const response = await fetch(url, {
//         method: "POST",
//         mode: "cors", // no-cors, *cors, same-origin
//         cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
//         credentials: "same-origin", // include, *same-origin, omit
//         headers: {
//             "Content-Type": "application/json",
//             // 'Content-Type': 'application/x-www-form-urlencoded',
//         },
//         redirect: "follow", // manual, *follow, error
//         referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
//         body: JSON.stringify(data), // body data type must match "Content-Type" header
//     });
//     return response.json(); // parses JSON response into native JavaScript objects
// }

// postData("https://example.com/answer", { answer: 42 }).then((data) => {
//     console.log(data); // JSON data parsed by `data.json()` call
// });

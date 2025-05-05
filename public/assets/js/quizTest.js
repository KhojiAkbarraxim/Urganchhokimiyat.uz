let pollQuestion = document.querySelector('.poll-question'),
    pollResult = document.querySelector('.poll-result')

pollQuestion.addEventListener('click', (event) => {
    if (confirm('Javobingizni tastiqlaysizmi ?')) {
        pollQuestion.style.display = 'none'
        pollResult.style.display = 'block'
        localStorage.setItem('poll-question', 'none')
        localStorage.setItem('poll-result', 'block')

        fetch('https://new.amudarya.uz/api/polls')
            .then(data => data.json())
            .then(data => {

                fetch(`https://new.amudarya.uz/api/voting/answer/${event.target.id}/pollId/${data.polls.data[0].id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ poll: 1 })
                })
                    .then(data => data.json())
                    .then(data => console.log(data))

                let shortForm = data.polls.data[0],
                    pollTitle = document.querySelector('#poll-title'),
                    votes = [shortForm.great, shortForm.good, shortForm.acceptable, shortForm.unacceptable],
                    arr = [
                        document.querySelector('#span-notbad'),
                        document.querySelector('#span-good'),
                        document.querySelector('#span-nice'),
                        document.querySelector('#span-great')
                    ]

                console.log(shortForm);

                pollTitle.innerText = shortForm.question

                function showResults() {
                    let totalVotes = votes.reduce((total, count) => total + count, 0);
                    if (totalVotes > 0) {
                        let percentages = votes.map(count => (count / totalVotes) * 100);
                        percentages.forEach((percentage, index) => {
                            document.querySelector(`.m-btn${index + 1}`).style.width = percentage.toFixed(2) + "%";
                            arr[index].textContent = percentage.toFixed(2) + "%"
                        });
                    }
                }
                showResults();
            })
    }

})

if (localStorage.getItem('poll-question') == 'none' && localStorage.getItem('poll-result') == 'block') {
    pollQuestion.style.display = localStorage.getItem('poll-question')
    pollResult.style.display = localStorage.getItem('poll-result')
}
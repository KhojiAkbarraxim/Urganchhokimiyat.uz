<div class="card">
    <img src="/assets/img/hokim.jpg" class="card-img-top">
    <div class="card-body">
        <p class="card-text">
            Амударё туман хокими <br> Хожаметов Сабир
        </p>
        @include('components.calendar')
        <a href="https://lex.uz/docs/-6600413">
            <img id="img-2030" src="/assets/img/2030.jpg">
        </a>
        <a href="/greenArea">
            <div class="green-area">
                <img width="40" height="40" style="vertical-align: baseline;  margin-right: -11px"
                    src="https://img.icons8.com/officexs/40/deciduous-tree.png" alt="deciduous-tree" />
                <img width="30" height="30" style="vertical-align: baseline;  margin-right: -11px"
                    src="https://img.icons8.com/offices/30/deciduous-tree.png" alt="deciduous-tree" />
                <img width="16" height="16" style="vertical-align: baseline; margin-right: -6px"
                    src="https://img.icons8.com/officexs/16/deciduous-tree.png" alt="deciduous-tree" />
                Yashil xudud
            </div>
            <div class="green-area">
                <img width="48" height="48" src="https://img.icons8.com/emoji/48/recycling-symbol-emoji.png"
                    alt="recycling-symbol-emoji" />
                Chiqindi yig'ish
            </div>
        </a>
    </div>
    <div class="card-body">
        <h5 class="card-title text-center" id="poll-title"></h5>
        <hr>
        <div class="poll-question">
            <input id="1" type="submit" class="btn btn-outline-success w-100 mt-1" value="Аъло">
            <input id="2" type="submit" class="btn btn-outline-primary w-100 mt-1" value="Яхши">
            <input id="3" type="submit" class="btn btn-outline-warning w-100 mt-1" value="Қониқарли">
            <input id="4" type="submit" class="btn btn-outline-danger w-100 mt-1" value="Қониқарсиз">
        </div>
        <div class="poll-result" style="display: none">
            <div>
                <div>
                    <span>Аъло</span> - <span id="span-notbad">0%</span>
                </div>
                <input type="submit" class="m-btn1 q-nice" value="">
                <span class="q-border1"></span>
            </div>
            <div>
                <div>
                    <span>Яхши</span> - <span id="span-good">0%</span>
                </div>
                <input type="submit" class="m-btn2 q-good" value="">
                <span class="q-border2"></span>
            </div>
            <div>
                <div>
                    <span>Қониқарли</span> - <span id="span-nice">0%</span>
                </div>
                <input type="submit" class="m-btn3 q-notbad" value="">
                <span class="q-border3"></span>
            </div>
            <div>
                <div>
                    <span>Қониқарсиз</span> - <span id="span-great">0%</span>
                </div>
                <input type="submit" class="m-btn4 q-bad" value="">
                <span class="q-border4"></span>
            </div>
        </div>
    </div>
</div>

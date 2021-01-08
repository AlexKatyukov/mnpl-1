<div class="mdl-layout mdl-js-layout">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout__title">МНПЛ-счётчик</span>
        </div>
    </header>
    <main class="mdl-layout__content">
        <div class="mdl-grid">
            <button id="newGameButton" class="mdl-cell mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Новая игра
            </button>
            <button id="serverGameButton" class="mdl-cell mdl-button mdl-js-button mdl-button--disabled mdl-button--colored">
                Загрузить сохранённую на сайте игру
            </button>
            <button id="fileGameButton" class="mdl-cell mdl-button mdl-js-button mdl-button--disabled mdl-button--colored">
                Загрузить файл с игрой
            </button>
        </div>
        <div id="newGameContainer" style="display: none;">
            <div class="mdl-grid">
                <div id="newGamePlayersNumber" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone">
                    <input id="newGamePlayersNumberSlider" class="mdl-slider mdl-js-slider" type="range" min="2" max="6" value="4" tabindex="0">
                    <span id="newGamePlayersNumberSpan">4 игрока</span>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-phone">
                </div>
                <div class="rulesTimeWr mdl-cell mdl-cell--12-col">
                    Правила действуют с
                    <div class="rulesTime mdl-textfield mdl-js-textfield">
                        <input class="rulesTimeBegin mdl-textfield__input" type="text" id="rulesTimeBegin-1" value="первой" disabled>
                        <label class="mdl-textfield__label" for="rulesTimeBegin-1">Начало действия правил</label>
                        <span class="mdl-textfield__error">Введите число</span>
                    </div>
                    и до
                    <div class="rulesTime mdl-textfield mdl-js-textfield">
                        <input class="rulesTimeEnd mdl-textfield__input" type="text" id="rulesTimeEnd-1" value="последней" disabled>
                        <label class="mdl-textfield__label" for="rulesTimeEnd-1"></label>
                        <span class="mdl-textfield__error">Введите число</span>
                    </div>
                    минуты игры
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--6-col-phone mdl-textfield mdl-js-textfield">
                    <input class="ruleMoneyStart mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="ruleMoneyStart-1">
                    <label class="mdl-textfield__label" for="ruleMoneyStart-1">Денег в начале</label>
                    <span class="mdl-textfield__error">Введите число</span>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--6-col-phone mdl-textfield mdl-js-textfield">
                    <input class="ruleSalary mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="ruleSalary-1">
                    <label class="mdl-textfield__label" for="ruleSalary-1">Денег за круг (зарплата)</label>
                    <span class="mdl-textfield__error">Введите число</span>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--6-col-phone mdl-textfield mdl-js-textfield">
                    <input class="ruleBonus mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="ruleBonus-1">
                    <label class="mdl-textfield__label" for="ruleBonus-1">Бонус за попадание на старт</label>
                    <span class="mdl-textfield__error">Введите число</span>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--6-col-phone mdl-textfield mdl-js-textfield">
                    <input class="ruleTax mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="ruleTax-1">
                    <label class="mdl-textfield__label" for="ruleTax-1">Налог на ренту (процент)</label>
                    <span class="mdl-textfield__error">Введите число</span>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent">
                        <i class="material-icons">add</i>
                    </button> Добавить правила
                </div>
            </div>
        </div>
        <div id="serverGameContainer" style="display: none;">
        </div>
        <div id="fileGameContainer" style="display: none;">
        </div>

        <script>
            // on new game button click open new game container and close other containers
            $('#newGameButton').on('click', function () {
                $('#newGameButton').removeClass('mdl-button--colored');
                $('#newGameButton').addClass('mdl-button--accent');
                $('#newGameContainer').css('display', 'block');
                $('#serverGameContainer').css('display', 'none');
                $('#fileGameContainer').css('display', 'none');
            })

            // on players number change display new
            $('#newGamePlayersNumberSlider').on('change', function(){
                if(parseInt($(this).val()) < 5) {
                    $('#newGamePlayersNumberSpan').html($(this).val() + " игрока");
                } else {
                    $('#newGamePlayersNumberSpan').html($(this).val() + " игроков");
                }
            })
        </script>
    </main>
</div>
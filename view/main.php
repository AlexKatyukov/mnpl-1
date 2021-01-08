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
                <div class="mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                    <input id="newGamePlayersNumberSlider" class="mdl-slider mdl-js-slider" type="range" min="2" max="6" value="4" tabindex="0">
                    <span id="newGamePlayersNumberSpan">4 игрока</span>
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
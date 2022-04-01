
import '../styles/game.scss';

var wordLength = 6

var inputWord = $('#inputWord')
inputWord.attr('maxlength', wordLength)
inputWord.attr('spellcheck', false)



var grid = $('table')

// Ligne
$(grid).append(`<tr id="line-1"></tr>`)

var line = $('#grid tr')

// Cases
for(let i = 1; i <= wordLength; i++)
{
    $(line).append(`<td id="line-${i}"></td>`)
}

var actualLine = 1




inputWord.on('keyup', input)

function input(e)
{
    var word = $('#inputWord').val();

    console.log(word)
    $('')

    var letters = $(`#line-${actualLine} td`)

    $(letters).each((index, letter) =>
    {
        if (word[index]) {
            $(letter).text(word[index])
        }
        else {
            $(letter).text('')
        }
    });
}


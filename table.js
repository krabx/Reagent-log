let line = $('.tableSql')
let buttonReinA = $('#ReinA')
let buttonGBA = $('#GBA')
let buttonTHA = $('#THA')
let buttonRA = $('#RA')
let buttonLA = $('#LA')
let buttonDA = $('#DA')
let buttonPA = $('#PA')
let buttonFL = $('#FL')
let buttonEA = $('#EA')
let buttonSpeedAdditive = $('#SA')
let buttonTA = $('#TA')
let buttonAllReagent = $('#AR')
let td = $('.type')
let table = $('#tableReagent')
let search = $('#search')

buttonReinA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Армирующая добавка'){
            $(this).parent().hide()
        }
    })
})
buttonGBA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Газоблокатор'){
            $(this).parent().hide()
        }
    })
})
buttonTHA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Загуститель'){
            $(this).parent().hide()
        }
    })
})
buttonRA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Замедлитель'){
            $(this).parent().hide()
        }
    })
})
buttonLA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Облегчитель'){
            $(this).parent().hide()
        }
    })
})
buttonDA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Пеногаситель'){
            $(this).parent().hide()
        }
    })
})
buttonPA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Пластификатор'){
            $(this).parent().hide()
        }
    })
})
buttonFL.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Понизитель фильтрации'){
            $(this).parent().hide()
        }
    })
})
buttonEA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Расширяющая добавка'){
            $(this).parent().hide()
        }
    })
})
buttonSpeedAdditive.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Ускоритель'){
            $(this).parent().hide()
        }
    })
})
buttonTA.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        if ($(this).text() !== 'Утяжеляющая добавка'){
            $(this).parent().hide()
        }
    })
})
buttonAllReagent.click(function(){
    $('#tableReagent > tbody > tr > .type').each(function(){
        $(this).parent().show()
    })
})


// $(document).ready(function(){
//     search.keyup(function(){
//     $.each($('#tableReagent tbody tr'), function() {
//         if($(this).text().toLowerCase().indexOf($(this).val().toLowerCase()) === -1) {
//             $(this).hide();
//         } else {
//             $(this).show();                
//         }
//     });
//     });
// });

$(document).ready(function(){
    search.keyup(function(){
    _this = this;
    $.each($('#tableReagent tbody tr'), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
            $(this).hide();
        } else {
            $(this).show();                
        }
        });
    });
});
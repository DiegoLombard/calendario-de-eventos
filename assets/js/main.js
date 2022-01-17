$(function(){
  let data = new Date();
  let mesAtual = data.getMonth() +1;
  $('#mes_'+mesAtual).show();
  let diaAtual = data.getDate();

  $('#mes_'+mesAtual).show().find('.dia_'+ diaAtual).addClass('atual')
  function hideShow() {
    if(mesAtual > 12) mesAtual = 1;
    if(mesAtual < 1) mesAtual = 12;
    $('.mes').hide();
    $('#mes_'+mesAtual).show()
  }

  $('#avanca').on('click', (e) =>{
    e.preventDefault();
    mesAtual++;
    hideShow();
    return false;
  })

  $('#volta').on('click', (e) =>{
    e.preventDefault();
    mesAtual--;
    hideShow();
    return false;
  })
})

$(function(){
  $('.ms').multipleSelect({
    placeholder: $('.ms').data('selected'),
    minimumCountSelected: 0,
    countSelected: $('.ms').data('selected') + '&nbsp;(#)'
  });
});

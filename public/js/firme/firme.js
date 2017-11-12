function goBack() {
   window.history.back();
}
/* global $ */
$(function() {
   $(".dp").datepicker({ dateFormat: 'yy-mm-dd' });
});

$('.nav-side .nav-toggle').on('click', function (e) {
	e.preventDefault();
	$(this).parent().toggleClass('nav-open');
});
$('.nav-side  .cancel').on('click', function (e) {
	e.preventDefault();
	$(this).parent().toggleClass('nav-open');
})
$('.cancel').click(function (e) {
	e.preventDefault();
  $(this).toggleClass('invis');
});
$('.sandwich').click(function (e) {
	e.preventDefault();
  $(this).toggleClass('nonesandwich');
})
$('.nonesandwich').click(function (e) {
	e.preventDefault();
  $(this).toggleClass('sandwich');
})

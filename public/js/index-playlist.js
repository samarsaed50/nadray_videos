
$('.video-playlist-wrap.two-col .scroll-wrap').perfectScrollbar();

$('.video-playlist-wrap').not('.two-col').find('.scroll-wrap').slick({
  slidesToShow: 6,
  responsive: [
  {
    breakpoint: 980,
    settings: {
      slidesToShow: 4 } },


  {
    breakpoint: 720,
    settings: {
      slidesToShow: 2 } }] });
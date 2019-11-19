$('.counter').each(function () {
  var $this = $(this),
    countTo = $this.attr('data-count');

  $({
    countNum: $this.text()
  }).animate({
      countNum: countTo
    },

    {

      duration: 8000,
      easing: 'linear',
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum);
        //alert('finished');
      }

    });
});

// Click configuration button add edit and delete

let click = document.getElementById("buttonAdd");

function clickOpen() {
  click.getElementById("form").style.display = block;

}

function clickClose() {
  click.getElementById("form").style.display = none;

}

$(function(){
  let slider = $('input.image-rotate1'),
      image = $('#image1');
  
  slider.on('change mousemove', function(){
     image.css('transform', 'rotate(' + $(this).val() + 'deg)')
  });
  
  
})

$(function(){
  let slider = $('input.image-rotate2'),
      image = $('#image2');
  
  slider.on('change mousemove', function(){
     image.css('transform', 'rotate(' + $(this).val() + 'deg)')
  });
  
  
})


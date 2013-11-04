/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



var $container = $('#items');
    $container.imagesLoaded(function(){
    $container.masonry({
      itemSelector : '.item',
      columnWidth : 290,
      isAnimated: true
    });
  });


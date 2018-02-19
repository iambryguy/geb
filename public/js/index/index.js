if($.trim($('div#announcement').text()).length == 0){
    console.log('nothing here' + $('div#announcement').text().length );
    $('div#announcement').hide();
  }
  else {
    console.log('something there');
  }
var default_id = 'paQ10POrZh8' ;
function update_images(){
  var prefix = 'http://img.youtube.com/vi/' ;
  var suffix = '.jpg' ;
  var id = get_youtube_id() ;
  for(var i=0 ; i<4  ; i++){
    Get('img_'+i).src = prefix + id + '/' + i + suffix ;
  }
}
function get_youtube_id(){
  var url = Get('youtube_url').value ;
  var parts = url.split('v\=') ;
  var id = default_id ;
  if(parts.length>1){
    id = parts[1].split('&')[0] ;
  }
  else{
    alert('Warning, I could not parse ' + url) ;
  }
  return id ;
}
function start(){
  Get('submit_change').addEventListener('click', update_images, false) ;
}
function Get(id){ return document.getElementById(id) ; }

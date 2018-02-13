const url = 'http://shareyourpet.api.serverbox.local/cdyj98bdk5t1p87z';
const nonce = url + '/get_nonce/?controller=user&method=register'
const users = 'http://shareyourpet.api.serverbox.local/wp-json/wp/v2/users'

//const loginCookie = url+'/cdyj98bdk5t1p87z/user/generate_auth_cookie'
// const sendPosts = url+'/cdyj98bdk5t1p87z/posts';
const start = {
  onReady: function(){
    //start.getUser();
    //start.createUser();
    start.menuActive();
  },

  getUser:function() {
    $.getJSON( users, function( data ) {
      console.log( data );
    });
  },

  createUser:function() {
    $.get( '/api/post/create-user.php', function( data ) {
      console.log(data);
      console.log( "Load was performed." );
    });
  },

  menuActive:function() {
    $('.btn').on('click', function(){
      console.log('click');
      $('.header-wrapper').toggleClass('active');
      $(this).toggleClass('active');
    })
  },
  
}

jQuery( document ).ready( start.onReady );

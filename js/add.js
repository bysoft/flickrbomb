(function ($) {
  
  Friend = Backbone.Model.extend({
    //Create a model to hold friend atribute
    name: null,

    // need local storage
    localStorage: localStorage,


  });
  
  Friends = Backbone.Collection.extend({
    //This is our Friends collection and holds our Friend models
    initialize: function (models, options) {
      this.bind("add", options.view.addFriendLi);
      //Listen for new additions to the collection and call a view function if so
    }
  });
  
  AppView = Backbone.View.extend({
    el: $("body"),
    initialize: function () {
      this.friends = new Friends( null, { view: this });
      //Create a friends collection when the view is initialized.
      //Pass it a reference to this view to create a connection between the two
    },
    events: {
      //	"click #add-friend":  "showPrompt",
      "click #add-photo":  "showPrompt",
      "click .flickrbombContainer>div img": "showLarge",
      "click .img-lg": "hideLg",
    },
    customEvents: function(){
      $('.flickrbomb').bind('click', function(e){
        //console.log(e);
      });
    },
    showPrompt: function () {
      var friend_name = prompt("where are you traveling to?");
      var friend_model = new Friend({ name: friend_name });
      //Add a new friend model to our friend collection
      this.friends.add( friend_model );
    },
    hideLg: function(){
      $('.img-lg').remove();
    },
    showLarge: function(event){
	event.preventDefault();
	var $firstItem = $('.old-vs-new ul .flickrbombWrapper img').last();      
//console.log($firstItem);
//	$('<li/>').appendTo('.old-vs-new ul');
        if (!$('.img-lg').length){
        $('.old-vs-new ul li').eq(1).append($firstItem.clone().css('height','auto').addClass('img-lg'));
	}
    },
    addFriendLi: function (model) {
      //The parameter passed is a reference to the model that was added
      $(".old-vs-new>ul").append("<li>" + model.get('name') + "</li>");
      //$('.old-vs-new>ul').append('<li class="no-caption"><img src="images/loader.gif" width="100px" height="100px"></li>');
      var $flickrModelName = "flickr" + model.get('name');
      //$('.no-caption img').attr("src",$flickrModelName);
      $('.old-vs-new>ul').append('<li class="no-caption"><img class=loader src=images/loader.gif /><img src="flickr://' + model.get('name') + '" width="100" height="100"></li>');
      startFlickrBomb();
      //console.log(model.cid);
      var listIndex = $('#friends-list>li').length - 1;
var $photoTitle = $('#friends-list>li').eq(listIndex).text();
      console.log($photoTitle);

      //Use .get to receive attributes of the model
    }
  });
  
  var appview = new AppView;
})(jQuery);


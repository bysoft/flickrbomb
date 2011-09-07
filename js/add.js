(function ($) {
  
  Friend = Backbone.Model.extend({
    //Create a model to hold friend atribute
    name: null
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
      "click #add-friend":  "showPrompt",
      "click #add-photo":  "showPrompt",
      "click .flickrbombContainer>div": "showLarge",
    },
    showPrompt: function () {
      var friend_name = prompt("where are you traveling to?");
      var friend_model = new Friend({ name: friend_name });
      //Add a new friend model to our friend collection
      this.friends.add( friend_model );
    },
    showLarge: function(event){
	event.preventDefault();
	var $firstItem = $('.old-vs-new ul img').eq(0);      
console.log($firstItem);
	$('<li/>').appendTo('.old-vs-new ul');
        $('.old-vs-new ul li').append($firstItem.clone());
//        console.log('show large');
    },
    addFriendLi: function (model) {
      //The parameter passed is a reference to the model that was added
      $(".old-vs-new>ul").append("<li>" + model.get('name') + "</li>");
      $('.old-vs-new>ul').append('<li class="no-caption"><img src="flickr://' + model.get('name') + '" width="100px" height="100px"></li>');
      startFlickrBomb();
      console.log(model.cid);
      var listIndex = $('#friends-list>li').length - 1;
      console.log($('#friends-list>li').eq(listIndex).text());

      //Use .get to receive attributes of the model
    }
  });
  
  var appview = new AppView;
})(jQuery);


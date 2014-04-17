/* Attach a submit handler to the form */
$("#search").click(function(event) {

    /* Stop form from submitting normally */
    event.preventDefault();

    /* Clear result div*/
   // $("#results").html('<div class="jumbotron"><div>');

    /* Get some values from elements on the page: */
    var values = $('#query').serialize();

    /* Send the data using post and put the results in a div */
    $.ajax({
        url: "solr.php",
        type: "post",
        data: values,
        dataType: 'json',
        success: function(ret){
            //alert("success");
           // var template = JSON.parse(JSON.stringify(ret.value[0]));
           ret.response.docs.forEach(function(entry) {
				$('#results').append('<div class="jumbotron" style="margin-top: 10px"><h3>'+entry.titleText+'</h3>'+entry.text+'</div>');
			});
        },
        error:function(){
            alert("failure");
            $("#results").html('There is error while submit');
        }
    });
});

function get_parent(parent_id){
	$.ajax({
        url: "solr.php",
        type: "post",
        data: values,
        dataType: 'json',
        success: function(ret){
            //alert("success");
           // var template = JSON.parse(JSON.stringify(ret.value[0]));
           ret.response.docs.forEach(function(entry) {
				$('#results').append('<div class="jumbotron" style="margin-top: 10px"><h3>'+entry.titleText+'</h3>'+entry.text+'</div>');
			});
        },
        error:function(){
            alert("failure");
            $("#results").html('There is error while submit');
        }
    });
}

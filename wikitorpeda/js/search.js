/* Attach a submit handler to the form */
$("#search").click(function(event) {

    /* Stop form from submitting normally */
    event.preventDefault();
	$("#results").html('');
    /* Clear result div*/
   // $("#results").html('<div class="jumbotron"><div>');

    /* Get some values from elements on the page: */
    var values = $('#query').serialize();
    var options_array = new Array();
    options_array[0]=document.getElementById("query").value;

    if (document.getElementById('check_date').checked){
        var date_options = new Array();
        date_options[0]=true;
        date_options[1]=new Date(document.getElementById("dp1").value);
        date_options[2]=new Date(document.getElementById("dp2").value);
        options_array[1]=date_options;
    }else{
        var date_options = new Array();
        date_options[0]=false;
        options_array[1]=date_options;
    }
    
    if (document.getElementById('check_comment').checked){
        var comment_options = new Array();
        comment_options[0]=true;
        comment_options[1]=document.getElementById('comment').value;
        options_array[2]=comment_options;
    }
    /* Send the data using post and put the results in a div */
    $.ajax({
        url: "solr.php",
        type: "post",
        data: {result:JSON.stringify(options_array)},
        dataType: 'json',
        success: function(ret){
            //alert("success");
           // var template = JSON.parse(JSON.stringify(ret.value[0]));
           ret.response.docs.forEach(function(entry) {
                                var revisionId = entry.revision;
				$('#results').append('<div class="jumbotron" style="margin-top: 10px"><h3>'+entry.titleText+'</h3>'+ret.highlighting[revisionId].text+'</div>');
			});
//           ret.highlighting.forEach(function(entry) {
//            $('#results').append('<div class="jumbotron" style="margin-top: 10px"><h3>'+entry.titleText+'</h3>'+entry.text+'</div>');
//            });
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

//$("input.question").click(function(){
    //$("#date_searcher").toggle();
//    $("#comment_searcher").toggle();
//});


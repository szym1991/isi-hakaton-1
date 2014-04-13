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
        success: function(ret){
            //alert("success");
            $("#results").html('<div class="jumbotron">'+ret+'<div>');
        },
        error:function(){
            alert("failure");
            $("#results").html('There is error while submit');
        }
    });
});
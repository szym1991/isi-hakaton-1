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

    /* Send the data using post and put the results in a div */
    $.ajax({
        url: "solr.php",
        type: "post",
        data: {result:JSON.stringify(options_array)},
        dataType: 'json',
        success: function(ret){
            //alert("success");
           // var template = JSON.parse(JSON.stringify(ret.value[0]));
           var i=1;
           $('#results').append('<div id="page_container"><div class="page_navigation" style="padding-bottom: 50px;padding-top: 50px;"></div><ul class="content"></ul><div class="page_navigation"></div></div>');
           ret.response.docs.forEach(function(entry) {
                                var revisionId = entry.revision,
                                    date_time = entry.timestamp.split("T");
                                    date_time[1]=date_time[1].replace("Z",""); 

				$('#results .content').append('<li><div class="jumbotron" style="padding-top: 5px;"><h3>'+i+'. <a href="revision.php?id='+revisionId+'">'+entry.titleText+'</a></h3>'+ret.highlighting[revisionId].text+'</br></br><hr style="color:#050000;"><p style="font-size:10px;"><b>Data: </b>'+date_time[0]+'  <b>Czas: </b>'+date_time[1]+'</p></div></li>');
                                i++;	

			});
             //$('#results').append('');
             var el = document.getElementById("per_page");
             var selectedArea = el.options[el.selectedIndex].value;
             $('#page_container').pajinate({items_per_page : selectedArea});
             window.scrollBy(0,350);
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


$("input.question").click(function(){
    $("#date_searcher").toggle();
});


/* Attach a submit handler to the form */
$("#search").click(function(event) {

    var i = 1;

    /* Stop form from submitting normally */
    event.preventDefault();
    $("#results").html('');
    /* Clear result div*/
    // $("#results").html('<div class="jumbotron"><div>');

    /* Get some values from elements on the page: */
    var values = $('#query').serialize();
    var options_array = new Array();
    options_array[0] = document.getElementById("query").value;
    if (options_array[0] === "") {
        options_array[0] = "*";
    }
    if (document.getElementById('check_date').checked) {
        var date_options = new Array();
        date_options[0] = true;
        date_options[1] = new Date(document.getElementById("dp1").value);
        date_options[2] = new Date(document.getElementById("dp2").value);
        options_array[1] = date_options;
    } else {
        var date_options = new Array();
        date_options[0] = false;
        options_array[1] = date_options;
    }
    if (document.getElementById('check_comment').checked) {
        var comment_options = new Array();
        comment_options[0] = true;
        comment_options[1] = document.getElementById("comment").value;
        options_array[2] = comment_options;
    } else {
        var comment_options = new Array();
        comment_options[0] = false;
        options_array[2] = comment_options;
    }
    options_array[3] = 1;
    var el = document.getElementById("per_page");
    var selectedArea = el.options[el.selectedIndex].value;
    options_array[4] = selectedArea;

    /* Send the data using post and put the results in a div */
    $.ajax({
        url: "solr.php",
        type: "post",
        data: {result: JSON.stringify(options_array)},
        dataType: 'json',
        success: function(ret) {
            //alert("success");
            // var template = JSON.parse(JSON.stringify(ret.value[0]));
            if (ret[2] !== 0) {
                $('#results').append('<div id="page_container"><h2 style="text-align:center;">Znaleziono <b>'+ret[2]+'</b> wyników</h2><div id="pagination"></div><div id="loader" style="line-height: 115px; text-align: center;"></div><div id="results_view"></div></div>');
                ret[0].response.docs.forEach(function(entry) {
                    var revisionId = entry.revision,
                            date_time = entry.timestamp.split("T"),
                            snip;
                    date_time[1] = date_time[1].replace("Z", "");
                    if (ret[0].highlighting[revisionId].text !== undefined) {
                        snip = ret[0].highlighting[revisionId].text;
                    }
                    else {
                        snip = entry.text.substring(0, 250);
                    }

                    $('#results_view').append('<div class="jumbotron" style="padding-top: 5px;"><h3>' + i + '. <a href="revision.php?id=' + revisionId + '">'
                            + entry.titleText + '</a></h3>'
                            + snip + '</br></br><hr style="color:#050000;"><p style="font-size:10px;"><b>Data: </b>'
                            + date_time[0] + '  <b>Czas: </b>' + date_time[1] + '</p><div style="text-align:center; font-size:15px;"><a href="allRevisions.php?id=' + entry.id + '">Zobacz wszystkie rewizje artykułu</a>'
                            + '<a style="padding-left:20px;" href="latestRevision.php?id=' + entry.id + '">Zobacz najnowszą rewizję artykułu</a></div></div>');
                    i++;

                });
                //$('#results').append('');

                //$('#page_container').pajinate({items_per_page : selectedArea});
                var curPage = 1;
                if (!curPage) {
                    curPage = 1;
                }
                var options = {
                    currentPage: curPage,
                    totalPages: ret[1],
                    alignment: 'center',
                    onPageChanged: function(e, oldPage, newPage) {
                        i = (newPage - 1) * options_array[4] + 1;
                        options_array[3] = newPage;
                        $("#results_view").html('');
                        $('#loader').html('<img alt="activity indicator" src="images/ajax-loader.gif"></img>');
                        $.ajax({
                            url: "solr.php",
                            type: "post",
                            data: {result: JSON.stringify(options_array)},
                            dataType: 'json',
                            success: function(ret) {
                                //alert("success");
                                // var template = JSON.parse(JSON.stringify(ret.value[0]));

                                ret[0].response.docs.forEach(function(entry) {
                                    var revisionId = entry.revision,
                                            date_time = entry.timestamp.split("T"),
                                            snip;
                                    date_time[1] = date_time[1].replace("Z", "");
                                    if (ret[0].highlighting[revisionId].text !== undefined) {
                                        snip = ret[0].highlighting[revisionId].text;
                                    }
                                    else {
                                        snip = entry.text.substring(0, 250);
                                    }

                                    $('#results_view').append('<div class="jumbotron" style="padding-top: 5px;"><h3>' + i + '. <a href="revision.php?id=' + revisionId + '">'
                                            + entry.titleText + '</a></h3>'
                                            + snip + '</br></br><hr style="color:#050000;"><p style="font-size:10px;"><b>Data: </b>'
                                            + date_time[0] + '  <b>Czas: </b>' + date_time[1] + '</p><div style="text-align:center; font-size:15px;"><a href="allRevisions.php?id=' + entry.id + '">Zobacz wszystkie rewizje artykułu</a>'
                                            + '<a style="padding-left:20px;"href="latestRevision.php?id=' + entry.id + '">Zobacz najnowszą rewizję artykułu</a></div></div>');
                                    i++;

                                });
                                $('#loader').html('');
                            },
                            error: function() {
                                alert("Zapytanie jest błędne.");
                                //$("#results").html('There is error while submit');
                            }
                        });
                    }
                }

                $('#pagination').bootstrapPaginator(options);
                $('#pagination').css('display', 'block');
            }else{
                $('#results').append('<div id="page_container"><h2 style="text-align:center;">Brak wyników</h2></div>');
            }
            window.scrollBy(0, 350);
//           ret.highlighting.forEach(function(entry) {
//            $('#results').append('<div class="jumbotron" style="margin-top: 10px"><h3>'+entry.titleText+'</h3>'+entry.text+'</div>');
//            });
        },
        error: function() {
            alert("Zapytanie jest błędne.");
            //$("#results").html('There is error while submit');
        }
    });
});



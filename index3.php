<?php
session_start();
$sid = session_id();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset=utf-8 />
	<title>Online Bookstore</title>
	<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/font-awesome.css" />
	<script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="./plugin/jquery.twbsPagination.js"></script>
	<script src="./js/cookies.js"></script>
	
	<!--[if IE]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>

        #pleaseWaitDialog {
            width: 400px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -200px;
            padding: 20px;
        }

        /* When the body has the loading class, we turn
           the scrollbar off with overflow:hidden */
        body.loading {
            overflow: hidden;   
        }

        /* Anytime the body has the loading class, our
           modal element will be visible */
        body.loading .modal {
            display: block;
        }
        
        .col-centered{
            float: none;
            margin: 0 auto;
        }
        
        .modal-header {
            padding-bottom: 5px;
        }

        .modal-footer {
                padding: 0;
            }
    
        .modal-footer .btn-group button {
            height:40px;
            border-top-left-radius : 0;
            border-top-right-radius : 0;
            border: none;
            border-right: 1px solid #ddd;
        }
    
        .modal-footer .btn-group:last-child > button {
            border-right: 0;
        }
		
		body {
			padding:20px;
		}
		


    #custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    }
 
    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }

	#search_container{
		padding-bottom:20px;
	}
        
	</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-2">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
					<item>
					</item>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


	
	
</body>

<script>

(function($) {
    //https://esimakin.github.io/twbs-pagination/
	
	var guid = <?php echo"\"{$sid}\";";?>
	
	//Cookies.set('test_cookie', guid,{ expires: Infinity , domain: 'alliancedev.xyz'});
	
	console.log(Cookies.get('test_cookie'));
	
	console.log(guid);

    var myWait;
    myWait = myWait || (function () {
        var waitDiv = $('<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false"><div class="progress"> <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:98%"> LOADING... </div></div></div>');
        return {
            show: function() {
                waitDiv.modal();
            },
            hide: function () {
                waitDiv.modal('hide');
            },

        };
    })();


    myWait.show();

    // Set up some variables for our pagination
    var page = 1;
    var page_size = 10;
    var total_records = 0;
    var total_pages = 0;
    var rows = "";
    var item_box = "";

    /*
    products = {
        "columns":[
            0: "id"
            1: "category"
            2: "desc"
            3: "price"
            4: "img"
        ],
        "records": [
            [
                0: "1",
                1: "tablet",
                2: "Fire Tablet, 7" Display, Wi-Fi, 8 GB - Includes Special Offers, Black",
                3: "49.99",
                4: "http://..."
            ],
            [
            ...
            ]
        ]
    }
    */


    function loadTableData(page, page_size,sort,order) {
	
		var sort = typeof sort !== 'undefined' ?  sort.trim() : "id";
		var order = typeof order !== 'undefined' ?  ","+order : "";
    
        myWait.show();
                
        // Perform a get request to our api passing the page number and page size as parameters
		console.log("http://alliancedev.xyz/AllianceDev/api/api.php/products?order="+sort+order+"&page=" + page + "," + page_size);
        $.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?order="+sort+order+"&page=" + page + "," + page_size)

        // The '.done' method fires when the get request completes
        .done(function(data) {
        
           //console.log(data);
		   
            // Append our new html to this pages only 'thead' tag
            $('item').html(item_box);

            // Pull the products out of our json object 
            var records = data.products.records;

            // Start an empty html string
            item_box = "";
            for (var i = 0; i < records.length; i++) 
			{
                //Start a new row for each product and put the product id in a data-element
                item_box = item_box + '<div class="col-sm-4 col-lg-4 col-md-4">';
				item_box = item_box + '<div class="thumbnail"><img src="' + records[i][6] + '" alt="">';

                item_box = item_box + '<div class="caption"><h4 class="pull-right">$' + records[i][3]+'</h4>';
				item_box = item_box + '<h4><a href="#">' + records[i][1].substr(0,40) +'...</a></h4>';
				
				item_box = item_box + '<p>' + records[i][2].substr(0,100) + '...</a>.</p></div><div class="ratings">';
				item_box = item_box + '<p class="pull-right">15 reviews</p><p>';
				item_box = item_box + '<span class="glyphicon glyphicon-star"></span>';
				item_box = item_box + '<span class="glyphicon glyphicon-star"></span>';
				item_box = item_box + '<span class="glyphicon glyphicon-star"></span>';
				item_box = item_box + '<span class="glyphicon glyphicon-star"></span>';
				item_box = item_box + '<span class="glyphicon glyphicon-star"></span></p></div></div></div>';
            }

            // At this point "rows" should have 'page_size' number of items in it,
            // so append all those rows to the body of the table.
            $('item').html(item_box);
            
/*			
			
		
		
			

*/		
            myWait.hide();
			
		
            $('.fa-shopping-cart').click(function(){
                console.log($(this).closest('tr').data( "id" ));
                
				var item = [];
                $(this).closest('tr').find('td').each(function(){
					console.log($(this).text());
					item.push($(this).html());
				});
				console.log(item);
				addCartItem(item);
            })
    

        });
    } // End .done
	
	$('#updateCart').click(function(){
		$('.cart-item').each(function(){
			console.log($(this).find('.price').text());
			console.log($(this).find('.count').val());

		});
	});
    
    function getTotalPages(){
        $.get("./total_pages.txt")

        // The '.done' method fires when the get request completes
        .done(function(data) {

            var total_pages = data;
            loadTableData(1, 10);
            $('#pagination-demo').twbsPagination({
                totalPages: total_pages,
                visiblePages: 10,
                onPageClick: function (event, page) {
                    $('#page-content').text('Page ' + page);
                    loadTableData(page,10);
                }
            });
			
        });

    }
	
	$('#search-btn').click(function(event){
		event.preventDefault();
		var searchtxt = $('#search-keys').val();
		
        $.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?filter=desc,cs,"+searchtxt)

        // The '.done' method fires when the get request completes
        .done(function(data) {
			//console.log(data);
			$('tbody').html('');
			
			  // Pull the column names out of our json object 
            var cols = data.products.columns;

            // Start an html string with a row tag
            item_box = "<tr>";
            for (var i = 0; i < cols.length; i++) {

                // Continuously append header tags to our row
                item_box += "<th nowrap> " + cols[i] +"</th>";
				
            }

            // Finish off our row with an empty header tag 
            item_box = item_box + "<th style=\"width: 36px;\"></th></tr>";

            // Append our new html to this pages only 'thead' tag
            $('thead').html(item_box);

            // Pull the products out of our json object 
            var records = data.products.records;

            // Start an empty html string
            rows = "";
            for (var i = 0; i < records.length; i++) {

                //Start a new row for each product and put the product id in a data-element
                rows = rows + "<tr data-id="+records[i][0]+" id=id"+records[i][0]+">";

                // Loop through each item for a product and append a table data tag to our row
                for (var j = 0; j < records[i].length; j++) {
                
                                
                    // This is the last item in the record set so it's the img url.
                    if(j == records[i].length-1){
                        var result = records[i][j] .split(' ');
                        var img = result[0].replace("~","25");
                        records[i][j] = "<img src="+img+">";
                    }
                    rows = rows + "<td>" + records[i][j] + "</td>";
                }
                rows = rows + '<td style="vertical-align:middle" nowrap><i class="fa fa-shopping-cart" aria-hidden="true"></i></td>';
                // Finish the row for a product
                rows = rows + "</tr>";
            }

            // At this point "rows" should have 'page_size' number of items in it,
            // so append all those rows to the body of the table.
            $('tbody').html(rows);
		});
	});
    
	function addCartItem(item){
		
		var row=''+
		'<div class="row cart-item" id="item-'+item[0]+'">'+
			'<div class="col-xs-2">'+ item[4] +
			'</div>'+
			'<div class="col-xs-3">'+
			'	<h4 class="product-name"><strong>'+item[1]+'</strong></h4>'+
			'</div>'+
			'<div class="col-xs-7">'+
			'	<div class="col-xs-4 text-right">'+
			'		<h6><strong><span class="price">$'+item[3]+'</span><span class="text-muted"> x </span></strong></h6>'+
			'	</div>'+
			'	<div class="col-xs-5">'+
			'		<input type="text" class="form-control input-sm count" value="1">'+
			'	</div>'+
			'	<div class="col-xs-2">'+
			'		<button type="button" class="btn btn-link btn-xs">'+
			'			<span class="glyphicon glyphicon-trash"> </span>'+
			'		</button>'+
			'	</div>'+
			'</div>'+
		'</div>'+
		'<hr>';
		
		var postData = {};
		postData['uid']=guid;
		postData['pid']=item[0];
		postData['count']=1;
		postData['description']=item[1];
		postData['price']=item[3];
		postData['time-added']=Math.floor(Date.now() / 1000);
		
		console.log(postData);
		var cartTotal = parseFloat($('#cart-total').text());
		if(isNaN(cartTotal))
			cartTotal = 0;

		cartTotal += parseFloat(item[3]);
		console.log(cartTotal);
		$('#cart-body').append(row);
		$('#cart-total').text(cartTotal)
		$.post("http://alliancedev.xyz/AllianceDev/api/api.php/shopping_cart/",postData);
	}

 
    
	 function guid() {
	  function s4() {
		return Math.floor((1 + Math.random()) * 0x10000)
		  .toString(16)
		  .substring(1);
	  }
	  return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
		s4() + '-' + s4() + s4() + s4();
	}
	
    getTotalPages();


}(jQuery));
</script>

</html>
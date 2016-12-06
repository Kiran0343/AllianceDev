<?php
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS --<link href="css/shop-item.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	ul.dropdown-cart{
    min-width:250px;
}
ul.dropdown-cart li .item{
    display:block;
    padding:3px 10px;
    margin: 3px 0;
}
ul.dropdown-cart li .item:hover{
    background-color:#f3f3f3;
}
ul.dropdown-cart li .item:after{
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.dropdown-cart li .item-left{
    float:left;
}
ul.dropdown-cart li .item-left img,
ul.dropdown-cart li .item-left span.item-info{
    float:left;
}
ul.dropdown-cart li .item-left span.item-info{
    margin-left:10px;   
}
ul.dropdown-cart li .item-left span.item-info span{
    display:block;
}
ul.dropdown-cart li .item-right{
    float:right;
}
ul.dropdown-cart li .item-right button{
    margin-top:14px;
}
div.price-cart{
	padding:12px
}
cen{
	text-align: center;
}
	</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://alliancedev.xyz/AllianceDev/index.php">Online Bookstore</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://alliancedev.xyz/AllianceDev/login.php">Login</a>
                    </li>
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
				<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> <cart-counter>0</cart-counter> - Items<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
          <cart> 
          </cart>              
              <li class="divider"></li>
              <li><a class="text-center" href="">View Cart</a></li>
          </ul>
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

            <div class="col-lg-12">
                <p class="lead">Shop Name</p>
                <div class="list-group">
					&nbsp;
					<cen><h4><p>Bookstore Database Manager</p></h4></cen>
                    <cen><a onclick="SetActive('Book')" href="#" class="list-group-item">Manage Books</a></cen>
                    <cen><a onclick="SetActive('Cust')" href="#" class="list-group-item">Manage Customer Information</a></cen>
                    <cen><a onclick="SetActive('Orde')" href="#" class="list-group-item">Manage Customer Orders</a></cen>
					<cen><a onclick="SetActive('Anno')" href="#" class="list-group-item">Manage Announcements</a></cen>
                </div>
            </div>
			<adminspace>
            </adminspace>
        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ALLiANCE</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script>
	(function($)
	{
		//https://esimakin.github.io/twbs-pagination/

		var guid = <?php echo "\"{$sid}\";"; ?>


		console.log(guid);


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


		function loadTableData(page, page_size, sort, order)
		{

			var sort = typeof sort !== 'undefined' ? sort.trim() : "id";
			var order = typeof order !== 'undefined' ? "," + order : "";

			var url_id = getParameterByName('id');

			// Perform a get request to our api passing the page number and page size as parameters
			console.log("http://alliancedev.xyz/AllianceDev/api/api.php/products?order=" + sort + order + "&page=" + page + "," + page_size);
			$.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?order=" + sort + order + "&page=" + page + "," + page_size + "&filter=id,eq," + url_id)

			// The '.done' method fires when the get request completes
			.done(function(data)
			{

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
					item_box = item_box + '<div class="col-md-8"><div class="thumbnail">';
					item_box = item_box + '<img class="img-responsive" src="' + records[i][6] + '250_.jpg" alt=""><div class="caption-full">';



					item_box = item_box + '<div><h4><a href="http://alliancedev.xyz/AllianceDev/index1.php?id=';
					item_box = item_box + records[i][0] + '">' + records[i][1] + '</a><div class="price-cart">$' + records[i][3];
					item_box = item_box + '<span class="pull-right"><a onclick="AddCart()" class="add-cart btn btn-success">Add To Cart</a>';
					item_box = item_box + '</span>' + '</div></h4></div> <p>' + records[i][2] + '</p></div><comments></comments>';
					
				}
				$('item').html(item_box);
				
				$.get("http://alliancedev.xyz/AllianceDev/api/api.php/comments?&filter=item_id,eq," + url_id)

				// The '.done' method fires when the get request completes
				.done(function(comment_data)
				{
					var records = comment_data.comments.records;
					var comment_box = '';
					comment_box = comment_box + '<div class="ratings"><p class="pull-right">'+ records.length;
						
					if(records.length == 1)
						comment_box = comment_box +' review</p><p>';
					else
						comment_box = comment_box +' reviews</p><p>';
					
					var rev_tot = 0;
					comm_box = '';
					
					if(records.length == 0)
					{
						comm_box = comm_box + '<hr><div class="row"><div class="col-md-12">';
						
						comm_box = comm_box + '<p>There are no reviews yet. Write a review!</p></div></div>';
							
						comm_box = comm_box + '</div></div></div>';
							
					}
					else
					{
						for (var i = 0; i < records.length; i++)
						{
							records[i][2] = parseInt(records[i][2]);
							rev_tot = rev_tot + records[i][2];
							
							comm_box = comm_box + '<hr><div class="row"><div class="col-md-12">';
							
							
							for (var j = 0; j < records[i][2]; j++)
							{
								comm_box = comm_box + '<span class="glyphicon glyphicon-star"></span>';
							}
							for (var j = records[i][2]; j < 5; j++)
							{
								comm_box = comm_box + '<span class="glyphicon glyphicon-star-empty"></span>';
							}
							comm_box = comm_box + ' ' + records[i][3] + '<span class="pull-right">';
							
							
							
							comm_box = comm_box + records[i][4] +' days ago</span>';
							comm_box = comm_box + '<p>' + records[i][5] +'</p></div></div>';
							
							comm_box = comm_box + '</div></div></div>';
						}
						
						rev_tot = rev_tot / records.length;
					}
					
					
					for (var i = 0; i < Math.floor(rev_tot); i++)
					{
						comment_box = comment_box + '<span class="glyphicon glyphicon-star"></span>';
					}
					
					for (var i = Math.floor(rev_tot); i < 5; i++)
					{
						comment_box = comment_box + '<span class="glyphicon glyphicon-star-empty"></span>';
					}
					
					comment_box = comment_box + rev_tot + ' stars</p></div></div><div class="well"><div class="text-right">';
					comment_box = comment_box + '<a class="btn btn-success">Leave a Review</a></div>';
						
					comment_box = comment_box + comm_box;
					
					
					
					$('comments').html(comment_box);
				});
				// At this point "rows" should have 'page_size' number of items in it,
				// so append all those rows to the body of the table.

				/*			
							
						
						
							

				*/


			});
		} // End .done

		$('#updateCart').click(function()
		{
			$('.cart-item').each(function()
			{
				console.log($(this).find('.price').text());
				console.log($(this).find('.count').val());

			});
		});

		function getTotalPages()
		{
			$.get("./total_pages.txt")

			// The '.done' method fires when the get request completes
			.done(function(data)
			{

				var total_pages = data;
				loadTableData(1, 10);
				$('#pagination-demo').twbsPagination(
				{
					totalPages: total_pages,
					visiblePages: 10,
					onPageClick: function(event, page)
					{
						$('#page-content').text('Page ' + page);
						loadTableData(page, 10);
					}
				});

			});

		}



		function guid()
		{
			function s4()
			{
				return Math.floor((1 + Math.random()) * 0x10000)
					.toString(16)
					.substring(1);
			}
			return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
				s4() + '-' + s4() + s4() + s4();
		}




		getTotalPages();


	}(jQuery));

function AddCart()
		{
			var url_id = getParameterByName('id');
			$.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?&filter=id,eq," + url_id)

			// The '.done' method fires when the get request completes
			.done(function(data)
			{
				// Pull the products out of our json object 
				var records = data.products.records;

				// Start an empty html string
				cart_item = document.getElementsByTagName('cart')[0].innerHTML;
				for (var i = 0; i < records.length; i++)
				{
					cart_item = cart_item + '<li> <span class="item"> <span class="item-left"> <img src="' + records[i][6]+'45_.jpg" alt="" />';
					cart_item = cart_item + '<span class="item-info"> <span>' + records[i][1].substr(0,15) +'...</span> <span>$ ' + records[i][3] + '</span> </span></span>';
					cart_item = cart_item + '<span class="item-right"><button class="btn btn-xs btn-danger pull-right">x</button></span></span></li>';
				}

				// At this point "rows" should have 'page_size' number of items in it,
				// so append all those rows to the body of the table.
				$('cart').html(cart_item);
			});
			
			var cart_counter = document.getElementsByTagName('cart-counter')[0].innerHTML;
			
			cart_counter = parseInt(cart_counter) + 1;
			console.log(cart_counter);
			document.getElementsByTagName('cart-counter')[0].innerHTML = cart_counter;
		}
		
		
		function getParameterByName(name, url)
		{
			if (!url)
			{
				url = window.location.href;
			}
			name = name.replace(/[\[\]]/g, "\\$&");
			var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
				results = regex.exec(url);
			if (!results) return null;
			if (!results[2]) return '';
			return decodeURIComponent(results[2].replace(/\+/g, " "));
		}
		
		function SetActive(id){
			if(document.getElementsByClassName('active').length != 0){
				document.getElementsByClassName('active')[0].className = 'list-group-item';
			}
			
			if(id == "Book")
			{
				document.getElementsByClassName('list-group-item')[0].className = 'list-group-item active';
				BookManagingTable();
				
			}
			if(id == "Cust")
			{
				document.getElementsByClassName('list-group-item')[1].className = 'list-group-item active';
				CustManagingTable();
			}
			if(id == "Orde")
			{
				document.getElementsByClassName('list-group-item')[2].className = 'list-group-item active';
				OrdeManagingTable();
			}
			if(id == "Anno")
			{
				document.getElementsByClassName('list-group-item')[3].className = 'list-group-item active';
				AnnoManagingTable();
			}
		}
		
		function BookManagingTable(){
			
			$.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?order=id&page=1,10")

			// The '.done' method fires when the get request completes
			.done(function(data)
			{
				document.getElementsByTagName('adminspace')[0].innerHTML = "";
				
				// Pull the products out of our json object 
				var records = data.products.records;

				// Start an empty html string
				table = "";
				table = table + '<table class="table">';
				table = table + '<thead><tr><th>ID</th><th>Book Name</th><th>Description</th>'
				table = table + '<th>Price</th><th>Author</th><th>Publisher</th><th>Link</th><th>Amount</th><th>Modify</th><th>Delete</th></thead>';
				table = table + '<tbody>';
				
				
				for (var i = 0; i < records.length; i++)
				{
					table = table + '<tr><td>' + records[i][0] +'</td><td>' + records[i][1] +'</td><td>' + records[i][2].substr(0,16)+ '</td>';
					table = table + '<td>' + records[i][3] +'</td><td>' + records[i][4] +'</td><td>' + records[i][5] +'</td>';
					table = table + '<td>' + records[i][6] +'</td><td>' + records[i][7] +'</td>';
					table = table + '<td><a onclick="" class="modify btn">Modify</a></td>';
					table = table + '<td><a onclick="" class="modify btn">Delete</a></td></tr>';
				}
				
				table = table + '</tbody>';
				table = table + '</table>';
				
				// Append our new html to this pages only 'thead' tag
				$('adminspace').html(table);
			});
		}
		
		function CustManagingTable(){
			
			$.get("http://alliancedev.xyz/AllianceDev/api/api.php/users?page=1,10")

			// The '.done' method fires when the get request completes
			.done(function(data)
			{
				//console.log(data);
				document.getElementsByTagName('adminspace')[0].innerHTML = "";
				// Pull the products out of our json object 
				var records = data.users.records;

				// Start an empty html string
				table = "";
				table = table + '<table class="table">';
				table = table + '<thead><tr><th>Email</th><th>Password</th>'
				table = table + '<th>First Name</th><th>Last Name</th><th>Modify</th><th>Delete</th></thead>';
				table = table + '<tbody>';
				
				
				for (var i = 0; i < records.length; i++)
				{
					table = table + '<tr><td>' + records[i][0] +'</td><td>' + records[i][1].substr(0,16)+ '</td>';
					table = table + '<td>' + records[i][2] +'</td><td>' + records[i][3] +'</td>';
					table = table + '<td><a onclick="" class="modify btn">Modify</a></td>';
					table = table + '<td><a onclick="" class="modify btn">Delete</a></td></tr>';
				}
				
				table = table + '</tbody>';
				table = table + '</table>';
				
				// Append our new html to this pages only 'thead' tag
				$('adminspace').html(table);
			});
		}
		
		
		function OrdeManagingTable(){
			
			$.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?order=id&page=1,10")

			// The '.done' method fires when the get request completes
			.done(function(data)
			{
				document.getElementsByTagName('adminspace')[0].innerHTML = "";
				
				// Pull the products out of our json object 
				var records = data.products.records;

				// Start an empty html string
				table = "";
				table = table + '<table class="table">';
				table = table + '<thead><tr><th>ID</th><th>Book Name</th><th>Description</th>'
				table = table + '<th>Price</th><th>Author</th><th>Publisher</th><th>Link</th><th>Amount</th><th>Modify</th><th>Delete</th></thead>';
				table = table + '<tbody>';
				
				
				for (var i = 0; i < records.length; i++)
				{
					table = table + '<tr><td>' + records[i][0] +'</td><td>' + records[i][1] +'</td><td>' + records[i][2].substr(0,16)+ '</td>';
					table = table + '<td>' + records[i][3] +'</td><td>' + records[i][4] +'</td><td>' + records[i][5] +'</td>';
					table = table + '<td>' + records[i][6] +'</td><td>' + records[i][7] +'</td>';
					table = table + '<td><a onclick="" class="modify btn">Modify</a></td>';
					table = table + '<td><a onclick="" class="modify btn">Delete</a></td></tr>';
				}
				
				table = table + '</tbody>';
				table = table + '</table>';
				
				// Append our new html to this pages only 'thead' tag
				$('adminspace').html(table);
			});
		}
		
		
		function AnnoManagingTable(){
			
			$.get("http://alliancedev.xyz/AllianceDev/api/api.php/products?order=id&page=1,10")

			// The '.done' method fires when the get request completes
			.done(function(data)
			{
				// Pull the products out of our json object 
				var records = data.products.records;

				// Start an empty html string
				table = "";
				table = table + '<table class="table">';
				table = table + '<thead><tr><th>ID</th><th>Book Name</th><th>Description</th>'
				table = table + '<th>Price</th><th>Author</th><th>Publisher</th><th>Link</th><th>Amount</th><th>Modify</th><th>Delete</th></thead>';
				table = table + '<tbody>';
				
				
				for (var i = 0; i < records.length; i++)
				{
					table = table + '<tr><td>' + records[i][0] +'</td><td>' + records[i][1] +'</td><td>' + records[i][2].substr(0,16)+ '</td>';
					table = table + '<td>' + records[i][3] +'</td><td>' + records[i][4] +'</td><td>' + records[i][5] +'</td>';
					table = table + '<td>' + records[i][6] +'</td><td>' + records[i][7] +'</td>';
					table = table + '<td><a onclick="" class="modify btn">Modify</a></td>';
					table = table + '<td><a onclick="" class="modify btn">Delete</a></td></tr>';
				}
				
				table = table + '</tbody>';
				table = table + '</table>';
				
				// Append our new html to this pages only 'thead' tag
				$('adminspace').html(table);
			});
		}
		
		
	/*	
	 */
	</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
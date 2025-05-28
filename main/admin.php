<?php

  session_start();  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Inventory and Supply Chain System</title>

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>

         <!--Fonts in title-->
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <style type="text/css">
   .heading {
    font-family: 'Roboto', sans-serif;
    font-size: 3vw;
    font-weight: 700;
    color: #333; /* Dark gray for a softer look than black */
    margin: 0;
  }
      .banner {
      position: relative;
      height: 5vw; 
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }

   .btn-group   .button {
     display: block;
  border-radius: 12px;
  border: none;
  color: #0000000;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 25px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#mybutton {
    margin-left: 270px;
}
        </style>

    </head>

    

    <body class="fixed-left">

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">


<!--                 <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.png" alt="user-img" title="admin" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#"><?php echo $_SESSION['username']; ?></a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="logout.php" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->


                    <div id="sidebar-menu">

                        <!-- <div class="topbar-left">
                            <a href="index.html" class="logo"><span><img src="assets/images/img.png" height="120px" width="120px"></span><i class="mdi mdi-layers"></i>
                            </a>
                        </div> -->
                        <br><br><br>
<br>                    <br><br><br>
<br>                    <br><br><br>
<br><br><br>
<br>	
                        <ul>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Inward Stock </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Inward/NewInward_New.php">New Inward Stock</a></li>
                                    <li><a href="Inward/s&minward.php">Search & Manage Inward Stock</a></li>            
                                </ul>
                            </li>

                <!--             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Challan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Challan/addNewChallan.php">New Challan</a></li>
                                    <li><a href="Challan/searchAndManageChallan.php">Search & Manage Challan</a></li>           
                                </ul>
                            </li> -->

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Invoice </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Invoice/addNewInvoice.php">New Invoice</a></li>
                                    <li><a href="./Invoice/searchAndMangeInvocie.php">Search & Manage Invoice</a></li> 
                                    <!-- <li><a href="temp.html">Convert Invoice to Challan</a></li>             -->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Return </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Return/CustomerReturn.php">New Return</a></li>
                                    <li><a href="./Return/SearchAndManageCustomerReturn.php">Search & Manage Return</a></li>             
                                </ul>
                            </li>

                           <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Breakage & Damage </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Breakage&Damage/Breakage&Damage.php">New Breakage & Damage</a></li>
                                    <li><a href="./Breakage&Damage/SearchAndManagebreakage&damage.php">Search Breakage & Damage</a></li>            
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Expense </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Expense/NewExpense.php">New Expence</a></li>
                                    <li><a href="./Expense/ManageExpense.php">Search & Manage Expense</a></li>            
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Quotation </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Quatation/newQuotation.php">New Quotation</a></li>
                                    <li><a href="./Quatation/ManageQuatation.php">Search & Manage Quotation</a></li>            
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Payment </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Payment/NewPayment.php">New Payment</a></li>
                                    <li><a href="./Payment/Managepayment.php">Search & Manage Payment</a></li> 
                                </ul>
                            </li>
                        </ul>
                        
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

        <div id="wrapper">

            <div class="topbar">

                <div class="topbar-left">
                    <!-- <a href="index.html" class="logo"><span>Admin<span> Dashboard</span></span><i class="mdi mdi-layers"></i></a> -->
                    <img src="../assets/images/ceramic.svg" alt="Logo is placed here" height="200px" width="200px">
                </div>
                

               
                <div class="navbar navbar-default" role="navigation">
                <div class="myclass">   
                    <div class="container-fluid">

<div class="testbox">
    <div class="banner">
<center><h1 class="heading">MIT 536  Inventory and Supply Chain System - Validation Exam</h1></center>
</div>


<div id="sidebar-menu">


                        <ul>
                            <li class="has_sub1">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Categories </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Categories/ManageCategories.php">Manage Categories</a></li>
                                    <li><a href="Subcategories/ManageSubCategories.php">Manage Sub Categories</a></li>
                                    <li><a href="Brand/AddBrandName.php">Add Brands</a></li>
                                    <li><a href="Brand/manageBrandName.php">Manage Brands Mapping</a></li> 
                                    <li><a href="Grade/AddGrade.php">Add Grade</a></li>
                                    <li><a href="Grade/manageGrade.php">Manage Grade</a></li>           
                                </ul>
                            </li>

                            <li class="has_sub1">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Product </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Product/AddNewProduct.php">New Product</a></li>
                                    <li><a href="Product/S&MProduct.php">Search & Manage Product</a></li>            
                                </ul>
                            </li>

                            <li class="has_sub1">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Vendor </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Vendor/NewVendor.php">New Vendor</a></li>
                                    <li><a href="Vendor/ManageVendor.php">Search & Manage Vendor</a></li>           
                                </ul>
                            </li>

                            <li class="has_sub1">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Customer </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Customer/NewCustomer.php">New Customer</a></li>
                                    <li><a href="Customer/ManageCustomer.php">Search & Manage Customer</a></li>             
                                </ul>
                            </li>

                            <li class="has_sub1">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Stock </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Stocks/otherstock.php">Stock</a></li>             
                                    <li><a href="./Stocks/billingstock.php">Virtual Stock</a></li>
                                </ul>
                            </li>

                           <li class="has_sub1">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i><span>Report</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="./Report/paymentreport.php">Payment Report</a></li>
                                    <li><a href="./Report/perticulerreport.php">Particular Report</a></li>            
                                    <li><a href="./Report/profitloss.php">Profit-Loss Report</a></li>            
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                </div>

    
</div>



                        <!-- <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">


                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                                  class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav> -->
 
                </div>
            </div>
                    <!-- <div class="btn-group" id="mybutton">
                    <button class="button" onclick="location.href = 'Challan/addNewChallan.php';" ><span>New Challan </span></button>
                    <button class="button" onclick="location.href = 'temp.html';" ><span>New Invoice </span></button>
                    <button class="button" onclick="location.href = 'Quatation/NewQuatation.php';"><span>New Quatation </span></button>
                    <button class="button" onclick="location.href = 'temp.html';"><span>Add Payment </span></button>
                    <button class="button" onclick="location.href = 'Expense/NewExpence.php';"><span>New Expense </span></button>
                    </div> -->
                   </div>
            




                <footer class="footer text-right">
                    Copyright © MIT 536 - Inventory and Supply Chain System - Validation Exam
                </footer>

</div>

     <!-- Dedicated Chatbot Div -->
     <div id="chatbot-container">
            <div id="chatbot-header">Chatbot AI assistance</div>
            <div id="chatbot-messages"></div>
            <div id="chatbot-input">
                <input type="text" id="user-input" placeholder="Ask me anything...">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>

        <style>
            /* Styling for Chatbot */
            #chatbot-container {
                position: fixed;
                bottom: 65px;
                right: 20px; /* Change from 'left' to 'right' */
                width: 300px;
                max-height: 400px;
                background-color: #f1f1f1;
                border: 1px solid #ccc;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-direction: column;
                overflow: hidden;
                z-index: 9999; /* Ensure it stays above other elements */
            }
            #chatbot-header {
                background-color: #007BFF;
                color: #fff;
                padding: 10px;
                text-align: center;
                font-weight: bold;
                cursor: pointer;
            }
            #chatbot-messages {
                flex-grow: 1;
                padding: 10px;
                overflow-y: auto;
                font-size: 14px;
                color: #333;
            }
            #chatbot-input {
                display: flex;
                border-top: 1px solid #ccc;
            }
            #chatbot-input input {
                flex-grow: 1;
                padding: 10px;
                border: none;
                outline: none;
                font-size: 14px;
            }
            #chatbot-input button {
                background-color: #007BFF;
                color: #fff;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                font-size: 14px;
            }
            #chatbot-input button:hover {
                background-color: #0056b3;
            }
        </style>

        <script>
            const chatbotHeader = document.getElementById('chatbot-header');
            const chatbotContainer = document.getElementById('chatbot-container');
            let chatbotVisible = true;

            chatbotHeader.addEventListener('click', () => {
                chatbotVisible = !chatbotVisible;
                chatbotContainer.style.height = chatbotVisible ? '400px' : '40px';
            });

            document.getElementById('user-input').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevents the default "Enter" behavior
        sendMessage(); // Calls the sendMessage function
    }
});

function sendMessage() {
    const userInput = document.getElementById('user-input').value.trim();
    const messagesDiv = document.getElementById('chatbot-messages');

    if (!userInput) {
        messagesDiv.innerHTML += `<div><strong>Chatbot:</strong> Please enter a message.</div>`;
        return;
    }

    // Display user message
    messagesDiv.innerHTML += `<div><strong>You:</strong> ${userInput}</div>`;
    document.getElementById('user-input').value = ''; // Clear the input field

    // Display loading message
    const loadingMessage = document.createElement('div');
    loadingMessage.innerHTML = `<strong>Chatbot:</strong> Analyzing the query...`;
    messagesDiv.appendChild(loadingMessage);
    messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom

    // Send message to the backend
    fetch('chatbot.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `message=${encodeURIComponent(userInput)}`
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        // Replace loading message with the actual response
        loadingMessage.innerHTML = `<strong>Chatbot:</strong> ${data.response}`;
        messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom
    })
    .catch(error => {
        // Replace loading message with error message
        loadingMessage.innerHTML = `<strong>Chatbot:</strong> Sorry, an error occurred: ${error.message}`;
    });
}


            
        </script>

        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
        

    </body>
</html>


<?php

/* @var $this yii\web\View */

$this->title = 'My Online Store Manager';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to your personal Store Manager!</h1>

        <p class="lead">Read the instruction to start managing your online store manager.</p>

        <p><a class="btn btn-lg btn-success" href="../web/index.php?r=inventory">SHOW INVENTORY</a></p>
    </div>

    <div class="body-content">

        <div class="row">
           
            <div class="col-lg-4">
                <h2>Add Category of products</h2>

                <p>This is the first step of application Add the variety of categories product to store according to their category</p>
                <p><a class="btn btn-lg btn-primary" href="../web/index.php?r=category">Add Category&raquo;</a></p>
                
            </div>

              <div class="col-lg-4">
                <h2>Add Products To Store</h2>

                <p>This is the second step of application Add the product to store according to their category</p>
                <p><a class="btn btn-lg btn-primary" href="../web/index.php?r=products">Add Product&raquo;</a></p>
                
            </div>

              <div class="col-lg-4">
                <h2>Add Dealers To Store</h2>

                <p>Add dealeares to ur store and to your contacts manage your account payable and account reciveable in the most effective way possible</p>
                <p><a class="btn btn-lg btn-primary" href="../web/index.php?r=dealers">Add Dealers&raquo;</a></p>
                
            </div>

              <div class="col-lg-4">
                <h2>Enter a purchase bill</h2>

                <p>This step will help you enter a product to your store entering the price and quantity you can create a record that will help you forever</p>
                <p><a class="btn btn-lg btn-primary" href="../web/index.php?r=purchase-invoice%2Fcreate">Add Invoice&raquo;</a></p>
                
            </div>
            


       
        </div>

    </div>
</div>

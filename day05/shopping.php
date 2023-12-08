<?php require "header.php" ?>




  <div class="container mt-3">
    <div class="table-responsive-sm">
           
  <table class=" table table-bordered align-middle  ">
    <thead>
      <tr >
        <th>Protucts</th> 
        <th>Color&Size</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="C:\Users\kisho\OneDrive\Desktop\day05\image/img01.jpg">Casual men wearing cool shoe</td>
        <td >Size: XL
        Color: Black</td>
        <td><button>1</button></td>
        <td>$ 120</td>
        <td>$ 120<i class="fa fa-times-circle-o p-3" aria-hidden="true"></i></td>
      </tr>
      <tr>
         <td><img src="C:\Users\kisho\OneDrive\Desktop\day05\image/img01.jpg">Casual men wearing cool shoe</td>
         <td >Size: XL
        Color: Black</td>
        <td><button>1</button></td>
         <td>$ 120</td>
        <td>$ 120<i class="fa fa-times-circle-o p-3" aria-hidden="true"></i></td>

     
      </tr>
      <tr>
         <td><img src="C:\Users\kisho\OneDrive\Desktop\day05\image/img01.jpg">Casual men wearing cool shoe</td>
         <td >Size: XL
        Color: Black</td>
        <td><button>1</button></td>
         <td>$ 120</td>
        <td>$ 120<i class="fa fa-times-circle-o p-3" aria-hidden="true"></i></td>
              
      </tr>

<tr>
  <td colspan="5" class="text-end">
    <button class="btn btn-outline-dark ">UPDATE TOTALS</button>        
        <button class="btn btn-success ">CONTINUES SHOPPING</button>

        

  </td>
</tr>
    </tbody>
  </table>

      
      
    </div>
  </div>



  

<div class="container mt-3">
   
   <div class="row">
    <div class=" col-12 col-sm-6 p-3 ">
    <h4>Use Coupon Code </h4>
    <p>Enter Your Coupon Here</p>
 <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <h4 class="mt-3">Shipping Availability</h4>
      <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<label for="exampleInputEmail1" class="form-label mt-3">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
      <button class="btn btn-outline-dark mt-3">UPDATE TOTALS</button>
    </div>
    </div>
    



    <div class=" col-12 col-sm-6 p-3  ">
      <h4>Use Coupon Code </h4>
    <p>Enter Your Coupon Here</p>
 <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <h4 class="mt-3">Shipping Availability</h4>
      <div class="border">
        <p class="px-3">Subtotal<span class="float-end">$450</span></p>
        <p class="px-3">Coupon<span class="float-end">-$50</span></p>
        <p class="px-3">Shipping<span class="float-end">Free Shipping</span></p>
        <div class="border">
         <p class="px-3">Total<span class="float-end">$400</span></p>
        </div>
        <div>
      <button class="btn btn-success float-end mt-3">PROCEED TO CHECKOUT</button>
    </div>
      </div>
    </div>
  </div>


 </div>

 <?php require "footer.php"?>
